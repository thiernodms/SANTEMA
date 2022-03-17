<?php

namespace App\Http\Controllers;



use App\Models\Agents;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\ElementNode;

class AdminController extends Controller
{

    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {

                $agent = Agents::all();

                return view('user.home', compact('agent'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
}
