<?php

namespace App\Http\Controllers;

use App\Models\Rdv;

use App\Models\User;

use App\Models\Agents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {

        if (Auth::id()) {
            return redirect('home');
        } else {
            $agent = Agents::all();


            return view('user.home', compact('agent'));
        }
    }


    public function rdv(Request $request)
    {

        $data = new Rdv;


        $data->nom = $request->nom;

        $data->email = $request->email;

        $data->date = $request->date;

        $data->time = $request->time;

        $data->agent = $request->agent;

        $data->service = $request->service;

        $data->tel = $request->tel;

        $data->description = $request->description;

        $data->status = 'En Traitement';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Rendez-vous envoyer avec succès, nous vous contacterons dans un meilleur delai');
    }


    public function mesrdv()
    {

        if (Auth::id()) {

            if (Auth::user()->usertype == 0) {

                $useremail = Auth::user()->email;

                $rdv = Rdv::where('email', $useremail)->get();

                return view('user.mes_rdv', compact('rdv'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    public function annuler_rdv($id)
    {

        $data = Rdv::find($id);

        $data->delete();

        return redirect()->back();
    }
}
