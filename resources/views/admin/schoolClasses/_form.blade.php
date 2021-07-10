@if ($errors->any())
<div class="alert alert-danger">
    Errors!
    <ul>
        @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group mb-3">
    <label for="">Name:</label>
    <input type="text" name="name" value="{{ old('name',$schoolClass->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Number Of Student:</label>
    <input type="text" name="NoStudent" value="{{ old('NoStudent',$schoolClass->NoStudent) }}" class="form-control @error('NoStudent') is-invalid @enderror">
    @error('NoStudent')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Teacher Name:</label>
    <select name="teacher_id" class="form-control @error('teacher_id') is-invalid @enderror">
        <option value="">Select Teacher</option>
        @foreach ($teachers as $teacher)
        <option value="{{ $teacher->id }}" @if($teacher->id == old('teacher_id',$schoolClass->teacher_id)) selected @endif >{{ $teacher->name }}</option>
        @endforeach
    </select>
    @error('teacher_id')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_lable ?? 'save'}}</button>
</div>
