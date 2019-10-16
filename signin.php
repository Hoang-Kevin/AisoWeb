<?php
$user=$_POST['user'];
$password=$_POST['password'];
if(isset($user) && isset($password)){
    try{
        $db = new PDO('mysql:host=localhost;dbname=WSProsit5', 'root', '');
        foreach($db->query('CALL lectureDonnee();') as $row){
            if($row['pseudo'] == $user){
                $bool = true;
            }
        }
        if($bool == true){
            echo '<p><center>Le nom d\'utilisateur existe déjà</center></p>';
        }else{
            $db->query('CALL ajoutDonnee("' . $user . '","' . $password . '")');
        }
    }catch(PDOException $e){
        echo $e;
    }
}
?>