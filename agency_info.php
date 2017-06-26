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
	$ag_id = $_GET['agency_id'];
	$sql = "SELECT * FROM agency where id = '$ag_id'";
	$ret = mysqli_query($con,$sql);
	if($ret){
		while($row = mysqli_fetch_array($ret)){
			$ag_name = $row['name'];
			$ag_introduction = $row['introduction'];
			$ag_enroll_date = $row['enroll_date'];
			$ag_url = $row['image_url'];
			echo "<img src = $ag_url>","<br><br>";
			echo "소속사 이름 : ",$ag_name,"<br>";
			echo "소개 : ",$ag_introduction,"<br><br>";
			echo "등록 날짜 : ",$ag_enroll_date;

		}
	}else{
		echo "조회 실패!","<br>";
		echo "실패 원인: ".mysqli_error($con);
		exit();
	}

?>

</body>

</html>

