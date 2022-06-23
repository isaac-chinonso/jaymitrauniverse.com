@extends('Layout.app2')
@section('title')
Journal Page Details || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">
        @include('include.success')
        @include('include.error')
        @include('include.warning')
        <div class="header">
            <h1 class="header-title">
                Journal Page
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Journal</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
                <div align="right">
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sizedModalLg">Add New Journal</button>
                </div>
            </nav>
            <div class="modal fade" id="sizedModalLg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Journal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ url('/admin/save-journal') }}">
                            <div class="modal-body">
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Journal:</label>
                                            <textarea 1qqq\ name="title" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Journal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a>

                        </div>
                        <h5 class="card-title mb-0">Journal Page Section</h5>
                    </div>
                    <div class="card-body">
                        <table id="datatables-clients" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Refereed Journal Article</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1; ?>
                                @foreach($journalsection as $journal)
                                <tr>
                                    <td>{{ $number }}</td>
                                    <td>{!! $journal->title !!}</td>
                                    <td>
                                        <div class="d-inline-block dropdown show">
                                            <a href="#" data-toggle="dropdown" data-display="static">
                                                <i class="align-middle" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('editjournal', $journal->id) }}">Edit Journal</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $journal->id }}">Delete</a>
                                            </div>
                                            <!-- modal content -->
                                            <div id="delete{{ $journal->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete Journal</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to this Journal </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                            <a href="{{ route('deletejournal',$journal->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </td>
                                </tr>
                                <?php $number++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection