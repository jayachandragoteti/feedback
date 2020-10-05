<?PHP 
	session_start();
	if(!isset($_SESSION['user'])){
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
</head>
<body>
	<form action="register.php" method="post">
		<label>stars</label>
		<input type="text" id="stars" name="stars">
		<br><br>
		<label>review</label>
		<input type="text" id="review" name="review">
		<br><br>
		<label>summary</label>
		<input type="text" id="summary" name="summary">
		<br><br>
		<input type="submit" value="submit" id="submit">
	</form>
</body>
</html>