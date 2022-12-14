<?php
		$pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417852-5han','LAA1417852','1412019219');
		$sql = "SELECT id,data FROM sample where id = 1";	
		$ps = $pdo->prepare($sql);
		$ps->execute();
		$searchArray = $ps->fetchAll();
		foreach ($searchArray as $row){
			if(isset($row['data'])){
				$data = $row['data'];
			}else{
				echo "データがありません";
			}
									  
		}
	if($row['data'] = 2){
		header('Location: cart.php');
	}else{
    	header('Location: login.php');
	}
?>
