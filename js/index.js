// check mail and name spelling
$("#email").blur(function () {
var mail = $(this).val();
var q = mail.includes(".");

if (q){
}
else{
alert("check your email spelling");
event.preventDefault();
}

var fname = $("#fname").val();
var lname = $("#lname").val();
var fullName = fname + lname;
var regex = /\d/g;

if (regex.test(fullName)){
	alert("Your name cannot have numbers, kindly check and try again");
	event.preventDefault();
}
	else{
		
	}
});



