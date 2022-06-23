@extends('Layout.app')
@section('title')
Login || Jaymitra Universe
@endsection
@section('content')

<main class="main h-100 w-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Welcome back, Jay</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>
                    @include('include.success')
                    @include('include.error')
                    @include('include.warning')

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="app/img/avatars/avatar.jpg" alt="Linda Miller" class="img-fluid rounded-circle" width="132" height="132" />
                                </div>
                                <form method="POST" action="{{ url('/post-login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection