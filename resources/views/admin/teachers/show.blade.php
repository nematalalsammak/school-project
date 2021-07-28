<x-back-layout title="Veiw Teacher">
<x-slot name="title">Veiw Teacher
</x-slot>
<div class="container card">
        <div class="card-body">
            <div class="row" style="font-family: 'Poppins', sans-serif;">
                <div class="media mt-3">
                <img src="{{ $teacher->image_url }}" class="mr-3" width="250px">
                </div>
                <div class="media-body">
                    <ul style="list-style: none;">
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Nema:</span>
                            <span style="font-size: 18px;">{{$teacher->name}}</span>
                        </li>
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Gender:</span>
                            <span style="font-size: 18px;">{{$teacher->gender}}</span>
                        </li>
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Mobile:</span>
                            <span style="font-size: 18px;">{{$teacher->mobile}}</span>
                        </li>
                        <li style="display: flex; line-height: 30pt;">
                            <span style="width:150px; font-weight: 500; font-size: 18px; padding-right:20px;">Address:</span>
                            <span style="font-size: 18px;">{{$teacher->address}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</x-back-layout>