<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable=[
        'total','avarage','student_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id','id');
    }

    public static function validateRules()
    {
        return [
            'total'=>'required|float',      
        ];
    }

}
