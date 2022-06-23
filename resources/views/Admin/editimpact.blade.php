@extends('Layout.app2')
@section('title')
Edit Impact Activities || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">
        @include('include.success')
        @include('include.error')
        @include('include.warning')
        <div class="header">
            <h1 class="header-title">
               Edit Impact Activities
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Impact Activities</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
                <div align="right">
                    <button class="btn btn-info btn-sm"><a href="{{ url('/admin/publication-page') }}" class="text-white">Back to Impact Activities</a></button>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('updateimpact', $editimpact->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field" class="font-weight-bold">Category</label>
                                    <select class="form-control" name="category_id">
                                        @if ($editimpact->category_id == 1)
                                        <option selected value="{{ $editimpact->category_id }}">Books</option>
                                        @elseif ($editimpact->category_id == 2)
                                        <option selected value="{{ $editimpact->category_id }}">Book Chapters</option>
                                        @elseif ($editimpact->category_id == 3)
                                        <option selected value="{{ $editimpact->category_id }}">Book Series</option>
                                        @elseif ($editimpact->category_id == 4)
                                        <option selected value="{{ $editimpact->category_id }}">Refereed Journal Articles</option>
                                        @elseif ($editimpact->category_id == 5)
                                        <option selected value="{{ $editimpact->category_id }}">Refereed Conference Papers</option>
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
                                    <textarea class="form-control" cols="10" rows="4" name="activity">{{ $editimpact->activity }}</textarea>
                                </div>
                            </div><br>
                            <div class="row" align="right">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Update Activity</button>
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