<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'teacher_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id')->withDefault([
            'name' => 'No Teacher',
        ]);
    }
    
    public static function validateRules()
    {
        return [
            'name' => 'required|string|max:255|min:3',
            'description' => 'required',

        ];
    }
}
