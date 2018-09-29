<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Validator;
use App\Project;
use App\User;
use App\Role;
use App\Skill;
use App\Type;
use App\File;
use App\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Account(Dev)
    public function accountDev()
    {
        $user = Auth::user();
        $skills = Skill::all();

        $user_skills = $user->load('skills');
        $user_skills = $user_skills->skills()->pluck('name')->all();
        // dd(count($user_skills));
        return view('dev.accountdev', compact('user', 'skills', 'user_skills'));
    }

    public function updateDevAccount(Request $request)
    {
        // dd($request->all());
        $user = $request->user();
        $user_id = $user->id;

        $dev = User::find($user_id);

        if ($dev) {
            $dev->first_name = $request->first_name;
            $dev->last_name = $request->last_name;
            $dev->contact_number = $request->contact_number;
            $dev->portfolio = $request->portfolio;
            $dev->save();

            $skills = Skill::whereIn('name', $request->skills)->get();
            $skill_ids = $skills->pluck('id')->all();
            // dd($skill_ids);
            // REMOVE ALL PREVIOUS SKILLS SAVED
            $dev->skills()->detach();
            // UPDATED NEW SKILLS
            foreach ($skill_ids as $skill_id) {
                $dev->skills()->attach($skill_id);
            }

            return redirect()->back()->with('status', 'Your profile was successfully updated');
        } else {
            auth()->logout();
            return redirect()->to('/login')->with('warning', 'Your logged in session has expired. Kindly login again.');
        }
    }

    // Account (Owner)
    public function accountOwner()
    {
        $user = Auth::user();

        return view('owner.accountowner', compact('user'));
    }

    public function updateOwnerAccount(Request $request)
    {
        // dd($request->all());
        $user = $request->user();
        $user_id = $user->id;

        $owner = User::find($user_id);

        if ($owner) {
            $owner->first_name = $request->first_name;
            $owner->last_name = $request->last_name;
            $owner->contact_number = $request->contact_number;
            $owner->business_name = $request->business_name;
            $owner->business_address = $request->business_address;
            $owner->credit_card_name = $request->credit_card_name;
            $owner->credit_card_number = $request->credit_card_number;
            $owner->save();

            return redirect()->back()->with('status', 'Your profile was successfully updated');
        } else {
            auth()->logout();
            return redirect()->to('/login')->with('warning', 'Your logged in session has expired. Kindly login again.');
        }
    }

    public function feed()
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            $projects = Project::with('type')->get();
            return view('dev.feeddev', compact('projects'));
        } else if ($user->role_id == 2) {
            $role = Role::select('id')->where('name', 'developer')->firstOrFail();
            if ($role !== null) {
                $developers = User::with('skills', 'ratings')
                                    ->where('role_id', $role->id)
                                    ->simplePaginate(10);
            }
            // dd($developers);
            return view('owner.feedowner', compact('developers'));
        }
    }

    // Create Project
    public function createProjectOwner()
    {
        $types = Type::all();

        return view('owner.createprojectowner', compact('types'));
    }

    public function storeNewProject(Request $request)
    {
        $user = $request->user();
        $user_id = $user->id;

        $owner = User::find($user_id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:projects,name',
            'description' => 'required',
            'type' => 'required|numeric',
            'attachment' => 'required|image'
        ]);

        if ($validator->fails()) {
            // dd($validator->errors()->first());
            $error_message = $validator->errors()->first();
            return redirect()->back()->with('warning', $error_message);
        }

        $status_id = Status::where('name', 'Ongoing')->pluck('id')->first();

        $project = new Project;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->type_id = $request->type;
        $project->status_id = $status_id;
        $project->save();

        if (Input::has('attachment')) {
            $attachment = Input::file('attachment');
            $attachment_name = $attachment->getClientOriginalName();
            $attachment_name = preg_replace('/\s+/', '-', $attachment_name);
            $attachment->move(public_path() . '/images', $attachment_name);

            $file = new File;
            $file->name = $attachment_name;
            $file->created_at = Carbon::now();
            $file->updated_at = Carbon::now();
            $file->save();

            $project->files()->attach($file);
        }

        $project->clients()->attach($owner->id);

        return redirect()->back()->with('status', 'Successfully created a new project');

    }

    public function project($id)
    {
        $user = Auth::user();

        if ($user->role_id == 1) {
            $project = Project::with('type', 'status', 'files', 'devs')->findOrFail($id);
            // dd($project->devs->whereIn('id', Auth::user()->id)->isEmpty());
            return view('dev.projdev', compact('project'));
        } else if ($user->role_id == 2) {
            $types = Type::all();

            $project = Project::with('type', 'status', 'files')->findOrFail($id);
            // dd($project);
            return view('owner.projowner', compact('project', 'types'));
        }
    }

    public function uploadFiles(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'project_id' => 'required|numeric',
            'attachment' => 'required|image'
        ]);

        $project = Project::find($request->project_id);

        if ($validator->fails()) {
            // dd($validator->errors()->first());
            $error_message = $validator->errors()->first();
            return redirect()->back()->with('warning', $error_message);
        }

        if (Input::has('attachment')) {
            $attachment = Input::file('attachment');
            $attachment_name = $attachment->getClientOriginalName();
            $attachment_name = preg_replace('/\s+/', '-', $attachment_name);
            $attachment->move(public_path() . '/images', $attachment_name);

            $file = new File;
            $file->name = $attachment_name;
            $file->created_at = Carbon::now();
            $file->updated_at = Carbon::now();
            $file->save();

            $project->files()->attach($file);

            return redirect()->back()->with('status', 'Successfully added a new file');
        }
    }

    // Edit Project
    public function editProject(Request $request)
    {
        // dd($request->all());
        $project = Project::find($request->project_id);

        $status_id = Status::where('name', 'Ongoing')->pluck('id')->first();

        $project->name = $request->name;
        $project->description = $request->description;
        $project->type_id = $request->type;
        $project->status_id = $status_id;
        $project->save();

        return redirect()->back()->with('status', 'Successfully edited your project');
    }

    public function joinProject(Request $request)
    {
        // dd($request->all());
        $user = $request->user();
        $user_id = $user->id;

        $developer = User::find($user_id);
        $project = Project::find($request->project_id);

        $isAlreadyJoined = DB::table('projects_users')
                            ->where('project_id', $project->id)
                            ->where('dev_id', $developer->id)
                            ->get();
        // dd($isAlreadyJoined->isNotEmpty());
        $ongoing = Status::where('name', 'Ongoing')->pluck('id')->first();

        if ($request->btnText == 'Join' && $isAlreadyJoined->isEmpty()) {
            $project->devs()->attach($developer->id);

            DB::table('projects_users')
                ->where('project_id', $project->id)
                ->where('dev_id', $developer->id)
                ->update([
                    'status_id' => $ongoing
                ]);


            echo 'Disjoin';
        } else {
            $project->devs()->detach($developer->id);
            echo 'Join';
        }
    }

    // Entry Page - Collab Page
    public function entrypage()
    {
        return view('entrypage');
    }

    // Payment
    public function payment()
    {
        return view('payment');
    }
}
