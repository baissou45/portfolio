@extends('layouts.blanc')

@section('contenu')

    <section class="about-sec mt-180 mt-sm-120  mb-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="mdl-card mdl-shadow--2dp">

                    @if (session()->has('success'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <h2 class="text-center mb-30">Nouvelle compétence</h2>

                    <a href="{{ route('competence.index') }}" class="btn btn-primary pull-right"> <i class="zmdi zmdi-format-list-bulleted mr-5"></i> Liste des compétences</a> <br>

                    @if (isset($competence))
                        <form method="post" action="{{ route('competence.update', $competence->id) }}" class="mt-30">
                            @method('put')
                    @else
                        <form method="post" action="{{ route('competence.store') }}" class="mt-30">
                    @endif
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-6 ">
                                <div class="form-group">
                                    <label for="nom" class="col-sm-1-12 col-form-label">Nom</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('nom', $competence->nom ?? '') }}" name="nom" id="nom">
                                    </div>
                                    @if ($errors->has('nom'))
                                        <div class="text-danger">
                                            {{ $errors->first('nom') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 ">
                                <div class="form-group">
                                    <label for="couleur">Couleur</label>
                                    <select class="form-control" name="couleur" id="">
                                    <option value="green" {{ isset($competence) ? $competence->couleur == 'green' ? 'selected' : '' : '' }}>Vert</option>
                                    <option value="red" {{ isset($competence) ? $competence->couleur == 'red' ? 'selected' : '' : '' }}>Rouge</option>
                                    <option value="blue" {{ isset($competence) ? $competence->couleur == 'blue' ? 'selected' : '' : '' }}>Bleu</option>
                                    <option value="yellow" {{ isset($competence) ? $competence->couleur == 'yellow' ? 'selected' : '' : '' }}>Jaune</option>
                                    </select>
                                </div>
                                </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-md-6 ">
                                <div class="form-group">
                                <label for="couleur">Type</label>
                                <select class="form-control" name="type" id="">
                                    <option value="tech" {{ isset($competence) ? $competence->type == 'tech' ? 'selected' : '' : '' }}>Technique</option>
                                    <option value="sociale" {{ isset($competence) ? $competence->type == 'sociale' ? 'selected' : '' : '' }}>Sociale</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 ">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-1-12 col-form-label">Niveau</label>
                                    <div class="col-sm-1-12">
                                        <input type="number" min="0" max="100" value="{{ old('niveau', $competence->niveau ?? '') }}" class="form-control" name="niveau" id="niveau">
                                    </div>
                                    @if ($errors->has('niveau'))
                                        <div class="text-danger">
                                            {{ $errors->first('niveau') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>


                        <div class="text-center mt-20">
                            @if (isset($competence))
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            @else
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            @endif
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </section>

@endsection
