//get.php
<!DOCTYPE html>
<html>
<body>
<form action="get.php" method="post">
URL:<input type="text" name="url" value="HTTP://"> PAGE <input type="text" name="pageNumber" value="15">
<br>
<input type="submit" value="Submit">
</form>

<?php
$url=$_POST['url'];
$pageNumber=$_POST['pageNumber'];
$pageCon = file_get_contents($url);

for ($x=1; $x<=$pageNumber; $x++){
	echo "url is".$url.<br>
	$url = $pageCon //搜索“下一章”
}

//	echo "数字是：$x <br>";
//echo $url;
//echo "<br>=========================";
//echo $pageCon;
?>

</body>
</html>
