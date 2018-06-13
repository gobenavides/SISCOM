<html>
 
<head></head>
 
<body>

<a href='new.html'>Create a new post!</a>


<?php
$con = mysqli_connect('localhost', 'root', '', 'db');
$result = mysqli_query($con, "SELECT * FROM `posts`");
while ($post = mysqli_fetch_assoc($result)){
	$link = "<a href='post.php?id=".$post['id']. "'>";
	echo $link;
	echo "<h1>".$post['title']."</h1>";
	echo "</a>";
	echo "<p>".$post['body']."</p>";
	echo "<hr />";
}
 
?>
 
</body>
 
</html>