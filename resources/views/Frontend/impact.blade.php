@extends('Layout.master1')
@section('title')
Impact Activities || Jaymitra Universe
@endsection
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="weight-black">Impact Activities</h1>
                <ol class="breadcrumb darklinks grey">
                    <li class="active">Impact Activities of Jay Mitra </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h4>Recent Keynote Address and Expert <strong>Involvement </strong></h4>
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Academic
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($impactacademics as $academics)
                                    <li>{{ $academics->activity }}</li>
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
                                    Industry
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($impactindustry as $industry)
                                    <li>{{ $industry->activity }}</li>
                                    @endforeach
                                </ul>
                                Note also that several academic and public policy impact projects have also involved either direct business participation or reference to business development objectives.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default to_animate" data-animation="bigEntrance" data-delay="150">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                    <i class="fa fa-question-circle-o highlight"></i>
                                    Public Policy
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($impactpublic as $public)
                                    <li>{{ $public->activity }}</li>
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
                                    External Funding Obtained for and Management of Research and Development Projects
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list2 grey">
                                    @foreach($impactexternal as $external)
                                    <li>{{ $external->activity }}</li>
                                    @endforeach
                                </ul>
                                Other notable funding generated in past years: £100, 000 for Entrepreneurship Development in the Thames Gateway region (2004-2007); Shandong Wego Medical Devices Group, China: c £80,000 p.a.for 5 years (2005-2008), and EU funding over £1m with the Department of Electronic and Systems Engineering.. Previous income generating activities amount to well over several million UK £s at Essex and 4 previous institutions
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