<?php
    $utilisateur_1 = array('pseudo' => 'Rodrigue',
    'password' => 'bonjour');
    if((isset($_POST['pseudo']))){
    if($_POST['pseudo'] == $utilisateur_1['pseudo'] && $_POST['password'] == $utilisateur_1['password']){
        echo '<p>Vous êtes connecté en temps que ' . $utilisateur_1['pseudo'] . '</p>';
    }else{
        echo '<p>Votre nom d\'utilisateur ou votre mot de passe sont incorrectes';
    }
}
    
?>