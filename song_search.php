<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1>음악 검색 결과 </h1>

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
	$sql = "SELECT * FROM song WHERE title = '$_POST[song]'";
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
			echo "   "."<a href ='enroll_song.php?song_id=",$row['id'],"'> 등록하기</a>";
			echo "<br><br>";

			echo "<br><br> 음악 리뷰 <br><br>";
			$s_id=$row['id'];

			$sql_so = "SELECT * FROM song_review where song_review.s_id = '$s_id'";
			$ret_so = mysqli_query($con,$sql_so);
			if($ret_so){
				while($row_so = mysqli_fetch_array($ret_so)){
					$who = $row_so['c_id'];
					$content = $row_so['content'];

					echo $who." : ".$content,"<br>";
				}
			}else{
				echo "조회 실패!","<br>";
				echo "실패 원인: ".mysqli_error($con);
				exit();
			}

			echo '<FORM METHOD = "post" ACTION = "insert_review_song.php">';
			echo "리뷰 : ",'<input type = "text" name="review"><br>';
			echo '<input type="hidden" name="song_id" value="'.$s_id.'">';
			echo '<input type="submit" value="제출">';
			echo '</form>';
		}
			
	}else{
		echo "조회 실패!","<br>";
		echo "실패 원인: ".mysqli_error($con);
		exit();
	}

?>

</body>

</html>

