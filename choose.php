<?php
require_once("connMysql.php");
if($_POST["kind"]=="")
  $kind="%%";
else
  $kind=$_POST["kind"];

if($_POST["distance"]=="")
  $distance="%%";
else
  $distance=$_POST["distance"];

if($_POST["cost"]=="")
  $cost="%%";
else
 $cost=$_POST["cost"];
$sql = "SELECT name FROM `eat` WHERE kind LIKE '$kind' and distance LIKE '$distance' and cost LIKE '$cost' ORDER BY RAND() LIMIT 1";
$result = mysqli_query($db_link,$sql);
$row= mysqli_fetch_array($result);
?>
<!Doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>現在要吃啥???</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1 align="center">現在要吃啥??? - 今天吃什麼?</h1>
<div class="container">
	<div class="row">
		<div class="col-lg-2">
			<a href="home.html"><h3 align="center">首頁</h3></a>
			<a href="add.php"><h3 align="center">好吃逗相報!</h3></a>
			<a href="find.html"><h3 align="center">有什麼好吃?</h3></a>
			<a href="choose.html"><h3 align="center">今天吃什麼?</h3></a>
			<a href='index.html'><h3 align="center">離開</h3></a>
		</div>
		<div class="col-lg-8" style="text-align: center;font-size: 30px;">
			今天決定吃:<?php echo $row['name'];?>
    </div>
	</div>
</div>

</body>
</html>