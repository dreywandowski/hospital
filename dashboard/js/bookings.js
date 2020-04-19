
$(document).ready(function() {
$("#submit").submit(function (event) {
				event.preventDefault();
				

				var date = $("#date").val();
				var time = $("#time").val();
                var nature = $("#nature option:selected").val();
                var complain = $("complain").val();
                var department = $("#dept option:selected").val();


				$.post("create_appointments.php", {
                    
                        date : date,
                        time : time,
                        nature : nature,
                        email : email,
                        complain : complain,
                        role : role,
                        department : department,
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