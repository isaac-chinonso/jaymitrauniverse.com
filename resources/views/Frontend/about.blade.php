@extends('Layout.master1')
@section('title')
About || Jaymitra Universe
@endsection

@section('content')

<section class="page_breadcrumbs ds parallax section_padding_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="weight-black">About Me</h1>
                <ol class="breadcrumb darklinks grey">
                    <li class="active">Summary about Jay Mitra </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls columns_padding_bottom section_padding_top_50 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-12 to_animate" data-animation="floating" data-delay="150">
                <div class="author-meta side-item topmargin_80 with_background">

                    <div class="row display_table_md">

                        <div class="col-md-4 display_table_cell_md">
                            <div class="item-media">
                                <img src="assets/images/p1.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 display_table_cell_md">
                            <div class="item-content">
                                <h4>{{ $profile->name }} </h4>
                                <p class="bottommargin_15" style="font-family: Arial, Helvetica, sans-serif;font-size:14px;">
                                    {{ $profile->bio }}
                                </p>
                                <span class="author-social">
                                    <a href="{{ $profile->facebookurl }}" class="social-icon color-bg-icon soc-facebook">
                                        <span class="social-title">| Facebook</span>
                                    </a>
                                    <a href="{{ $profile->linkedinurl }}" class="social-icon color-bg-icon soc-linkedin">
                                        <span class="social-title">| Linkedin</span>
                                    </a>
                                    <a href="#" class="social-icon color-bg-icon soc-google">
                                        <span class="social-title">| Google Plus</span>
                                    </a>
                                    <a href="mailto:{{ $profile->email }}" target="_blank" class="social-icon color-bg-icon soc-mail">
                                        <span class="social-title">| Send Message</span>
                                    </a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_150 columns_padding_30">
    <div class="container">
        <div class="row">

            <div class="col-md-12 to_animate" data-animation="bigEntrance" data-delay="150">
                <article class="vertical-item content-padding">

                    <div class="item-content with_shadow">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row vertical-tabs">
                                    <div class="col-sm-4">
                                        <!-- Nav tabs -->
                                        <ul class="nav" role="tablist">
                                            <li class="active">
                                                <a href="#vertical-tab1" role="tab" data-toggle="tab">
                                                    <i class="rt-icon2-light-bulb"></i>{{ $aboutcurrent->title }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#vertical-tab2" role="tab" data-toggle="tab">
                                                    <i class="rt-icon2-light-bulb"></i> {{ $aboutbackground->title }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#vertical-tab3" role="tab" data-toggle="tab">
                                                    <i class="rt-icon2-book"></i>{{ $aboutwriting->title }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#vertical-tab4" role="tab" data-toggle="tab">
                                                    <i class="rt-icon2-cog"></i> {{ $aboutinterest->title }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-8">

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="vertical-tab1">
                                                <h4><strong>{{ $aboutcurrent->title }}</strong></h4>
                                                <hr>
                                                <p style="text-align: justify;font-size: 10px;font-family: 'Josefin Sans', sans-serif;">
                                                    {!! $aboutcurrent->content !!}
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="vertical-tab2">
                                                <h4><strong>{{ $aboutbackground->title }}</strong></h4>
                                                <hr>
                                                <p style="text-align: justify;font-size: 10px;font-family: 'Josefin Sans', sans-serif;">
                                                    {!! $aboutbackground->content !!}
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="vertical-tab3">
                                                <h4><strong>{{ $aboutwriting->title }}</strong></h4>
                                                <hr>
                                                <p style="text-align: justify;font-size: 10px;font-family: 'Josefin Sans', sans-serif;">
                                                    {!! $aboutwriting->content !!}
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="vertical-tab4">
                                                <h4><strong>{{ $aboutinterest->title }}</strong></h4>
                                                <hr>
                                                <p style="text-align: justify;font-size: 10px;font-family: 'Josefin Sans', sans-serif;">
                                                    {!! $aboutinterest->content !!}
                                                </p>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div><br><br>
                    </div>
                    <!-- .entry-content -->

                </article>
            </div>
            <!--eof .col-sm-8 (main content)-->

        </div>
    </div>
</section>

@endsection