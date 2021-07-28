<x-back-layout title="Attendance List">
    <x-slot name="title">Attendance List
    </x-slot>
<div class="container">
    <div class="row">
        <div class="col-3">
            <form action="{{ URL::current() }}" method="get" class="d-flex mb-4">
                @csrf
                <div>
                <label for="">Select Date</label>
                <input type="date" name="attendance_date" class="form-control" value="{{ old('attendance_date')}}">
                <button type="submit" class="btn btn-primary">search</button>
                </div>
        </div>
        <div class="col-9">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendance as $attendance)
                        <tr>
                        <td>{{$attendance->student->name}}</td>
                        <td>{{$attendance->status}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>

            </form>
        </div>
    </div>
</div> 
</x-back-layout>