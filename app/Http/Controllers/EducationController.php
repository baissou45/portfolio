<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller{

    public function index(){
        $educations = Education::orderByDesc('id')->get();
        return view('lib.education.list', compact('educations'));
    }

    public function create(){
        return view('lib.education.add');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'ecole' => 'required',
            'annee' => 'required',
            'formation' => 'required',
            'couleur' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Education::create($request->all());
            return redirect()->route('competence.create')->with('success', 'Expérience éducative créer avec success');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit(Education $education){
        return view('lib.education.add', compact('education'));
    }

    public function update(Request $request, Education $education){

        $validator = Validator::make($request->all(),[
            'ecole' => 'required',
            'annee' => 'required',
            'formation' => 'required',
            'couleur' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $education->update($request->all());
            return redirect()->route('education.index');
        }

    }

    public function destroy($id)
    {
        //
    }
}
