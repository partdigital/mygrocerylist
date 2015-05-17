<?php 
	$menu = array(
		'index.php' => 'Home',
		'item.php' => 'Add Grocery Item',
		'list.php' => 'List Grocery Items',
		'logout.php' => 'Log Out',
	); 
?>
<div id = "left-column">
<?php 
	// If menu array isn't empty 
	if (!empty($menu)) {
		print '<ul>'; 
		// Loop through each item
		foreach ($menu as $url => $title) {
			// Print that item as a link 
			print '<li><a href = "'.$url.'">'.$title.'</a></li>';
		}
		print '</ul>'; 
	}
?>
</div>
