<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showuser()
    {
        $data = User::all();

        return view('admin.user.showuser', compact('data'));
    }
}
