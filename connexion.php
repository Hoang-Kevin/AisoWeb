<?php
$user=$_POST['username'];
$pass=$_POST['password'];
if(isset($user) || isset($pass)){
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=AISO', $user, $pass);
        foreach($dbh->query('SELECT * from produits') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
?>