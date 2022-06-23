@extends('Layout.app2')
@section('title')
Edit Journal Page || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Edit Journal Page Section
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Journal Section</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-sm-3 m-md-5">
                    <form method="POST" action="{{ route('updatejournal', $editjournal->id) }}">
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Journal:</label>
                                            <textarea id="summernote" name="title" cols="30" rows="10" class="form-control">{!! $editjournal->title !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-field">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Journal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection