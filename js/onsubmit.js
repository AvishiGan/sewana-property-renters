function checkform() {
    if ((document.getElementById("uname").value == "") || (document.getElementById("password").value == "")) {
        // something is wrong
        alert('There is a problem with the  fields');
        return false;
    }

    return true;
}