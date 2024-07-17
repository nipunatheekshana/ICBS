console.log('frontBanner .js loadimng');
var parent_url = '/frontBannerList'
$(document).ready(function () {

    $('#btnSave').on('click', function () {
        var form = $('#form');
        var data = new FormData(form.get(0));
        var url = $('#btnSave').text().trim() === 'Save' ? '/frontBanner/save' : '/frontBanner/update';
        saveOrUpdate(url, data, form);
    });

    $('#image').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
    $('#bg_image').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#preview_bg_imageImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
    loadfrontBanner();
});


function loadfrontBanner() {
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
            url: "/frontBanner/loadfrontBanner/" + id,
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
                    $('#slogan').val(data.slogan);
                    $('#previewImage').attr('src', 'uploads/' + data.image);
                    $('#preview_bg_imageImage').attr('src', 'uploads/' + data.bg_image);


                }

            },
            error: function (error) {
                console.log(error);
            },
        });
    }

}

