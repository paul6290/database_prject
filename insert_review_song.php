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

	$s_id = $_POST["song_id"];
	$review = $_POST["review"];
	$c_id = $_COOKIE["login_cookie_consumer"];

	$sql = "INSERT INTO  song_review VALUES('$c_id','$s_id','$review')";
	$ret = mysqli_query($con,$sql);
	if($ret){
		echo "성공적으로 리뷰가 등록되었습니다!";
	}else{
		echo "조회 실패!","<br>";
		echo "실패 원인: ".mysqli_error($con);
		exit();
	}
?>


</body>

</html>

