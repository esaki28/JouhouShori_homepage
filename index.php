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
			echo $_GET["nbr"] . "号室". "(key" . $search_result . ")に配達。" ;//nbrで号室表示 該当のarrayのvalueを出すにはどうすれば…
		}
		else{
			echo "そんな部屋はないです。" ;
		}
	?>
  
  <p>なんかarrayを array(101,102)…でしてると 106は配達ができても101とかはできていなかったのですが、array(key => 101, key2 => 102… みたいにしたらできるようになりました わかるようなわからないような</p>
  
	<p>
	あああああ
	アディスアベバ
	</p>
  
<body>
</body>
</html>