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
use App\Update;
use App\Feedback;
use App\RatingsUser;
use App\SkillsUser;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        $dev = Role::where('name', 'developer')->pluck('id')->first();
        $owner = Role::where('name', 'owner')->pluck('id')->first();

        if ($user->role->id == $dev) {
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

            $feedbacks = Feedback::all();

            $ratings = RatingsUser::where('rated_to', $user_id)->get();
            foreach ($ratings as $rating) {
                
            }

            return view('dev.dashdev', compact('ongoing', 'runnerup', 'winner', 'projects', 'types', 'success_rate', 'user', 'myprojects', 'statuses', 'feedbacks'));
        } else if ($user->role->id == $owner) {
            // Dashboard - Project Count
            $user_id = Auth::user()->id;

            $ongoings = ProjectsUser::where('client_id', $user_id)
                ->where('status_id', 1)
                ->get();

            $ongoing = count($ongoings);

            $runnerups = ProjectsUser::where('client_id', $user_id)
                ->where('status_id', 2)
                ->get();

            $runnerup = count($runnerups);

            $winners = ProjectsUser::where('client_id', $user_id)
                ->where('status_id', 3)
                ->get();

            $winner = count($winners);

            // Success Rate
            if ($winner+$runnerup==0) {
                $success_rate = 0;
            } else {
                $success_rate = round((($winner/($winner+$runnerup))*100),2);
            }

            // $role_id = Role::where('name', 'developers')->pluck('id')->first();
            // $developers = User::where('role_id', $role_id)->get()->sortByDesc('updated_at');

            $types = Type::all();

            $myprojects = User::find($user_id)->projectsDev()->get();
            $statuses = Status::all();

            $feedbacks = Feedback::all();

            return view('owner.dashowner', compact('ongoing', 'runnerup', 'winner', 'developers', 'types', 'success_rate', 'user', 'myprojects', 'statuses', 'feedbacks'));
        }
    }

    public function fetchUpdates()
    {
        $updates = Update::with('likes', 'comments', 'user')->get();

        return view('newsfeed', compact('updates'));
    }

    // Profile
    public function profile($id)
    {
        $user = User::find($id);

        $dev = Role::where('name', 'developer')->pluck('id')->first();
        $owner = Role::where('name', 'owner')->pluck('id')->first();

        if ($user->role->id == $dev) {
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

            $feedbacks = Feedback::all();

            $myskills = SkillsUser::where('user_id', $user->id);

            // dd($myprojects);
            return view('dev.profiledev', compact('ongoing', 'runnerup', 'winner', 'projects', 'types', 'success_rate', 'user', 'myprojects', 'statuses', 'feedbacks', 'myskills'));
        } else if ($user->role->id == $owner) {
            $user_id = Auth::user()->id;

            $ongoings = ProjectsUser::where('client_id', $user_id)
                ->where('status_id', 1)
                ->get();

            $ongoing = count($ongoings);

            $runnerups = ProjectsUser::where('client_id', $user_id)
                ->where('status_id', 2)
                ->get();

            $runnerup = count($runnerups);

            $winners = ProjectsUser::where('client_id', $user_id)
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

            $feedbacks = Feedback::all();

            $myskills = SkillsUser::where('user_id', $user->id);

            // dd($myprojects);
            return view('owner.profileowner', compact('ongoing', 'runnerup', 'winner', 'projects', 'types', 'success_rate', 'user', 'myprojects', 'statuses', 'feedbacks', 'myskills'));
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

        $dev = Role::where('name', 'developer')->pluck('id')->first();
        $owner = Role::where('name', 'owner')->pluck('id')->first();

        // dd($project);

        if ($user->role->id == $dev) {
            $clients = Project::find($id)->clients()->get();
            foreach ($clients as $client) {
                $client = $client;
            }

            // dd($clients);
            $ratings = Rating::all();

            return view('dev.feedbackdev', compact('ratings', 'project', 'client'));
        } else if ($user->role->id == $owner) {
            $devs = Project::find($id)->devs()->get();
            foreach ($devs as $dev) {
                $dev = $dev;
            }

            // dd($clients);
            $ratings = Rating::all();
            return view('owner.feedbackowner', compact('ratings', 'project', 'dev'));
        }
    }

    // feedbackpage
    public function addFeedback(Request $request, $idP, $idC)
    {
        $user = Auth::user();

        // Save value for accuracy
        $rating_user = new RatingsUser();
        $rating_user->rated_by = $user->id;
        $rating_user->rated_to = $idC;
        $rating_id = Rating::where('name', 'accuracy')->pluck('id')->first();
        $rating_user->rating_id = $rating_id;
        $rating_user->value = $request->accuracy;
        $rating_user->save();

        // Save value for communication
        $rating_user = new RatingsUser();
        $rating_user->rated_by = $user->id;
        $rating_user->rated_to = $idC;
        $rating_id = Rating::where('name', 'communication')->pluck('id')->first();
        $rating_user->rating_id = $rating_id;
        $rating_user->value = $request->communication;
        $rating_user->save();

        // Save value for overall_experience
        $rating_user = new RatingsUser();
        $rating_user->rated_by = $user->id;
        $rating_user->rated_to = $idC;
        $rating_id = Rating::where('name', 'experience')->pluck('id')->first();
        $rating_user->rating_id = $rating_id;
        $rating_user->value = $request->experience;
        $rating_user->save();

        // dd($request->all());

        // Save feedback
        $feedback = new Feedback();
        $feedback->rated_by = $user->id;
        $feedback->rated_to = $idC;
        $feedback->project_id = $idP;
        $feedback->name = $request->feedback;
        $feedback->save();

        return redirect('home');
    }
}

