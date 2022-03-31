@extends('layouts.blanc')

@section('contenu')

    <section id="skills_sec" class="skills-sec sec-pad-top-sm mt-100">
        <div class="row">

                @include('portfolio.composant.competencesTechnique')

                @include('portfolio.composant.competencesSociale')

        </div>
    </section>

@endsection
