@extends('layouts.default')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img2">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    A Propos
                    <span class="watermark">AFOJ</span>
                </h1>
                <span class="sub-text">Nous accompagnons des familles
                    congolaises à un meilleur
                    <br>
                    traitement des enfants en leur
                    sein depuis plus de 10 ans.</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Slider Section Start -->
    <div class="rs-slider case-slider-style3 pt-120 md-pt-80">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
                data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
                data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                <div class="slider-img">
                    <img src="assets/images/slider/style2/1.jpg" alt="Slider">
                </div>
                <div class="slider-img">
                    <img src="assets/images/slider/style2/2.jpg" alt="Slider">
                </div>
                <div class="slider-img">
                    <img src="assets/images/slider/style2/3.jpg" alt="Slider">
                </div>
                <div class="slider-img">
                    <img src="assets/images/slider/style2/4.jpg" alt="Slider">
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Project Details Section Start -->
    <div class="rs-project-details pt-70 md-pt-80">
        <div class="container">
            <div class="project-information mb-45">
                <div class="row">
                    <div class="col-lg-3 col-md-6 md-mb-30 md-pl-0">
                        <div class="project-content">
                            <div class="project-right-border"></div>
                            <h4 class="title">Thematiques</h4>
                            <div class="description">
                                {{-- <p>Consulting, Management</p> --}}
                                <p>-------- -------</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30 pl-50 md-pl-0">
                        <div class="project-content">
                            <div class="project-right-border border-two"></div>
                            <h4 class="title">Fondateur</h4>
                            <div class="description">
                                {{-- <p>John Dibag</p> --}}
                                <p>---- ------</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30 md-pl-0">
                        <div class="project-content">
                            <div class="project-right-border border-three"></div>
                            <h4 class="title">Date de creation</h4>
                            <div class="description">
                                <p>20 - 04 - 2012</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-pl-0">
                        <div class="project-content">
                            <h4 class="title">Location</h4>
                            <div class="description">
                                <p>Goma, Nord-Kivu, DRC</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-txt mb-30">
                <div class="desc">
                    Un rassemblement d’hommes et des femmes congolais qui croyons que pour
                    construire une Nation forte et solide, il faut commencer par construire des
                    familles fortes et solides. Des familles où les futurs dirigeants des Nations sont
                    protégés et formés pour créer des sociétés plus humaines, plus résilientes.
                    Nous croyons que la violence et la misère en RDC est principalement dû à la
                    crise des valeurs humaines et la misère dans les familles, en commençant par la
                    façon dont les futurs leaders sont y traités.
                    La violence, la paresse, la médiocrité, l’égoïsme, l’injustice, la corruption, les
                    divisions, les conflits mal gérés… dans la société congolaise ont principalement
                    leurs bases dans les familles.
                </div>
            </div>
            <div class="project-txt mb-50">
                <div class="desc">
                    Pour briser efficacement le cercle vicieux créé par cette situation, il est devenu
                    indispensable d’associer tous les membres des familles à ce voyage en y
                    influençant un meilleur traitement des enfants. Travailler sur les causes et les
                    effets pour prévenir et guérir.
                </div>
            </div>
            <!-- Counter Section Start -->
            <div class="rs-counter counter-style3 counter-modify1">
                <div class="counter-top bg15">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="rs-counter-list">
                                <div class="counter-text">
                                    <div class="counter-icon">
                                        <img src="assets/images/counter/icons/1.png" alt="">
                                    </div>
                                    <div class="counter-number">
                                        <span class="rs-count odometer" data-count="1500">00</span>
                                        <span class="prefix">+</span>
                                    </div>
                                    <span class="title">Satisfied clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="rs-counter-list">
                                <div class="counter-text">
                                    <div class="counter-icon">
                                        <img src="assets/images/counter/icons/2.png" alt="">
                                    </div>
                                    <div class="counter-number">
                                        <span class="rs-count odometer" data-count="2070">00</span>
                                        <span class="prefix">+</span>
                                    </div>
                                    <span class="title">Order Served</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 sm-mb-30">
                            <div class="rs-counter-list">
                                <div class="counter-text">
                                    <div class="counter-icon">
                                        <img src="assets/images/counter/icons/3.png" alt="">
                                    </div>
                                    <div class="counter-number">
                                        <span class="rs-count odometer" data-count="6080">00</span>
                                        <span class="prefix">+</span>
                                    </div>
                                    <span class="title">5 Star Received</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 ">
                            <div class="rs-counter-list">
                                <div class="counter-text">
                                    <div class="counter-icon">
                                        <img src="assets/images/counter/icons/4.png" alt="">
                                    </div>
                                    <div class="counter-number">
                                        <span class="rs-count odometer" data-count="300">00</span>
                                        <span class="prefix">+</span>
                                    </div>
                                    <span class="title">Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->
            <br>
            <div class="project-txt mb-30">
                <div class="desc">
                    Nous avons observé beaucoup de maltraitance d’enfant dans plusieurs familles que nous avons côtoyé. Voir
                    même beaucoup de personnes qui se sont engagé à créer AFOJ sont des personnes qui ont eux-mêmes vécu
                    certaines formes de ces maltraitances et ont réalisé leurs méfaits avec le temps, raison même de leur
                    engagement au sein d’AFOJ. Et au vu de toutes les formes de maltraitances observées (violences
                    physiques, violences psychologiques, violences sexuelles et les négligences graves), nous avons réalisés
                    que ce n’est pas étonnant de voir la crise des valeurs fondamentales (respect de la vie, respect de la
                    différence, respect des sensibilités, l’amour du travail bien fait, la loyauté, l’intégrité, le goût de
                    l’excellence, le sens du service, du sacrifice …) qui sont soubassements même d’une Nation Forte, en
                    République Démocratique du Congo.
                </div>
            </div>
            <div class="project-txt mb-50">
                <div class="desc">
                    Et si nous voulons apporter un réel changement positif, nous avons
                    compris qu’il est plus qu’urgent, de donner une attention particulière à ce que vivent les enfants au
                    sein de leurs familles en y influençant un climat de paix en faveur de leur épanouissement harmonieux.
                    Plusieurs efforts ont déjà été fourni par des structures qui œuvrent dans la protection de l’enfance,
                    cependant très peu d’entre elles mettent un accent sur les réflexions et échanges permanents avec les
                    parents d’une part, et avec les jeunes sur l’amélioration du traitement de l’enfant au sein des familles
                    avec des changements concrets d’attitudes. Du fait que le besoin se fait de plus en plus sentir, un
                    groupe d’amis a décidé de créer AFOJ en 2012, pour donner sa contribution.
                </div>
            </div>

            <div class="rs-appointment">
                <div class="container">
                    <div class="border-divider">
                        <div class="boder-shape"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="content-part">
                                <h3 class="title">Vision</h3>
                                <p class="desc">Des familles résilientes
                                    produisant des citoyens de
                                    qualité pour une Nation forte</p>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="content-part">
                                <h3 class="title">Mission</h3>
                                <p class="desc">Accompagner les familles
                                    congolaises à un meilleur
                                    traitement des enfants en leur
                                    sein</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="content-part">
                                <h3 class="title">Valeurs</h3>
                                <p class="desc">Bien-être et excellence,
                                    Bienveillance, Respect, rigeur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rs-project-goals pt-100 md-pt-80">
                <div class="row y-middle">
                    <div class="rs-services-single">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 md-mb-50">
                                    <div class="services-title pb-24">
                                        <h2 class="title">Notre Approche</h2>
                                    </div>
                                    <p class="desc-part pb-26">
                                        LES 10 POINTS CLES DE LA PARENTALITE BIENVEILLANTE & RIGOUREUSE
                                    </p>
                                    <ul class="check-lists check-modify1">
                                        <li>Faire le point sur sa propre histoire : ai-je des blessures d’enfant à guérir,
                                            quel modèle d'éducation parentale ai-je reçu, quel type de parentalité ai-je
                                            envie de pratiquer avec mes enfants ? </li>
                                        <li>Prendre conscience de l’impact (positif ou négatif) que peuvent avoir sur nos
                                            enfants nos mots et nos attitudes ainsi que les « étiquettes » que nous leurs
                                            collons.</li>
                                        <li>Apprendre à mieux communiquer & à écouter.</li>
                                        <li>Connaitre et s’employer à respecter les besoins fondamentaux de l’enfant,
                                            conscient du fait que chaque comportement de l’enfant a une cause, une origine,
                                            qui n’est autre que l’expression d’un besoin.</li>
                                        <li>S'intéresser aux étapes du développement de l’enfant, afin d’adapter nos
                                            attentes et exigences aux compétences de l’enfant (cf. du développement de
                                            l’enfant de 0 à 6 ans).</li>
                                        <li>Etablir une relation basée sur la confiance plutôt que sur les rapports de force
                                            (qui ne fonctionne que grâce à la crainte, mais engendre des adultes soumis ou
                                            rebelles). La véritable autorité est celle que comprennent et acceptent nos
                                            enfants... pas celle qu'on les force à respecter !</li>
                                        <li>Accueillir avec bienveillance tous les sentiments et émotions... y compris ceux
                                            qui nous dérangent : colère, peur, tristesse etc.</li>
                                        <li>Apprendre à poser efficacement les règles et consignes de vie</li>
                                        <li>Apprendre à trouver « ensemble » des solutions aux conflits parent-enfants, à
                                            gérer les disputes dans la fratrie et apprendre aux enfants à gérer leurs
                                            propres conflits</li>
                                        <li>Chercher à développer l’autonomie, la confiance et l’estime de soi des enfants
                                            (Grands Thèmes de l’enfance »)</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="outcome-project pt-100 md-pt-80 pb-120 md-pb-80">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-30">
                            <div class="rs-videos">
                                <div class="images-video">
                                    <img src="assets/images/project/details/video.png" alt="">
                                </div>
                                <div class="overly-border project-details">
                                    <a class="popup-videos" href="https://www.youtube.com/watch?v=LpdRAyIGg8I">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-40 md-pl-15 mt-55">
                            <div class="project-content mb-45 md-mb-0">
                                <div class="project-title">
                                    <h3 class="title pb-35">Nos réalisations en terme de Projets</h3>
                                </div>
                                <ul class="check-lists check-modify1">
                                    <li>Accompagnement d’environs 3000 parents sur la parentalité positive
                                        via l’organisation des 3 sessions de formations par an et la
                                        sensibilisations journalières sur la thématique; l’accompagnement
                                        individuel d’une moyenne de 200 parents par an ainsi que
                                        l’organisation d’une journée des familles par an.</li>
                                    <li>Des rencontres avec les parents, des journées en familles,…pour échanger des
                                        expériences et
                                        apprendre ensemble à vaincre la violence dans nos famille pour une meilleure
                                        croissance de l’enfant.</li>
                                    <li>Rencontres et des jeunes des parents à Mweso, à Rutshuru& à
                                        Goma</li>
                                    <li>Accompagnement des 30 parents à Mweso via la mise en place d’un AVEC en
                                        vue de subvenir aux besoins alimentaires des leurs enfants.</li>
                                    <li>Formations des hommes sur la masculinité positive à Mweso & des parents
                                        sur la guérison des blessures de l’ame à Goma</li>
                                </ul>
                                <div class="desc pt-20">Nous avons
                                    organisé des formations, des rencontres, des journées en familles, des ateliers et
                                    autre.
                                    plus de detail dans notre rapport annuel.
                                </div>
                                <br>
                                <a href="{{ asset('assets/files/afoj_10_ans_apres.pdf') }}" class="readon details">raport
                                    annuel 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-services-single pb-120 md-pt-80 md-pb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 md-mb-50">
                                <div class="services-title pb-24">
                                    <h2 class="title">Temoignages</h2>
                                </div>
                                <!-- Testimonial Section Start -->
                                <div class="rs-testimonial testimonial-style5">
                                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1"
                                        data-margin="30" data-autoplay="true" data-hoverpause="true"
                                        data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                                        data-nav="false" data-nav-speed="false" data-center-mode="false"
                                        data-mobile-device="1" data-mobile-device-nav="false"
                                        data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false"
                                        data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                                        data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false"
                                        data-md-device-dots="false">
                                        <div class="testi-item">
                                            <div class="testi-wrap">
                                                <div class="item-content-basic">
                                                    <span>
                                                        <img src="assets/images/testimonial/style1/quote.png"
                                                            alt="Images">
                                                    </span>
                                                    <p>Cette femme s’appelle SIFA. Elle est mère de 2 enfant et vit à Rutshuru. Elle nous a partagé qu’elle est parmi ces femmes qui facilement sortait facilement des paroles traumatisantes vis-à-vis des enfants. Elle déclare : « je ne savais pas que j’étais en train de détruire mes enfants moi-même et ça me fait mal de le réaliser aujourd’hui alors que cette situation dure quelques années. Mais je comprends aussi que j’ai encore une chance de me rattraper et donc à partir de maintenant, je m’engage à changer de langage vis-à-vis d’eux </p>
                                                </div>
                                                <div class="testi-content">
                                                    <div class="image-wrap">
                                                        <img src="assets/images/testimonial/style1/1.jpg" alt="Images">
                                                    </div>
                                                    <div class="testi-information">
                                                        <div class="testi-name">SIFA ---- </div>
                                                        <span class="designation">Temoignant</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="testi-wrap">
                                                <div class="item-content-basic">
                                                    <span>
                                                        <img src="assets/images/testimonial/style1/quote.png"
                                                            alt="Images">
                                                    </span>
                                                    <p>Je suis Brigitte, j’habite à Goma. je suis fille d’un militaire et je me suis aussi mariée à un militaire. J’ai grandi avec la chicotte. Une moindre bêtise valait 10 chicottes partout sur le corps, au minimum. Je voyais tout le temps mes parents se battre, s’insulter devant moi et mes frères. Et donc pour moi, battre un enfant quand il a fait une bêtise était une chose normale. Je n'avais jamais pensé que me battre avec mon mari devant mes enfants était une forme de maltraitance. Je viens de comprendre les conséquences de tout ceci et je comprends que je suis devenue violente à cause de ce que j’ai vécu avec mes parents…Je veux vraiment participer chaque fois à ces réflexions car j’ai besoin de changer et de voir mes enfants être épanouis et pacifiques.</p>
                                                </div>
                                                <div class="testi-content">
                                                    <div class="image-wrap">
                                                        <img src="assets/images/testimonial/style1/2.jpg" alt="Images">
                                                    </div>
                                                    <div class="testi-information">
                                                        <div class="testi-name">Brigitte ....</div>
                                                        <span class="designation">Temoignant</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="testi-wrap">
                                                <div class="item-content-basic">
                                                    <span>
                                                        <img src="assets/images/testimonial/style1/quote.png"
                                                            alt="Images">
                                                    </span>
                                                    <p>SAFINA est une jeune fille qui trouvait normal de frapper et de dire des paroles dures à ses petits frères de manière régulière. Elle déclare comprendre qu’elle est en train de maltraiter ses frères et a commencé à changer. Elle nous dit qu’après quelques mois d’exercice de changement d’attitudes, ses petits frères et elles sont devenus des meilleurs amis et écoutent ses conseils facilement.</p>
                                                </div>
                                                <div class="testi-content">
                                                    <div class="image-wrap">
                                                        <img src="assets/images/testimonial/style1/3.jpg" alt="Images">
                                                    </div>
                                                    <div class="testi-information">
                                                        <div class="testi-name">SAFINA ....</div>
                                                        <span class="designation">Temoignant</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testi-item">
                                            <div class="testi-wrap">
                                                <div class="item-content-basic">
                                                    <span>
                                                        <img src="assets/images/testimonial/style1/quote.png"
                                                            alt="Images">
                                                    </span>
                                                    <p>je prends conscience que l’ignorance nous tue et nous amène à tuer sans le savoir. Je suis très dure avec mes enfants à travers les paroles que je leur dis. Et je réalise que je brutalise ma femme en leur présence. Je n’avais pas conscience des effets destructeurs de ces attitudes. Depuis la dernière réunion, j’ai commencé à changer même si ces attitudes me rattrapent parfois. Mais je suis déterminé à arrêter d’être violent avec eux. Et je dis merci pour ce cadre de noyau d’AFOJ qui m’aide beaucoup dans ce processus</p>
                                                </div>
                                                <div class="testi-content">
                                                    <div class="image-wrap">
                                                        <img src="assets/images/testimonial/style1/4.jpg" alt="Images">
                                                    </div>
                                                    <div class="testi-information">
                                                        <div class="testi-name">Michel PALUKU</div>
                                                        <span class="designation">Temoignant</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Section End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action Choose Start -->
        <div class="rs-cta bg16 pt-80 pb-75">
            <div class="container">
                <div class="call-action">
                    <div class="sec-title">
                        <span class="sub-text big-text">Careers</span>
                        <h2 class="title title2 pb-28">
                            Want to Be Part of<br>
                            Our <span>Team?</span>
                        </h2>
                        <div class="btn-part">
                            <a class="readon details join" href="about.html">Join Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action Choose End -->
    </div>
    <!-- Project Details Section End -->
@endsection
