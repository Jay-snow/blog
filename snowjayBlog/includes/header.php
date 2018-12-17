<?php 

include("includes/config.php");
include("includes/db.php");

$query = "SELECT * FROM categories";

/*Run the query on the stored db variable */
$categories = $db->query($query);

 ?>

<div class="header">
<h1> Snowjay.net </h1>
<?php if( $categories->num_rows > 0) {
	while($row = $categories->fetch_assoc()) {
		?>
		
		
		<a href=""><?php echo $row['text']; ?></a>
	<?php } }  ?>

</div>



