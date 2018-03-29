function logout() {
    var doLogout = confirm('Do you wanna logout?');
    if (doLogout) {
        $.ajax({
            method: 'GET',
            url: HOSTNAME + 'admin/user/logout',
            success: function(response){
                if(response.status == 200){
                    window.location.href = HOSTNAME + 'admin/user/login';
                }
            },
            error: function(jqXHR, exception){
                console.log(errorHandle(jqXHR, exception));
            }
        });
    }
}

function errorHandle(jqXHR, exception){
    if (jqXHR.status === 0) {
        return ('Not connected.\nPlease verify your network connection.');
    } else if (jqXHR.status == 404) {
        return ('The requested page not found.');
    }  else if (jqXHR.status == 401) {
        return ('Sorry!! You session has expired. Please login to continue access.');
    } else if (jqXHR.status == 500) {
        return ('Internal Server Error.');
    } else if (exception === 'parsererror') {
        return ('Requested JSON parse failed.');
    } else if (exception === 'timeout') {
        return ('Time out error.');
    } else if (exception === 'abort') {
        return ('Ajax request aborted.');
    }

    return ('Unknown error occurred. Please try again.');
}