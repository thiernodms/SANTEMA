<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showuser()
    {
        $data = User::all();

        return view('admin.user.showuser', compact('data'));
    }

    public function delete_user($id)
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1) {
                $user = User::find($id);

                $user->delete();

                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
}
