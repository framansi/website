<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'accept' => 'required|accepted',

        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];


        if ($data) {
            Mail::to('job@francescomansi.me')->send(new ContactSender($data));
            return redirect()->back()->with('success','Modifiche Salvate');
        }
    }

}
