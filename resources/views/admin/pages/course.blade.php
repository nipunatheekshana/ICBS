@extends('admin.layout.app')
@section('title', 'Department')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Course </h3>
        <button type="button" id="btnSave" style="float: right" class=" btn btn-gradient-primary me-2">Save</button>
    </div>
    <div class="row">

        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <p class="card-description"> Course info </p>
                    <form id="form">
                        <div class="row">
                            <input type="hidden" id="hiddenId" name="id">
                            <div class="col-md-6">
                                <img id="previewImage" src="admin/assets/images/dashboard/img_1.jpg"
                                    class="mb-2 mw-100 rounded" alt="image">
                                <div class="form-group">
                                    {{-- <label for="exampleInputImage">Image</label> --}}
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectDepartment">Department</label>
                                    <select class="form-select" id="department_id" name="department_id"></select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPrice">Price</label>
                                    <input type="number" step="0.01" class="form-control" id="price" name="price"
                                        placeholder="Price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputDuration">Duration</label>
                                    <input type="text" class="form-control" id="duration" name="duration"
                                        placeholder="Duration">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputMinStudents">Minimum Students</label>
                                    <input type="number" class="form-control" id="min_students" name="min_students"
                                        placeholder="Minimum Students">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSkillLevel">Skill Level</label>
                                    <input type="text" class="form-control" id="skill_level" name="skill_level"
                                        placeholder="Skill Level">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputLanguage">Language</label>
                                    <input type="text" class="form-control" id="language" name="language"
                                        placeholder="Language">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputDescription">Description</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputCurriculum">Curriculum</label>
                                    <textarea class="form-control" id="curriculum" name="curriculum" placeholder="Curriculum"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputCareerPath">Career Path</label>
                                    <textarea class="form-control" id="career_path" name="career_path" placeholder="Career Path"></textarea>
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
    <script src="{{ url('admin/assets/js/custom/department.js') }}"></script>
@endsection
