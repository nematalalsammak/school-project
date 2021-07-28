<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$this->authorize('view-any',SchoolClass::class);

        $schoolClass=SchoolClass::when($request->name,function($query,$value){
            $query->where(function($query)use($value){
            $query->where('school_classes.name','LIKE',"%$value%");
          });

        })->get();

        return view('admin.schoolClasses.index', [
            'schoolClass' => $schoolClass,
            'teachers'=>Teacher::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',SchoolClass::class);

        return view('admin.schoolClasses.create',[
            'schoolClass'=>new SchoolClass(),
            'teachers'=>Teacher::all(),

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
        $this->authorize('create',SchoolClass::class);

        $request->validate(SchoolClass::validateRules());

        $data = $request->all();

        $schoolClass = SchoolClass::create($data);
        
        return redirect()->route('admin.schoolClasses.index')
            ->with('success', "School Class ($schoolClass->name) created!");
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
        $schoolClass = SchoolClass::findOrFail($id);

        $this->authorize('update',$schoolClass);

        return view('admin.schoolClasses.edit', [
            'schoolClass' => $schoolClass,
            'teachers'=>Teacher::all(),

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
        $schoolClass = SchoolClass::findOrFail($id);

        $this->authorize('update',$schoolClass);

        $request->validate(SchoolClass::validateRules());

        $data = $request->all();
        
        $schoolClass->update($data);
        return redirect()->route('admin.schoolClasses.index')
            ->with('success', "School Class ($schoolClass->name) updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schoolClass = SchoolClass::findOrFail($id);

        $this->authorize('delete',$schoolClass);

        $schoolClass->delete();
        
        return redirect()->route('admin.schoolClasses.index')
            ->with('success', "School Class ($schoolClass->name) deleted!");
    }
}
