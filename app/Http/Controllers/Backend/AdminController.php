<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Show the profile for the given admin.
     *
     * @return View
     */
    public function index()
    {
        return view('admin.dashboards.index');
    }
    public function getlogin (){
    	return view('Admin.login');
    }
    public function postlogin (Request $request) {
        
        if ($request->isMethod('post')) {
                try {
            $email = $request->post('email');
            $password = $request->post('password');
            $login= [
            'email' => $email,
            'password' => $password
        ];
            if (Auth::attempt($login)) {
                return redirect()->route('users.index');
            } else {
                return redirect()->back();
            }
        }
        
        catch(\Exception $ex)
                {
                    // trả về mã lỗi ngoại lệ.
                    return response()->json(['error' => $ex->getMessage(), 'field' => ''], 400);
                }
        }
    }
}
