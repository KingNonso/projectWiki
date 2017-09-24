$('#submitLogin').on('click', function(){
    var username = $("#username").val();
    var password = $("#password").val();
    var news_id = $("#news_id").val();

    queryString = '&username=' + username + '&password=' + password;
    var url = '../../portfolio/login/'+news_id;
    jQuery.ajax({
        url: url,
        data: queryString,
        type: "POST",
        success: function (data) {
            $("#loginForm").hide();
            $("#comment_form").hide();
            $("#addCommentHere").fadeIn().after(data);

            //$("#post_message").val('');
            //$('#comment_form').fadeOut();


        },
        error: function () {
        }
    });
    return false;
});
function toggle_visibility(show, hide) {
    $("div#"+hide).hide();
    $("div#" + show).slideDown();
    return false;
}



function comment()   {
    var comment = $("#comment").val();
    var phone = $("#phone").val();
    var full_name = $("#fullname").val();
    var person_id = $("#person_id").val();
    var news_id = $("#news_id").val();
    var email = $("#email").val();

    queryString = '&comment=' + comment + '&phone=' + phone + '&full_name=' + full_name+ '&news_id=' + news_id+ '&email=' + email;
    var url = '../../portfolio/comment/'+person_id;

    jQuery.ajax({
        url: url,
        data: queryString,
        type: "POST",
        success: function (data) {
            $("#commenttext").replaceWith(data);

        },
        error: function () {
        }
    });
    return false;
}

$('#anonymous').on('click', function(){
    var full_name = $("#name").val();
    var phone = $("#anonymous_phone").val();
    var comment = $("#anonymous_comment").val();
    var news_id = $("#news_id").val();
    var email = $("#anonymous_email").val();
    queryString = '&comment=' + comment + '&phone=' + phone + '&full_name=' + full_name+ '&news_id=' + news_id+ '&email=' + email;
    var url = '../../portfolio/comment/';//+comment+'/'+person;

    jQuery.ajax({
        url: url,
        data: queryString,
        type: "POST",
        success: function (data) {
            $("#loginForm").hide();
            $("#comment_form").hide();
            $("#addCommentHere").fadeIn().after(data);

        },
        error: function () {
        }
    });

    return false;
});


