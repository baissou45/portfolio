<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Image;

class ProjetController extends Controller
{

    public function index()    {
        return view('lib.projet.list', ['projets' => Projet::all()]);
    }

    public function create(){
        return view('lib.projet.add');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'nom' => 'required',
            'technologies' => 'required',
            'description' => 'required',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            if($request->hasfile('cover')){
                $request->cover->move(public_path('projets/' . $request->nom . '/cover/'), $request->cover->getClientOriginalName());
            }

            $projet = Projet::create($request->all());

            $projet->update([
                'cover' => 'projets/' . $request->nom . '/cover/' . $request->cover->getClientOriginalName()
            ]);

            if($request->hasfile('images')){

                foreach($request->file('images') as $key => $file){

                    $file->move(public_path('projets/' . $request->nom), $file->getClientOriginalName());

                    Image::create([
                        'path' => 'projets/' . $request->nom . '/' . $file->getClientOriginalName(),
                        'projet_id' => $projet->id
                    ]);

                }
            }

            return redirect()->back()->with('success' , 'Projet ajouter avec succès');
        }

    }

    public function show(Projet $projet){
        return view('lib.projet.show', compact('projet'));
    }


    public function edit(Projet $projet){
        return view('lib.projet.edit', compact('projet'));
    }


    public function update(Request $request, Projet $projet){

        $validator = Validator::make($request->all(),[
            'nom' => 'required',
            'technologies' => 'required',
            'description' => 'required',
            'images.*' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $projet->update($request->all());

            if($request->hasfile('cover')){
                $path = $request->file('cover')->store('public/images/' . $request->nom . '/cover');
                $projet->update([ 'cover' => "storage/" . substr($path, 7) ]);
            }

            if($request->hasfile('images')){

                foreach($request->file('images') as $key => $file){

                    $path = $file->store('public/images/' . $request->nom);

                    Image::create([
                        'path' => "storage/" . substr($path, 7),
                        'projet_id' => $projet->id
                    ]);
                }
            }

            return redirect()->back()->with('success' , 'Projet mise à jours avec succès');
        }

    }

    public function imageDel(Image $image){
        $image->delete();
        return redirect()->back()->with('success', 'Image supprimer avec success');
    }

    public function destroy($id)
    {
        //
    }
}
