<?php

namespace App\Services\Backend;

use App\Models\User;

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


}
