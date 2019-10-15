<?php
$user="root";
$pass="Tartine59116";
$param=0;
if(isset($user) || isset($pass)){
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=AISO', $user, $pass);
        foreach($dbh->query('CALL trierprix(' . $param . ')') as $row) {
            if($row['solde'] == 1){
                echo '<p><center>' . $row['id'] . "\t" . $row['nom'] . "\t" . $row['prix'] . "\t" . '<img src="assets/valide.png" title="En stock" alt="symbole valide">';
            }else{
                echo '<p><center>' . $row['id'] . "\t" . $row['nom'] . "\t" . $row['prix'] . "\t" . '<img src="assets/croix.png" title="Pas en stock" alt="symbole croix">';
            }
        }
        $dbh = null;
    } catch (PDOException $e) {
        echo '<p><center>Le nom d\'utilisateur ou le mot de passe sont incorrectes</center></p>';
    }
}
?>