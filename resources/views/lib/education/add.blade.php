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

                    <h2 class="text-center mb-30">Nouvelle expérience éducative</h2>

                    <a href="{{ route('education.index') }}" class="btn btn-primary pull-right mb-30"> <i class="zmdi zmdi-format-list-bulleted mr-5"></i> Liste des éducarions</a> <br>


                    @if (isset($education))
                        <form method="post" action="{{ route('education.update', $education->id) }}" class="mt-30">
                            @method('put')
                    @else
                        <form method="post" action="{{ route('education.store') }}" class="mt-30">
                    @endif
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="poste" class="col-sm-1-12 col-form-label">Ecole</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('ecole', $education->ecole ?? '') }}" name="ecole" id="ecole">
                                    </div>
                                    @if ($errors->has('ecole'))
                                        <div class="text-danger">
                                            {{ $errors->first('ecole') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="annee" class="col-sm-1-12 col-form-label">Année</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('annee', $education->annee ?? '') }}" name="annee" id="annee" placeholder="01/2000 - 09/2003">
                                    </div>
                                    @if ($errors->has('annee'))
                                        <div class="text-danger">
                                            {{ $errors->first('annee') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="couleur">Couleur</label>
                                    <select class="form-control" name="couleur" id="">
                                        <option value="green" {{ isset($education) ? $education->couleur == 'green' ? 'selected' : '' : '' }}>Vert</option>
                                        <option value="red" {{ isset($education) ? $education->couleur == 'red' ? 'selected' : '' : '' }}>Rouge</option>
                                        <option value="blue" {{ isset($education) ? $education->couleur == 'blue' ? 'selected' : '' : '' }}>Bleu</option>
                                        <option value="yellow" {{ isset($education) ? $education->couleur == 'yellow' ? 'selected' : '' : '' }}>Jaune</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="formation" class="col-sm-1-12 col-form-label">Domaine de formation</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('formation', $education->formation ?? '') }}" name="formation" id="formation">
                                    </div>
                                    @if ($errors->has('formation'))
                                        <div class="text-danger">
                                            {{ $errors->first('formation') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="text-center mt-20">
                            @if (isset($education))
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
