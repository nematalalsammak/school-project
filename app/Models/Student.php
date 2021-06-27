<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Student extends Model
{
    use HasFactory;
    protected $perPage=5;

    protected $fillable=[
        'name','DOB','gender','photo','address','email',
        'mobile','slug','teacher_id','class_id','parent_id'
    ];


    public static function validateRules()
    {
        return [
            'name'=>'required|string|max:255|min:3',
            'DOB'=>'required|date',
            'gender'=>'required|in:male,female',
            'photo'=>'image',
            'address'=>'required',
            'mobile'=>[
                'required',
                'size:10',
                'regex:/^(059|056)([0-9]{7})$/',
            ],
            'email'=>'required|email',
        ];
    }

    public function getImageUrlAttribute()
    {
        if($this->photo)
        {
            if(strpos($this->photo,'http')=== 0){
                return $this->photo;
            }
            return asset('uploads/'. $this->photo);
            //OR
            //return Storage::disk('uploads')->url($this->photo);
        }
        return asset('images/default-image.jpg');
    }

    public function studentCount($id) {
        $totalStudents = [];
        $students = Student::where('id', $id)->get();
        $totalStudents[] = $students->count(); 
        return $totalStudents;
      }
}
