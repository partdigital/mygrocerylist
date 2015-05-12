<?php include 'bootstrap.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    <div id = "content">
        <h1>Grocery Item</h2>   
		<form action = "">
			<div>
				<label for = "name">Name:</label>
				<input type = "text" name ="name" value = "" size = "45" />
			</div>
			<div>
				<label for = "qty">Quanity</label>
				<input type = "text" name="qty" value = "" size = "45" />
			</div>
			<input type = "submit" value = "Save Item">
		</form>
    </div>
<?php include 'includes/footer.php'; ?>
