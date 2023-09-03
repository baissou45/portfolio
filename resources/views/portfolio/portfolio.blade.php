@extends('layouts.blanc')

@section('contenu')

    <!--About Sec-->
    @include('portfolio.composant.presentation')
    <!--/About Sec-->

    <!--Skills Sec-->
    <section id="skills_sec" class="skills-sec sec-pad-top-sm">
        <div class="row">

                @include('portfolio.composant.competencesTechnique')

                @include('portfolio.composant.competencesSociale')


                <div class="text-center">
                    <a href="{{ route('competences.more') }}" class="btn btn-primary">Voir plus</a>
                </div>

        </div>
    </section>
    <!--/Skills Sec-->

    <!--Profile Sec-->
        @include('portfolio.composant.capacite')
    <!--/Profile Sec-->

    <!--Portfolio Sec-->
        @include('portfolio.composant.projets')
    <!--/Portfolio Sec-->

    <!--Interest Sec-->
        @include('portfolio.composant.interet')
    <!--/Interest Sec-->

    <!--Experience Sec-->
        @include('portfolio.composant.experience')
    <!--/Experience Sec-->

    <!--Education Sec-->
        @include('portfolio.composant.educcation')
    <!--/Education Sec-->

@endsection
