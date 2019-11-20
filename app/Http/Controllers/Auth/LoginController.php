<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Login to the admin page.
     *
     * @return view
     */
    public function getLogin()
    {
    	return view('admin.login');
    }
    
    /**
     * Login to the admin page.
     *
     * @param \Illuminate\Http\Request  $request
     * @return route
     */
    public function postLogin (Request $request) 
    {
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email' => $email,'password' => $password])) 
        {
            return redirect()->route('users.index')->with('success','Login admin successfully');
        }else 
        {
            return redirect()->back();
        }
    }

    /**
     * Logout to the admin page.
     *
     * @return view
     */
    public function logout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
