function logout() {
    event.preventDefault();
    document.getElementById('logout-form').submit();
}

function  checkPermission() {
    var checkPermission = document.getElementById("permission").value;
    if(checkPermission == '1'){
        document.getElementById('check-permission').removeAttribute('style');
    }
    else{
        document.getElementById('check-permission').setAttribute('style','display: none');
    }
}
