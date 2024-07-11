console.log('courseList.js loadimng');
var Child_url = '/course?'
var table
$(document).ready(function () {

    $('#btnCreateNew').text('Create New Course')
    $('#btnCreateNew').on('click', function () {
        location.href = Child_url;
    });

     table = $('#table').DataTable({
        responsive: true,
        'columnDefs': [{
            "targets": [0, 1, 2],
            "className": "text-center",

        }],
        "order": [],
        "columns": [
            { "data": "thname" },
            { "data": "thDepartment" },
            { "data": "action" },
        ],
    });

    loadDepartments();
});

function loadDepartments() {
    $.ajax({
        type: 'GET',
        url: '/course/loadDepartments',
        success: function (response) {
            console.log(response);
            if (response.success) {
                var data = response.result.map(function (item) {
                    return {
                        "thname": item.name,
                        "thDepartment": item.code,
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
        url: '/course/delete/' + id,
        success: function (response) {
            console.log(response);

            if (response.success) {
                alert(response.message);
                loadDepartments();
            }
        }, error: function (data) {
            console.log(data);
        }
    });
};

function edit(id) {
    location.href = Child_url + id;
}

