<!DOCTYPE html>
<html lang="ja">
<head>
<title>Rand Text</title>
</head>
<body>
<h1>Rand Text</h1>
<h3>you can order any texts randomly separated by lines</h3>
<hr />
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h3>Enter Rand Text separated with lines</h3>
<textarea name="text" cols=100 rows=30></textarea>
<input type="submit" value="send" />
</form>
<hr/>
<?php

if(isset($_POST['text'])){

$rand_array = explode("\n", trim($_POST['text'])); 
shuffle($rand_array);
for($i=0;$i<count($rand_array);$i++){
	echo trim($rand_array[$i]).'<br/>';
}
}else{
	echo '<h2>Please Enter Rand Text</h2>';
}
?>
</body>
</html>
