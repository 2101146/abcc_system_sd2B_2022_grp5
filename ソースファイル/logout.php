<?php
session_start();

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}






  echo "<a href='http://keen-usuki-0844.mond.jp/5han/ProductList.php'>ログアウト</a>";
  $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417852-5han','LAA1417852','1412019219');
  $sql = "INSERT INTO sample(id,data) values(1,1)";	
  $ps = $pdo->prepare($sql);
  $ps->execute();


 ?>