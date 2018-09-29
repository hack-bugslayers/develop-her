<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PublicPagesController extends Controller
{

    // Landing Page
    public function index()
    {
        return view('landingpage');
    }

    // Terms & Conditions
    public function termsandconditions()
    {
        return view('termsandconditions');
    }

    // About
    public function about()
    {
        return view('about');
    }

    public function projView($id)
    {
        $project = Project::with('type', 'status', 'files', 'devs')->findOrFail($id);

        return view('project-page', compact('project'));
    }

    public function redirectToLogin()
    {
        return redirect()->to('/login')->with('warning', 'Please log in or register first to join. Happy project-hunting!');
    }
}
