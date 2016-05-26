<?php include 'bootstrap.php'; ?>
<?php 
if (!empty($_GET['id'])) {
     $sql = "DELETE FROM `items` WHERE `id` = " . $_GET['id'];    
     mysqli_query($db,$sql); 
}
?>
<?php include 'includes/header.php'; ?>
    <div id = "login">
        <div class="content">
            <h1>Item Deleted Successfully</h1>   
            <p>BOOM! Gone!</p>
            <p><a href = "list.php">Go Back</a></p>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
