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


<br><br><center>
<a href="../index.php">Home</a>&nbsp|
<a href="../forgot_pwd.php">Reset Password&nbsp</a>|
</center>

		<script type="text/javascript">
			var logOut = document.getElementById('logout');

			logOut.addEventListener('click', logout, false);

   function logout() {
	location.href = "logout.php";
}

		</script>

	</body>
