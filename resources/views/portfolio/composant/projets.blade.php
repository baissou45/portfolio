<section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm">
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

                {{-- @php
                    $a = 0;
                    $b = 0;
                @endphp --}}


                @for ($i = 0; $i < count($projets); $i++)
                    {{-- @if ($projets[$i]->type == 'web') --}}
                        <li  class="item mdl-card mdl-shadow--2dp pa-0 {{ $projets[$i]->type }}">
                            <div class="pt-10 pb-10 card-header text-center">
                                <span class="text-primary"> {{ $projets[$i]->nom }} </span>
                            </div>
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <a href="{{ route('projet.show', $projets[$i]->id) }}">
                                    <img class="img-responsive" src="{{ asset( $projets[$i]->cover ) }}"  alt="Image description" />
                                    <div class="light-img-overlay"></div>
                                </a>
                            </div>
                            <span class="bottom-links mdl-card__actions">
                                <a href="{{ route('projet.show', $projets[$i]->id) }}"><i class="zmdi zmdi-eye"></i></a>
                            </span>
                        </li>
                    {{-- @php
                        $a++;
                        if ( $a > 2 ) {
                            break;
                        }
                    @endphp
                    @endif --}}
                @endfor


                {{-- @for ($j = 0; $j < count($projets); $j++)
                    @if ($projets[$j]->type == 'mobile')
                        <li  class="item mdl-card mdl-shadow--2dp pa-0 {{ $projets[$j]->type }}">
                            <div class="pt-10 pb-10 card-header text-center">
                                <span class="text-primary"> {{ $projets[$j]->nom }} </span>
                            </div>
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <a href="{{ route('projet.show', $projets[$j]->id) }}">
                                    <img class="img-responsive" src="{{ asset( $projets[$j]->cover ) }}"  alt="Image description" />
                                    <div class="light-img-overlay"></div>
                                </a>
                            </div>
                            <span class="bottom-links mdl-card__actions">
                                <a href="{{ route('projet.show', $projets[$j]->id) }}"><i class="zmdi zmdi-eye"></i></a>
                            </span>
                        </li>
                    @php
                        $b++;
                        if ( $b > 2 ) {
                            break;
                        }
                    @endphp
                    @endif
                @endfor --}}

            </ul>

        </div>
    </div>
</section>
