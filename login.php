<?php include 'bootstrap.php'; ?>
<?php 
	// If form was submitted 
	if (!empty($_POST)) {
		
		// Do the submitted username and password match the constants set in config.php?
		if ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {

			// Set a session variable  as logged in 
			$_SESSION['auth'] = TRUE; 

			// Redirect to index.php 
			header('location:index.php'); 
		}
	}
?>
<?php include 'includes/header.php'; ?>
    <div id = "login">
        <div class="content">
            <h1>Log In</h1>   
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
    </div>
<?php include 'includes/footer.php'; ?>