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

                    @if (session()->has('errors'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <h2 class="text-center mb-30">
                        Modifier projet le projet
                        <strong> {{ $projet->nom }} </strong>
                    </h2>

                    <a href="{{ route('projet.index') }}" class="btn btn-primary pull-right"> <i class="zmdi zmdi-devices mr-5"></i> Liste des projets</a> <br>

                    <form method="post" action="{{ route('projet.update', $projet->id) }}" enctype="multipart/form-data" class="mt-30">
                        @method('put')
                        @csrf

                        @include('lib.projet.partials.form')

                        <div class="text-center mt-20">
                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
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
