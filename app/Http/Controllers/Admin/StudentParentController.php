<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\StudentParent;
use Illuminate\Http\Request;

class StudentParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students = Student::all();
        /*$parents = StudentParent::when($request->id_number, function ($query, $value) {
                $query->where('id_number','=', $value);
                
        })->get();*/

        $id_number=$request->id_number;
        $parents=StudentParent::where('id_number','=',$id_number)->get();

        return view('admin.studentParent', [
            'students'=>$students,
            'parents' => $parents,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Student::class);

        return view('admin.studentParent.create',[
            'studentParents'=>new StudentParent(),
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
        $this->authorize('create',Student::class);

        $request->validate(StudentParent::validateRules());
        
        $data = $request->all();

        $studentParent = StudentParent::create($data);
        
        return redirect()->route('admin.studentParent.index')
            ->with('success', "StudentParent ($studentParent->name) created!");
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
        

        $studentParent = StudentParent::findOrFail($id);

        $this->authorize('update',$studentParent);

        return view('admin.studentParent.edit', [
            'studentParents'=>$studentParent,
            
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
        $this->authorize('update');

        $studentParent = StudentParent::findOrFail($id);

        $request->validate(StudentParent::validateRules());

        $data = $request->all();
        
        $studentParent->update($data);

        return redirect()->route('admin.studentParent.index')
            ->with('success', "StudentParent ($studentParent->name) updated!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete');

        $studentParent = StudentParent::findOrFail($id);
        $studentParent->delete();
        
        return redirect()->route('admin.studentParent.index')
            ->with('success', "StudentParent ($studentParent->name) deleted!");
    }
}
