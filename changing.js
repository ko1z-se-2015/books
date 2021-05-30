$(function () {
    var info = $(".information");
    var pass = $(".change_password");
    var email = $(".change_email");

    var link_info = $("#info");
    var link_pass = $("#pass");
    var link_email = $("#email");


    link_info.click(function () {
        info.css('display','block')
        pass.css('display','none')
        email.css('display','none')
    })
    link_pass.click(function () {
        info.css('display','none')
        pass.css('display','block')
        email.css('display','none')
    })
    link_email.click(function () {
        info.css('display','none')
        pass.css('display','none')
        email.css('display','block')
    })
})