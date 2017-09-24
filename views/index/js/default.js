
function toggle_visibility(show, hide) {
    $("div#"+hide).hide();
    $("div#" + show).slideDown();
    return false;
}



function callCrudAction(action, id) {
    $("#loaderIcon").show();
    var test = $("#txtmessage" + id).val(); //for cooments
    var main_post = $("#post_message").val(); //for post
    var queryString;
    switch (action) {
        case "post":

            queryString = 'action=' + action + '&message_id=' + id + '&message=' + main_post;
            var url = 'wall/status';
            break;

        case "comment":
            queryString = 'action=' + action + '&message_id=' + id + '&txtmessage=' + test + '&post_id=' + id;
            var url = "wall/comment";
            break;

        case "delete_post":
            alert('post delete');
            queryString = 'action=' + action + '&post_id=' + id;
            var url = "wall/delete/post/"+id;
            break;

        case "delete_comment":
            queryString = 'action=' + action + '&comment_id=' + id;
            var url = "wall/delete/comment/"+id;
            break;

        case "like":
            queryString = 'action=' + action + '&post_id=' + id;
            var url = "wall/like/"+id;
            break;

    }
    jQuery.ajax({
        url: url,
        data: queryString,
        type: "POST",
        success: function (data) {
            switch (action) {

                case "post":
                    $("#firstThing").fadeIn().after(data);
                    $("#post_message").val('');

                    break;
                case "comment":
                    $("#comment-list-box" + id).fadeIn().append(data);
                    $("a#view_comment" + id).text(function (i, origText) {
                        if (isNaN(parseInt(origText))) {
                            return  1 + " Comment";
                        } else {
                            var sum = parseInt(origText) + 1;
                            return sum + " Comments";
                        }

                    });

                    break;
                case "delete_post":
                    $('#main_news_feed' + id).fadeOut();
                    break;

                case "delete_comment":
                    $('#message_' + id).fadeOut();
                    var parents = $('#message_' + id).parentsUntil("#father");
                    var wanted = parents.find('a.view_comment');
                    var link = wanted.attr('id');
                    $("a#" + link).text(function (i, origText) {

                        var sum = parseInt(origText) - 1;
                        return sum + " Comments";

                    });
                    break;

                case "like":
                    //$('#like'+id).html(data);
                    $('#like' + id).replaceWith(data);
                    break;

            }
            $("#txtmessage" + id).val('');

            $("#loaderIcon").hide();
        },
        error: function () {
        }
    });
}


function retrieve_reg_no(action, id) {
    //$("#loaderIcon").show();
    var queryString;
    var url;
    switch (action) {
        case "faculty":
            var faculty = $("#faculty").val(); //for class
            queryString = 'faculty=' + faculty ;
            url = 'reg/retrieve/faculty';
            break;
        case "dept":
            var grad_year = $("#grad_year").val(); //for session
            var department = $("#department").val(); //for name
            queryString = 'grad_year='+grad_year + '&department=' + department ;
            url = 'reg/retrieve/dept';
            break;

    }
    jQuery.ajax({
        url: url,
        data: queryString,
        type: "POST",
        success: function (data) {
            switch (action) {
                case "faculty":
                    $("#department").html(data);

                    break;
                case "dept":
                    $("#find_name").html(data);

                    break;
            }
        },
        error: function () {
        }
    });
}
