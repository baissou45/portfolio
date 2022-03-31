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

    <!--References Sec-->
    {{-- <section id="references_sec" class="reference-sec sec-pad-top-sm">
        <h2 class="mb-30">testimonial</h2>
        <div class="row">
            <div class="col-sm-12 mb-30">
                <div class="mdl-card mdl-shadow--2dp border-top-yellow pa-35">
                    <div class="testimonial-carousel">
                        <div>
                            <blockquote>"Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto."</blockquote>
                            <span class="ref-name block mb-5 mt-20">john doe</span>
                            <span class="ref-desgn block">Lead Designer in Droffox</span>
                        </div>
                        <div>
                            <blockquote>"Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto."</blockquote>
                            <span class="ref-name block mb-5 mt-20">Shone doe</span>
                            <span class="ref-desgn block">Lead Designer in Fakebook</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </section> --}}
    <!--/References Sec-->

    <!--Client Sec-->
    {{-- <section id="client_sec" class="client-sec sec-pad-top-sm">
        <div class="row">
            <div class="col-sm-12 mb-30">
                <div class="client-carousel">
                    <img src="{{ asset('html/img/client1.png') }}" alt="client">
                    <img src="{{ asset('html/img/client2.png') }}" alt="client">
                    <img src="{{ asset('html/img/client3.png') }}" alt="client">
                    <img src="{{ asset('html/img/client4.png') }}" alt="client">
                    <img src="{{ asset('html/img/client5.png') }}" alt="client">
                    <img src="{{ asset('html/img/client6.png') }}" alt="client">
                </div>
            </div>
        </div>
    </section> --}}
    <!--/Client Sec-->

@endsection
