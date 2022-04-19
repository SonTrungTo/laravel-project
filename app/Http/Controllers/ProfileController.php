<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $user = User::find($user);

        return view('home', [
            'user' => $user,
        ]);
    }
}
