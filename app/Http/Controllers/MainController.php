<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function boilers()
    {
        return view('pages.boilers');
    }

    public function plumbing()
    {
        return view('pages.plumbing');
    }

    public function electrical()
    {
        return view('pages.electrical');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost()
    {
        return response()->json([], 200);
    }

    public function subscribe(Request $request)
    {
        session()->flash('x', 'You have subscribed to newsletter');

        return redirect()->back();
    }

}
