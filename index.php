<?
if($_SERVER['HTTPS'] != "on"){
    header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="0;url='/html/index'">
	<title>사세</title>
</head>
<body>
	
</body>
</html>