<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\SchoolClass;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
       $class_id=$request->school_class_id;
       $students=Student::where('school_class_id','=',$class_id)->get();

        $schoolClasses=SchoolClass::all();
        
        return view('admin.attendance',[
            'students'=>$students,
            'schoolClasses'=> $schoolClasses,
            'attendance'=>new Attendance(),
        ]);
    }

    public function create()
    {
        /*$attendance=new Attendance();

        return view('admin.attendance',[
            'attendance'=>$attendance,
        ]);*/
        
    }

    public function store(Request $request)
    { 
        //dd($request);
        $request->validate(Attendance::validateRules());
        

        /*$attendance=new Attendance();
        $attendance->student_id=$request->post('student_id');
        $attendance->attendance_data=$request->post('date');
        $attendance->status=$request->post('status');
        $attendance->save();*/

        $data = $request->all();
        //dd($data);
        $attendance = Attendance::create($data);

        return redirect()->route('admin.attendance')
            ->with('success', "Attendance Added succesfully!");

    }

    public function viewList(Request $request)
    {
        $attendance=Attendance::all();
        $students =Student::all();
        
        $attendance_date=$request->attendance_date;
        $attendance=Attendance::where('attendance_date','=',$attendance_date)->get();


        /*$student_id = array('student_id' => json_decode($request->student_id,true));
        $status = array('status' => json_decode($request->status,true));*/

        return view('admin.attendanceList',[
            'attendance'=>$attendance,
            'students'=>$students,
            /*'student_id'=>$student_id,
            'status'=>$status,*/
        ]);

    }
}
