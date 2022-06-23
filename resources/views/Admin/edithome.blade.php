@extends('Layout.app2')
@section('title')
Home Details || Jaymitra Universe
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
                    <li class="breadcrumb-item"><a href="#">Home Details</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-sm-3 m-md-5">
                        <form method="POST" action="{{ route('updatehome', $homeedit->id) }}">
                            <div>
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Title:</label>
                                            <input type="text" class="form-control" name="title" value="{{ $homeedit->title }}">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Content:</label>
                                            <textarea id="summernote" name="content" cols="30" rows="10" class="form-control">{!! $homeedit->content !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div>
                                <button type="submit" class="btn btn-success">Update Content</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection