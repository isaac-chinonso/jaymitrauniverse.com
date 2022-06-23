@extends('Layout.app2')
@section('title')
Position Page Details || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">
        @include('include.success')
        @include('include.error')
        @include('include.warning')
        <div class="header">
            <h1 class="header-title">
                Position Page
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Position</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
                <div align="right">
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sizedModalLg">Add New Position</button>
                </div>
            </nav>
            <div class="modal fade" id="sizedModalLg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Position</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ url('/admin/save-position') }}">
                            <div class="modal-body">
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Category:</label>
                                            <select name="category" class="form-control">
                                                <option selected disabled>Select Category</option>
                                                <option value="1">University of Essex</option>
                                                <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                <option value="3">Previous Positions</option>
                                                <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                <option value="5">Management and Administration Experience</option>
                                                <option value="6">Research and Development Leadership</option>
                                                <option value="7">Recent Teaching Responsibilities</option>
                                                <option value="8">Recent Doctoral Supervision</option>
                                                <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Position:</label>
                                            <textarea name="position" id="" cols="20" rows="10" class="form-control"></textarea>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a>

                        </div>
                        <h5 class="card-title mb-0">Position Page Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">My Positions</h5>
                                    </div>

                                    <div class="list-group list-group-flush" role="tablist">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#tab1" role="tab">
                                            University of Essex
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab2" role="tab">
                                            External (in an advisory/visiting and voluntary capacity)
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab3" role="tab">
                                            Previous Positions
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab4" role="tab">
                                            Editorial Board Membership and Membership of Professional Organisations
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab5" role="tab">
                                            Management and Administration Experience
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab6" role="tab">
                                            Research and Development Leadership
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab7" role="tab">
                                            Recent Teaching Responsibilities
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab8" role="tab">
                                            Recent Doctoral Supervision
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab9" role="tab">
                                            Recent External Peer Reviews of Research Council Projects
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position1 as $post1)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post1->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post1->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post1->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post1->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post1->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post1->category == 1)
                                                                                                        <option value="{{ $post1->category }}">University of Essex</option>
                                                                                                        @elseif($post1->category == 2)
                                                                                                        <option value="{{ $post1->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post1->category == 3)
                                                                                                        <option value="{{ $post1->category }}">Previous Positions</option>
                                                                                                        @elseif($post1->category == 4)
                                                                                                        <option value="{{ $post1->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post1->category == 5)
                                                                                                        <option value="{{ $post1->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post1->category == 6)
                                                                                                        <option value="{{ $post1->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post1->category == 7)
                                                                                                        <option value="{{ $post1->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post1->category == 8)
                                                                                                        <option value="{{ $post1->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post1->category == 9)
                                                                                                        <option value="{{ $post1->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post1->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post1->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post1->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position2 as $post2)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post2->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post2->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post2->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post2->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post2->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post2->category == 1)
                                                                                                        <option value="{{ $post2->category }}">University of Essex</option>
                                                                                                        @elseif($post2->category == 2)
                                                                                                        <option value="{{ $post2->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post2->category == 3)
                                                                                                        <option value="{{ $post2->category }}">Previous Positions</option>
                                                                                                        @elseif($post2->category == 4)
                                                                                                        <option value="{{ $post2->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post2->category == 5)
                                                                                                        <option value="{{ $post2->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post2->category == 6)
                                                                                                        <option value="{{ $post2->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post2->category == 7)
                                                                                                        <option value="{{ $post2->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post2->category == 8)
                                                                                                        <option value="{{ $post2->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post2->category == 9)
                                                                                                        <option value="{{ $post2->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post2->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post2->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post2->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position3 as $post3)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post3->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post3->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post3->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post3->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post3->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post3->category == 1)
                                                                                                        <option value="{{ $post3->category }}">University of Essex</option>
                                                                                                        @elseif($post3->category == 2)
                                                                                                        <option value="{{ $post3->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post3->category == 3)
                                                                                                        <option value="{{ $post3->category }}">Previous Positions</option>
                                                                                                        @elseif($post3->category == 4)
                                                                                                        <option value="{{ $post3->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post3->category == 5)
                                                                                                        <option value="{{ $post3->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post3->category == 6)
                                                                                                        <option value="{{ $post3->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post3->category == 7)
                                                                                                        <option value="{{ $post3->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post3->category == 8)
                                                                                                        <option value="{{ $post3->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post3->category == 9)
                                                                                                        <option value="{{ $post3->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post3->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post3->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post3->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position4 as $post4)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post4->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post4->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post4->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post4->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post4->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post4->category == 1)
                                                                                                        <option value="{{ $post4->category }}">University of Essex</option>
                                                                                                        @elseif($post4->category == 2)
                                                                                                        <option value="{{ $post4->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post4->category == 3)
                                                                                                        <option value="{{ $post4->category }}">Previous Positions</option>
                                                                                                        @elseif($post4->category == 4)
                                                                                                        <option value="{{ $post4->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post4->category == 5)
                                                                                                        <option value="{{ $post4->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post4->category == 6)
                                                                                                        <option value="{{ $post4->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post4->category == 7)
                                                                                                        <option value="{{ $post4->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post4->category == 8)
                                                                                                        <option value="{{ $post4->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post4->category == 9)
                                                                                                        <option value="{{ $post4->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post4->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post4->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post4->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab5" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $number = 1; ?>
                                                    @foreach($position5 as $post5)
                                                    <tr>
                                                        <td>{{ $number }}</td>
                                                        <td>{{ $post5->position }}</td>
                                                        <td>
                                                            <div class="d-inline-block dropdown show">
                                                                <a href="#" data-toggle="dropdown" data-display="static">
                                                                    <i class="align-middle" data-feather="more-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post5->id }}">Edit Position</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post5->id }}">Delete</a>
                                                                </div>
                                                                <!-- edit modal content -->
                                                                <div class="modal fade" id="edit{{ $post5->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Edit Position</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form method="POST" action="{{ route('updateposition', $post5->id) }}">
                                                                                <div class="modal-body">
                                                                                    @csrf
                                                                                    <div class="form-field">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <label>Category:</label>
                                                                                                <select name="category" class="form-control">
                                                                                                    @if($post5->category == 1)
                                                                                                    <option value="{{ $post5->category }}">University of Essex</option>
                                                                                                    @elseif($post5->category == 2)
                                                                                                    <option value="{{ $post5->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                    @elseif($post5->category == 3)
                                                                                                    <option value="{{ $post5->category }}">Previous Positions</option>
                                                                                                    @elseif($post5->category == 4)
                                                                                                    <option value="{{ $post5->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                    @elseif($post5->category == 5)
                                                                                                    <option value="{{ $post5->category }}">Management and Administration Experience</option>
                                                                                                    @elseif($post5->category == 6)
                                                                                                    <option value="{{ $post5->category }}">Management and Administration Experience</option>
                                                                                                    @elseif($post5->category == 7)
                                                                                                    <option value="{{ $post5->category }}">Research and Development Leadership</option>
                                                                                                    @elseif($post5->category == 8)
                                                                                                    <option value="{{ $post5->category }}">Recent Doctoral Supervision</option>
                                                                                                    @elseif($post5->category == 9)
                                                                                                    <option value="{{ $post5->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    @endif
                                                                                                    <option disabled>Select Category</option>
                                                                                                    <option value="1">University of Essex</option>
                                                                                                    <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                    <option value="3">Previous Positions</option>
                                                                                                    <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                    <option value="5">Management and Administration Experience</option>
                                                                                                    <option value="6">Research and Development Leadership</option>
                                                                                                    <option value="7">Recent Teaching Responsibilities</option>
                                                                                                    <option value="8">Recent Doctoral Supervision</option>
                                                                                                    <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><br>
                                                                                    <div class="form-field">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <label>Position:</label>
                                                                                                <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post5->position }}</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.edit modal -->
                                                                <!-- modal content -->
                                                                <div id="delete{{ $post5->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Are you sure you want to this Position </p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                <a href="{{ route('deleteposition',$post5->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab6" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position6 as $post6)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post6->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post6->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post6->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post6->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post6->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post6->category == 1)
                                                                                                        <option value="{{ $post6->category }}">University of Essex</option>
                                                                                                        @elseif($post6->category == 2)
                                                                                                        <option value="{{ $post6->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post6->category == 3)
                                                                                                        <option value="{{ $post6->category }}">Previous Positions</option>
                                                                                                        @elseif($post6->category == 4)
                                                                                                        <option value="{{ $post6->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post6->category == 5)
                                                                                                        <option value="{{ $post6->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post6->category == 6)
                                                                                                        <option value="{{ $post6->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post6->category == 7)
                                                                                                        <option value="{{ $post6->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post6->category == 8)
                                                                                                        <option value="{{ $post6->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post6->category == 9)
                                                                                                        <option value="{{ $post6->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post6->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post6->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post6->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab7" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position7 as $post7)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post7->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post7->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post7->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post7->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post7->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post7->category == 1)
                                                                                                        <option value="{{ $post7->category }}">University of Essex</option>
                                                                                                        @elseif($post7->category == 2)
                                                                                                        <option value="{{ $post7->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post7->category == 3)
                                                                                                        <option value="{{ $post7->category }}">Previous Positions</option>
                                                                                                        @elseif($post7->category == 4)
                                                                                                        <option value="{{ $post7->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post7->category == 5)
                                                                                                        <option value="{{ $post7->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post7->category == 6)
                                                                                                        <option value="{{ $post7->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post7->category == 7)
                                                                                                        <option value="{{ $post7->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post7->category == 8)
                                                                                                        <option value="{{ $post7->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post7->category == 9)
                                                                                                        <option value="{{ $post7->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post7->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post7->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post7->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab8" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position8 as $post8)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post8->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post8->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post8->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post8->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post8->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post8->category == 1)
                                                                                                        <option value="{{ $post8->category }}">University of Essex</option>
                                                                                                        @elseif($post8->category == 2)
                                                                                                        <option value="{{ $post8->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post8->category == 3)
                                                                                                        <option value="{{ $post8->category }}">Previous Positions</option>
                                                                                                        @elseif($post8->category == 4)
                                                                                                        <option value="{{ $post8->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post8->category == 5)
                                                                                                        <option value="{{ $post8->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post8->category == 6)
                                                                                                        <option value="{{ $post8->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post8->category == 7)
                                                                                                        <option value="{{ $post8->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post8->category == 8)
                                                                                                        <option value="{{ $post8->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post8->category == 9)
                                                                                                        <option value="{{ $post8->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post8->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post8->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post8->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="tab9" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Positions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($position9 as $post9)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $post9->position }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{ $post9->id }}">Edit Position</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $post9->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- edit modal content -->
                                                                    <div class="modal fade" id="edit{{ $post9->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Position</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form method="POST" action="{{ route('updateposition', $post9->id) }}">
                                                                                    <div class="modal-body">
                                                                                        @csrf
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Category:</label>
                                                                                                    <select name="category" class="form-control">
                                                                                                        @if($post9->category == 1)
                                                                                                        <option value="{{ $post9->category }}">University of Essex</option>
                                                                                                        @elseif($post9->category == 2)
                                                                                                        <option value="{{ $post9->category }}">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        @elseif($post9->category == 3)
                                                                                                        <option value="{{ $post9->category }}">Previous Positions</option>
                                                                                                        @elseif($post9->category == 4)
                                                                                                        <option value="{{ $post9->category }}">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        @elseif($post9->category == 5)
                                                                                                        <option value="{{ $post9->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post9->category == 6)
                                                                                                        <option value="{{ $post9->category }}">Management and Administration Experience</option>
                                                                                                        @elseif($post9->category == 7)
                                                                                                        <option value="{{ $post9->category }}">Research and Development Leadership</option>
                                                                                                        @elseif($post9->category == 8)
                                                                                                        <option value="{{ $post9->category }}">Recent Doctoral Supervision</option>
                                                                                                        @elseif($post9->category == 9)
                                                                                                        <option value="{{ $post9->category }}">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                        @endif
                                                                                                        <option disabled>Select Category</option>
                                                                                                        <option value="1">University of Essex</option>
                                                                                                        <option value="2">External (in an advisory/visiting and voluntary capacity)</option>
                                                                                                        <option value="3">Previous Positions</option>
                                                                                                        <option value="4">Editorial Board Membership and Membership of Professional Organisations</option>
                                                                                                        <option value="5">Management and Administration Experience</option>
                                                                                                        <option value="6">Research and Development Leadership</option>
                                                                                                        <option value="7">Recent Teaching Responsibilities</option>
                                                                                                        <option value="8">Recent Doctoral Supervision</option>
                                                                                                        <option value="9">Recent External Peer Reviews of Research Council Projects</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><br>
                                                                                        <div class="form-field">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label>Position:</label>
                                                                                                    <textarea name="position" id="" cols="20" rows="10" class="form-control">{{ $post9->position }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Update Now</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.edit modal -->
                                                                    <!-- modal content -->
                                                                    <div id="delete{{ $post9->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Position </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deleteposition',$post9->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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