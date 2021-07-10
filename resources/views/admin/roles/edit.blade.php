<x-front-layout title="Edit role">
<x-slot name="title">Edit role
</x-slot>

<form action="{{ route('admin.roles.update',$role->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    
    @include('admin.roles._form',
    [ 'button_lable' =>'Update'
    ])
</form>
</x-front-layout>