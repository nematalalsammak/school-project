<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable=[
        'attendance_date','status','student_id',
    ];
    /*protected $casts=[
        'status'=>'array','student_id'=>'array',
    ];*/
    
    public static function validateRules()
    {
        return [
            'attendance_date'=>'required',
            'status'=>'required',
        ];
    }

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id','id');
    }

    
}
    
