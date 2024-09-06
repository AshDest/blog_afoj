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
    @if ($lastPost)
        <div id="rs-blog" class="rs-blog blog-style1 pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-50">
                    <span class="sub-text big-text">News & BLog</span>
                    <h2 class="title title title2 title-color">
                        Derniers Articles<br>
                        & Publications <span>Insights</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 md-mb-50">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="{{ $lastPost->image_top }}"><img src="{{ $lastPost->image_top }}"
                                        alt=""></a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li class="admin"><i class="fi  fi-rr-user"></i>{{ $lastPost->user_id }}</li>
                                    <li class="date"><i class="fi fi-rr-calendar"></i>{{ $lastPost->published_at }}</li>
                                </ul>
                                <h3 class="blog-title"><a href="{{ $lastPost->image_top }}">{{ $lastPost->title }}</a></h3>
                                <div class="desc">
                                    {{-- limit caracters --}}
                                    {!! Str::limit($lastPost->body, 115) !!}
                                </div>
                                <div class="blog-button"><a href="#">Lire plus</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-horizontal">
                            @foreach ($featuredPosts as $item)
                                <div class="blog-meta mb-30">
                                    <div class="blog-item-wrap">
                                        <div class="image-wrap">
                                            <a href="#"><img src="{{ $item->image_top }}" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li class="admin"><i class="fi  fi-rr-user"></i>{{ $item->user_id }}</li>
                                                <li class="date"><i
                                                        class="fi fi-rr-calendar"></i>{{ $item->published_at }}</li>
                                            </ul>
                                            <h3 class="blog-title"><a href="#">{{ Str::limit($item->title, 61) }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    @endif
    <!-- Blog Section End -->

    <!-- Newsletter section start -->
    @include('pages.sections._newsletter')
    <!-- Newsletter section End -->
@endsection
