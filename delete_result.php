<?php
	$con=mysqli_connect("localhost", "root", "1234", "sqlDB") or die("MySQL 접속 실패!!");
	
	$userId    = $_POST["userId"];
	
	$sql ="DELETE FROM userTbl where userId='".$userId."'";
	
	$ret = mysqli_query($con, $sql);
	
	echo "<h1> 회원 삭제 결과 </h1>";
	if($ret){
		echo "회원이 성공적으로 삭제됨.";
	}else{
		echo "회원 삭제 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	}
	mysqli_close($con);
	
	echo "<br> <a href='main.html'> <-- 초기 화면</a> ";
?>