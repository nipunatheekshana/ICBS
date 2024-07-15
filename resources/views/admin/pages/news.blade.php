@extends('admin.layout.app')
@section('title', 'Department')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> News </h3>
        <button type="button" id="btnSave" style="float: right" class=" btn btn-gradient-primary me-2">Save</button>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin">
            <div class="card">
                <div class="card-body text-center">
                    <img id="previewImage" src="admin/assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                    <form class="form-sample" id="form">
                        <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
        </div>
        <div class="col-md-8 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <input type="hidden" id="hiddenId" name="id">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Write your story"></textarea>

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
    <script src="{{ url('admin/assets/js/custom/news.js') }}"></script>
@endsection
