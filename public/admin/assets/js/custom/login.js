$(document).ready(function () {
    $('#btnLogIn').on('click', function (event) {
        event.preventDefault();
        var data = $('#loginForm').serialize();
        $.ajax({
            type: "POST",
            url: "/logAdmin",
            data: data,
            success: function (response) {
                console.log(response);
                if (response.status == '200') {
                    location.href = response.url;
                } else {
                    alert('Wrong Login Details....');
                }
            },
            error: function (error) {
                console.log(error);
            },
        });

    });
});
