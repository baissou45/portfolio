<div class="col-sm-6 col-md-6 col-lg-6 mb-30">
    <h2 class="mb-30">Compétences sociale</h2>
        <div class="mdl-card mdl-shadow--2dp">

            @php
                $a = 0;
            @endphp

            @for ($i = 0; $i < count($competences); $i++)

                @if ( $competences[$i]->type == 'sociale' )
                    <div class="mb-30">
                        <span class="progress-cat"> {{ $competences[$i]->nom }} </span>
                        <div class="progress-bar-graph">
                            <div class="progress-bar-wrap">
                                <div class="bar-wrap {{ $competences[$i]->couleur }}-bar">
                                    <span data-width="{{ $competences[$i]->niveau }}"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                        $a++;
                        if ($a >= 3) {
                            break;
                        }
                    @endphp

                @endif

            @endfor

    </div>
</div>
