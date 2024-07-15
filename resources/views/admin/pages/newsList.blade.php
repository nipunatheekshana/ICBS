@extends('admin.layout.app')
@section('title', 'Teacher List')
@section('head')
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/dataTable/datatables.min.css') }}" type="text/css">
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> News List </h3>
        <button type="submit" id="btnCreateNew" style="float: right" class=" btn btn-gradient-primary me-2">Create New</button>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table w-100" id="table">
                            <thead>
                                <tr>
                                    <th class="thTitle"> Title </th>
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
@endsection
@section('script')
    <!-- DataTable -->
    <script src="{{ url('admin/assets/vendors/dataTable/datatables.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/custom/newsList.js') }}"></script>
@endsection
