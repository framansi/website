<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function gestionale()
    {
        return view('portfolio.gestionale');
    }

    public function ecommerce(Request $request)
    {

        return view('portfolio.ecommerce');
    }

    public function website()
    {
        return view('portfolio.website');
    }

    public function contact()
    {
        return view('contact');
    }

    public function cookie()
    {
        return view('cookie');
    }

    public function privacy()
    {
        return view('privacy');
    }

}
