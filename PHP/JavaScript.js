
function form() {
    var name = document.forms["regform"]["Name"];
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;

    var email = document.forms["regform"]["Email"];
    var reg = /^[a-z-0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9-]+)*$/;
    var mail = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!outlook.com)([\w-]+\.)+[\w-]{2,4})?$/

    var password = document.forms["regform"]["Password"];
    var pass=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

    var gender = document.forms["regform"]["gender"];

    var phone =  document.forms["regform"]["Telephone"];
    var phoneno = /^\d{10}$/;
    
    var address = document.forms["regform"]["Your City"];

    var subject = document.forms["regform"]["Subject"];


    if (!name.value.match(regName)) {
        window.alert("Please enter your full name with space(first & last name).");
        name.focus();
        return false;
    }
    
    if (!email.value.match(reg)){
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false; 
    }
     if (!email.value.match(mail)){
        window.alert("invalid e-mail address.");
        email.focus();
        return false; 
 }
     if (!password.value.match(pass)) {
        window.alert("Please enter valid password");
        password.focus();
        return false;
    }
     if (gender.selectedIndex < 1) {
        alert("Please select your gender.");
        gender.focus();
        return false;
    }

    if (!phone.value.match(phoneno)) {
        window.alert("Please enter 10 digit contact number.");
        phone.focus();
        return false;
    }
    if (address.value == "") {
        window.alert("Please write your city!!");
        address.focus();
        return false;
    }

    if (subject.selectedIndex < 1) {
        alert("Please select your course.");
        subject.focus();
        return false;
    }

    return true;
} 