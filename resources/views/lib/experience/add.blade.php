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

                    <h2 class="text-center mb-30">Nouvelle expérience pro</h2>

                    <a href="{{ route('experience.index') }}" class="btn btn-primary pull-right mb-30"> <i class="zmdi zmdi-format-list-bulleted mr-5"></i> Liste des expériences</a> <br>

                    @if (isset($experience))
                        <form method="post" action="{{ route('experience.update', $experience->id) }}" class="mt-30">
                            @method('put')
                    @else
                        <form method="post" action="{{ route('experience.store') }}" class="mt-30">
                    @endif
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 col-md-4 ">
                                <div class="form-group">
                                    <label for="poste" class="col-sm-1-12 col-form-label">Poste</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('poste', $experience->poste ?? '') }}" name="poste" id="poste">
                                    </div>
                                    @if ($errors->has('poste'))
                                        <div class="text-danger">
                                            {{ $errors->first('poste') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 ">
                                <div class="form-group">
                                    <label for="annee" class="col-sm-1-12 col-form-label">Année</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('annee', $experience->annee ?? '') }}" name="annee" id="annee" placeholder="01/2000 - 09/2003">
                                    </div>
                                    @if ($errors->has('annee'))
                                        <div class="text-danger">
                                            {{ $errors->first('annee') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 ">
                                <div class="form-group">
                                    <label for="structure" class="col-sm-1-12 col-form-label">Entreprise</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('structure', $experience->structure ?? '') }}" name="structure" id="structure">
                                    </div>
                                    @if ($errors->has('structure'))
                                        <div class="text-danger">
                                            {{ $errors->first('structure') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-md-4 ">
                                <div class="form-group">
                                <label for="couleur">Icon</label>
                                <select class="form-control" name="icon" id="">
                                    <option value="case" {{ isset($experience) ? $experience->icon == 'case' ? 'selected' : '' : '' }}>  Perso  </option>
                                    <option value="city-alt" {{ isset($experience) ? $experience->icon == 'city-alt' ? 'selected' : '' : '' }}>  Entreprise  </option>
                                    <option value="format-color-text" {{ isset($experience) ? $experience->icon == 'format-color-text' ? 'selected' : '' : '' }}>  Divers  </option>
                                </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 ">
                            <div class="form-group">
                                <label for="couleur">Couleur</label>
                                <select class="form-control" name="couleur" id="">
                                    <option value="green" {{ isset($experience) ? $experience->couleur == 'green' ? 'selected' : '' : '' }}>Vert</option>
                                    <option value="red" {{ isset($experience) ? $experience->couleur == 'red' ? 'selected' : '' : '' }}>Rouge</option>
                                    <option value="blue" {{ isset($experience) ? $experience->couleur == 'blue' ? 'selected' : '' : '' }}>Bleu</option>
                                    <option value="yellow" {{ isset($experience) ? $experience->couleur == 'yellow' ? 'selected' : '' : '' }}>Jaune</option>
                                </select>
                            </div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-12 ">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"> {{ $experience->description ?? '' }} </textarea>
                                @if ($errors->has('description'))
                                    <div class="text-danger">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="text-center mt-20">
                            @if (isset($experience))
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
