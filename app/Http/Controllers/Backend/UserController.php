<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\UserService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    // public function store(Request $request)
    // {
    //     $user =  $this->userService->newUsers();
    //     $user->role_id = $request->role_id;
    //     $user->name = $request->name;
    //     $user->phone = $request->phone;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $user->is_active = $request->is_active;
    //     $user->remember_token = $request->remember_token;
    //     $user->save();
    //     return redirect()->route('users.index');
    // }

    public function store(Request $request)
    {
        $this->validate($request,[
            'role_id' =>'required',
            'name'=>'bail|required|max:50',
            'phone' => 'bail|required|min:10',
            'email'=>'required|email',
            'password'=>'required|max:50',
            'is_active'=>'required',  
        ],
        [          
            'role_id.required'=>'Bạn phải chọn role_id',
            'name.required'=>'Bạn phải nhập tên user',
            'name.max'=>'Bạn không được nhập tên user quá 50 kí tự',
            'phone.required'=>'Bạn phải nhập số phone',
            'phone.min'=>'Số điện thoại này không đúng',
            'email.required'=>'Bạn phải nhập email',
            'email.email'=>'Email bạn nhập ko đúng',
            'password.required'=>'Bạn phải nhập password',
            'password.max'=>'Bạn không được nhập password quá 50 kí tự',
            'is_active.required'=>'Bạn phải chọn is_active',  
        ]);
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
     /**
     * Show for the user.
     *
     * @param Request
     * @return route
     */

     public function show($id){
        $user = $this->userService->showUsers($id);
        return view('admin.users.show', ['user' => $user]);
    }

     /**
     * Edit for the user.
     *
     * @param Request
     * @return route
     */

    public function edit($id){
        $user = $this->userService->editUsers($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update for the user.
     *
     * @param Request
     * @return route
     */

    public function update(request $request, $id){
        $user = $this->userService->updateUsers($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('users.index');
    }
}
