<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $latest=Teacher::all();
        return view('front.teacher',[
            'latest'=>$latest,

        ]);
    }
}
