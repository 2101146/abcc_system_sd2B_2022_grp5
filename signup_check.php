
<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	require_once __DIR__ . '/dbconnect.php';
    	$signup = new DBconnect();
    	$signup->insertHash($email,$password);
	echo $_SESSION['email'];
	echo "さん。ようこそ";
	$_SESSION['email']  = $email;
	$_SESSION['password'] = $password;
	$pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417852-5han','LAA1417852','1412019219');
	$sql = "INSERT INTO sample(id,data) values(1,2)";	
	$ps = $pdo->prepare($sql);
	$ps->execute();
?>

<a href='./ProductList.php'>商品一覧ページへ</a>
