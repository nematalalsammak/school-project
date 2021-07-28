<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any',Student::class);

        $students=Student::when($request->name,function($query,$value){
            $query->where(function($query)use($value){
            $query->where('students.name','LIKE',"%$value%");
          });

        })->paginate();
        //$students = Student::paginate();
        return view('admin.students.index', [
            'students' => $students,

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

        return view('admin.students.create',[
            'student'=>new Student(),
            'schoolClasses'=>SchoolClass::all(),
            'studentParents'=>StudentParent::all(),
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
        $this->authorize('create',Student::class);

        $request->validate(Student::validateRules());
        $request->merge([
            'slug' => Str::slug($request->post('name')),
        ]);
        $data = $request->all();
        //$slug=Str::slug($request->name);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = $file->store('/images',[
                'disk'=>'uploads',
            ]);
        }

        $student = Student::create($data);
        
        return redirect()->route('admin.students.index')
            ->with('success', "Student ($student->name) created!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        $this->authorize('view',$student);

        return view('admin.students.show', [
            'student' => $student,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        $this->authorize('update',$student);

        return view('admin.students.edit', [
            'student' => $student,
            'schoolClasses'=>SchoolClass::all(),
            'studentParents'=>StudentParent::all(),
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
        $student = Student::findOrFail($id);

        $this->authorize('update',$student);

        $request->validate(Student::validateRules());

        $data = $request->all();
        $previous = false;
        //$slug=Str::slug($request->name);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = $file->store('/images',[
                'disk'=>'uploads',
            ]);

            $previous = $student->photo;
        }
        $student->update($data);

        if ($previous) {
            Storage::disk('uploads')->delete($previous);
        }

        return redirect()->route('admin.students.index')
            ->with('success', "Student ($student->name) updated!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        
        $this->authorize('delete',$student);

        $student->delete();

        if ($student->photo) {
            Storage::disk('uploads')->delete($student->photo);
        }
        
        return redirect()->route('admin.students.index')
            ->with('success', "Student ($student->name) deleted!");
    }

}
