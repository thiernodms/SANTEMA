<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\ElementNode;

class AgentController extends Controller
{
    public function addview()
    {

        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.doctor.add_doctor');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }


    public function uploaddoctor(Request $request)
    {

        $agent = new Agents;

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientOriginalExtension();


        $request->file->move('imageagents', $imagename);

        $agent->image = $imagename;


        $agent->nom = $request->nom;

        $agent->prenom = $request->prenom;

        $agent->tel = $request->tel;

        $agent->speciality = $request->speciality;

        $agent->quartier = $request->quartier;



        $agent->save();


        return  redirect()->back()->with('message', 'Agent ajouter avec succès');
    }

    public function showagent()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
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

        $agent = Agents::find($id);

        $agent->delete();

        return redirect()->back();
    }


    public function update_agent($id)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {

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

        $agent->nom = $request->nom;
        $agent->prenom = $request->prenom;
        $agent->tel = $request->tel;
        $agent->speciality = $request->speciality;
        $agent->quartier = $request->quartier;


        $image = $request->image;

        if ($image) {


            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('imageagents', $imagename);

            $agent->image = $imagename;
        }

        $agent->save();


        return redirect()->back()->with('message', ' Modification effectué avec succès!');
    }
}
