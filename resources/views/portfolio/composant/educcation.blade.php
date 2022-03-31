<section id="education_sec" class="education-sec sec-pad-top-sm">
    <h2 class="mb-30">education</h2>
    <div class="timeline-wrap overflow-hide mb-30">

        <ul class="timeline">

            @php
                $a = false;
            @endphp

            @foreach ($educations as $education)

                <li class="{{ $a ? "timeline-inverted" : "" }}">
                    <div class="timeline-badge bg-{{ $education->couleur }} no-icon"></div>
                    <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-blue">
                        <div class="timeline-heading">
                            <h4 class="mb-10"> {{ $education->formation }} </h4>
                            <span class="duration mb-5">  {{ $education->annee }}  </span>
                            <span class="institution">  {{ $education->ecole }}  </span>
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
