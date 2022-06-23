@extends('Layout.master')
@section('title')
Jaymitra Universe
@endsection

@section('content')

<section class="intro_section page_mainslider">
    <div class="flexslider text-nav">
        <ul class="slides">
            <li class="cs">
                <img src="assets/images/slide2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <p class="big">Jay Mitra </p>
                                    <p>Research | Learning | Knowledge Exchange | Consulting</p>
                                    <button class="btn btn-success btn-sm" style="background-color: #bb8004;">Get in Touch</button>
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
        </ul>
    </div>
    <!-- eof flexslider -->
</section>

<section class="ls page_highlights columns_margin_bottom_30 columns_margin_top_0 section_padding_top_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-offset-0 col-md-4">
                <article class="vertical-item content-padding with_padding with_shadow text-center highlight-item ls">
                    <div class="item-media">
                        <img src="assets/images/gallery/01.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h3 class="entry-title">Entrepreneurship<br> &<br>
                            <a href="#">
                                <strong class="weight-black"> Innovation</strong>
                            </a>
                        </h3>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-offset-0 col-md-4">
                <article class="vertical-item content-padding with_padding with_shadow text-center highlight-item ls hovered default-hovered">
                    <div class="item-media">
                        <img src="assets/images/gallery/02.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h3 class="entry-title">
                            <a href="#">Imagination <br> &<br>
                                <strong class="weight-black">Creativity</strong>
                            </a>
                        </h3>
                    </div>
                </article>
            </div>
            <div class="col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
                <article class="vertical-item content-padding with_padding with_shadow text-center highlight-item ls">
                    <div class="item-media">
                        <img src="assets/images/gallery/03.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h3 class="entry-title">
                            <a href="#">Economic & Social <br><br>
                                <strong class="weight-black">Development</strong>
                            </a>
                        </h3>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="ls columns_padding_bottom section_padding_top_50">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                @foreach($home as $homes)
                <h4>
                    <strong class="highlight weight-black">{{ $homes->title }}</strong>
                </h4>
                <p style="text-align: justify;font-size: 13px;">
                   {!! $homes->content !!}
                </p>
                @endforeach
            </div>
            <div class="col-md-5">
                <img src="assets/images/p1.jpg" alt="" class="img-thumbnail">
            </div>

        </div>
    </div>
</section>

<section class="ls ms section_padding_150 section_subscribe parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 text-center">
                <h2 class="section_header" style="color: #fff;">
                    My Key Words
                </h2>
                <p style="color: #fff;font-size: 20px;">
                    Rhythm, Texture, Image * Words, Phrases, Meaning * Creativity, Imagination, Interpretation * Questions, Thought, Enquiry * Touch, Feel, Embrace
                </p>
                <button class="btn btn-success btn-sm" style="background-color: #bb8004;">Get in Touch</button>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_150 section_padding_bottom_120 columns_margin_bottom_30">
    <div class="container">
        <h3 class="widget-title">
            <strong>Latest Developments</strong>
        </h3>
        <div class="isotope_container isotope row masonry-layout">
            <div class="isotope-item col-sm-6 col-md-4">
                <div class="vertical-item content-padding text-center">
                    <div class="item-media">
                        <img src="assets/images/gallery/jul.png" alt="">
                    </div>
                    <div class="item-content with_shadow">
                        <h6 class="bottommargin_30">
                            <a href="#">
                                <strong>Journal of Entrepreneurship and Innovation in Emerging Economies’.</strong>
                            </a>
                        </h6>
                        <p style="font-size: 14px;">
                        (July 2020) The Journal of Entrepreneurship and Innovation in Emerging Economies (JEIEE) is owned by SAGE and published in association with the International Entrepreneurship Forum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="isotope-item col-sm-6 col-md-4">
                <div class="vertical-item content-padding text-center">
                    <div class="item-media">
                        <img src="assets/images/gallery/ent.jpg" alt="">
                    </div>
                    <div class="item-content with_shadow">
                        <h5 class="bottommargin_30">
                            <a href="#">
                                <strong>Entrepreneurship, Innovation and Regional Development</strong>
                            </a>
                        </h5>
                        <p style="font-size: 14px;">
                            (2020) ‘Entrepreneurship, Innovation and Regional Development’ (2nd edition)(Abingdon, Routledge)- Ist ed. Published in 2012
                        </p>
                    </div>
                </div>
            </div>
            <div class="isotope-item col-sm-6 col-md-4">
                <div class="vertical-item content-padding text-center">
                    <div class="item-media">
                        <img src="assets/images/gallery/nim.jpg" alt="">
                    </div>
                    <div class="item-content with_shadow">
                        <h5 class="bottommargin_30">
                            <a href="#">
                                <strong>The Wider Impact of Digitalization on SMEs</strong>
                            </a>
                        </h5>
                        <p style="font-size: 14px;">
                            (2019). The Wider Impact of Digitalization on SMEs. 15th INSME. Annual Meeting Fintech & Logistics, International Network for SMEs (INSME), Naples, Italy, 6-7 June, 2019
                        </p>
                    </div>
                </div>
            </div>
            <div class="isotope-item col-sm-6 col-md-4">
                <div class="vertical-item content-padding text-center">
                    <div class="item-media">
                        <img src="assets/images/gallery/eur.jpg" alt="">
                    </div>
                    <div class="item-content with_shadow">
                        <h5 class="bottommargin_30">
                            <a href="#">
                                <strong>EURegionsWeek UNIVERSITY session</strong>
                            </a>
                        </h5>
                        <p style="font-size: 14px;">
                            (2019) EURegionsWeek UNIVERSITY session: Citizen Entrepreneurship: Towards involvement, inclusion and integration of citizens in entrepreneurial Europe Wed 9, October 2019
                        </p>
                    </div>
                </div>
            </div>
            <div class="isotope-item col-sm-6 col-md-4">
                <div class="vertical-item content-padding text-center">
                    <div class="item-media">
                        <img src="assets/images/gallery/ind.jpg" alt="">
                    </div>
                    <div class="item-content with_shadow">
                        <h5 class="bottommargin_30">
                            <a href="#">
                                <strong>Entrepreneurship and Innovation in India</strong>
                            </a>
                        </h5>
                        <p style="font-size: 14px;">
                            (2020) ‘An Overview of Entrepreneurship and Innovation in India: Crisis or Opportunity? (ed) Springer Series on ‘Entrepreneurship and Development in South Asia: Longitudinal Narratives’
                        </p>
                    </div>
                </div>
            </div>
            <div class="isotope-item col-sm-6 col-md-4">
                <div class="vertical-item content-padding text-center">
                    <div class="item-media">
                        <img src="assets/images/gallery/price1.jpg" alt="">
                    </div>
                    <div class="item-content with_shadow">
                        <h5 class="bottommargin_30">
                            <a href="#">
                                <strong>Price Valuation</strong>
                            </a>
                        </h5>
                        <p style="font-size: 14px;">
                            Evaluating Valuations for Start-Ups and Early Stage Growth, 2 day management development programme for Portugal Ventures, Porto, Portugal. 20-21 February, 2020
                        </p>
                    </div>
                </div>
            </div>
            <div class="isotope-item col-sm-6 col-md-4">
                <div class="vertical-item content-padding text-center">
                    <div class="item-media">
                        <img src="assets/images/gallery/jrn.jpg" alt="">
                    </div>
                    <div class="item-content with_shadow">
                        <h5 class="bottommargin_30">
                            <a href="#">
                                <strong>Transnational and Migrant Entrepreneurs</strong>
                            </a>
                        </h5>
                        <p>
                            (2020). Transnational and Migrant Entrepreneurs. Editorial for Special Issue of Journal of Entrepreneurship and Innovation in Emerging Economies, January (with S, Pruthi)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection