<x-back-layout title="Edit Subject">
<x-slot name="title">Edit Subject
</x-slot>

<form action="{{ route('admin.subjects.update',$subject->id) }}" method="post" enctype="multipart/form-data" class="m-4">
    @csrf
    @method('put')
    @include('admin.subjects._form',
    [ 'button_lable' =>'Update' ])
</form>

</x-back-layout>