<?php

namespace App\Http\Controllers;



use App\Models\Agents;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\ElementNode;

class AdminController extends Controller
{

    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == '1') {

                $user = User::all();
                return view('admin.layouts.app', compact('user'));
            } elseif (Auth::user()->role_id == '2') {
                $user = User::all();
                return view('admin.layouts.app', compact('user'));
            } else {
                $agent = Agents::all();

                return view('user.home', compact('agent'));
            }
        } else {
            return redirect()->back();
        }
    }
}
