<div class="row">
    <div class="col-lg-6 md-mb-50">
        <div class="blog-item">
            <div class="image-wrap">
                <a href="#"><img src="{{ asset('assets/images/blog/style2/4.jpg') }}" alt=""></a>
            </div>
            <div class="blog-content">
                <ul class="blog-meta">
                    <li class="admin"><i class="fi  fi-rr-user"></i>Admin</li>
                    <li class="date"><i class="fi fi-rr-calendar"></i>19 March 2024</li>
                </ul>
                <h3 class="blog-title"><a href="#">{{$lastPost}}</a></h3>
                <div class="desc">Suite aux atrocités vécues dans l'Est de Pays,( RDC),
                    Plusieurs familles ont fuit la guerre de M23...</div>
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
                        <a href="#"><img src="{{ asset('assets/images/blog/style2/1.jpg') }}"
                                alt=""></a>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="admin"><i class="fi  fi-rr-user"></i>RSTheme</li>
                            <li class="date"><i class="fi fi-rr-calendar"></i>25 March 2022</li>
                        </ul>
                        <h3 class="blog-title"><a href="#">Identification et Enregistrement des
                                enfants
                                en âge
                                d'étudier</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
