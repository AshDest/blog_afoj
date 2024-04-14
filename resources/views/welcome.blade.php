@extends('layouts.default')
@section('content')
    <!-- Banner Start -->
    @include('pages.sections._banner')
    <!-- Banner End -->

    <!-- About Start -->
    @include('pages.sections._about')
    <!-- About End -->

    <!-- Services Section Start -->
    @include('pages.sections._services')
    <!-- Services Section End -->

    <!-- About Section Start -->
    @include('pages.sections._approch')
    <!-- About Section End -->

    <!-- Project Start -->
    <div class="rs-project case-studies-style">
        <div class="container">
            <div class="sec-title text-center mb-45 md-mb-25">
                <span class="sub-text big-text">Nos activités</span>
                <h2 class="title title2 title-color">
                    Les recentes activités<br>
                    réalisées par<span> AFOJ</span>
                </h2>
            </div>
        </div>
    </div>

    <!-- Project Start -->
    @include('pages.sections._project')
    <!-- Project End -->

    <!-- Partner Start -->
    @include('pages.sections._parteners')
    <!-- Partner End -->

    <!-- Call To Action Choose Start -->
    <div class="rs-cta">
        <div class="container">
            <div class="call-action bg1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                <div class="sec-title">
                    <span class="sub-text big-text">Membre</span>
                    <h2 class="title title2 pb-28">
                        Devenir l'un<br>
                        de <span>Membre?</span>
                    </h2>
                    <div class="btn-part">
                        <a class="readon slide-started join" href="#"><span>Join Our Team</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Choose End -->

    <!-- Testimonial Section Start -->
    @include('pages.sections._testimonials')
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    @include('pages.sections._blogs')
    <!-- Blog Section End -->

    <!-- Newsletter section start -->
    @include('pages.sections._newsletter')
    <!-- Newsletter section End -->
@endsection
