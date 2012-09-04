<!DOCTYPE html>
<html lang="ja">
<head>
<title>Rand Num</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Rand Num</h1>
<h3>you can generate random set of numbers by giving a number to start from and end with.</h3>
<hr />
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h3>Start Num</h3>
<input type="text" name="start" value="" />
<h3>End Num</h3>
<input type="text" name="end" value="" />
<input type="submit" value="send" />
</form>
<hr/>
<?php

if(isset($_POST['start']) && isset($_POST['end'])){

$start_num = $_POST['start'];
$end_num = $_POST['end'];
$num_count = $end_num - $start_num + 1;

$rand_array = array();
for($i=0;$i<$num_count;$i++){
	$rand_array[$i] = $start_num + $i;
}
shuffle($rand_array);

for($i=0;$i<count($rand_array);$i++){
	echo $rand_array[$i] . '<br/>';
}
}else{
	echo '<h2>Please Enter Start & End Num</h2>';
}
?>
</body>
</html>
