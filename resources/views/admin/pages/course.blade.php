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
                            <hr>
                            {{-- acordination bigin --}}
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Description
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputLanguage">Description Title</label>
                                                        <input type="text" class="form-control" id="description_title"
                                                            name="description_title" placeholder="Language">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputDescription">Description</label>
                                                        <textarea class="form-control" id="description" name="description" placeholder="Description" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="exampleInputLanguage">Description Bullet Point</label>
                                                        <input type="text" class="form-control"
                                                            id="description_bullet_point" name="description_bullet_oint"
                                                            placeholder="Bullet Point">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" id="btnAddBulletPoint"
                                                        class="btn btn-gradient-primary btn-rounded btn-icon mt-4">
                                                        <i class="mdi mdi-plus"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table w-100" id="tableDiscriptionBulletPoints">
                                                    <thead>
                                                        <tr>
                                                            <th class="thBulletPoint"> Bullet Point </th>
                                                            <th class="action"> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Curriculum
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputLanguage">Curriculum Title</label>
                                                        <input type="text" class="form-control" id="curriculum_title"
                                                            name="curriculum_title" placeholder="Language">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputCurriculum">Curriculum</label>
                                                        <textarea class="form-control" id="curriculum" name="curriculum" placeholder="Curriculum" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="exampleInputLanguage">Course Module</label>
                                                        <input type="text" class="form-control"
                                                            id="course_module" name="course_module"
                                                            placeholder="Bullet Point">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" id="btnAddModule"
                                                        class="btn btn-gradient-primary btn-rounded btn-icon mt-4">
                                                        <i class="mdi mdi-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table w-100" id="tableModules">
                                                    <thead>
                                                        <tr>
                                                            <th class="thModule"> Module </th>
                                                            <th class="action"> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Career Path
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputLanguage">Career Path Title</label>
                                                        <input type="text" class="form-control" id="career_path_title"
                                                            name="career_path_title" placeholder="Language">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputCareerPath">Career Path Discription</label>
                                                        <textarea class="form-control" id="career_path" name="career_path" placeholder="Career Path" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label for="exampleInputLanguage">Career Path</label>
                                                        <input type="text" class="form-control"
                                                            id="course_career_path"
                                                            placeholder="Bullet Point">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" id="btnAddCareerPath"
                                                        class="btn btn-gradient-primary btn-rounded btn-icon mt-4">
                                                        <i class="mdi mdi-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table w-100" id="tableCareerPath">
                                                    <thead>
                                                        <tr>
                                                            <th class="thCareerPath"> Career Path </th>
                                                            <th class="action"> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- acordination end --}}




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
    <script src="{{ url('admin/assets/js/custom/course.js') }}"></script>
@endsection
