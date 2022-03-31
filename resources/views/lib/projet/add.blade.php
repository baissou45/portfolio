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

                    <h2 class="text-center mb-30">Ajouter un nouveau projet</h2>

                    <a href="{{ route('projet.index') }}" class="btn btn-primary pull-right mb-30"> <i class="zmdi zmdi-devices mr-5"></i> Liste des projets</a> <br>


                    <form method="post" action="{{ route('projet.store') }}" enctype="multipart/form-data" class="mt-30">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="nom" class="col-sm-1-12 col-form-label">Nom</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('nom', $projet->nom ?? '') }}" name="nom" id="nom">
                                    </div>
                                    @if ($errors->has('nom'))
                                        <div class="text-danger">
                                            {{ $errors->first('nom') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="platforme" class="col-sm-1-12 col-form-label">Platforme</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('platforme', $projet->platforme ?? '') }}" name="platforme" id="platforme" placeholder="01/2000 - 09/2003">
                                    </div>
                                    @if ($errors->has('platforme'))
                                        <div class="text-danger">
                                            {{ $errors->first('platforme') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="client" class="col-sm-1-12 col-form-label">Client</label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" value="{{ old('client', $projet->client ?? '') }}" name="client" id="client" placeholder="01/2000 - 09/2003">
                                    </div>
                                    @if ($errors->has('client'))
                                        <div class="text-danger">
                                            {{ $errors->first('client') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="date" class="col-sm-1-12 col-form-label">Date</label>
                                    <div class="col-sm-1-12">
                                        <input type="date" class="form-control" value="{{ old('date', $projet->date ?? '') }}" name="date" id="date" placeholder="01/2000 - 09/2003">
                                    </div>
                                    @if ($errors->has('date'))
                                        <div class="text-danger">
                                            {{ $errors->first('date') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label for="couleur">Type</label>
                                  <select class="form-control" name="type" id="">
                                    <option value="web"> Web </option>
                                    <option value="mobile"> Mobile </option>
                                  </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="custom-file">
                                        <span class="custom-file-control">Couverture</span>
                                        <input type="file" name="cover">
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="custom-file">
                                        <span class="custom-file-control">Ajouter des images</span>
                                        <input type="file" name="images[]" multiple>
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-12 ">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor" name="description" id="description" rows="3"> {{ old('description', $projet->description ?? '') }} </textarea>
                                @if ($errors->has('description'))
                                    <div class="text-danger">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="text-center mt-20">
                            <button type="submit" class="btn btn-primary">Ajouter le projet</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </section>

    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
