<?php
    $todo = $_POST['todo'];
	  $time = $_POST['time'];
    $number = $_POST['number'];
		$conn = mysqli_connect( 'localhost', 'admin', '1q2w3e4r', 'pathhack') or die("connect faiiled..");
		$sql = "insert into do_list(module, todo, wtime) values('$number', '$todo', '$time')";
		$result = mysqli_query( $conn, $sql );
    if($result){
      echo "<script>alert('적용성공'); location.href='index.html'</script>";
    }else{
      echo "<script>alert('다시 시도해 주십시오'); history.go(-1)'</script>";
    }
?>