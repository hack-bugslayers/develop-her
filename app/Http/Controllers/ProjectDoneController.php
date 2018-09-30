<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectDoneController extends Controller
{
    public function projectdone()
    {
        return view('projectdone');
    }
}
