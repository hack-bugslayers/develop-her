<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Project;
use App\ProjectsUser;
use App\User;
use App\Role;
use App\Skill;
use App\Type;
use App\File;
use App\Status;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            // Dashboard - Project Count
            $user_id = Auth::user()->id;

            $ongoings = ProjectsUser::where('dev_id', $user_id)
                ->where('status_id', 1)
                ->get();

            $ongoing = count($ongoings);

            $runnerups = ProjectsUser::where('dev_id', $user_id)
                ->where('status_id', 2)
                ->get();

            $runnerup = count($runnerups);

            $winners = ProjectsUser::where('dev_id', $user_id)
                ->where('status_id', 3)
                ->get();

            $winner = count($winners);

            // Success Rate
            if ($winner+$runnerup==0) {
                $success_rate = 0;
            } else {
                $success_rate = round((($winner/($winner+$runnerup))*100),2);
            }

            // Projects and Types
            $projects = Project::where('status_id', 1)->get()->sortByDesc('updated_at');
            $types = Type::all();

            return view('dev.dashdev', compact('ongoing', 'runnerup', 'winner', 'projects', 'types', 'success_rate', 'user'));
        } else if ($user->role_id == 2) {
            // Dashboard - Project Count
            $user_id = Auth::user()->id;

            $ongoings = ProjectsUser::where('dev_id', $user_id)
                ->where('status_id', 1)
                ->get();

            $ongoing = count($ongoings);

            $runnerups = ProjectsUser::where('dev_id', $user_id)
                ->where('status_id', 2)
                ->get();

            $runnerup = count($runnerups);

            $winners = ProjectsUser::where('dev_id', $user_id)
                ->where('status_id', 3)
                ->get();

            $winner = count($winners);

            // Success Rate
            if ($winner+$runnerup==0) {
                $success_rate = 0;
            } else {
                $success_rate = round((($winner/($winner+$runnerup))*100),2);
            }

            // Projects and Types
            $projects = Project::where('status_id', 1)->get()->sortByDesc('updated_at');
            $types = Type::all();

            return view('dashowner', compact('ongoing', 'runnerup', 'winner', 'projects', 'types', 'success_rate', 'user'));
        }
    }

    // Profile
    public function profile()
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            return view('dev.profiledev', compact('user'));
        } else if ($user->role_id == 2) {
            return view('owner.profileowner', compact('user'));
        }
    }

    // Resources - Links
    public function resources()
    {
        return view('resources');
    }

    // Codepen
    public function code()
    {
        return view('dev.codeeditor');
    }

    // feedbackpage
    public function feedbackdev()
    {
        return view('dev.feedbackdev');
    }

    public function feedbackowner()
    {
        return view('feedbackowner');
    }

}

