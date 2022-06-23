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
                    <button class="btn btn-info btn-sm"><a href="{{ url('/admin/publication-page') }}" class="text-white">Back to Publication</a></button>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ url('/admin/save-publication') }}">
                            @csrf
                            <div id="dynamic-field-1" class="form-group dynamic-field">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="field" class="font-weight-bold">Category</label>
                                        <select class="form-control" name="category_id[]">
                                            <option selected disabled>Select Option</option>
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
                                        <textarea class="form-control" cols="10" rows="4" name="content[]"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix mt-4">
                                <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Add More Field</button>
                                <button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fas fa-minus fa-fw"></i> Remove Field</button>
                            </div><br><br>
                            <div class="row">
                                <button class="btn btn-primary btn-block" type="submit">Add Publications</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var buttonAdd = $("#add-button");
        var buttonRemove = $("#remove-button");
        var className = ".dynamic-field";
        var count = 0;
        var field = "";
        var maxFields = 5;

        function totalFields() {
            return $(className).length;
        }

        function addNewField() {
            count = totalFields() + 1;
            field = $("#dynamic-field-1").clone();
            field.attr("id", "dynamic-field-" + count);
            field.children("label").text("Field " + count);
            field.find("input").val("");
            $(className + ":last").after($(field));
        }

        function removeLastField() {
            if (totalFields() > 1) {
                $(className + ":last").remove();
            }
        }

        function enableButtonRemove() {
            if (totalFields() === 2) {
                buttonRemove.removeAttr("disabled");
                buttonRemove.addClass("shadow-sm");
            }
        }

        function disableButtonRemove() {
            if (totalFields() === 1) {
                buttonRemove.attr("disabled", "disabled");
                buttonRemove.removeClass("shadow-sm");
            }
        }

        function disableButtonAdd() {
            if (totalFields() === maxFields) {
                buttonAdd.attr("disabled", "disabled");
                buttonAdd.removeClass("shadow-sm");
            }
        }

        function enableButtonAdd() {
            if (totalFields() === (maxFields - 1)) {
                buttonAdd.removeAttr("disabled");
                buttonAdd.addClass("shadow-sm");
            }
        }

        buttonAdd.click(function() {
            addNewField();
            enableButtonRemove();
            disableButtonAdd();
        });

        buttonRemove.click(function() {
            removeLastField();
            disableButtonRemove();
            enableButtonAdd();
        });
    });
</script>
@endsection