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
<h1 align="center">現在要吃啥???</h1>
<div class="container">
	<div class="row" style="text-align: center; font-size: 20px" >
		<?php 
	//header("Content-Type: text/html; charset=utf-8");
	require_once("connMysql.php");
	if(isset($_POST["account"]) && isset($_POST["password"]))
	{		
       //員工資料檢查(user table in class)
       $sql = "SELECT * FROM user";
       $result = mysqli_query($db_link,$sql);	  
       //取出帳號密碼的值
       while($row=mysqli_fetch_assoc($result))
	   {
          $account = $row["account"];
          $password = $row["password"];
	      if($_POST["account"]==$account && $_POST["password"]==$password)  
	         header("Location: home.html");  //Location與:不能有空格, 一定要連在一起
   	   }
	   echo "帳號或密碼不正確 <br/>";
	   echo "<a href='index.html'>返回登入首頁</a>";
	}
?>
	</div>
</div>

</body>
</html>

