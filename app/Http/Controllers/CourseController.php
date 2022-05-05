<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function laravel()
    {
        return view('courses.laravel');
    }

    public function tailwind()
    {
        return view('courses.tailwind');
    }

}
