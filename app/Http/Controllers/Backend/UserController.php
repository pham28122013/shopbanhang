<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\UserService;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

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
    public function store(UserRequest $request)
    {
        $user = $this->userService->createUsers($request);
        return redirect()->route('users.index');
    }

    /**
     * Show for the user.
     *
     * @param id
     * @return view
     */
    public function show($id)
    {
        $user = $this->userService->showUsers($id);
        return view('admin.users.show', ['user' => $user]);
    }
}
