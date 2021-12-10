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
<h1 align="center">現在要吃啥??? - 有什麼好吃</h1>
<div class="container">
	<div class="row">
		<div class="col-lg-2">
			<a href="home.html"><h3 align="center">首頁</h3></a>
		    <a href="add.php"><h3 align="center">好吃逗相報!</h3></a>
		    <a href="find.html"><h3 align="center">有什麼好吃?</h3></a>
		    <a href="choose.html"><h3 align="center">今天吃什麼?</h3></a>
		    <a href='index.html'><h3 align="center">離開</h3></a>
		</div>
		<div class="col-lg-8">
			<?php 
				require_once("connMysql.php");
				$name=$_POST["name"];
				$kind=$_POST["kind"];
				$distance=$_POST["distance"];
				$cost=$_POST["cost"];
				$sql = "SELECT * FROM `eat` WHERE name LIKE '%$name%' and kind LIKE '%$kind%' and distance LIKE '%$distance%' and cost LIKE '%$cost%'";
				$result = mysqli_query($db_link,$sql);
				$total_records = mysqli_num_rows($result);
			?>
<p align="center">目前登錄店家筆數：<?php echo $total_records;?></p>
<table border="1" align="center" style="text-align: center;width: 500px;">
  <tr>
    <th style="text-align: center;">店名</th>
    <th style="text-align: center;">價格</th>
    <th style="text-align: center;">距離</th>
    <th style="text-align: center;">刪除</th>
  </tr>
<?php
	while($row_result=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>".$row_result["name"]."</td>";
		echo "<td>";
		if($row_result["cost"]==100)
			echo "100以下";
		elseif($row_result["cost"]==200)
			echo "100-300";
		else
			echo "300以上";
		echo "</td>";

		echo "<td>";
		if($row_result["distance"]=="close")
			echo "近";
		elseif($row_result["distance"]=="normal")
			echo "普通";
		else
			echo "遠";
		echo "<td><a href='delete.php?name=".$row_result["name"]."'>刪除</a></td> ";
		echo "</tr>";
	}
?>
</table>
		</div>
	</div>
</div>

</body>
</html>