<?php
$user=$_POST['user'];
$password=$_POST['password'];
if(isset($user) && isset($password)){
    try{
        $db = new PDO('mysql:host=localhost;dbname=AISO', 'root', '');
        foreach($db->query('SELECT * FROM `utilisateur`') as $row){
            if($row['Username'] == $user){
                $bool = true;
            }
        }
        if($bool == true){
            echo '<p><center>Le nom d\'utilisateur existe déjà</center></p>';
        }else{
            $db->query('INSERT INTO `utilisateur` (`Username`, `Password`) VALUES("' . $user . '","' . $password .  '")');
        }
    }catch(PDOException $e){
        echo $e;
    }
}
?>