<?php
// Start session 
session_start(); 

// Config
include 'config.php'; 

// Database  

// Connect to mysql server  
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS); 

// Select the database 
$db = mysql_select_db(DB_DATABASE, $link); 

