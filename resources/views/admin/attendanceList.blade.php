<x-front-layout title="Attendance List">
    <x-slot name="title">Attendance List
    </x-slot>
<div class="container">
    <div class="row">
        <div class="col-3">
            <form action="{{ URL::current() }}" method="get" class="d-flex mb-4">
                @csrf
                <div>
                <label for="">Select Date</label>
                <input type="date" name="attendance_date" class="form-control">
                <button type="submit" class="btn btn-primary">search</button>
                </div>
        </div>
        <div class="col-9">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendance as $attendance)
                        <tr>
                        <td>
                        <tr>
                        @foreach($attendance->student_id as $attribute=>$value)
                          <td>{{$value}}</td>
                        @endforeach
                        </tr>
                        <tr> 
                        @foreach($attendance->status as $attribute=>$value)
                          <td>{{$value}}</td>
                        @endforeach
                        </tr>
                        </td>     
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </form>
        </div>
    </div>
</div> 
</x-front-layout>