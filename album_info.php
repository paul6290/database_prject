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
	$al_id = $_GET['album_id'];
	$sql = "SELECT * FROM album where id = '$al_id'";
	$ret = mysqli_query($con,$sql);
	if($ret){
		while($row = mysqli_fetch_array($ret)){
			$al_title = $row['title'];
			$al_genre = $row['genre'];
			$al_release_date = $row['release_date'];
			$al_introduction = $row['introduction'];
			$al_enroll_date = $row['enroll_date'];
			$al_url = $row['image_url'];

			echo "<img src = $al_url>","<br><br>";
			echo "타이틀 : ",$al_title,"<br>";
			echo "장르 : ",$al_genre,"<br>";
			echo "발매 : ",$al_release_date,"<br>";
			echo "소개 : ",$al_introduction,"<br>";
			echo "등록날짜 : ",$al_enroll_date,"<br>";

			$sql_al = "SELECT * FROM album JOIN song WHERE album.id = song.album_id and album.id = $al_id";
			$ret_al = mysqli_query($con,$sql_al);
			if($ret_al){
				while($row_s = mysqli_fetch_array($ret_al)){
					$s_title = $row_s['title'];
					$s_lyricist = $row_s['lyricist'];
					$s_songwriter = $row_s['songwriter'];
					$s_enroll_date = $row_s['enroll_date'];
					$s_url = $row_s['song_url'];

					echo "<br>","---------------------------------------------------------------------------<br>";
					echo $s_title," <br>","작사 : ",$s_lyricist," ","작곡 : ",$s_songwriter," ";
					echo "    "."    <audio controls preload loop><source src=$s_url /></audio>";
					echo "   "."<a href ='enroll_song.php?song_id=",$row_s['id'],"'> 등록하기</a>";
				}
			}else{
				echo "조회 실패!","<br>";
				echo "실패 원인: ".mysqli_error($con);
				exit();
			}

			echo "<br><br> 앨범 리뷰 <br><br>";
			$sql_re = "SELECT * FROM album_review where album_review.a_id = '$al_id'";
			$ret_re = mysqli_query($con,$sql_re);
			if($ret_re){
				while($row_re = mysqli_fetch_array($ret_re)){
					$who = $row_re['c_id'];
					$content = $row_re['content'];

					echo $who." : ".$content,"<br>";
				}
			}else{
				echo "조회 실패!","<br>";
				echo "실패 원인: ".mysqli_error($con);
				exit();
			}
		}
	}else{
		echo "조회 실패!","<br>";
		echo "실패 원인: ".mysqli_error($con);
		exit();
	}

?>

<FORM METHOD = "post" ACTION="insert_review_album.php">
리뷰 : <input type = "text" name="review"><br>
<?php
	echo '<input type="hidden" name="album_id" value="'.$al_id.'">';
?>
<input type="submit" value="제출">
</FORM>

</body>

</html>

