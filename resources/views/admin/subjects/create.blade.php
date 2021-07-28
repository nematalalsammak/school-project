<x-back-layout title="Add Subject">
<x-slot name="title">Add Subject
</x-slot>

<form action="{{ route('admin.subjects.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.subjects._form',
    [ 'button_lable'=>'Add' ])

</form>

</x-back-layout>