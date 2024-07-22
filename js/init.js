$(document).ready(function () {
    $('.btn-login').click(function (e) { 
        window.location.href = "./php/log_in.php";
    });

    $('.btn-signup').click(function (e) { 
        window.location.href = "./php/sign_up.php";
    });
});