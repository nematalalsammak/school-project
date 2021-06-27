<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function studentCount() 
    {
        $totalStudents = 0;
        $students = Student::all();
        $totalStudents = $students->count(); 
        //return $totalStudents;

        $totalTeacher = 0;
        $teachers = Teacher::all();
        $totalTeachers = $teachers->count(); 

        return view('admin.dashboard', [
            //'students' => $students,
            'totalStudents'=>$totalStudents,
            //'teachers' => $teachers,
            'totalTeachers'=>$totalTeachers,

        ]);
        
        
    }
}
