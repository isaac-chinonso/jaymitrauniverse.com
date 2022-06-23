@extends('Layout.app2')
@section('title')
Impact Activities Page Details || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">
        @include('include.success')
        @include('include.error')
        @include('include.warning')
        <div class="header">
            <h1 class="header-title">
                Impact Activities Page
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Impact Activities</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
                <div align="right">
                    <button class="btn btn-info btn-sm"><a href="{{ url('/admin/add-impact-activities') }}" class="text-white">Add New Impact Activities</a></button>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a>

                        </div>
                        <h5 class="card-title mb-0">Impact Activities Page Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">My Impact Activities</h5>
                                    </div>

                                    <div class="list-group list-group-flush" role="tablist">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#book" role="tab">
                                            Academics
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#chapters" role="tab">
                                            Industry
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#series" role="tab">
                                            Public Policy
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#article" role="tab">
                                            External Funding Obtained
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="book" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Impact Activities (Academics)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($impactacademics as $academics)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $academics->activity }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editimpact', $academics->id) }}">Edit Activity</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $academics->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $academics->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Activity</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Activity </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteimpact',$academics->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="chapters" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Impact Activities (Industry)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($impactindustry as $industry)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $industry->activity }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editimpact', $industry->id) }}">Edit Activity</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $industry->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $industry->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Activity</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Activity </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteimpact',$industry->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="series" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Impact Activities (Public Policy)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($impactpublic as $public)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $public->activity }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editimpact', $public->id) }}">Edit Activity</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $public->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $public->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Activity</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Activity </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteimpact',$public->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="article" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Impact Activities ( External Funding Obtained for and Management of Research and Development Projects)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($impactexternal as $external)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $external->activity }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editimpact', $external->id) }}">Edit Activity</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $external->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $public->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Activity</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Activity </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteimpact',$external->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection