<?php
class Session{
    public function SessionSet($email,$password){
//        if(session_status() == PHP_SESSION_NONE){ session_start();}
//        $_SESSION['email'] = $email;
//        $_SESSION['password'] = $password;
        $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1417852-5han','LAA1417852','1412019219');
        $sql = "UPDATE sample SET data = 2";	
        $ps = $pdo->prepare($sql);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        foreach ($searchArray as $row){
            if(isset($row['data'])){
                $data = $row['data'];
            }
        }
    }
}
?>
