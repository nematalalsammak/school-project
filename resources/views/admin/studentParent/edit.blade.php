<x-back-layout title="Edit Student Parent">
<x-slot name="title">Edit Student Parent
</x-slot>

<form action="{{ route('admin.studentParent.update',$studentParent->id) }}" method="post" enctype="multipart/form-data" class="m-4">
    @csrf
    @method('put')
    @include('admin.studentParent._form',
    [ 'button_lable' =>'Update' ])
</form>

</x-back-layout>