<?php
        if(isset($_POST['message'])){
            $entete  = 'MIME-Version: 1.0' . "\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\n";
            $entete .= 'From: ' . $_POST['email'] . "\n";
            $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
            <p><b>Nom : </b>' . $_POST['nom'] . '<br>
            <b>Email : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . $_POST['message'] . '</p>';
            $retour = mail('rodrigue.taccoen@viacesi.fr', 'Envoi depuis page Contact', $message, $entete);
            if($retour) {
                echo '<p>Votre message a bien été envoyé.</p>';
            }
        }
?>