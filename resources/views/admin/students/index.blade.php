<x-front-layout title="Students List">
<x-slot name="title">Students List
</x-slot>
<x-alert/>
    
<div class="table-toolbar mb-3">
<a href="{{ route('admin.students.create') }}"class="btn btn-info">Add Student</a>
</div>

<form action="{{ URL::current() }}" method="get" class="d-flex mb-4">

    <input type="text" name="name" class="form-control me-2" placeholder="Search by name">
    <button type="submit" class="btn btn-secondary">Search</button>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Student ID</th>
            <th>Class Name</th>
            <th>Photo</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td><a href="{{ route('admin.students.show', $student->id) }}">{{ $student->name }}</a></td>
            <td>{{ $student->roll }}</td>
            <td>{{$student->schoolClass->name}}</td>
            <td><img src="{{ $student->image_url }}" height="50" alt=""></td>
            <td>{{ $student->DOB}}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->mobile }}</td>
            <td>{{ $student->email }}</td>
            <td>
            <button type="submit" class="btn btn-sm">
                <a href="{{ route('admin.students.edit', $student->id) }}"><i class="fas fa-pen"></i></a>
            </button>   
            </td>
            <td>
                <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$students->links()}}
</x-front-layout>
