<?php include 'bootstrap.php'; ?>
<?php 
    // If not logged in 
    if (empty($_SESSION['auth'])) {
        // redirect to login.php
        header('location:login.php'); 
    }   

    // Fetching groceries
    // Query statement 
    $sql = "SELECT `id`, `name`, `qty` FROM `items`";

    // Run query statement 
    $result = mysql_query($sql, $link) 
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    <div id = "content">
        <h1>Grocery List</h2>   
<?php 
if(!empty($result)) { 
    // Start Table tag 
    print '<table>';  
    
    // Loop through each row in the database 
    // Store each row as an associative array 
    while ($row = mysql_fetch_assoc($result)) {
        // Opening row tag 
        print '<tr>'; 
        
        // Output the name
        print '<td>' . $row['name'] . '</td>';
        
        // Output quantity 
        print '<td>' . $row['qty'] . '</td>'; 
       
        // Output Edit/Delete links with query strings. 
        print '<td>';
        print '<a href = "">Edit</a> | '; 
        print '<a href = "">Delete</a>'; 
        print '</td>'; 
        // Closing row tag 
        print '</tr>'; 
            
    }
    // Closing table tag 
    print '</table>'; 
}
?> 
    </div>
<?php include 'includes/footer.php'; ?>
