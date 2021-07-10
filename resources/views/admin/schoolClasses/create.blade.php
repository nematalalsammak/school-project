<x-front-layout title="Add School Class">
<x-slot name="title">Add School Class
</x-slot>

<form action="{{ route('admin.schoolClasses.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.schoolClasses._form',
    [ 'button_lable'=>'Add' ])

</form>

</x-front-layout>