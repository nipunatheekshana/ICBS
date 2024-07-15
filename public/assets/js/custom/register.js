console.log('register .js loadimng');
parent_url = '/login'
$(document).ready(function () {
    $('#btnSignUp').on('click', function () {
        var form = $('#registerForm');
        var data = new FormData(form.get(0));
        var url = '/registerStudent';
        saveOrUpdate(url, data, form);
    });
});
