
  	$(document).ready(function() {
// logs user out
var logOut = document.getElementById('logout');
logOut.addEventListener('click', logout, false);

function logout() {
	location.href = "logout.php";
}




// shows the register form
function toggle(){
var show = document.getElementById("register");
var clear = document.getElementById("clear");
function shown() {
	show.style.display = "block";
	clear.style.display = "block";
}
shown();

}

document.getElementById("create").addEventListener("click", toggle, false);

// closes the register form 
function tog(){
	var hide = document.getElementById("register");
	function hide(){
         hide.style.display = "none";
	}
	hide();
}
document.getElementById("clear").addEventListener("click", tog, false);


// verifies that user has choosen a role type
function valuation() {
	var checkboxs=document.getElementsByName("staff");
	var okay=false;
	for(var i=0,l=checkboxs.length;i<l;i++) {
		if(checkboxs[i].checked) {
			okay=true;
			break;
		}
	}
	if (!okay) { 
		alert("Pls choose an option before proceeding!!");
		event.preventDefault();
	} else {
	}
}




// check mail spelling
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


// verifies that passwords match
$("#pwd2").blur(function () {
	
	var pwd1= $("#pwd1").val();
	var pwd2 = $("#pwd2").val();
	console.log(pwd1);
	 console.log(pwd2);



	if (pwd1 == pwd2) {
	}
	else {
		alert("Passwords do not match!!");
		event.preventDefault();
	}
	});



$("#submit").submit(function (event) {
				event.preventDefault();
				alert("hi");
				var fname = $("#fname").val();
				var lname = $("#lname").val();
                var username = $("#username").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var gender = $("input[name='gender']:checked").val();
                var role = $("input[name='staff_type']:checked").val();
                var designation = $("#dept option:selected").val();


				$.post("create_user.php", {
                    
                        first_name : fname,
                        last_name : lname,
                        username : username,
                        email : email,
                        password : password,
                        role : role,
                        department : designation,
                        sex : gender

				},  function(data,status){
					/**console.log(login, password, role);
					var d = new Date();
                    var exp = d.setTime(d.getTime() + (60*5));

					console.log(document.cookie = "username= " + " login ; expires = " + exp);
**/
			
					$("#ajax").html(data);
					
			});
			});

 });
