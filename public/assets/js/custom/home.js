console.log('home .js loadimng');
$(document).ready(function () {

    $('#btnSaveInquiry').on('click', function () {
        var form = $('#inquiryForm');
        var data = new FormData(form.get(0));
        var url =  '/home/saveInquiry';
        saveOrUpdate(url, data, form);
    });
});
