<x-back-layout title="Add Student Parent">
<x-slot name="title">Add Student Parent
</x-slot>

<form action="{{ route('admin.studentParent.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.studentParent._form',
    [ 'button_lable'=>'Add' ])

</form>

</x-back-layout>