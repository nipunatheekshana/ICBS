console.log('news .js loadimng');
var parent_url = '/newsList'
$(document).ready(function () {

    $('#btnSave').on('click', function () {
        var form = $('#form');
        var data = new FormData(form.get(0));
        var url = $('#btnSave').text().trim() === 'Save' ? '/news/save' : '/news/update';
        saveOrUpdate(url, data, form);
    });

    $('#image').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
    loadnews();
});


function loadnews() {
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
            url: "/news/loadnews/" + id,
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

                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#previewImage').attr('src', 'uploads/' + data.image);

                }

            },
            error: function (error) {
                console.log(error);
            },
        });
    }

}

