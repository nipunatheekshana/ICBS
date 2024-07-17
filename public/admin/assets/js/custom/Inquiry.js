console.log('inquiry .js loadimng');
var parent_url = '/inquiryList'
$(document).ready(function () {

    $('#btnSave').on('click', function () {
        var form = $('#form');
        var data = new FormData(form.get(0));
        var url = $('#btnSave').text().trim() === 'Save' ? '/inquiry/save' : '/inquiry/update';
        saveOrUpdate(url, data, form);
    });


    loadinquiry();
});


function loadinquiry() {
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
            url: "/inquiry/loadinquiry/" + id,
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
                    $('#phone').val(data.phone);
                    $('#course').val(data.course);
                }

            },
            error: function (error) {
                console.log(error);
            },
        });
    }

}

