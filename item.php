<?php include 'bootstrap.php'; ?>
<?php check_is_authorized(); ?>
<?php 

    // If query string is set 
    if (!empty($_GET['id'])) {

        // Select that row from the database 
        $sql = 'SELECT `name`,`qty` FROM `items` WHERE `id` = ' . $_GET['id']; 
        //var_dump($sql); exit ;
        $result = mysqli_query($db, $sql); 

        $data = mysqli_fetch_assoc($result); 
    }


    // Form submit handler 
    if (!empty($_POST)) {
        
        foreach($_POST as $key => $value) {
            // Sanitize input
            $value = strip_tags($value); 
            
            // Save sanitized post values into form array 
            // This array is used to populate the form after form submission. 
            $_POST[$key] = $value; 
        }
        
        if (!empty($_POST['name']) && !empty($_POST['qty'])) {
        
            // If query string is set then update record 
            if (!empty($_GET['id'])) {
                $sql = 'UPDATE `items` SET 
                `name` = "' . $_POST['name'] . '",  
                `qty` = "' . $_POST['qty'] . '"
                WHERE id = "' . $_GET['id']. '"';  

                // Run query.
                mysqli_query($db, $sql); 
                header('location:list.php'); 

            // If ID is not set then insert record
            } else {
                $sql = 'INSERT INTO `items` (`name`, `qty`) VALUES ("' . $_POST['name'] . '", "' . $_POST['qty'].'")'; 

                // Run query.
                mysqli_query($db, $sql); 
                header('location:list.php'); 
            }
        } else {
            $error = "Please provide some values.";
        }
        
    }
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    <div id = "content">
        <div class="content">
            <h1>Grocery Item</h1>   
            <?php if (!empty($error)) {
                   render_error_message($error);  
            } ?>
            <form action = "" method = "POST">
                <div>
                    <label for = "name">Name:</label>
                    <input type = "text" name ="name" value = "<?php if (!empty($data['name'])) print $data['name']; ?>" size = "45" />
                </div>
                <div>
                    <label for = "qty">Quanity</label>
                    <input type = "text" name="qty" value = "<?php if (!empty($data['qty'])) print $data['qty']; ?>" size = "45" />
                </div>
                <input type = "submit" value = "Save Item">
            </form>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>