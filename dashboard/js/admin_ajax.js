$("#submit").submit(function (event) {
				event.preventDefault();
				
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
