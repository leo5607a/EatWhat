<?php 
require_once("connMysql.php");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){	
	$sql_query = "DELETE FROM `eat` WHERE `name`=".$_POST["name"];
	mysqli_query($db_link,$sql_query);
	header("Location: find.html");
}
$sql_db = "SELECT * FROM `eat` WHERE `name`=".$_GET["name"];
$result = mysqli_query($db_link,$sql_db);
$row_result=mysqli_fetch_assoc($result);
?>
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
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <td>店名</td><td><?php echo $row_result["name"];?></td>
    </tr>
    <tr>
      <td>價格</td><td>
      <?php echo $row_result["cost"];?>
      </td>
    </tr>
    <tr>
      <td>距離</td><td><?php echo $row_result["distance"];?></td>
    </tr>
    <tr>
      <td>花費</td><td><?php echo $row_result["cost"];?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="cID" type="hidden" value="<?php echo $row_result["cID"];?>">
      <input name="action" type="hidden" value="delete">
      <input type="submit" name="button" id="button" value="確定不吃這家店嗎？">
      </td>
    </tr>
  </table>
  <?php 
  echo "<input type=\"hidden\"  name=\"name\" value=\"";
  echo $row_result["name"]."\">";

  ?>
  
  </div>
</div>
>
</form>
</body>
</html>