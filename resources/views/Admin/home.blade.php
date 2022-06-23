@extends('Layout.app1')
@section('title')
Home || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    @include('include.success')
    @include('include.error')
    @include('include.warning')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Home
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard-default.html">Home Page Management</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
                <div align="right">
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sizedModalLg">Add New</button>
                </div>
            </nav>
            <div class="modal fade" id="sizedModalLg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Default modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ url('/admin/save-home-page') }}">
                            <div class="modal-body">
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Title:</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Content:</label>
                                            <textarea id="summernote" name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($homesection as $home)
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a>
                            <div class="d-inline-block dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
                                    <i class="align-middle" data-feather="more-vertical"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('homeedit', $home->id) }}">Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $home->id }}">Delete</a>
                                </div>
                                <!-- modal content -->
                                <div id="delete{{ $home->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Delete Homepage Content</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to this content </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                <a href="{{ route('deletehomecontent',$home->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>
                        <h4>{{ $home->title }}</h4>
                        <hr>
                    </div>
                    <div class="card-body p-3">
                        <div id="tasks-upcoming">
                            <div class="card mb-3 bg-light cursor-grab">
                                <div class="card-body p-3">
                                    <p style="font-size: 20px;text-align:justify;">{!! str_limit($home->content, 400) !!}</p>
                                    <a class="btn btn-primary btn-sm" href="{{ route('homedetails',$home->id) }}">Full Content</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection