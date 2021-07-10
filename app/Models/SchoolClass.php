<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;
    protected $perPage=5;

    protected $fillable=[
        'name','NoStudent','teacher_id'
    
    ];

    public function students()
    {
        return $this->hasMany(Student::class,'school_class_id','id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id','id')->withDefault([
            'name'=>'No Teacher',
        ]);
    }

    public static function validateRules()
    {
        return [
            'name'=>'required|string|max:255|min:3',
            'NoStudent'=>'int',
            
        ];
    }
}
