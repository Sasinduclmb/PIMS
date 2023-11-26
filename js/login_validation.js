function validate(){
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;

    if(user == ""){
        swal("Empty Field", "Enter your username to continue", "warning");
        return false;
    }
    if(pass == ""){
        swal("Empty Field", "Enter your password to continue", "warning");
        return false;
    }
    return true;
}