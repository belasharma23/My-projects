function calculator(e){
	e.preventDefault()
var input1 = document.getElementById("input1").value;
var input2 = document.getElementById("input2").value;
var operator = document.getElementById("operator").value;
console.log(input2)

if (input1.value == "") {
        window.alert("Enter first number ");
        input1.focus();
        return false;
    }
    if (input2.value == "") {
        window.alert("Enter second number ");
        input2.focus();
        return false;
    }

    if (operator.selectedIndex < 1) {
        alert("Choose operator.");
        operator.focus();
        return false;
    }

}