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
        <h1>Grocery List</h2>   
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
<?php include 'includes/footer.php'; ?>
