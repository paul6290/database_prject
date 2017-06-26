<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>


<?php

	if($_COOKIE["login_cookie_administer"]==true){
		
		$con = mysqli_connect("localhost","root","1234","music_site") or die("MySQL 접속 실패!!");
		mysqli_query($con,"set session character_set_connection = utf8;");
		mysqli_query($con,"set session character_set_results=utf8;");
		mysqli_query($con,"set session character_set_client=utf8;");

		$a_id = $_POST["album_id"];
		$a_title = $_POST["album_title"];
		$a_genre = $_POST["album_genre"];
		$a_release_date = $_POST["album_release_date"];
		$a_introduction = $_POST["album_introduction"];
		$a_artist_id = $_POST["album_artist_id"];

		$a_enroll_date = date("Y-m-d");

		if(isset($_FILES['album_image'])){
			$file = $_FILES['album_image'];
			// FILE properties
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];
			$file_size = $file['size'];
			$file_error = $file['error'];

			// work out the file extension
			$file_ext = explode('.',$file_name);
			$file_ext = strtolower(end($file_ext));

			$file_name = $a_id.'.'.$file_ext;
			$file_destination = 'album/'.$file_name;
		}
		$url = "http://localhost/music_site/".$file_destination;

		if($a_artist_id==""){
			$sql = "INSERT INTO album VALUES ('$a_id','$a_title','$a_genre','$a_release_date','$a_introduction',NULL,'$a_enroll_date','$url')";
		}else{
			$sql = "INSERT INTO album VALUES ('$a_id','$a_title','$a_genre','$a_release_date','$a_introduction','$a_artist_id','$a_enroll_date','$url')";
		}

		$ret = mysqli_query($con,$sql);
		if($ret){
			echo "성공적으로 입력됨";
			if(move_uploaded_file($file_tmp, $file_destination)){

			}
		}else{
			echo "입력 실패!";
			echo mysqli_error($con);
		}

		mysqli_close($con);
	}

?>

</body>

</html>

