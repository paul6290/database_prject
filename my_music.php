<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1>내 음악 </h1>

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

	$c_id = $_COOKIE["login_cookie_consumer"];

	$sql = "SELECT * FROM purchase join song WHERE purchase.s_id = song.id and purchase.c_id = '$c_id'";
	$ret = mysqli_query($con,$sql);
	if($ret){
		while($row = mysqli_fetch_array($ret)){
			$s_title = $row['title'];
			$s_lyricist = $row['lyricist'];
			$s_songwriter = $row['songwriter'];
			$s_enroll_date = $row['enroll_date'];
			$s_url = $row['song_url'];

			echo $s_title," <br>","작사 : ",$s_lyricist," ","작곡 : ",$s_songwriter," ";
			echo "    "."    <audio controls preload loop><source src=$s_url /></audio>";
			echo "<br><br>";
		}
	}else{
		echo "조회 실패!","<br>";
		echo "실패 원인: ".mysqli_error($con);
		exit();
	}
?>

</body>

</html>

