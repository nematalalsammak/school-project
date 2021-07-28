<x-back-layout title="Grade List">
<x-slot name="title">Grade List
</x-slot>
<x-alert/>
    
<div class="table-toolbar mb-3">
<a href="{{ route('admin.grades.create') }}"class="btn btn-info">Add Grade</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Total</th>
            <th>Avarage</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grade as $grade)
        <tr>
            <td>{{ $grade->id }} </td>
            <td>{{ $grade->student->name }}</td>
            <td>{{ $grade->total }}</td>
            <td>{{ $grade->avarage }}</td>
            <td>
            <button type="submit" class="btn btn-sm">
                <a href="{{ route('admin.grades.edit', $grade->id) }}"><i class="fas fa-pen"></i></a>
            </button>   
            </td>
            <td>
                <form action="{{ route('admin.grades.destroy', $grade->id) }}" method="POST">
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
