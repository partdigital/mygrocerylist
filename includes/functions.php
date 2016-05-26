<?php 

/**
* Is Authorized Function.
*/ 
function check_is_authorized() {
    // If not logged in 
    if (empty($_SESSION['auth'])) {
        // redirect to login.php
        header('location:login.php'); 
    }  
}

/**
* Render error message 
*/
function render_error_message($msg) {
     print '<span style = "color:red">' . $msg .'</span>';  
}