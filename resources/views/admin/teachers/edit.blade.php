<x-front-layout title="Edit Teacher">
<x-slot name="title">Edit Teacher
</x-slot>

<form action="{{ route('admin.teachers.update',$teacher->id) }}" method="post" enctype="multipart/form-data" class="m-4">
    @csrf
    @method('put')
    @include('admin.teachers._form',
    [ 'button_lable' =>'Update' ])
</form>

</x-front-layout>