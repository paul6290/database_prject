<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
<?php
	$con = mysqli_connect("localhost","root","1234","music_site") or die ("MySQL 접속 실패!!");
	mysqli_query($con,"set session character_set_connection = utf8;");
	mysqli_query($con,"set session character_set_results=utf8;");
	mysqli_query($con,"set session character_set_client=utf8;");

	$type = $_POST["chk_info"];
	$id = $_POST["userID"];
	$password = $_POST["userPassword"];
	if($type == '고객'){
		$sql = "SELECT * FROM consumer WHERE id = '$id' and password = '$password'";
		$ret = mysqli_query($con,$sql);
		if($ret){
			$count = mysqli_num_rows($ret);
			if($count == 0){
				echo "회원 정보가 없음!" ,"<br>";
				echo "<br> <a href='login.html'> <- 초기화면 </a>";
				exit();
			}else{
				setcookie("login_cookie_consumer",$id,time()+3600);
				header('Location: http://localhost/music_site/main_consumer.php');
			}
		}else{
			echo "조회 실패!!","<br>";
			echo "실패 원인 :",mysqli_error($con);
			echo "<br> <a href='login.html'> <- 초기화면 </a>";
			exit();
		}
	}else{
		$sql = "SELECT * FROM administer WHERE id = '$id' and password = '$password'";
		$ret = mysqli_query($con,$sql);
		if($ret){
			$count = mysqli_num_rows($ret);
			if($count == 0){
				echo "회원 정보가 없음!" ,"<br>";
				echo "<br> <a href='login.html'> <- 초기화면 </a>";
				exit();
			}else{
				setcookie("login_cookie_administer",$id,time()+3600);
				header('Location: http://localhost/music_site/main_administer.php');
			}
		}else{
			echo "조회 실패!!","<br>";
			echo "실패 원인 :",mysqli_error($con);
			echo "<br> <a href='login.html'> <- 초기화면 </a>";
			exit();
		}
	}
?>
</body>

</html>

