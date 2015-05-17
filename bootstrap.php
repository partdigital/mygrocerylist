<?php
// Start session 
session_start(); 

// Config
include 'config.php'; 

// Database  
// Connect to mysql server and select the database. 
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE); 