<?php include 'bootstrap.php'; ?>
<?php 
// Clear the session 
unset($_SESSION['auth']); 
session_destroy(); 
?>
<?php include 'includes/header.php'; ?>
    <div id = "content">
        <h1>You have logged out!</h1>   
    </div>
<?php include 'includes/footer.php'; ?>
