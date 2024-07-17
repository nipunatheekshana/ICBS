@extends('admin.layout.app')
@section('title', 'Department')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Inquiry </h3>
    </div>
    <div class="row">

        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <p class="card-description"> Inquiry info </p>
                    <form id="form">
                        <div class="row">
                            <input type="hidden" id="hiddenId" name="id">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Course</label>
                                    <input type="text" class="form-control" id="course" name="course"
                                        placeholder="Name">
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
    <script src="{{ url('admin/assets/js/custom/inquiry.js') }}"></script>
@endsection
