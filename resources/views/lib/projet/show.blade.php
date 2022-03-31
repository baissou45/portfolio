@extends('layouts.blanc')

@section('contenu')

    <!--Project Gallery Sec-->
    <section  class="project-sec mt-180 mt-sm-120">
        <div class="row">
            <div class="col-sm-12 mb-30">
                <div class="mdl-card mdl-shadow--2dp pa-0">

                    {{-- <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @for ($i = 0; $i < count($projet->images); $i++)
                                <li data-target="#carousel" data-slide-to="{{$i}}" class="{{ $i == 0 ? 'active' : "" }}"></li>
                            @endfor
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            @for ($i = 0; $i < count($projet->images); $i++)
                                <div class="{{ $i == 0 ? 'carousel-item active' : "carousel-item" }}">
                                    <img data-src="{{ asset($projet->images[$i]->path) }}" alt="First slide">
                                </div>
                            @endfor
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> --}}

                    <div class="mdl-card__title pa-0">
                        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @for ($i = 0; $i < count($projet->images); $i++)
                                    <li data-target="#carousel" data-slide-to="{{$i}}" class="{{ $i == 0 ? 'active' : "" }}"></li>
                                @endfor
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                @for ($i = 0; $i < count($projet->images); $i++)
                                    <div class="{{ $i == 0 ? 'active item' : "item" }}">
                                        <img src="{{ asset($projet->images[$i]->path) }}" class="{{ $projet->type == 'mobile' ? "h-10 w-10" : "w-100" }} d-block text-center" height="{{ $projet->type == 'mobile' ? "50 px" : "" }}" alt="{{ $projet->nom }}">
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <div class="mdl-card__supporting-text relative pt-50 pb-10">
                        <div class="row">
                            <div class="col-md-8 mb-30">
                                <h4 class="mb-5">Description</h4>
                                <p>{!! $projet->description !!}.</p>
                            </div>
                            <div class="col-md-4 mb-30">
                                <h4 class="mb-5">client</h4>
                                <p> {{ $projet->client }} </p>
                            </div>

                            <div class="col-md-4 mb-30">
                                <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white">
                                    {{ $projet->type }}
                                </a>
                                <ul class="brif-links-wrap mt-25">
                                    <li class="mb-10 font-capitalize">
                                        <i class="zmdi zmdi-calendar-note pr-10"></i><span>21.1.17</span>
                                    </li>
                                    <li class="mb-10 font-capitalize">
                                        <i class="zmdi zmdi-accounts-alt pr-10"></i>
                                        <span>themeforest</span>
                                    </li>
                                    <li class="font-capitalize">
                                        <i class="zmdi zmdi-label-alt-outline pr-10"></i>
                                        <span>design</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/Project Gallery Sec-->

    <!--Navigation Sec-->
    <div class="navigation-block priview-text mb-30">
        <div class="mdl-card mdl-shadow--2dp bg-blue pa-30">
            <a href="#" class="inline-block pull-left prev">
                <i class="zmdi zmdi-arrow-left font-white"></i>
                <span class="font-white inline-block pl-30">Projet suivant</span>
            </a>
            <a href="#" class="inline-block pull-right next">
                <span class="font-white inline-block pr-30">Projet précedant</span>
                <i class="zmdi zmdi-arrow-right font-white"></i>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--/Navigation Sec-->

@endsection
