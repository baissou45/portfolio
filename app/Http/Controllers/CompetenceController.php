<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompetenceController extends Controller
{
    public function index(){
        $competences = Competence::all();
        return view('lib.competence.list', compact('competences'));
    }

    public function create(){
        return view('lib.competence.add');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'nom' => 'required',
            'niveau' => 'required',
            'couleur' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Competence::create($request->all());
            return redirect()->route('competence.index');
        }

    }


    public function show($id){
        //
    }

    public function edit(Competence $competence){
        return view('lib.competence.add', compact('competence'));
    }

    public function update(Request $request, Competence $competence){

        $validator = Validator::make($request->all(),[
            'nom' => 'required',
            'niveau' => 'required',
            'couleur' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $competence->update($request->all());
            return redirect()->back()->with('success', 'Compétence mise à jour avec success');
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
