<x-back-layout title="School Class List">
<x-slot name="title">School Class List
</x-slot>
<x-alert/>
    
<div class="table-toolbar mb-3">
<a href="{{ route('admin.schoolClasses.create') }}"class="btn btn-info">Add School Class</a>
</div>

<form action="{{ URL::current() }}" method="get" class="d-flex mb-4">

    <input type="text" name="name" class="form-control me-2" placeholder="Search by name">
    <button type="submit" class="btn btn-secondary">Search</button>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Class Name</th>
            <th>No Of Student</th>
            <th>Teacher Name</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($schoolClass as $schoolClass)
        <tr>
            <td>{{ $schoolClass->id }} </td>
            <td>{{ $schoolClass->name }}</td>
            <td>{{ $schoolClass->NoStudent }}</td>
            <td>{{ $schoolClass->teacher->name }}</td>
            <td>
            <button type="submit" class="btn btn-sm">
                <a href="{{ route('admin.schoolClasses.edit', $schoolClass->id) }}"><i class="fas fa-pen"></i></a>
            </button>   
            </td>
            <td>
                <form action="{{ route('admin.schoolClasses.destroy', $schoolClass->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-back-layout>
