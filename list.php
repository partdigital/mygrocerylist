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
    $result = mysqli_query($db, $sql);  
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    <div id = "content">
        <div class="content">
            <h1>Grocery List</h1>   
<?php 
// Fetch all data. 
$data = mysqli_fetch_all($result, MYSQLI_ASSOC); 

if(!empty($data)) { 
    // Start Table tag 
    print '<table>';  
    
    // Loop through each row in the database 
    // Store each row as an associative array 
    foreach ($data as $row) {
        // Opening row tag 
        print '<tr>'; 
        
        // Output the name
        print '<td>' . $row['name'] . '</td>';
        
        // Output quantity 
        print '<td>' . $row['qty'] . '</td>'; 
       
        // Output Edit/Delete links with query strings. 
        print '<td>';
        print '<a href = "item.php?id=' . $row['id'] . '">Edit</a> | '; 
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
    </div>
<?php include 'includes/footer.php'; ?>
