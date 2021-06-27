<x-front-layout title="Add Teacher">
<x-slot name="title">Add Teachers
</x-slot>

<form action="{{ route('admin.teachers.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.teachers._form',
    [ 'button_lable'=>'Add' ])

</form>

</x-front-layout>