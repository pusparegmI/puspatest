<!doctype html>
<html lang="en">
<body>
<h1>List of ALL my Book!!!</h1>
<?php
// Connect to database
include("booktest.php");
// Run SQL query
$sql = "SELECT * FROM Book ORDER BY Date_of_release";
$results = mysqli_query($mysqli, $sql);
?>
<table>
<?php while($a_row = mysqli_fetch_assoc($results)):?>
<tr>
<td><?=$a_row['Book_name']?></td>
<td><?=$a_row['genre']?></td>
<td><?=$a_row['price']?></td>
<td><?=$a_row['Date_of_release']?></td>
</tr>
<?php endwhile;?>
</table>
</body>
</html>