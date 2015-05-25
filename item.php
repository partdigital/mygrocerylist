<?php include 'bootstrap.php'; ?>
<?php 
    // If not logged in 
    if (empty($_SESSION['auth'])) {
        // redirect to login.php
        header('location:login.php'); 
    }   

    // Initialize the $formValues array 
    $formValues = array(); 

    // If query string is set 
    if (!empty($_GET['id'])) {

        // Select that row from the database 
        $sql = 'SELECT `name`,`qty` FROM `items` WHERE `id` = "' . $_GET['id'] . '"'; 
        $result = mysql_query($sql); 

        // Loop through results (will only have one record) 
        while($row = mysql_fetch_assoc($result)) {
            
            // Overwrite $formValues array with database values 
            $formValues = $row; 
        }
    }


    // Form submit handler 
    if (!empty($_POST)) {
        
        foreach($_POST as $key => $value) {
            // Sanitize input
            $value = strip_tags($value); 
            
            // Prevent MySQL injection 
            $value = mysql_real_escape_string($value); 
            
            // Save sanitized post values into form array 
            // This array is used to populate the form after form submission. 
            $formValues[$key] = $value; 
        }
        
        // If query string is set them update record 
        if (!empty($_GET['id'])) {
            $sql = 'UPDATE `items` SET 
            `name` = "' .$formValues['name'] . '", 
            `qty` = "' . $formValues['qty'] . '"
            WHERE id = ' . $_GET['id'];  
            
		}
        
        // Run query 
        mysql_query($sql); 
    }
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    <div id = "content">
        <h1>Grocery Item</h1>   
		<form action = "" method = "POST">
			<div>
				<label for = "name">Name:</label>
				<input type = "text" name ="name" value = "<?php if (!empty($formValues['name'])) print $formValues['name']; ?>" size = "45" />
			</div>
			<div>
				<label for = "qty">Quanity</label>
				<input type = "text" name="qty" value = "<?php if (!empty($formValues['qty'])) print $formValues['qty']; ?>" size = "45" />
			</div>
			<input type = "submit" value = "Save Item">
		</form>
    </div>
<?php include 'includes/footer.php'; ?>
