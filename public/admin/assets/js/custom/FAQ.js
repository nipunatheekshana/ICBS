console.log('FAQ .js loadimng');
var parent_url = '/FAQList'
$(document).ready(function () {

    $('#btnSave').on('click', function () {
        var form = $('#form');
        var data = new FormData(form.get(0));
        var url = $('#btnSave').text().trim() === 'Save' ? '/FAQ/save' : '/FAQ/update';
        saveOrUpdate(url, data, form);
    });


    loadFAQ();
});


function loadFAQ() {
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
            url: "/FAQ/loadFAQ/" + id,
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

                    $('#question').val(data.question);
                    $('#answer').val(data.answer);
                }

            },
            error: function (error) {
                console.log(error);
            },
        });
    }

}

