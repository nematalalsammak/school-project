<x-back-layout title="Add Students">
<x-slot name="title">Add Students
</x-slot>

<form action="{{ route('admin.students.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.students._form',
    [ 'button_lable'=>'Add' ])

</form>

</x-back-layout>