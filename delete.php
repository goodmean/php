<?php
	$con=mysqli_connect("localhost", "root", "1234", "sqlDB") or die("MySQL 접속 실패!!");
	
	$sql ="SELECT * FROM userTbl WHERE userId='".$_GET['userId']."'";
	
	$ret = mysqli_query($con, $sql);
	if($ret){
		$count = mysqli_num_rows($ret);
		if($count==0){
			echo $_GET['userId']." 아이디의 회원이 없음!!!"."<br>";
			echo "<br> <a href='main.html'> <--초기 화면</a> ";
			exit();
		}
	}else{
		echo "데이터 조회 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
		echo "<br> <a href='main.html'> <-- 초기 화면</a> ";
		exit();
	}
	$row       = mysqli_fetch_array($ret);
	$userId    = $row['userId'];
	$name      = $row["name"];

?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>

<h1> 회원 삭제 </h1>

<form method="post" action="delete_result.php">
	아이디 : <INPUT TYPE ="text" NAME="userId" VALUE=<?php echo $userId ?> READONLY> <br>
	이름 : <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?> READONLY> <br>
	<BR><BR>
	위 회원을 삭제하시겠습니까?
	<input type="submit" value="회원 삭제">
</form>

</body>
</html>