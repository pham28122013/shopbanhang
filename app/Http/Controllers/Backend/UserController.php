<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(UserService $userservice)
    {
        $this->userService = $userservice;
    }

    /**
     * list for the user.
     *
     * @return view
     */
    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('admin.users.list',['users' => $users]);
    }

    /**
     * Create for the user.
     *
     * @return view
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store for the user.
     *
     * @param Request
     * @return route
     */
    public function store(Request $request)
    {
        $user =  $this->userService->newUsers();
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_active = $request->is_active;
        $user->remember_token = $request->remember_token;
        $user->save();
        return redirect()->route('users.index');
    }
}
