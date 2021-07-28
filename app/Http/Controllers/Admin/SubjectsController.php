<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subjects.index', [
            'subject'=>Subject::all(),
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
        $this->authorize('create',Subject::class);
        
        return view('admin.subjects.create',[
            'subject'=>new Subject(),
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
        $this->authorize('create',Subject::class);

        $request->validate(Subject::validateRules());

        $data = $request->all();

        $subject = Subject::create($data);
        
        return redirect()->route('admin.subjects.index')
            ->with('success', "Subject ($subject->name) created!");
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
        $subject = Subject::findOrFail($id);

        $this->authorize('update',$subject);

        return view('admin.subjects.edit', [
            'subject' => $subject,
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
        $subject = Subject::findOrFail($id);

        $this->authorize('update',$subject);

        $request->validate(Subject::validateRules());

        $data = $request->all();
        
        $subject->update($data);
        return redirect()->route('admin.subjects.index')
            ->with('success', "Subject ($subject->name) updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);

        $this->authorize('delete',$subject);

        $subject->delete();
        
        return redirect()->route('admin.subjects.index')
            ->with('success', "Subject ($subject->name) deleted!");
    }
}
