<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Rdv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RdvNotification;
use Illuminate\Support\Facades\Notification;

class RdvController extends Controller
{


    public function show_rdv()
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1) {

                $rdv = Rdv::all();

                $agents = Agents::all();

                return view('admin.rdv.showrdv', compact('rdv', 'agents'));
            } elseif (Auth::user()->role_id == 2) {

                $agents = Agents::all();

                $rdv = Rdv::all();

                return view('admin.doctor.rdv_agent', compact('rdv', 'agents'));
            } else {

                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }



    public function confirm_rdv($id)
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2) {
                $data = Rdv::find($id);

                $data->status = 'Confirmé';

                $data->save();

                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }



    public function annuler_rdv($id)
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2) {
                $data = Rdv::find($id);

                $data->status = 'Annulé';

                $data->save();

                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function notifier_rdv_view($id)
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2) {
                $data = Rdv::find($id);

                return view('admin.rdv.notifier_rdv_view', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }


    public function notifier_rdv(Request $request, $id)
    {

        if (Auth::id()) {
            if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2) {

                $data = Rdv::find($id);

                $details = [

                    'greeting' => $request->greeting,

                    'body' => $request->body,

                    'actiontext' => $request->actiontext,

                    'actionurl' => $request->actionurl,

                    'endpart' => $request->endpart,

                ];



                Notification::send($data, new RdvNotification($details));

                return redirect()->route('show_rdv')->with('message', 'Notification envoyé avec succès!');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
