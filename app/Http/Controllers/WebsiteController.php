<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class WebsiteController extends Controller
{
     public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.services');
    }

    public function industries() {
        return view('pages.industries');
    }

    public function testimonials() {
        return view('pages.testimonials');
    }

    public function blog() {
        return view('pages.blog');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function consultation() {
        return view('pages.consultation');

    }

    public function storeConsultation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'preferred_date' => 'nullable|date',
        ]);

        Consultation::create($request->all());

        return redirect()->back()->with('success', 'Consultation booked successfully!');
    }
}
