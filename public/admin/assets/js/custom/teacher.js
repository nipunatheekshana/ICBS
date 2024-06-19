console.log('teacher .js loadimng');
var parent_url = '/teacherList'
$(document).ready(function () {

    $('#btnSave').on('click', function () {
        var form = $('#form');
        var data = new FormData(form.get(0));
        var url = $('#btnSave').text().trim() === 'Save' ? '/teacher/save' : '/teacher/update';
        saveOrUpdate(url, data, form);
    });
    $('#image').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
    loadTeacher();
});


function loadTeacher() {
    if (window.location.search.length > 0) {
        var sPageURL = window.location.search.substring(1);
        var param = sPageURL.split('&');
        var id = param[0];
        if (param.length == 2) {
            console.log('view ')
            $('#btnSave').hide();
        } else {
            console.log('edit ');
            $('#btnSave').text('Update');
        }
    }
    if (id) {
        $.ajax({
            type: "GET",
            url: "/teacher/loadTeacher/" + id,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            async: false,
            success: function (response) {

                if (response.success) {
                    console.log(response.result);
                    var data = response.result;

                    $('#hiddenId').val(data.id);

                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#phone_number').val(data.phone_number);
                    $('#designation').val(data.designation);
                    $('#story').val(data.story);
                    $('#index').val(data.branch_code);
                    $('#previewImage').attr('src', 'uploads/' + data.image);
                    $("#show_on_site").prop("checked", data.show_on_site);
                }

            },
            error: function (error) {
                console.log(error);
            },
        });
    }

}

