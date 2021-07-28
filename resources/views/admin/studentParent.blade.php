<x-back-layout title="Student Details">
    <x-slot name="title">Student Details
    </x-slot>
    <x-alert />

    <div class="table-toolbar mb-3">
<a href="{{ route('admin.studentParent.create') }}"class="btn btn-info">Create Student Parent</a>
</div>

    <div class="row-auto">
        <form action="{{ route('admin.studentParent.index') }}" method="get" class="d-flex mb-4">
        @csrf
            <input type="text" name="id_number" class="form-control me-2" placeholder="Enter Parent ID Number">
            <button type="submit" class="btn btn-secondary">Search</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Parent ID Number</th>
                    <th>Teacher Name</th>
                    <th>Class Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parents as $parent)
                @foreach ($parent->students as $student)
                <tr>
                    <td>{{ $student->id }} </td>
                    <td>{{ $student->name }}</td>
                    <td><img src="{{ $student->image_url }}" height="90" width="90" alt=""></td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->parent->id_number }}</td>
                    <td>{{ $student->teacher->name }}</td>
                    <td>{{ $student->schoolClass->name }}</td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>

    </div>

    </x-back-layout>