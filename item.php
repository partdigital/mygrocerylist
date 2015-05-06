<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Grocery List</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="header">
        <div class="content">
            <h2>MyGroceryList Application</h2>
        </div>
    </div>
    <div id = "left-column">
        <div class="content">
            <ul>
                <li><a href = "index.php">Home</a></li>
                <li><a href = "item.php">Add Grocery Item</a></li>
                <li><a href = "list.php">List Grocery Items</a></li>
                <li><a href = "logout.php">Log Out</a></li>
            </ul>
        </div>
    </div>
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
    <div id = "footer"></div>
</body>
</html>
