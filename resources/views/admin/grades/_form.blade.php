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
    <label for="">Student Name:</label>
    <select name="student_id" class="form-control @error('student_id') is-invalid @enderror">
        <option value="">Select Student</option>
        @foreach ($students as $student)
        <option value="{{ $student->id }}" @if($student->id == old('student_id',$grade->student_id)) selected @endif >{{ $student->name }}</option>
        @endforeach
    </select>
    @error('teacher_id')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Total:</label>
    <input type="text" name="total" value="{{ old('total',$grade->total) }}" class="form-control @error('total') is-invalid @enderror">
    @error('total')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<!--
    <div class="form-group mb-3">
    <label for="">Avarage:</label>
    <input type="text" name="avarage" value="{{ old('avarage',$grade->avarage) }}" class="form-control @error('avarage') is-invalid @enderror">
    @error('avarage')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
    </div> 
-->

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_lable ?? 'save'}}</button>
</div>
