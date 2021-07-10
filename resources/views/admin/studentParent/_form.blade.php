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
    <input type="text" name="name" value="{{ old('name',$studentParents->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">ID Number:</label>
    <input type="text" name="id_number" value="{{ old('id_number',$studentParents->id_number) }}" class="form-control @error('id_number') is-invalid @enderror">
    @error('id_number')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-4">
    <label for="">Gender:</label>
    <div>
    <div class="ml-5">
    <label><input type="radio" name="gender" value="male" class="form-check-input ml-5 @error('gender') is-invalid @enderror" @if(old('gender',$studentParents->gender) == 'male') checked @endif>
            Male: </label>
    </div>
    <div class="ml-5">
        <label><input type="radio" name="gender" value="female" class="form-check-input ml-5 @error('gender') is-invalid @enderror" @if(old('gender',$studentParents->gender) == 'female') checked @endif>
            Female:</label>
    </div>
    </div>
    @error('gender')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Occupation:</label>
    <input type="text" name="occupation" value="{{ old('occupation',$studentParents->occupation) }}" class="form-control @error('occupation') is-invalid @enderror">
    @error('occupation')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Address:</label>
    <input type="text" name="address" value="{{ old('address',$studentParents->address) }}" class="form-control @error('address') is-invalid @enderror">
    @error('address')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Mobile:</label>
    <input type="text" name="mobile" value="{{ old('mobile',$studentParents->mobile) }}" class="form-control @error('mobile') is-invalid @enderror">
    @error('mobile')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Email:</label>
    <input type="email" name="email" value="{{ old('email',$studentParents->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com">
    @error('email')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_lable ?? 'save'}}</button>
</div>
