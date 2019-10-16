<?php
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$description=$_POST['description'];
$solde=$_POST['solde'];
if(isset($nom) && isset($prix)){
    try{
        $db = new PDO('mysql:host=localhost;dbname=WSProsit5', 'root', '');
        $reponse = $db->query('SELECT * FROM produits');
        while($donnee = $reponse->fetch()){
            if($donnee['nom'] == $nom){
                $bool = true;
            } 
        }
        echo $bool;
        if($bool == true){
            echo '<p><center>Le produit existe déjà</center></p>';
        }else{
            $db->query('INSERT INTO produits(nom, prix, `description`, solde) VALUES("' . $nom . '","' . $prix . '","' . $description . '","' . $solde . '")');
        }
    }catch(PDOException $e){
        echo $e;
    }
}
?>