@extends('Layout.master1')
@section('title')
Positions || Jaymitra Universe
@endsection
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="weight-black">Positions</h1>
                <ol class="breadcrumb darklinks grey">
                    <li class="active">Current and Recent Positions of Jay Mitra </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h3>Current and Recent <strong>Positions</strong></h3>
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    University of Essex
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($position1 as $post1)
                                    <li>{{ $post1->position }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    External (in an advisory/visiting and voluntary capacity)
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($position2 as $post2)
                                    <li>{{ $post2->position }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Previous Positions
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($position3 as $post3)
                                    <li>{{ $post3->position }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Editorial Board Membership and Membership of Professional Organisations
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <strong> Member of Editorial Board for:</strong>
                                <ul class="list2 grey">
                                    @foreach($position4 as $post4)
                                    <li>{{ $post4->position }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse5" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Management and Administration Experience
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($position5 as $post5)
                                    <li>{{ $post5->position }}</li>
                                    @endforeach
                                </ul>
                                Previous appointments as Director of Centres of Entrepreneurship at Birmingham City University and at University of Bedfordshire, Head of Economic Development, London Metropolitan University. Add to that 15 years of experience in industry and public sector.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse6" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Research and Development Leadership
                                </a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($position6 as $post6)
                                    <li>{{ $post6->position }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse7" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Recent Teaching Responsibilities
                                </a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    <@foreach($position7 as $post7) <li>{{ $post7->position }}</li>
                                        @endforeach
                                </ul>
                                As Visiting Professor at University of Luneburg developed 4 new modules: Citizen Entrepreneurship (UG, final year, 2020) Science Technology and Society (PG, 2019); Industry 4.0 (UG Final year; 2019); International Entrepreneurship (PG 2018)
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse8" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Recent Doctoral Supervision
                                </a>
                            </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($position8 as $post8)
                                    <li>{{ $post8->position }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse9" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Recent External Peer Reviews of Research Council Projects
                                </a>
                            </h4>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($position9 as $post9)
                                    <li>{{ $post9->position }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget widget_text">
                    <h3 class="widget-title">Get In
                        <strong>Touch</strong>
                    </h3>
                    <div class="text-center">
                        <a href="{{ $profile->facebookurl }}" class="social-icon big-icon color-bg-icon soc-facebook">
                            <span class="social-title">Facebook</span>
                        </a>
                        <a href="{{ $profile->linkedinurl }}" class="social-icon big-icon color-bg-icon soc-linkedin">
                            <span class="social-title">Linkedin</span>
                        </a>
                        <a href="#" class="social-icon big-icon color-bg-icon soc-google">
                            <span class="social-title">Google Plus</span>
                        </a>
                        <a href="mailto:{{ $profile->email }}" class="social-icon big-icon color-bg-icon soc-mail">
                            <span class="social-title">Send Message</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection