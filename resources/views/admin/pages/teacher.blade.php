@extends('admin.layout.app')
@section('title', 'Teacher')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Teacher </h3>
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
                    <p class="card-description"> Personal info </p>
                    <div class="row">
                        <input type="hidden" id="hiddenId" name="id">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    placeholder="phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>

                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender"
                                                id="genderM" value="male" checked> Male </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender"
                                                id="genderF" value="female"> Female </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="designation">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">Story</label>
                                <textarea class="form-control" id="story" name="story" rows="10" placeholder="Write your story"></textarea>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Site Index</label>
                                <input type="number" class="form-control" id="index" name="index" placeholder="index">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" checked id="show_on_site" name="show_on_site"> Show on site </label>
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
    <script src="{{ url('admin/assets/js/custom/teacher.js') }}"></script>
@endsection
