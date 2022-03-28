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
        $checkRdv = Rdv::where([
            ['agent_id', '=', $request->agent],
            ['date', '=', $request->date],
            ['time', '=', $request->time],
        ])->count();


        if ($checkRdv == 0) {


            if (Auth::id()) {
                $data->user_id = Auth::user()->id;
                $data->nom = Auth::user()->name;
                $data->email = Auth::user()->email;
                $data->tel = Auth::user()->phone;
                $data->quartier = Auth::user()->address;
            } else {

                $request->validate([
                    'nom' => ['bail', 'required', 'string', 'min:5', 'max:15'],
                    'email' => ['bail', 'required', 'min:5', 'email', 'string'],
                    'quartier' => ['bail', 'required', 'min:5', 'max:15', 'string'],
                    'tel' => ['bail', 'required', 'min:5', 'numeric'],
                ]);

                $data->nom = $request->nom;

                $data->email = $request->email;

                $data->quartier = $request->quartier;

                $data->tel = $request->tel;
            }

            $request->validate([
                'date' => ['bail', 'required', 'date'],
                'time' => ['bail', 'required'],
                'agent' => ['bail', 'required'],
                'service' => ['bail', 'required', 'string'],
                'description' => ['bail', 'nullable', 'string'],
            ]);
            $data->date = $request->date;

            $data->time = $request->time;

            $data->agent_id = $request->agent;

            $data->service = $request->service;


            $data->description = $request->description;

            $data->status = 'En Traitement';


            $data->save();

            return redirect()->back()->with('message', 'Rendez-vous envoyer avec succès, nous vous contacterons dans un meilleur delai');
        } else {
            return redirect()->back()->with('message', 'Rendez-vous indisponible veuillez changer soit la date, l\'heure ou l\'agent ');
        }
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
