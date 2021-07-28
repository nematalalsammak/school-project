<x-back-layout title="Attendance List">
    <x-slot name="title">Attendance List
    </x-slot>
    <x-alert />
    <div class="table-toolbar mb-3">
        <a href="{{ route('admin.attendance.viewList') }}" class="btn btn-info">Veiw Attendance List</a>
    </div>

    <form action="{{ route('admin.attendance') }}" method="get" class="d-flex mb-4">
        @csrf
        <div class="card-body">
            <div class="form-group me-2">
                <label for="">Class Name:</label>
                <select name="school_class_id" class="form-control @error('school_class_id') is-invalid @enderror">
                    <option value="">Select School Class</option>
                    @foreach ($schoolClasses as $schoolClass)
                    <option value="{{ $schoolClass->id }}" @if($schoolClass->id == old('school_class_id')) selected @endif>{{ $schoolClass->name }}</option>
                    @endforeach

                </select>
                @error('school_class_id')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-secondary">Veiw Student</button>
        </div>
    </form>

    <form action="{{ route('admin.attendance.store')}}" method="post" class="d-flex mb-4">
        @csrf
        <div class="card-body">

            <div class="form-group mb-4">
                <label for="">Select Date</label>
                <input type="date" name="attendance_date" value="{{$attendance->attendance_date}}" class="form-control @error('attendance_date') is-invalid @enderror">
                @error('attendance_date')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td><input type="hidden" name="student_id[]" value="{{$student->id}}" >{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>
                            <div>
                                <div class="form-group mb-3">
                                    <label for="">Status:</label>
                                    <div>
                                        <label><input type="checkbox" name="status[]" value="present" class="form-check-input @error('status') is-invalid @enderror" @if('status')=='present' ) checked @endif>
                                            Present:</label>
                                        <label><input type="checkbox" name="status[]" value="absent" class="form-check-input @error('status') is-invalid @enderror" @if('status'=='absent' ) checked @endif>
                                            Absent:</label>
                                    </div>
                                    @error('status')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">submit</button>

        </div>
    </form>


</x-back-layout>