<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    use HasFactory;
    protected $perPage=5;

    protected $fillable=[
        'name','id_number','gender','occupation','address','email',
        'mobile',
    ];
    
    public function students()
    {
        return $this->hasMany(Student::class,'student_parent_id','id');
    }

    public static function validateRules()
    {
        return [
            'name'=>'required|string|max:255|min:3',
            'id_number'=>[
                'required',
                 'size:9',
            ],
            'occupation'=>'string|max:255|min:3',
            'gender'=>'required|in:male,female',
            'address'=>'required',
            'mobile'=>[
                'required',
                'size:10',
                'regex:/^(059|056)([0-9]{7})$/',
            ],
            'email'=>'required|email',
        ];
    }
}
