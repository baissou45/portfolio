<header class="mdl-layout__header">
    <div class="mdl-layout__header-row mdl-scroll-spy-1">

        <a href="{{ route('dashboard') }}"><span class="mdl-layout-title">Taïrou Baissou</span></a>
        <div class="mdl-layout-spacer"></div>
        @guest
            <!-- Title -->
            <ul class="nav mdl-navigation mdl-layout--large-screen-only">
                <li><a class="mdl-navigation__link" href="{{ route('dashboard') }}">Accueuil</a></li>
            </ul>
        @else
            <ul class="nav mdl-navigation mdl-layout--large-screen-only">

                <li><a class="mdl-navigation__link" href="{{ route('dashboard') }}">Accueil</a></li>

                <li><span id="comp" class="mdl-navigation__link">Compétences</span>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="comp">
                        <li class="mdl-menu__item"><a href="{{ route('competence.index') }}">Liste</a></li>
                        <li class="mdl-menu__item"><a href="{{ route('competence.create') }}">ajouter</a></li>
                    </ul>
                </li>

                <li><span id="exp" class="mdl-navigation__link">Expérience</span>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="exp">
                        <li class="mdl-menu__item"><a href="{{ route('experience.index') }}">Liste</a></li>
                        <li class="mdl-menu__item"><a href="{{ route('experience.create') }}">ajouter</a></li>
                    </ul>
                </li>

                <li><span id="educ" class="mdl-navigation__link">Education</span>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="educ">
                        <li class="mdl-menu__item"><a href="{{ route('education.index') }}">Liste</a></li>
                        <li class="mdl-menu__item"><a href="{{ route('education.create') }}">ajouter</a></li>
                    </ul>
                </li>

                <li><span id="projet" class="mdl-navigation__link">Projet</span>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="projet">
                        <li class="mdl-menu__item"><a href="{{ route('projet.index') }}">Liste</a></li>
                        <li class="mdl-menu__item"><a href="{{ route('projet.create') }}">ajouter</a></li>
                    </ul>
                </li>

            {{--
                <li><span id="educ" class="mdl-navigation__link">Edication</span>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="educ">
                        <li class="mdl-menu__item"><a href="blog-list.html">Liste</a></li>
                        <li class="mdl-menu__item"><a href="image-blog-post.html">ajouter</a></li>
                    </ul>
                </li>

                <li><span id="proj" class="mdl-navigation__link">Projet</span>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="proj">
                        <li class="mdl-menu__item"><a href="blog-list.html">Liste</a></li>
                        <li class="mdl-menu__item"><a href="image-blog-post.html">ajouter</a></li>
                    </ul>
                </li> --}}

            </ul>
        @endguest


        <!-- Right aligned menu below button -->
        <button id="demo-menu-lower-right"
                class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
          <i class="material-icons">more_vert</i>
        </button>

        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
            data-mdl-for="demo-menu-lower-right">
            <li class="mdl-menu__item"><a href="{{ asset('cv.pdf') }}"><i class="zmdi zmdi-download font-red pr-10"></i>Download CV</a></li>
            <li class="mdl-menu__item"><a href="mailto:tbaissou@gmail.com"><i class="zmdi zmdi-email-open font-green pr-10"></i>Me Contacter</a></li>
            <li class="mdl-menu__item"><a href="callto:12345678910"><i class="zmdi zmdi-phone  font-blue  pr-10"></i>+229 65 92 40 88</a></li>
            @guest
                <li class="mdl-menu__item"><a href=" {{ route('login') }} "><i class="zmdi zmdi-account font-green  pr-10"></i>Login</a></li>
            @else
                <form action="{{ route('logout') }}" method="post" id="form">
                    @csrf

                    <li class="mdl-menu__item"><a onclick="$('#form').submit();"><i class="zmdi zmdi-account font-green  pr-10"></i>Logout</a></li>
                </form>
            @endguest
        </ul>
    </div>
</header>
