console.log('frontBannerList.js loadimng');
var Child_url = '/frontBanner?'
var table
$(document).ready(function () {

    $('#btnCreateNew').text('Create New frontBanner')
    $('#btnCreateNew').on('click', function () {
        location.href = Child_url;
    });

     table = $('#table').DataTable({
        responsive: true,
        'columnDefs': [{
            "targets": [0, 1],
            "className": "text-center",

        }],
        "order": [],
        "columns": [
            { "data": "thTitle", "width": "75%" },
            { "data": "action", "width": "25%" },
        ],
    });

    loadfrontBanners();
});

function loadfrontBanners() {
    $.ajax({
        type: 'GET',
        url: '/frontBannerList/loadfrontBanners',
        success: function (response) {
            console.log(response);
            if (response.success) {
                var data = response.result.map(function (item) {
                    return {
                        "thTitle": item.title,
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
        url: '/frontBannerList/delete/' + id,
        success: function (response) {
            console.log(response);

            if (response.success) {
                alert(response.message);
                loadfrontBanners();
            }
        }, error: function (data) {
            console.log(data);
        }
    });
};

function edit(id) {
    location.href = Child_url + id;
}

