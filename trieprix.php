<?php
$user="root";
$pass="";
$param=$_POST['param'];
if(isset($user) && isset($pass) && isset($param)){
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=AISO', $user, $pass);
        foreach($dbh->query('CALL trierprix(' . $param . ')') as $row) {
            if($row['solde'] == 1){
                $id[] = $row['id'] . "\t";
                $nom[] = $row['nom'] . "\t";
                $prix[] = $row['prix'] . "\t";
                $image[] = '<img src="assets/valide.png"  title="En stock" alt="symbole valide">' . '</br>';
            }else{
                $id[] = $row['id'] . "\t";
                $nom[] = $row['nom'] . "\t";
                $prix[] = $row['prix'] . "\t";
                $image[] = '<img src="assets/croix.png"  title="Hors stock" alt="symbole croix">';
            }
        }
        for( $ligne=0; $ligne<count($id); $ligne++){
            echo '<p><center>' . $id[$ligne] . $nom[$ligne] . $prix[$ligne] . $image[$ligne] . '</center></p>';
        }
        $dbh = null;
    } catch (PDOException $e) {
        echo '<p><center>Le nom d\'utilisateur ou le mot de passe sont incorrectes</center></p>';
    }
}
?>
