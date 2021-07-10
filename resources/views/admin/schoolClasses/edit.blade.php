<x-front-layout title="Edit School Class">
<x-slot name="title">Edit School Class
</x-slot>

<form action="{{ route('admin.schoolClasses.update',$schoolClass->id) }}" method="post" enctype="multipart/form-data" class="m-4">
    @csrf
    @method('put')
    @include('admin.schoolClasses._form',
    [ 'button_lable' =>'Update' ])
</form>

</x-front-layout>