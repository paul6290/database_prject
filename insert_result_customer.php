<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>


<?php

	$con=mysqli_connect("localhost","root","1234","music_site") or die ("MySQL 접속 실패!!");
	mysqli_query($con,"set session character_set_connection = utf8;");
	mysqli_query($con,"set session character_set_results=utf8;");
	mysqli_query($con,"set session character_set_client=utf8;");

	$userID = $_POST["userID"];
	$userPassword = $_POST["userPassword"];
	$userName = $_POST["userName"];
	$userPhoneNumber = $_POST["userPhoneNumber"];
	$userType = $_POST["sex_info"];
	$userAddress = $_POST["userAddress"];
	$userJoinDate = date("Y-m-d");

	//echo $userID,$userPassword,$userName,$userPhoneNumber,$userType,$userAddress,$userJoinDate

	$sql = "INSERT INTO consumer VALUES ('$userID','$userPassword','$userName','$userPhoneNumber','$userType','$userAddress','$userJoinDate')";

	
	$ret = mysqli_query($con,$sql);
	echo"<h1> 신규 회원 입력 결과 </h1>";
	if($ret){
		echo "성공적으로 회원가입 됨";
	}else{
		echo "회원가입 실패! ";
		echo "실패 원인 :",mysqli_error($con);
	}
	mysqli_close($con);

	echo "<br><br> <a href='login.html'> <-초기화면</a>";
	
?>
</body>

</html>

