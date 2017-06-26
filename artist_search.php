<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1>아티스트 검색 결과 </h1>

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
	$sql = "SELECT * FROM artist WHERE name = '$_POST[artist]'";
	$ret = mysqli_query($con,$sql);
	if($ret){
		while($row = mysqli_fetch_array($ret)){
			$url = $row['image_url'];
			$name = $row['name'];
			$debut = $row['debut'];
			$nation = $row['nation'];
			$genre = $row['genre'];
			$style = $row['style'];
			$type = $row['type'];
			$enroll_date = $row['enroll_date'];
			$agency = $row['agency_id'];

			if($agency != NULL){
				$sql_ag = "SELECT name,id FROM agency where id = '$agency'";
				$ret_ag = mysqli_query($con,$sql_ag);
				$r = mysqli_fetch_array($ret_ag);
				$ag_name = $r['name'];
				$ag_id = $r['id'];
			}else{
				$ag_name="";
			}
			 

			echo "<img src = $url>","<br><br>";
			echo "이름 : $name","<br>";
			if($ag_name!=""){
				echo "소속사 : ";
				echo "<a href = 'agency_info.php?agency_id=",$ag_id,"'> $ag_name</a>";
				echo "<br>";
			}
			echo "데뷔 : $debut","<br>";
			echo "국가 : $nation","<br>";
			echo "장르 : $genre","<br>";
			echo "스타일 : $style","<br>";
			echo "유형 : $type","<br><br>";
			echo "등록날짜 : $enroll_date","<br><br>";

			$a_id = $row['id'];
			$sql_al = "SELECT * FROM album where artist_id ='$a_id'";
			$ret_al = mysqli_query($con,$sql_al);

			echo "<br>","앨범","<br>";
			while($row_al = mysqli_fetch_array($ret_al)){
				$al_name = $row_al['title'];
				echo "<a href ='album_info.php?album_id=",$row_al['id'],"'> $al_name</a>";
				echo "<br>";
			}

		}
	}else{
		echo "조회 실패!","<br>";
		echo "실패 원인: ".mysqli_error($con);
		exit();
	}

?>

</body>

</html>

