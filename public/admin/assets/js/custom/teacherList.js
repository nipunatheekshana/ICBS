console.log('TeacherList.js loadimng');
var Child_url = '/teacher?'
var table
$(document).ready(function () {

    $('#btnCreateNew').text('Create New Teacher')
    $('#btnCreateNew').on('click', function () {
        location.href = Child_url;
    });

     table = $('#table').DataTable({
        responsive: true,
        'columnDefs': [{
            "targets": [0, 1, 2,3],
            "className": "text-center",

        }],
        "order": [],
        "columns": [
            { "data": "thname" },
            { "data": "thdesignation" },
            { "data": "themail" },
            { "data": "action" },
        ],
    });

    loadTeachers();
});

function loadTeachers() {
    $.ajax({
        type: 'GET',
        url: '/teacherList/loadTeachers',
        success: function (response) {
            console.log(response);
            if (response.success) {
                var data = response.result.map(function (item) {
                    return {
                        "thname": item.name,
                        "thdesignation": item.designation,
                        "themail": item.email,
                        "action": '<i class="fa fa-pencil-square-o fa-2x text-primary m-2" aria-hidden="true" onclick="edit(' + item.id + ')"></i>' +
                                  '<i class="fa fa-trash fa-2x text-danger" aria-hidden="true"  onclick="_delete(' + item.id + ')"></i>'
                    };
                });

                table.clear().rows.add(data).draw();
            }
        },
        error: function () {
            console.log('something went wrong');
        }
    });
};

function _delete(id) {
    $.ajax({
        type: 'DELETE',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: '/teacherList/delete/' + id,
        success: function (response) {
            console.log(response);

            if (response.success) {
                toastr.success(response.message);
                loadAssetCategories();
            }
        }, error: function (data) {
            console.log(data);
        }
    });
};

function edit(id) {
    location.href = Child_url + id;
}

