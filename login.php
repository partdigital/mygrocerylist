<?php include 'bootstrap.php'; ?>
<?php 
	// If form was submitted 
	if (!empty($_POST)) {

		// Sanitize input 
		foreach ($_POST as $key => $value) {
			$_POST[$key] = strip_tags($value); 
		}
		
		// Encrypt the password 
		$password = md5($_POST['password']); 

		// Username
		$username = $_POST['username']; 

		// Build query 
		$query = mysql_query('SELECT * FROM users WHERE `username` = "'.$username.'" AND `password` = "'.$password.'"'); 	

		// Get result 
		if ($query) {
			$user_exists = mysql_num_rows($query); 
		}

		// Run the logical operator 
		if (!empty($user_exists)) {

			// Set a session variable  as logged in 
			$_SESSION['auth'] = TRUE; 

			// Redirect to index.php 
			header('location:index.php'); 
		}
	}
?>
<?php include 'includes/header.php'; ?>
    <div id = "content">
        <h1>Log In</h2>   
		<form action = "" method = "POST">
			<div>
				<label for = "name">User name:</label>
				<input type = "text" name = "username" value = "" size = "45" />
			</div>
			<div>
				<label for = "password">Password:</label>
				<input type = "password" name = "password" value = "" size = "45" />
			</div>
			<input type = "submit" value = "Log In">
		</form>
    </div>
<?php include 'includes/footer.php'; ?>
