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
			$star_query = "SELECT * FROM `back` ";
			$star_sql =mysqli_query($conn,$star_query);
			$star_no_row=mysqli_num_rows($star_sql);
			for ($i=1; $i < 6 ; $i++) { 
				$star_1_query = "SELECT * FROM `back` WHERE `stars` ='$i'";
				$star_1_sql =mysqli_query($conn,$star_1_query);
				if ($star_1_sql) 
				{
					$star_1_no_row=mysqli_num_rows($star_1_sql);
					$start_count_array[$i]=$star_1_no_row;
				}
			}
			$final=0;
			foreach ($start_count_array as $key => $value){
				echo  "star ".$key." : ".$value."  => ".($value/$star_no_row)*100  ."%"."<br>";
				$star_per = ($value/$star_no_row) * 100;
				$final = $final + $value;
			}
				echo "final rating : ".$final/5.;
		?>
	

	</table>


</div>

</body>
</html>