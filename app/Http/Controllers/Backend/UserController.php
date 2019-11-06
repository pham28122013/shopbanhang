<?php

namespace App\Http\Controllers\Backend;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;	
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserController extends Controller
{
    public function userlist(){
        $users = User::paginate(5);
        return view('admin.username.list',['users' => $users]);
    }

    public function useradd(){
        return view('admin.username.add');
    }

    public function userstore(Request $request){
        $user = new User();
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_active = $request->is_active;
        $user->remember_token = $request->remember_token;
        $user->save();
        return redirect()->route('users.list');
    }

    public function usershow($id)
    {
        //
        $user = User::find($id);
        return view('admin.username.show', ['user' => $user]);
    }

    public function useredit($id){
        $user = User::find($id);
        return view('admin.username.edit', ['user' => $user]);
    }

    public function userupdate(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.list');
    }

    public function userdelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.list');
    }
}
