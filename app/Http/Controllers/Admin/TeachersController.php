<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any',Teacher::class);

        $teachers=Teacher::when($request->name,function($query,$value){
            $query->where(function($query)use($value){
            $query->where('teachers.name','LIKE',"%$value%");
          });

        })->paginate();
        //$teachers = Teacher::paginate();
        return view('admin.teachers.index', [
            'teachers' => $teachers,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Teacher::class);

        return view('admin.teachers.create',[
            'teacher'=>new Teacher(),
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
        $this->authorize('create',Teacher::class);

        $request->validate(Teacher::validateRules());
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
        $teacher = Teacher::create($data);
        
        return redirect()->route('admin.teachers.index')
            ->with('success', "Teacher ($teacher->name) created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        $this->authorize('view',$teacher);

        return view('admin.teachers.show', [
            'teacher' => $teacher,
            
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
        $teacher = Teacher::findOrFail($id);

        $this->authorize('update',$teacher);

        return view('admin.teachers.edit', [
            'teacher' => $teacher,
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
        $teacher = Teacher::findOrFail($id);

        $this->authorize('update',$teacher);

        $request->validate(Teacher::validateRules());

        $data = $request->all();
        $previous = false;
        //$slug=Str::slug($request->name);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = $file->store('/images',[
                'disk'=>'uploads',
            ]);

            $previous = $teacher->photo;
        }
        $teacher->update($data);

        if ($previous) {
            Storage::disk('uploads')->delete($previous);
        }

        return redirect()->route('admin.teachers.index')
            ->with('success', "Teacher ($teacher->name) updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        $this->authorize('delete',$teacher);

        $teacher->delete();

        if ($teacher->photo) {
            Storage::disk('uploads')->delete($teacher->photo);
        }

        return redirect()->route('admin.teachers.index')
            ->with('success', "Teacher ($teacher->name) deleted!");
    }
}
