<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $avarage=DB::table('grades')->max('avarage');
        $grade=Grade::where('avarage', $avarage)->first();
        
        
        $totalStudents = 0;
        $students = new Student();
        $totalStudents = $students->count(); 

        $totalTeachers = 0;
        $teachers = Teacher::all();
        $totalTeachers = $teachers->count(); 

        $totalClasses = 0;
        $SchoolClass = SchoolClass::all();
        $totalClasses = $SchoolClass->count(); 
        return view('front.home', [
            'totalStudents'=>$totalStudents,
            'totalTeachers'=>$totalTeachers,
            'totalClasses'=>$totalClasses,
            'student'=>Student::all(),
            'grade'=>$grade,
            
        ]);  

    }
}
