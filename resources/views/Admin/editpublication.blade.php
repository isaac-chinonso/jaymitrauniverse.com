@extends('Layout.app2')
@section('title')
Edit Publication Page Details || Jaymitra Universe
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
                    <button class="btn btn-info btn-sm"><a href="{{ url('/admin/publication-page') }}" class="text-white">Back to Publication</a></button>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('updatepublication', $editpbooks->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field" class="font-weight-bold">Category</label>
                                    <select class="form-control" name="category_id">
                                        @if ($editpbooks->category_id == 1)
                                        <option selected value="{{ $editpbooks->category_id }}">Books</option>
                                        @elseif ($editpbooks->category_id == 2)
                                        <option selected value="{{ $editpbooks->category_id }}">Book Chapters</option>
                                        @elseif ($editpbooks->category_id == 3)
                                        <option selected value="{{ $editpbooks->category_id }}">Book Series</option>
                                        @elseif ($editpbooks->category_id == 4)
                                        <option selected value="{{ $editpbooks->category_id }}">Refereed Journal Articles</option>
                                        @elseif ($editpbooks->category_id == 5)
                                        <option selected value="{{ $editpbooks->category_id }}">Refereed Conference Papers</option>
                                        @endif
                                        <option disabled>Select Other Option</option>
                                        <option value="1">Books</option>
                                        <option value="2">Book Chapters</option>
                                        <option value="3">Book Series</option>
                                        <option value="4">Refereed Journal Articles</option>
                                        <option value="5">Refereed Conference Papers</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Publication</label>
                                    <textarea class="form-control" cols="10" rows="4" name="content">{{ $editpbooks->content }}</textarea>
                                </div>
                            </div><br>
                            <div class="row" align="right">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Update Publication</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection