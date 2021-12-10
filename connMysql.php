<?PHP
  $db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$dbname="eat";  //class database
	//連線伺服器
	//$db_link = @mysqli_connect($db_host, $db_username, $db_password,$dbname);
	$db_link = @mysqli_connect($db_host, $db_username, $db_password);
	if (!$db_link) die("資料庫管理系統連結失敗！");
	$db_link = @mysqli_connect($db_host, $db_username, $db_password,$dbname);
	if (!$db_link) die("資料庫".$dbname."開啟失敗！");
	mysqli_query($db_link,'SET NAMES utf8');
?>