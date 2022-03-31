<section class="about-sec mt-180 mt-sm-120  mb-30">
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="row">
                    <div class="col-md-5 col-xs-12 mb-30">
                        <div class="candidate-img mb-35"></div>
                        <ul class="social-icons">
                            <li>
                                <a class="facebook-link" href="https://m.facebook.com/baissou45?ref=bookmarks">
                                    <i id="tt1" class="zmdi zmdi-facebook"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt1">
                                        facebook
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="twitter-link" href="#">
                                    <i id="tt2" class="zmdi zmdi-twitter"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt2">
                                        twitter
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin-link" href="https://www.linkedin.com/in/ba%C3%AFssou-ta%C3%AFrou-877485186/">
                                    <i id="tt3" class="zmdi zmdi-linkedin"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt3">
                                        linkedin
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="whatsapp-link" href="https://s4w.in/46IQg">
                                    <i id="tt4" class="zmdi zmdi-whatsapp"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt9">
                                        whatsapp
                                    </div>
                                </a>
                            </li>
                            {{-- <li>
                                <a class="instagram-link" href="#">
                                    <i id="tt5" class="zmdi zmdi-instagram"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt5">
                                        instagram
                                    </div>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="info-wrap">
                            <h1>TAIROU Baïssou</h1>
                            <h5 class="mt-20 font-grey">
                                Developpeur web full stack <br>
                                Developpeur mobile
                            </h5>
                            <div class="mt-30">
                                <a id="download_cv" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white mr-10" href="{{ asset('cv.pdf') }}">Voir mon cv</a>
                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-blue font-white" href="mailto:tbaissou@gmail.com" target="#blanc">Me contacter</a>
                            </div>
                        </div>
                        <ul class="profile-wrap mt-50">
                            <li>
                                <div class="profile-title">age</div>
                                <div class="profile-desc"> {{ now()->year - 1998 }} ans </div>
                            </li>
                            <li>
                                <div class="profile-title">address</div>
                                <div class="profile-desc">
                                    Cotonou - Bénin | Cadjèhoun
                                </div>
                            </li>
                            <li>
                                <div class="profile-title">e-Mail</div>
                                <div class="profile-desc">
                                    <a href="mailto:tbaissou@gmail.com">tbaissou@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="profile-title">contact</div>
                                <div class="profile-desc">
                                    <a href="tel:+229 65 92 40 99">+229 65 92 40 99</a>
                                </div>
                            </li>
                            <li>
                                <div class="profile-title">freelance</div>
                                <div class="profile-desc relative">Disponible
                                    <i id="datepickopn" class="zmdi zmdi-calendar-check font-green pl-5"></i>
                                    <div id='datepicker1' class='datepicker'></div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
