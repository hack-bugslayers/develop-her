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
use App\Rating;

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

            $status_id = Status::where('name', 'Ongoing')->pluck('id')->first();
            $projects = Project::where('status_id', $status_id)->get()->sortByDesc('updated_at');

            $types = Type::all();

            $myprojects = User::find($user_id)->projectsDev()->get();
            $statuses = Status::all();

            return view('dev.dashdev', compact('ongoing', 'runnerup', 'winner', 'projects', 'types', 'success_rate', 'user', 'myprojects', 'statuses'));
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
    public function feedback($id)
    {
        $user = Auth::user();
        $project = Project::find($id);

        // dd($project);

        if ($user->role_id == 1) {
            $clients = Project::find($id)->clients()->get();
            foreach ($clients as $client) {
                $client = $client;
            }

            // dd($clients);
            $ratings = Rating::all();

            return view('dev.feedbackdev', compact('ratings', 'project', 'client'));
        } else if ($user->role_id == 2) {
            return view('owner.feedbackowner');
        }
    }

    // feedbackpage
    public function addFeedback(Request $request, $idP, $idC)
    {

        // validation
        // $rules = array(
        //     'name' => 'required'
        // );
        // $this -> validate($request, $rules);

        // create new row
        $rating = new RatingUser();
        $rating->user_id = $idC
        $rating->save();
        // set board name
        // echo "hello";
        dd($request->all());
        // exit;
        // save row
        // $board->save();

        // assign user_id and board_id in pivot table
        // $board->users()->attach(Auth::user()->id);
        

        // save this activity
        // $username = Auth::user()->name;
        // $activity = new Activity();
        // $activity->name = $username . ' created a new board "' . $board->name . '"';
        // $activity->task_id = null;
        // $activity->board_id = $board->id;
        // $activity->save();

        // success message
        // Session::flash('create_success', "$board->name created successfully");

        // return to previous page
        // return redirect()->back();

        $user = Auth::user();
        $project = Project::find($id);

        // dd($project);

        if ($user->role_id == 1) {
            $clients = Project::find($id)->clients()->get();

            // dd($clients);
            $ratings = Rating::all();

            return view('dev.feedbackdev', compact('ratings', 'project', 'clients'));
        } else if ($user->role_id == 2) {
            return view('owner.feedbackowner');
        }
    }

     function createBoard(Request $request) {
        // validation
        $rules = array(
            'name' => 'required'
        );
        $this -> validate($request, $rules);

        return redirect()->back();

        // create new row
        // $board = new Board();

        // set board name
        // $board->name = $request->name;

        // save row
        // $board->save();

        // assign user_id and board_id in pivot table
        // $board->users()->attach(Auth::user()->id);
        

        // save this activity
        // $username = Auth::user()->name;
        // $activity = new Activity();
        // $activity->name = $username . ' created a new board "' . $board->name . '"';
        // $activity->task_id = null;
        // $activity->board_id = $board->id;
        // $activity->save();

        // success message
        // Session::flash('create_success', "$board->name created successfully");

        // return to previous page
        // return redirect()->back();
    }
}

