<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperiencesController extends Controller
{
    public function index(){
        $experiences = Experience::get();
        return view('lib.experience.list', compact("experiences"));
    }

    public function create(){
        return view('lib.experience.add');
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'poste' => 'required',
            'annee' => 'required',
            'structure' => 'required',
            'icon' => 'required',
            'couleur' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Experience::create($request->all());
            return redirect()->route('experience.index');
        }

    }

    public function show(Experience $experience){
        //
    }

    public function edit(Experience $experience){
        return view('lib.experience.add', compact('experience'));
    }

    public function update(Request $request, Experience $experience){

        $validator = Validator::make($request->all(),[
            'poste' => 'required',
            'annee' => 'required',
            'structure' => 'required',
            'icon' => 'required',
            'couleur' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $experience->update($request->all());
            return redirect()->back()->with('success', 'Expérience mise à jour avec success');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
