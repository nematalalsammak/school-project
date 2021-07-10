<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalStudents = 0;
        $students = new Student();
        $totalStudents = $students->count(); 
        //return $totalStudents;

        $totalTeachers = 0;
        $teachers = Teacher::all();
        $totalTeachers = $teachers->count(); 

        $totalClasses = 0;
        $SchoolClass = SchoolClass::all();
        $totalClasses = $SchoolClass->count(); 

        //$attendance=new Attendance();

        /*$attendance=Attendance::when($request->attendance_date,function
        ($query,$value){
            $query->where('attendances.attendance_date','LIKE',"%$value%");
        })->get();*/

        
        return view('admin.dashboard', [
            //'students' => $students,
            'totalStudents'=>$totalStudents,
            //'teachers' => $teachers,
            'totalTeachers'=>$totalTeachers,
            'totalClasses'=>$totalClasses,
            'students'=>$students,
            

        ]);  
    }
}
