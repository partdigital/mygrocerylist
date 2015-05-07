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
