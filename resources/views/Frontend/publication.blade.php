@extends('Layout.master1')
@section('title')
Publications || Jaymitra Universe
@endsection
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="weight-black">Publication</h1>
                <ol class="breadcrumb darklinks grey">
                    <li class="active">Recent Publications of Jay Mitra </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Recent Relevant <strong>Publications</strong></h3>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs to_animate" data-animation="bigEntrance" data-delay="150" role="tablist">
                    <li class="active">
                        <a href="#tab1" role="tab" data-toggle="tab">Books</a>
                    </li>
                    <li>
                        <a href="#tab2" role="tab" data-toggle="tab">Book Chapters</a>
                    </li>
                    <li>
                        <a href="#tab3" role="tab" data-toggle="tab">Book Series</a>
                    </li>
                    <li>
                        <a href="#tab4" role="tab" data-toggle="tab">Refereed Journal Articles</a>
                    </li>
                    <li>
                        <a href="#tab5" role="tab" data-toggle="tab">Refereed Conference Papers</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content to_animate" data-animation="bigEntrance" data-delay="150">
                    <div class="tab-pane fade in active" id="tab1">
                        <ul class="list2 grey">
                            @foreach($pbooks as $books)
                            <li>{{ $books->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <ul class="list2 grey">
                            @foreach($pchapters as $chapters)
                            <li>{{ $chapters->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                        <ul class="list2 grey">
                            @foreach($pseries as $series)
                            <li>{{ $series->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab4">
                        <ul class="list2 grey">
                            @foreach($particles as $articles)
                            <li>{{ $articles->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab5">
                        <ul class="list2 grey">
                            @foreach($ppapers as $papers)
                            <li>{{ $papers->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection