<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<?php
	if($_COOKIE["login_cookie_consumer"]==false){
		header ('Location: http://localhost/music_site/login.html');
	}else{

	}
?>

<?php
	$con = mysqli_connect("localhost","normal","1234","music_site") or die("MySQL 접속 실패!!");
	mysqli_query($con,"set session character_set_connection = utf8;");
	mysqli_query($con,"set session character_set_results=utf8;");
	mysqli_query($con,"set session character_set_client=utf8;");

	$s_id = $_GET['song_id'];
	$c_id = $_COOKIE["login_cookie_consumer"];
	$en_date = date("Y-m-d");

	$sql = "INSERT INTO purchase VALUES('$c_id','$s_id','$en_date')";
	$ret = mysqli_query($con,$sql);
	if($ret){
		echo "성공적으로 음악이 등록되었습니다!";
	}else{
		echo "조회 실패!","<br>";
		echo "실패 원인: ".mysqli_error($con);
		exit();
	}
?>


</body>

</html>

