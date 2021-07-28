<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.grades.index', [
            'grade'=>Grade::all(),
            'students'=>Student::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grades.create',[
            'grade'=>new Grade(),
            'students'=>Student::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate(Grade::validateRules());
        $avarage=$request->input('total') / 700 * 100;

        $grade=Grade::create([
            'student_id'=>$request->post('student_id'),
            'total'=>$request->input('total'),
            'avarage'=>$avarage,

        ]);
        
        return redirect()->route('admin.grades.index')
            ->with('success', "Grade created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        return view('admin.grades.edit', [
            'grade' => $grade,
            'students'=>Student::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);
        //$request->validate(Grade::validateRules());

        $avarage=$request->input('total') / 700 * 100;

        $grade->update([
            'student_id'=>$request->post('student_id'),
            'total'=>$request->input('total'),
            'avarage'=>$avarage,

        ]);

        /*$data = $request->all();
        $grade->update($data);*/
        return redirect()->route('admin.grades.index')
            ->with('success', "Grade updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();
        
        return redirect()->route('admin.grades.index')
            ->with('success', "Grade deleted!");
    }
}
