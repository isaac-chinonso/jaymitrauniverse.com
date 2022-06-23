@extends('Layout.app2')
@section('title')
Publication Page Details || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">
        @include('include.success')
        @include('include.error')
        @include('include.warning')
        <div class="header">
            <h1 class="header-title">
                Publication Page
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Publication</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
                <div align="right">
                    <button class="btn btn-info btn-sm"><a href="{{ url('/admin/add-publication') }}" class="text-white">Add New Publication</a></button>
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
                        <h5 class="card-title mb-0">Publication Page Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">My Publicatons</h5>
                                    </div>

                                    <div class="list-group list-group-flush" role="tablist">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#book" role="tab">
                                            Book
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#chapters" role="tab">
                                            Book Chapters
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#series" role="tab">
                                            Book Series
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#article" role="tab">
                                            Refereed Journal Articles
                                        </a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#paper" role="tab">
                                            Refereed Conference Papers
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
                                                            <th>Books</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($pbooks as $book)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $book->content }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editpublication', $book->id) }}">Edit Publication</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $book->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $book->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Publication</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Publication </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deletepublication',$book->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                                            <th>Book Chapters</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($pchapters as $chapter)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $chapter->content }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editpublication', $chapter->id) }}">Edit Publication</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $chapter->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $chapter->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Publication</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Publication </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deletepublication',$chapter->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                                            <th>Book Series</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($pseries as $series)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $series->content }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editpublication', $series->id) }}">Edit Publication</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $series->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $series->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Publication</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Publication </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deletepublication',$series->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                                            <th>Refereed Journal Articles</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($particles as $articles)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $articles->content }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editpublication', $articles->id) }}">Edit Publication</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $articles->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $articles->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Publication</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Publication </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deletepublication',$articles->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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
                                    <div class="tab-pane fade" id="paper" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatables-clients" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Refereed Journal Papers</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $number = 1; ?>
                                                        @foreach($ppapers as $papers)
                                                        <tr>
                                                            <td>{{ $number }}</td>
                                                            <td>{{ $papers->content }}</td>
                                                            <td>
                                                                <div class="d-inline-block dropdown show">
                                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                                        <i class="align-middle" data-feather="more-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="{{ route('editpublication', $papers->id) }}">Edit Publication</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $papers->id }}">Delete</a>
                                                                    </div>
                                                                    <!-- Delete modal content -->
                                                                    <div id="delete{{ $papers->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel">Delete Publication</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to this Publication </p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                                                    <a href="{{ route('deletepublication',$papers->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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