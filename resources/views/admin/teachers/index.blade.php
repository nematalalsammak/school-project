<x-back-layout title="Teacher List"> 
<x-slot name="title">Teacher List
</x-slot>  
<x-alert/>

<div class="table-toolbar mb-3">
<a href="{{ route('admin.teachers.create') }}"class="btn btn-info">Add Teacher</a>
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
            <th>Photo</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Mobile</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{ $teacher->id }} </td>
            <td><a href="{{ route('admin.teachers.show', $teacher->id) }}">{{ $teacher->name }}</a></td>
            <td><img src="{{ $teacher->image_url }}" height="50" width="40" alt=""></td>
            <td>{{ $teacher->gender }}</td>
            <td>{{ $teacher->address }}</td>
            <td>{{ $teacher->mobile }}</td>
            <td>
                <button type="submit" class="btn btn-sm">
                <a href="{{ route('admin.teachers.edit', $teacher->id) }}"><i class="fas fa-pen"></i></a>
                </button>  
            </td>
            <td>
                <form action="{{ route('admin.teachers.destroy', $teacher->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$teachers->links()}}
</x-back-layout>

