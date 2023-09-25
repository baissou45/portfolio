@extends('layouts.moreBlanc')

@section('contenu')


<section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm mt-100">
    <div class="mb-15">
        <h2 class="pull-left float-none-xs"> Liste des projets </h2>
    </div>

    <div class="gallery-wrap mb-30">
        <div class="portfolio-wrap project-gallery">

            @foreach ($projets as $key => $prjs)

            <h2 style="margin: 5% 0 5% 0"> {{ $key }} </h2>

            <ul class="portf project-gallery row" data-col="3">
                @forelse ($prjs as $projet)
                    <li class="item mdl-card mdl-shadow--2dp pa-0 {{ $projet->type }}">
                        <div class="pt-10 pb-10 card-header text-center">
                            <span class="text-primary"> {{ $projet->nom }} </span>
                        </div>
                        <div class="light-img-wrap mdl-card__title pa-0">
                            <a href="{{ route('projet.show', $projet->id) }}">
                                <img class="img-responsive" src="{{ asset( $projet->cover ) }}"  alt="Image description" style=" {{ $projet->type != "mobile" ? "height: 150px" : "" }}" />
                                <div class="light-img-overlay"></div>
                            </a>
                        </div>
                        <span class="bottom-links mdl-card__actions">
                            <a href="{{ route('projet.show', $projet->id) }}"><i class="zmdi zmdi-eye"></i></a>
                        </span>
                    </li>
                @empty
                    <div class="tect-center">
                        Aucune application trouvée
                    </div>
                @endforelse
            </ul>

            @endforeach

        </div>
    </div>

</section>

@endsection
