<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\VerifyEmail;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function register(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'username' => 'required|string|min:6|unique:users',
            'role_name' => 'required|string'
        ]);

        $role = Role::select('id')->where('name', $validatedData['role_name'])->first();

        try {
            $validatedData['password'] = Hash::make(array_get($validatedData, 'password'));
            $validatedData['activation_code'] = str_random(30).time();
            $validatedData['role_id'] = $role->id;
            $validatedData['status'] = false;
            $user = app(User::class)->create($validatedData);
        } catch (Exception $exception) {
            logger()->error($exception);

            return redirect()->back()->with('message', 'Unable to create new user');
        }

        $user->notify(new VerifyEmail($user));

        return back()->with('status', 'Successfully created a new account. Please check your email and activate your account.');
    }


    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //         'username' => 'required|string|min:6|unique:users',
    //         'role_name' => 'required|string'
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function activateUser(string $activationCode)
    {
        try {
            $user = app(User::class)->where('activation_code', $activationCode)->first();
            if (!$user) {
                return "The code does not exist for any user in our system.";
            }

            $user->status = true;
            $user->activation_code = null;
            $user->save();
            auth()->login($user);
        } catch (Exception $exception) {
            logger()->error($exception);

            return "Whoops! Something went wrong.";
        }

        return redirect()->to('/home')->with('status', 'Successfully activated your account. Please edit your profile below to start hunting work!');
    }

    // protected function create(array $data)
    // {
    //     $role = DB::table('roles')->select('id')->where('name', $data['role_name'])->first();
    //     // dd($role->id);

    //     return User::create([
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'username' => $data['username'],
    //         'status' => false,
    //         'role_id' => $role->id,
    //     ]);
    // }
}
