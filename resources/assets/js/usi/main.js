
var apiBaseUrl = "";
var api= "";
var apiUser = "";
var apiPass = "";
$(document).ready(function() {
    $.ajax({ data: "GET",
        url: "/usi/getAuth",
        async: false,
        success : function(data)
        {
            var r = JSON.parse(data);
                apiUser = r.usr;
                apiPass = r.pwd;
                apiBaseUrl = r.url;
        },
        error: function() {
            alert('Error occured. please check your credentials.');
        }
    });
});

/*Create Basic Auth*/
var basicAuth;

function getAuth() {

    if (!basicAuth)
        basicAuth = 'Basic ' + btoa(apiUser + ":" + apiPass);
    return basicAuth;
}

/*Call API*/
function callApi(event, apiEndpoint) {
    alert('test');
    alert(api);
    if (event)
        event.preventDefault();

    if (apiEndpoint === undefined) {
        var formdata = $("form").serializeJSON();
        console.log("REQUEST:", formdata);

        $("div#divLoading").addClass('show');
        $.ajax({
            type: 'POST',
            url: apiBaseUrl + api,
            contentType: "application/json;charset=utf-8",
            data: JSON.stringify(formdata),
            success:function(formdata){ },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Authorization', getAuth());
            }
        }).then(function(data, status, jqxhr) {
            console.log("RESPONSE:", data);
            if (api == "config") {
                showAlert(data.message, (data.status == "SUCCESS" ? "success" : "danger"), "");
            } else {
                showResult(formdata, data);
                $("div#divLoading").removeClass();
            }
        }, function(data) {
            $("#responseDataTxt").html(JSON.stringify(data.responseJSON, null, 4));
        });
    } else {
        $.ajax({
            type: 'GET',
            url: apiBaseUrl + apiEndpoint,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Authorization', getAuth());
            }
        }).then(function(data, status, jqxhr) {
            showResult(apiEndpoint, data);
        });
    }

    return false;
}

/*Duplicate clonable class.*/
function add(event) {
    event.preventDefault();
    var myClone = $(".cloneable").clone();
    /*Uncomment to clear clone data*/
    /*myClone.find("input").val("");*/

    /*Increment recordId*/
    myClone.find(".recordId").val($(".cloneable").length + 1);
    $(".parent-container").append('<hr />');
    myClone.appendTo(".parent-container");
}

/*Display Request and Response on the screen*/
function showResult(req, res) {
    /*$("#requestDataTxt").html(JSON.stringify(req, null, 4));*/
    /*$("#responseDataTxt").html(JSON.stringify(res, null, 4));*/

    switch (api) {
        case 'verify':
            console.log(res);
            $("#usistatus").html('USI ' + '<b>' + JSON.stringify(res["usi"]) + '</b>' + ' is ' + res["usistatus"]);
            $("#firstname").html('Firstname is ' + JSON.stringify(res["firstName"]));
            $("#lastname").html('Lastname is ' + JSON.stringify(res["familyName"]));
            $("#dobirth").html('Date of Birth is ' + JSON.stringify(res["dateOfBirth"]));
            $("#erorInfo").html('Error : ' + JSON.stringify(res)); /*["errorInfo"]["message"]));*/
            $('#verification_modal').modal('show');
            break;
        case 'locate':
            $("#res_result").html('Result: ' + JSON.stringify(res["result"]));
            $("#res_usi").html('USI: ' + JSON.stringify(res["usi"]));
            $("#res_contact_details").html('Message: ' + JSON.stringify(res["contactDetailsMessage"]));
            $('#search_modal').modal('show');
            break;
        case 'create':
            $("#proc_result").html('Process Date: ' + JSON.stringify(res["application"]["processedDate"]));
            $("#app_result").html('App ID: ' + JSON.stringify(res["application"]["applicationId"]));
            $("#resp_result").html('Result: ' + JSON.stringify(res["application"]["result"]));
            $("#doc_result").html('Doc Verified: ' + JSON.stringify(res["application"]["identityDocumentVerified"]));
            $("#usi_result").html('USI: ' + JSON.stringify(res["application"]["usi"]));
            if (res["application"]["errors"]["error"][0] = 0) {
                $("#err1_result").html('Error Code: ' + JSON.stringify(res["application"]["errors"]["error"][0]["code"]));
                $("#err2_result").html('Error Message: ' + JSON.stringify(res["application"]["errors"]["error"][0]["message"]));
            } else {
                $("#err1_result").html('');
                $("#err2_result").html('');
            }
            $('#create_modal').modal('show');
            break;
        default:
            alert('USI result');
    }

}

/*Fetch config from API*/
function loadConfig() {
    $.ajax({
        type: 'GET',
        url: apiBaseUrl + "config",
        beforeSend: function(xhr) {
            xhr.setRequestHeader('Authorization', getAuth());
        }
    }).then(function(data, status, jqxhr) {
        $("input").each(function() {
            $(this).val(data[$(this).attr('name')]);
        });
    });
}

/*Show Alert Message*/
function showAlert(msg, flashKind = "success", msgTitle = "", autoClose = true) {
    /*Go To top of page*/
    $('html, body').animate({ scrollTop: 0 }, 'fast');

    var myAlertMsg = "<div id='alertMsgDiv' class='alert alert-" + flashKind + "' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>" + msgTitle + "</strong>&nbsp;&nbsp;" + msg + "</div>";

    $("#alertMsg").html(myAlertMsg);
    if (autoClose) {
        window.setTimeout(function() {
            $("#alertMsgDiv").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    }
}

/*Handle page change*/
/*$(".apiPage").click(function() {
 $(".main-content").load($(this).attr('id') + ".html");
 });*/

$('.form-submit').on('click', function () {
    var $form = $(this).closest('form').attr('id');
    /*var formId = $form.attr('id');*/
    console.log($form);
    api = $form;
    /*var te = $('#btnCreate').prop("disabled", true);*/
});

$("#usi").focusout(function(){
    var notf = $('#notif');
    if($(this).val().length<10){
        /*console.log("USI length must be of 10 characters");*/
        notf.html('USI requires length of 10 characters');
        $(":submit").attr("disabled", true);
        return false;
    } else {
        notf.html('');
        $(":submit").removeAttr("disabled");
    }
});
