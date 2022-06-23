@extends('Layout.app2')
@section('title')
Edit about Page || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Edit About Page Section
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">About Section</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-sm-3 m-md-5">
                    <form method="POST" action="{{ route('updateabout', $aboutedit->id) }}">
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Title:</label>
                                            <input type="text" class="form-control" name="title" value="{{ $aboutedit->title }}">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Content:</label>
                                            <textarea id="summernote" name="content" id="" cols="30" rows="10" class="form-control">{{ $aboutedit->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-field">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection