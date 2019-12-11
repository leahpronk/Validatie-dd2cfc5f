
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	if(isset($_GET['email'])&& !empty($_GET['email'])){
    if(filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Valid";
	} 
	else {
		echo "Invalid";
	}
}
else{
	echo "Vul jouw email in";
}
?>
	<form action="" method="get">
    email: <input type="text" name="email"/>
    <input type="submit" value="submit"/>
</form>
</body>
</html>