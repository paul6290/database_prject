<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>


<?php
	
	if($_COOKIE["login_cookie_administer"]==true){
		
		$con = mysqli_connect("localhost","root","1234","music_site") or die("MySQL 접속 실패!!");
		mysqli_query($con,"set session character_set_connection = utf8;");
		mysqli_query($con,"set session character_set_results=utf8;");
		mysqli_query($con,"set session character_set_client=utf8;");

		$a_id = $_POST["agency_id"];
		$a_name = $_POST["agency_name"];
		$a_introduction = $_POST["agency_introduction"];
		
		$a_enroll_date = date("Y-m-d");

		if(isset($_FILES['agency_image'])){
			$file = $_FILES['agency_image'];
			// FILE properties
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];
			$file_size = $file['size'];
			$file_error = $file['error'];

			// work out the file extension
			$file_ext = explode('.',$file_name);
			$file_ext = strtolower(end($file_ext));

			$file_name = $a_id.'.'.$file_ext;
			$file_destination = 'agency/'.$file_name;
		}
		$url = "http://localhost/music_site/".$file_destination;

		
		$sql = "INSERT INTO agency VALUES ('$a_id','$a_name','$a_introduction','$a_enroll_date','$url')";
		

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

