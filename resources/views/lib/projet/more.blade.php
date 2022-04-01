@extends('layouts.moreBlanc')

@section('contenu')


<section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm mt-100">
    <div class="mb-15">
        <h2 class="pull-left float-none-xs">portfolio</h2>
        <div class="filter-wrap pull-right float-none-xs">
            <!-- Portfolio Filters -->
            <ul id="filters">
                <li><a id="all" href="#" data-filter="*" class="active">Tous</a></li>
                <li><a href="#" data-filter=".web">web</a></li>
                <li><a href="#" data-filter=".mobile">mobile</a></li>
            </ul>
            <!--/Portfolio Filters -->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="gallery-wrap mb-30">
        <div class="portfolio-wrap project-gallery">
            <ul id="portfolio" class="portf auto-construct  project-gallery" data-col="3">

                @forelse ($projets as $projet)

                {{-- @if ($projet->type == 'web') --}}
                    <li  class="item mdl-card mdl-shadow--2dp pa-0 {{ $projet->type }}">
                        <div class="pt-10 pb-10 card-header text-center">
                            <span class="text-primary"> {{ $projet->nom }} </span>
                        </div>
                        <div class="light-img-wrap mdl-card__title pa-0">
                            <a href="{{ route('projet.show', $projet->id) }}">
                                <img class="img-responsive" src="{{ asset( $projet->cover ) }}"  alt="Image description" />
                                <div class="light-img-overlay"></div>
                            </a>
                        </div>
                        <span class="bottom-links mdl-card__actions">
                            <a href="{{ route('projet.show', $projet->id) }}"><i class="zmdi zmdi-eye"></i></a>
                        </span>
                    </li>
                {{-- @endif --}}

                @empty

                <div class="tect-center">
                Aucune application trouvée
                </div>

                @endforelse



            </ul>

        </div>
    </div>

</section>

@endsection
