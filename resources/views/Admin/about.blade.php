@extends('Layout.app2')
@section('title')
About Page Details || Jaymitra Universe
@endsection
@section('content')

<main class="content">
    <div class="container-fluid">
        @include('include.success')
        @include('include.error')
        @include('include.warning')
        <div class="header">
            <h1 class="header-title">
                About Page
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                </ol>
                <div align="right">
                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#profile">Update Profile Section</button>
                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#sizedModalLg">Add New Bio Section</button>
                </div>
            </nav>
            <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Profile Section</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('updateprofile', $profilesection->id) }}">
                            <div class="modal-body">
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Fullname:</label>
                                            <input type="text" class="form-control" name="name" placeholder="John Doe" value="{{ $profilesection->name }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email:</label>
                                            <input type="text" class="form-control" name="email" placeholder="example@email.com" value="{{ $profilesection->email }}">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Facebook Url:</label>
                                            <input type="text" class="form-control" name="facebookurl" placeholder="https://www.facebook.com/Johndoe/" value="{{ $profilesection->facebookurl }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Linkedin Url:</label>
                                            <input type="text" class="form-control" name="linkedinurl" placeholder="https://www.linkedin.com/in/john-doe-413677113" value="{{ $profilesection->linkedinurl }}">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>About me:</label>
                                            <textarea name="bio" cols="30" rows="10" class="form-control">{{ $profilesection->bio }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="sizedModalLg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">About Section</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ url('/admin/save-about-page') }}">
                            <div class="modal-body">
                                @csrf
                                <div class="form-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Title:</label>
                                            <select name="title" class="form-control">
                                                <option selected disabled>Select Title</option>
                                                <option value="CURRENT">CURRENT</option>
                                                <option value="BACKGROUND">BACKGROUND</option>
                                                <option value="WRITING">WRITING</option>
                                                <option value="INTERESTS">INTERESTS</option>
                                            </select>
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
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <a href="#" class="mr-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a>

                        </div>
                        <h5 class="card-title mb-0">About Page Section</h5>
                    </div>
                    <div class="card-body">
                        <table id="datatables-clients" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Shortword</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1; ?>
                                @foreach($aboutsection as $about)
                                <tr>
                                    <td>{{ $number }}</td>
                                    <td>{{ $about->title }}</td>
                                    <td>{!! str_limit($about->content, 250) !!}</td>
                                    <td>
                                        <div class="d-inline-block dropdown show">
                                            <a href="#" data-toggle="dropdown" data-display="static">
                                                <i class="align-middle" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('aboutdetails', $about->id) }}">Full Details</a>
                                                <a class="dropdown-item" href="{{ route('aboutedit', $about->id) }}">Edit Details</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{ $about->id }}">Delete</a>
                                            </div>
                                            <!-- modal content -->
                                            <div id="delete{{ $about->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Delete About page Content</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to this content </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">No Cancel</button>
                                                            <a href="{{ route('deleteaboutcontent',$about->id) }}" class="btn btn-info waves-effect waves-light">Yes Delete</a>
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