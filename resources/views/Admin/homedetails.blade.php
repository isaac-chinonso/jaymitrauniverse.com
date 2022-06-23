@extends('Layout.app2')
@section('title')
Home Details || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Home Details
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home Details</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-sm-3 m-md-5">
                        <div class="mb-4">
                           <h3>{{ $homesectiondetails->title }}</h3>
                        </div>

                        <hr class="my-4" />

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <p style="font-size: 18px;text-align:justify;">
                                    {!! $homesectiondetails->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection