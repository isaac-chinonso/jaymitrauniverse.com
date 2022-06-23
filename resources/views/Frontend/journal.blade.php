@extends('Layout.master1')
@section('title')
Refereed Journal Articles || Jaymitra Universe
@endsection
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="weight-black">Journal</h1>
                <ol class="breadcrumb darklinks grey">
                    <li class="active">Refereed Journal Articles of Jay Mitra </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Refereed Journal Articles
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($journalsection as $journal)
                                    <li>{!! $journal->title !!}</li>
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