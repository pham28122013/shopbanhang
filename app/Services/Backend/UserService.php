<?php

namespace App\Services\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class UserService
{
    /**
     * Get all of users
     *
     * @return Model
     */
    public function getAllUsers()
    {   
        return User::paginate(User::ITEMS_PER_PAGE);
    }

    /**
     * Create new users
     *
     * @param request
     * @return new Model
     */
    public function createUsers($request)
    {   
        $user =  new User;
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_active = User::ACTIVE;
        $user->save();
    }

    /**
     * Show users
     *
     * @param id
     * @return Model
     */
    public function showUsers($id)
    {   
        return User::find($id);
    }

    /**
     * Edit users
     *
     * @param id
     * @return new Model
     */
    public function getDataByUserId($id)
    {   
        return User::find($id);
    }

    /**
     * Update users
     *
     * @param Request
     * @param id
     * @return Model
     */
    public function updateUser($request, $id)
    {   
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->is_active = $request->is_active;
        $user->save();
    }
}
