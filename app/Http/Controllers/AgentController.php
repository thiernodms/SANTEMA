<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Facades\Agent;
use Laravel\Jetstream\Jetstream;
use Symfony\Component\CssSelector\Node\ElementNode;

class AgentController extends Controller
{


    public function agent_register_view()
    {
        return view('admin.doctor.agent_register_view');
    }



    public function agent_register(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role_id' => ['required'],
            'speciality' => ['required', 'string', 'max:255'],
        ]);




        $user = new User;

        $user->name = $request->name;

        $user->phone = $request->phone;

        $user->address = $request->address;

        $user->email = $request->email;

        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);

        $user->save();





        $agent = new Agents;

        $image = $request->file;

        if ($image) {



            $imagename = time() . '.' . $image->getClientOriginalExtension();


            $request->file->move('imageagents', $imagename);
            $agent->image = $imagename;
        }



        $agent->user_id = $user->id;
        $agent->speciality = $request->speciality;





        $cv = $request->parcourt;

        if ($cv) {


            $cv_name = time() . '.' . $cv->getClientOriginalExtension();


            $request->parcourt->move('cv_agents', $cv_name);

            $agent->parcourt = $cv_name;
        }


        $agent->save();

        return redirect('/home')->with('message', 'Votre compte agent à été créé avec succès connecter vous pour validé votre mail puis accéder à votre espace agent ');
    }




    public function add_agent_view()
    {

        if (Auth::id()) {
            if (Auth::user()->role_id == 1) {


                $agents = Agents::all();
                $users = User::where('role_id', '=', 2)
                    ->orderByDesc('created_at')
                    ->get();

                return view('admin.doctor.add_doctor', compact('users', 'agents'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }


    public function upload_doctor(Request $request)
    {

        $request->validate([
            'speciality' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
            'file' => ['required'],
        ]);

        $agent = new Agents;

        $image = $request->file;

        if ($image) {



            $imagename = time() . '.' . $image->getClientOriginalExtension();


            $request->file->move('imageagents', $imagename);
            $agent->image = $imagename;
        }


        $agent->user_id = $request->user_id;

        $agent->speciality = $request->speciality;

        $agent->abonnement = $request->abonnement;



        $cv = $request->parcourt;

        if ($cv) {


            $cv_name = time() . '.' . $cv->getClientOriginalExtension();


            $request->parcourt->move('cv_agents', $cv_name);

            $agent->parcourt = $cv_name;
        }


        $agent->save();


        return  redirect()->route('show_agent')->with('message', 'Agent ajouter avec succès');
    }

    public function show_agent()
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1) {
                $data = Agents::all();

                return view('admin.doctor.show_agent', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }


    public function delete_agent($id)
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1) {

                $agent = Agents::find($id);

                $agent->delete();

                return redirect()->back();
            } else {
                redirect()->back();
            }
        } else {
            redirect('login');
        }
    }


    public function update_agent($id)
    {
        if (Auth::id()) {
            if (Auth::user()->role_id == 1) {

                $agent = Agents::find($id);

                return view('admin.doctor.update_agent', compact('agent'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }


    public function edit_agent(Request $request, $id)
    {

        $agent = Agents::find($id);


        $agent->speciality = $request->speciality;
        $agent->abonnement = $request->abonnement;


        $image = $request->image;

        if ($image) {


            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('imageagents', $imagename);

            $agent->image = $imagename;
        }


        $cv = $request->parcourt;

        if ($cv) {


            $cv_name = time() . '.' . $cv->getClientOriginalExtension();

            $request->parcourt->move('cv_agents', $cv_name);

            $agent->parcourt = $cv_name;
        }


        $agent->save();


        return redirect()->route('show_agent')->with('message', ' Modification effectué avec succès!');
    }
}
