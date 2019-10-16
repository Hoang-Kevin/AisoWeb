<?php
$user=$_POST['user'];
$password=$_POST['password'];
if(isset($user) && isset($password)){
    try{
        $db = new PDO('mysql:host=localhost;dbname=WSProsit5', 'root', '');
        $reponse = $db->query('SELECT * FROM utilisateurs');
        while($donnee = $reponse->fetch()){
            if($donnee['pseudo'] == $user && $donnee['motDePasse'] == $password){
                $answer = '<p>Vous êtes connecté</p>';
                if($donnee['statutAdmin'] == 1){
                    $button =  '<a href="modif.php">Page Admin</a>';
                }
            }
        }
        echo $answer . $button;
    }catch(PDOException $e){
        echo $e;
    }
}
?>