<x-back-layout title="Dashboard">
    <x-slot name="title">Dashboard
    </x-slot>
    <div class="row" style="font-family: 'Poppins', sans-serif;">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card" style="background-color: rgb(253 187 56 / 0.5); border-radius: 30px 0px; border: 1px solid #fdbb38;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 25px; width: 50px; height: 50px; padding: 5px 17px; border-radius: 10px; color: #000;">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="justify-content-between align-items-center" style="display: block; padding:10px 10px 10px 20px;">
                            <h6 style="line-height: 20pt">Number Of Student : {{$totalStudents}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card" style="background-color: rgb(25 175 251 / 0.2); border-radius: 30px 0px; border: 1px solid #19affb;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 25px; width: 50px; height: 50px; padding: 5px 19px; border-radius: 10px; color: #000;">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="justify-content-between align-items-center" style="display: block; padding:10px 10px 10px 20px;">
                            <h6 style="line-height: 20pt">Number Of Teacher : {{$totalTeachers}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card" style="background-color: rgb(244 104 65 / 0.2); border-radius: 30px 0px; border: 1px solid #f46841;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 25px; width: 50px; height: 50px; padding: 5px 19px; border-radius: 10px; color: #000;">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <div class="justify-content-between align-items-center" style="display: block; padding:10px 10px 10px 20px;">
                            <h6 style="line-height: 20pt">No Of School Class : {{$totalClasses}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <div></div>

</x-back-layout>