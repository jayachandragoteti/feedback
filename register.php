<?PHP
	include 'connect.php';
	
	session_start();
	if(!isset($_SESSION['user'])){
		header('location:');
	}

	$a=$_POST['stars'];
	$b=$_POST['review'];
	$c=$_POST['summary'];
	
	$query = "INSERT INTO `back` (`stars`, `review`, `summary`) VALUES ('$a', '$b', '$c')";
	
	$sql= mysqli_query($conn, $query);
	
	if($sql){
		header('location:display.php');
	}else{
		echo "failed";
	}
?>