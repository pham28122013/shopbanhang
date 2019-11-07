<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Backend\UserService;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    /**
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

}
