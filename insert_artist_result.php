<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>


<?php

	if($_COOKIE["login_cookie_administer"]==true){
		
		$con = mysqli_connect("localhost","root","1234","music_site") or die("MySQL 접속 실패!!");
		mysqli_query($con,"set session character_set_connection = utf8;");
		mysqli_query($con,"set session character_set_results=utf8;");
		mysqli_query($con,"set session character_set_client=utf8;");

		$a_id = $_POST["artist_id"];
		$a_name = $_POST["artist_name"];
		$a_debut = $_POST["artist_debut"];
		$a_nation = $_POST["artist_nation"];
		$a_genre = $_POST["artist_genre"];
		$a_style = $_POST["artist_style"];
		$a_type = $_POST["artist_type"];
		$a_agency_id = $_POST["artist_agency_id"];

		$a_enroll_date = date("Y-m-d");

		if(isset($_FILES['artist_image'])){
			$file = $_FILES['artist_image'];
			// FILE properties
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];
			$file_size = $file['size'];
			$file_error = $file['error'];

			// work out the file extension
			$file_ext = explode('.',$file_name);
			$file_ext = strtolower(end($file_ext));

			$file_name = $a_id.'.'.$file_ext;
			$file_destination = 'artist/'.$file_name;
		}
		$url = "http://localhost/music_site/".$file_destination;

		if($a_agency_id==""){
			$sql = "INSERT INTO artist VALUES ('$a_id','$a_name','$a_debut','$a_nation','$a_genre',NULL,'$a_enroll_date','$url','$a_style','$a_type')";
		}else{
			$sql = "INSERT INTO artist VALUES ('$a_id','$a_name','$a_debut','$a_nation','$a_genre','$a_agency_id','$a_enroll_date','$url','$a_style','$a_type')";
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

