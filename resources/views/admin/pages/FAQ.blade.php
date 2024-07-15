@extends('admin.layout.app')
@section('title', 'Department')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Department </h3>
        <button type="button" id="btnSave" style="float: right" class=" btn btn-gradient-primary me-2">Save</button>
    </div>
    <div class="row">

        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <p class="card-description"> Department info </p>
                    <form id="form">
                        <div class="row">
                            <input type="hidden" id="hiddenId" name="id">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Question</label>
                                    <input type="text" class="form-control" id="question" name="question"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Answer</label>
                                    <textarea type="text" class="form-control" id="answer" name="answer" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- DataTable -->
    <script src="{{ url('admin/assets/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/custom/FAQ.js') }}"></script>
@endsection
