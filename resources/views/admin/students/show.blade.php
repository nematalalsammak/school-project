<x-front-layout title="Veiw Student">
    <x-slot name="title">View Student
    </x-slot>
    <div class="container card">
        <div class="card-body">
            <div class="row" style="font-family: 'Poppins', sans-serif;">
                <div class="media mt-3">
                <img src="{{ $student->image_url }}" class="mr-3" width="200px" height="150px"> 
                </div>
                <div class="media-body">
                    <ul style="list-style: none;">
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Nema:</span>
                            <span style="font-size: 18px;">{{$student->name}}</span>
                        </li>
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Date Of Birth:</span>
                            <span style="font-size: 18px;">{{$student->DOB}}</span>
                        </li>
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Mobile:</span>
                            <span style="font-size: 18px;">{{$student->mobile}}</span>
                        </li>
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Email:</span>
                            <span style="font-size: 18px;">{{$student->email}}</span>
                        </li>
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Address:</span>
                            <span style="font-size: 18px;">{{$student->address}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>