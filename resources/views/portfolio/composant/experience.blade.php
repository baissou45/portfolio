<section id="experience_sec" class="experience-sec sec-pad-top-sm">
    <h2 class="mb-30">experience</h2>
    <div class="timeline-wrap  overflow-hide mb-30">
        <ul class="timeline">

            @php
                $a = false;
            @endphp

            @foreach ($experiences as $experience)

                <li class="{{ $a ? "timeline-inverted" : "" }}">
                    <div class="timeline-badge">
                        <i class="zmdi zmdi-{{ $experience->icon }}  font-{{ $experience->couleur }} "></i>
                    </div>
                    <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-blue">
                        <div class="timeline-heading">
                            <h4 class="mb-10"> {{ $experience->poste }} </h4>
                            <span class="duration mb-5"> {{ $experience->annee }} </span>
                            <span class="institution"> {{ $experience->structure }} </span>
                        </div>
                        <div class="timeline-body">
                            <p class="mt-25"> {{ $experience->description }} </p>
                        </div>
                    </div>
                </li>

                @php
                    $a = !$a;
                @endphp

            @endforeach

            <li class="clearfix no-float"></li>
        </ul>
    </div>
</section>
