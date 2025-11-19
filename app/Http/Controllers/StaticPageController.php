<?php
// app/Http/Controllers/StaticPageController.php
namespace App\Http\Controllers;

class StaticPageController extends Controller
{
    public function home()
    {
        return view('static.home');
    }

    public function about()
    {
        return view('static.about');
    }

    public function features()
    {
        return view('static.features');
    }
}