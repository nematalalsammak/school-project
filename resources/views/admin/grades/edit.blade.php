<x-back-layout title="Edit Grade">
<x-slot name="title">Edit Grade
</x-slot>

<form action="{{ route('admin.grades.update',$grade->id) }}" method="post" enctype="multipart/form-data" class="m-4">
    @csrf
    @method('put')
    @include('admin.grades._form',
    [ 'button_lable' =>'Update' ])
</form>

</x-back-layout>