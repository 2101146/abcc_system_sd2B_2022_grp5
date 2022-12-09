<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="./css/style1.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
	</head>
	<body>
<div class = 'border-bottom border-secondary border-5'>
			<div class = 'frame'>
				<div class='left'>
				<a href='./ProductList.php'><img src='./css/128x128.png' style='width:42px;height:42px;'></a>
				</div>
				<div class = 'right'>
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
					if($data != 2){

    						//ログインしていない場合
    						echo "
							<form action='login.php' method='post'>
								<input class='border border-dark  rounded-end' type='submit' value='Log In'/>
							</form>
						";
					}else{
    						//ログイン済みの場合
    						echo "
							<form action='logout.php' method='post'>
								<input class='border border-dark  rounded-end' type='submit' value='Log Out'/>
							</form>
						";
					}
					?>
				</div>
			</div>
		</div>
		<span class = 'snap-title'>
			<h1>STYLE SNAP</h1>
		</span>
		<!--↑ここまでがヘッダーのhtml↑  -->

		<div class = 'container-fluid'>
		<div class = 'row'>
			<div class="col-md-6 alert-dark text-center">
			<?php
				require_once __DIR__ . '/dbconnect.php';
				$outfitsearch = new DBconnect();
				$number = 1;
				$searchArray = $outfitsearch->outfitSearch($number);
				foreach ($searchArray as $row){
					if(isset($row['outfit_img'])){
						$img = $row['outfit_img'];
					}else{
						echo "データがありません";
					}
					printf('<div class="item"><img src="./img/%s" width="392" height="560"></div>', $img);
				}
				echo "<form action='AddCart.php' method='post'><button class='btn btn-secondary' type='submit' name='cart' value='A0'>カートに入れる</button></form>";
				$searchArray2 = $outfitsearch->outfitData($number);
				foreach ($searchArray2 as $row){
					if(isset($row['product_name'])){
						$product_name = $row['product_name'];
						$product_data_id = $row['product_data_id'];
					}else{
						echo "データがありません";
					}
					printf('<a href="./products/product_%s">%s</a>', $product_data_id,$product_name);
					echo "<br>";
				}
				
			?>
			</div>

			<div class="col-md-6 alert-dark text-center">
			<?php
				$number = 2;
				$searchArray = $outfitsearch->outfitSearch($number);
				foreach ($searchArray as $row){
					if(isset($row['outfit_img'])){
						$img = $row['outfit_img'];
					}else{
						echo "データがありません";
					}
					printf('<div class="item"><img src="./img/%s" width="392" height="560"></div>', $img);
				}
				echo "<form action='AddCart.php' method='post'><button class='btn btn-secondary' type='submit' name='cart' value='B0'>カートに入れる</button></form>";

				$searchArray2 = $outfitsearch->outfitData($number);
				foreach ($searchArray2 as $row){
					if(isset($row['product_name'])){
						$product_name = $row['product_name'];
					}else{
						echo "データがありません";
					}
					printf('<a href="./products/product_%s">%s</a>', $product_data_id,$product_name);
					echo "<br>";
				}
			?>
			</div>	
		</div>		
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>
