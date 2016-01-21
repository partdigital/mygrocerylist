<?php include 'bootstrap.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    <div id = "content">
        <div class="content">
            <h1>Grocery Item</h1>   
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
    </div>
<?php include 'includes/footer.php'; ?>