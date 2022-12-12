function printError(id, error) {
    let element = document.getElementById(id);
    element.getElementsByClassName('displayError')[0].innerHTML = error;
}

function validateForm(){
    let formSubmit = true;
    let getRole = document.forms['signupForm']["userType"].value;
    let getId = document.forms['signupForm']["id"].value;
    let getPassword = document.forms['signupForm']["password"].value;
    let getConfirmPassword = document.forms['signupForm']["confirmPassword"].value;
    let getName = document.forms['signupForm']["name"].value;
    let getEmail = document.forms['signupForm']["email"].value;


    if(getRole == 'select'){
        printError('userType', 'Select user type!');
        formSubmit = false;
    }
    if(getId.length == 0) {
        printError('id', 'Id cannot be empty!');
        formSubmit = false;
    }
    if(getPassword.length == 0) {
        printError('password', 'Username cannot be empty!');
        formSubmit = false;
    }
    if(getConfirmPassword.length == 0){
        printError('confirmPassword', 'Confirm Password  cannot be empty!');
        formSubmit = false;
    }
    if(getName.length == 0){
        printError('name', 'Name cannot be empty!');
        formSubmit = false;
    }
    if(getEmail.length == 0){
        printError('email', 'Email cannot be empty!');
        formSubmit = false;
    }

    return formSubmit;
}