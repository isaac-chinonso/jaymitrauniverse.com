@extends('Layout.app2')
@section('title')
About Details || Jaymitra Universe
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
                    <li class="breadcrumb-item"><a href="#">About Details</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-sm-3 m-md-5">
                            <h3>{{ $aboutsectiondetails->title }}</h3>
                            <div align="right">
                                <button class="btn btn-primary btn-sm"><a href="{{ url('/admin/about-page') }}" class="text-white">Go back</a></button>
                            </div>

                        <hr class="my-4" />

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <p style="font-size: 16px;text-align:justify;">
                                    {!! $aboutsectiondetails->content !!}
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