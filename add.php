<?php 
require_once("connMysql.php");
if(isset($_POST["action"])&&($_POST["action"]=="add"))
{
	$sql_query = "INSERT INTO `eat` (`name` ,`kind` ,`distance` ,`cost`) VALUES (";
	$sql_query .= "'".$_POST["name"]."',";
	$sql_query .= "'".$_POST["kind"]."',";
	$sql_query .= "'".$_POST["distance"]."',";
	$sql_query .= "'".$_POST["cost"]."')";
	mysqli_query($db_link,$sql_query);
}
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
<h1 align="center">現在要吃啥??? - 好吃逗相報</h1>
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
			<form action="" method="post" name="formAdd" id="formAdd">
			  <table border="1" align="center" cellpadding="4">
			    
			    <tr>
			      <td style="width: 80px; height: 30px;text-align: center;">店名</td><td><input type="text" name="name" id="name" required="required"></td>
			    </tr>
			    <tr>
			      <td style="width: 80px; height: 30px;text-align: center;">種類</td>
			      <td>
			      	<select name="kind">
			      		<option name="kind" value="rice">飯</option>
			      		<option name="kind" value="noodle">麵</option>
			      		<option name="kind" value="both">飯+麵</option>
			      		<option name="kind" value="else">其他</option>
			      	</select>
			      </td>
			    </tr>
			    <tr>
			      <td style="width: 80px; height: 30px;text-align: center;">距離</td>
			      <td>
			      	<select name="distance">
			      		<option name="distance" value="close">近</option>
			      		<option name="distance" value="normal">普通</option>
			      		<option name="distance" value="far">遠</option>
			      	</select>
			      </td>
			    </tr>
			    <tr>
			      <td style="width: 80px; height: 30px;text-align: center;">花費</td>
			      <td>
			      	<select name="cost">
			      		<option name="cost" value="100">100以下</option>
			      		<option name="cost" value="200">100-300</option>
			      		<option name="cost" value="300">300以上</option>
			      	</select>
			      </td>
			    </tr>
			    <tr>
     			  <td colspan="2" align="center">
			      <input name="action" type="hidden" value="add">
			      <input type="submit" name="button" id="button" value="加入名單">
			      <input type="reset" name="button2" id="button2" value="重新填寫">
			      </td>
			    </tr>
			  </table>
			</form>
		</div>
	</div>
</div>

</body>
</html>