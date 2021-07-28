<x-back-layout title="Add roles">
<x-slot name="title">Add roles
</x-slot>

<form action="{{ route('admin.roles.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.roles._form',
    [ 'button_lable'=>'Add'
    ])

</form>
</x-back-layout>