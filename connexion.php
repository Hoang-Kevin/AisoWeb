<?php
$user=$_POST['username'];
$pass=$_POST['password'];
$param=0;
if(isset($user) || isset($pass)){
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=AISO', $user, $pass);
        foreach($dbh->query('CALL trierprix(' . $param . ')') as $row) {
            if($row['solde'] == 1){
                echo '<p><center>' . $row['id'] . "\t" . $row['nom'] . "\t" . $row['prix'] . "\t" . '<img src="assets/valide.jpg" titre="disponible" alt="symbole valide">';
            }else{
                echo '<p><center>' . $row['id'] . "\t" . $row['nom'] . "\t" . $row['prix'] . "\t" . '<img src="assets/croix.png" titre="non disponible" alt="symbole croix">';
            }
        }
        $dbh = null;
    } catch (PDOException $e) {
        echo '<p><center>Le nomd\'utilisateur ou le mot de passe doivent être incorrectes</center></p>';
        die();
    }
}
?>