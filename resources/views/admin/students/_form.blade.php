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
    <input type="text" name="name" value="{{ old('name',$student->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Student ID:</label>
    <input type="text" name="roll" value="{{ old('roll',$student->roll) }}" class="form-control @error('roll') is-invalid @enderror">
    @error('roll')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Date Of Birth:</label>
    <input type="date" name="DOB" value="{{ old('DOB',$student->DOB) }}" class="form-control @error('DOB') is-invalid @enderror">
    @error('DOB')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Gender:</label>
    <div>
    <div class="ml-5">
    <label><input type="radio" name="gender" value="male" class="form-check-input ml-5 @error('gender') is-invalid @enderror" @if(old('gender',$student->gender) == 'male') checked @endif>
            Male: </label>
    </div>
    <div class="ml-5">
        <label><input type="radio" name="gender" value="female" class="form-check-input ml-5 @error('gender') is-invalid @enderror" @if(old('gender',$student->gender) == 'female') checked @endif>
            Female:</label>
    </div>
    </div>
    @error('gender')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Photo:</label>
    <div class="mb-2">
        <img src="{{ $student->image_url }}" height="100" alt="">
    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
    @error('photo')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror 
    </div>
</div>
<div class="form-group mb-3">
    <label for="">Address:</label>
    <input type="text" name="address" value="{{ old('address',$student->address) }}" class="form-control @error('address') is-invalid @enderror">
    @error('address')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Mobile:</label>
    <input type="text" name="mobile" value="{{ old('mobile',$student->mobile) }}" class="form-control @error('mobile') is-invalid @enderror">
    @error('mobile')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Email:</label>
    <input type="email" name="email" value="{{ old('email',$student->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com">
    @error('email')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Class Name:</label>
    <select name="school_class_id" class="form-control @error('school_class_id') is-invalid @enderror">
        <option value="">Select School Class</option>
        @foreach ($schoolClasses as $schoolClass)
        <option value="{{ $schoolClass->id }}" @if($schoolClass->id == old('school_class_id',$student->school_class_id)) selected @endif >{{ $schoolClass->name }}</option>
        @endforeach
    </select>
    @error('school_class_id')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Parent ID Number:</label>
    <select name="student_parent_id" class="form-control @error('student_parent_id') is-invalid @enderror">
        <option value="">Select Parent ID Number</option>
        @foreach ($studentParents as $studentParent)
        <option value="{{ $studentParent->id }}" @if($studentParent->id == old('student_parent_id',$student->student_parent_id)) selected @endif >{{ $studentParent->id_number }}</option>
        @endforeach
    </select>
    @error('student_parent_id')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Teacher Name:</label>
    <select name="teacher_id" class="form-control @error('teacher_id') is-invalid @enderror">
        <option value="">Select Teacher</option>
        @foreach ($teachers as $teacher)
        <option value="{{ $teacher->id }}" @if($teacher->id == old('teacher_id',$student->teacher_id)) selected @endif >{{ $teacher->name }}</option>
        @endforeach
    </select>
    @error('teacher_id')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_lable ?? 'save'}}</button>
</div>
