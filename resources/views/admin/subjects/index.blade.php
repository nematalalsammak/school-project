<x-back-layout title="Subject List">
<x-slot name="title">Subject List
</x-slot>
<x-alert/>
    
<div class="table-toolbar mb-3">
<a href="{{ route('admin.subjects.create') }}"class="btn btn-info">Add Subject</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Description</th>
            <th>Teacher Name</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subject as $subject)
        <tr>
            <td>{{ $subject->id }} </td>
            <td>{{ $subject->name }}</td>
            <td>{{ $subject->description }}</td>
            <td>{{ $subject->teacher->name }}</td>
            <td>
            <button type="submit" class="btn btn-sm">
                <a href="{{ route('admin.subjects.edit', $subject->id) }}"><i class="fas fa-pen"></i></a>
            </button>   
            </td>
            <td>
                <form action="{{ route('admin.subjects.destroy', $subject->id) }}" method="POST">
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
