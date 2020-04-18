<body>
<p><center> Hey <?php echo $_SESSION['fullName'] ?>, welcome!!<br><br>
		 You are logged in as <?php echo $_SESSION['role'] ?><br><br><br>
          User ID: <?php echo $_SESSION['ID']; ?> <br><br>

		 Date Registered: <?php echo $_SESSION['reg_time'] ?>;<br><br>
		 Login timestamp: <?php echo $_SESSION['login']; ?>

		 <br><br>
		 Your Department: <?php echo $_SESSION['designation'] ?>;
		 </p></center>

		 <button id="logout" class="red button"> Log Out </button>
		<br>


<br><br>
<a href="../index.php">Home</a>&nbsp|
<<<<<<< HEAD
<a href="../forgot_pwd.php">Reset Password&nbsp|</a>
=======
<a href="../forgot_pwd.php">Reset Password</a>
>>>>>>> e99508bb97444cc5a0d35959bac4bb3940dd9711

		<script type="text/javascript">
			var logOut = document.getElementById('logout');

			logOut.addEventListener('click', logout, false);

   function logout() {
	location.href = "logout.php";
}

		</script>

	</body>
