<x-back-layout title="Add Grade">
<x-slot name="title">Add Grade
</x-slot>

<form action="{{ route('admin.grades.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.grades._form',
    [ 'button_lable'=>'Add' ])

</form>

</x-back-layout>