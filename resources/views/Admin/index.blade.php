@extends('Layout.app1')
@section('title')
Dashboard || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Welcome back Jay.
            </h1>
            <p style="color: #fff; font-size:18px;">Summary about your web page</p>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">My Publications</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                <i class="align-middle" data-feather="external-link"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-2 mb-4">{{ $publications }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Impact Activities</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="external-link"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-2 mb-4">{{ $impacts }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Refereed Journal Articles</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="external-link"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-2 mb-4">{{ $journals }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Positions</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="external-link"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-2 mb-4">{{ $positions }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection