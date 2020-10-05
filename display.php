<?PHP 
	session_start();
	if(!isset($_SESSION['user'])){
		header('');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
	<table>
		<tr>
			<th>stars</th>
			<th>review</th>
			<th>summary</th>
		</tr>
		
		<?PHP
		include 'connect.php';
		$query = "SELECT * FROM `back` ";
		$sql = mysqli_query($conn,$query);
		if ($sql) 
		{
			while($row = mysqli_fetch_array($sql))
			{
		       echo "<tr>
		       <td>".$row['stars']."</td>
		       <td>".$row['review']."</td>
		       <td>".$row['summary']."</td>
		       </tr>";
    		}
		}
			
		?>
	

	</table>


</div>

</body>
</html>