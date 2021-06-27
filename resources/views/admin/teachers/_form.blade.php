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
<div class="form-group mb-3 flex">
    <label for="">Name:</label>
    <input type="text" name="name" value="{{ old('name',$teacher->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Gender:</label>
    <div>
    <div class="ml-5">
    <label><input type="radio" name="gender" value="male" class="form-check-input ml-5 @error('gender') is-invalid @enderror" @if(old('gender',$teacher->gender) == 'male') checked @endif>
            Male: </label>
    </div>
    <div class="ml-5">
        <label><input type="radio" name="gender" value="female" class="form-check-input ml-5 @error('gender') is-invalid @enderror" @if(old('gender',$teacher->gender) == 'female') checked @endif>
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
        <img src="{{ $teacher->image_url }}" height="150" alt="">
    </div>
    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
    @error('photo')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Address:</label>
    <input type="text" name="address" value="{{ old('address',$teacher->address) }}" class="form-control @error('address') is-invalid @enderror">
    @error('address')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-4">
    <label for="">Mobile:</label>
    <input type="tel" name="mobile" value="{{ old('mobile',$teacher->mobile) }}" class="form-control @error('mobile') is-invalid @enderror">
    @error('mobile')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_lable ?? 'save'}}</button>
</div>
