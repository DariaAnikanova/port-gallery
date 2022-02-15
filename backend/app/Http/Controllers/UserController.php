<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return UserResource
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }   
}
