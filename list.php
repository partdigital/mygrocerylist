<?php include 'bootstrap.php'; ?>
<?php 
    // If not logged in 
    if (empty($_SESSION['auth'])) {
        // redirect to login.php
        header('location:login.php'); 
    }   
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    <div id = "content">
        <div class="content">
            <h1>Grocery List</h1>   
            <table>
                <tr>
                    <td>Carrots</td>
                    <td>1 bag</td>
                    <td>Edit / Delete</td>
                </tr>
                <tr>
                    <td>Bread</td>
                    <td>1 loaf </td>
                    <td>Edit / Delete</td>
                </tr>
            </table>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
