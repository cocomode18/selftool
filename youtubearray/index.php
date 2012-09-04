<!DOCTYPE html>
<html lang="ja">
<head>
<title>YouTube Array</title>
</head>
<body>
<h1>Youtube Array</h1>
<hr />
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table border=1 cellspacing=0 cellpadding=2>
<tr>
<td><h3>Title</h3></td>
<td><h3>YouTube Parameter</h3></td>
</tr>
<tr>
<td><textarea name="title" cols=70 rows=30></textarea></td>
<td><textarea name="para" cols=70 rows=30></textarea></td>
</tr>
</table>
<br/>
<input type="submit" value="send" />
</form>
<hr/>
<br/>
<table border=1 cellspacing=0 cellpadding=2>
<tr>
<td>
<?php
if(!empty($_POST['title'])){
	$posts = explode("\n", trim($_POST['title'])); 
	$result = '$movie_title[1] = array(<br/>';
			foreach($posts as $post){
			$result .= '"'.trim($post).'",<br/>';
			}
			$result .= ');';
	echo $result;
}else{
	echo '<h3>Please Enter Titile</h3>';
}
?>
</td>
<td>
<?php
if(!empty($_POST['para'])){
	$posts = explode("\n", trim($_POST['para'])); 
	$result = '$movie_id[1] = array(<br/>';
			foreach($posts as $post){
			$result .= '"'.trim($post).'",<br/>';
			}
			$result .= ');';
	echo $result;

}else{
	echo '<h3>Please Enter YouTube Parameter</h3>';
}
?>
</td>
</tr>
</table>
</body>
</html>
