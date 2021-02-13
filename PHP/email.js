
function form() {
    var name = document.forms["email"]["Name"];
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;

    var phone =  document.forms["email"]["phoneno"];
    var phoneno = /^\d{10}$/;

    var email = document.forms["email"]["Email"];
    var reg = /^[a-z-0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9-]+)*$/;


    var subject = document.forms["email"]["subject"];


    if (!name.value.match(regName)) {
        window.alert("Please enter your full name with space(first & last name).");
        name.focus();
        return false;
    }
    if (!phone.value.match(phoneno)) {
        window.alert("Please enter 10 digit contact number.");
        phone.focus();
        return false;
    }
    if (!email.value.match(reg)){
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false; 
    }
     if (subject.value =="") {
        window.alert("Please enter subject");
        subject.focus();
        return false;
    }
    
    
    return true;
} 