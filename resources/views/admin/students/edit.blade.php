<x-back-layout title="Edit Students">
<x-slot name="title">Edit Students
</x-slot>

<form action="{{ route('admin.students.update',$student->id) }}" method="post" enctype="multipart/form-data" class="m-4">
    @csrf
    @method('put')
    @include('admin.students._form',
    [ 'button_lable' =>'Update' ])
</form>

</x-back-layout>