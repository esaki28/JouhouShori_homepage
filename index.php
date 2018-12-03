<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ホームページ練習</title>
</head>
	<p>他の授業で作成しているphpファイルを持ってきました</p>
	<form action"index.php" method="get">
		<input type="text" name="nbr">
		<input type="submit" value="照会">
	</form>
	<br>
	<?php>
		$nagaya = array(101,102,103,104,105,106);
	<?>
	<br>
	<?php>
		$search_result = array_search($_GET["nbr"],$nagaya);
		
		if($search_result){
			echo $val . "配達。" ;
		}
		else{
			echo "そんな部屋はないです。" ;
		}
	<>
	<p>
	あああああ
	アディスアベバ
	</p>
<body>
</body>
</html>