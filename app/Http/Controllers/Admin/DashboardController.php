<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultation;

class DashboardController extends Controller
{
    public function index()
    {
        $consultations = Consultation::latest()->get();
        return view('admin.dashboard', compact('consultations'));
    }
}
