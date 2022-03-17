<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\sendRdvNotification;
use Illuminate\Support\Facades\Notification;

class RdvController extends Controller
{
    public function showrdv()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $rdv = Rdv::all();

                return view('admin.rdv.showrdv', compact('rdv'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }


    public function confirm_rdv($id)
    {
        $data = Rdv::find($id);

        $data->status = 'Confirmé';

        $data->save();

        return redirect()->back();
    }


    public function annuler_rdv($id)
    {
        $data = Rdv::find($id);

        $data->status = 'Annulé';

        $data->save();

        return redirect()->back();
    }

    public function notifier_rdv_view($id)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
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

        $data = Rdv::find($id);

        $details = [

            'greeting' => $request->greeting,

            'body' => $request->body,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,

            'endpart' => $request->endpart,



        ];



        Notification::send($data, new sendRdvNotification($details));

        return redirect()->back()->with('message', 'Notification envoyé avec succès!');
    }
}
