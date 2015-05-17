<?php include 'bootstrap.php'; ?>
<?php 
// Clear the session 
unset($_SESSION['auth']); 
session_destroy(); 
?>
<?php include 'includes/header.php'; ?>
    <div id = "login">
        <div class="content">
            <h1>Good Bye!</h1>   
            <p>You have logged out successfully!</p>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
