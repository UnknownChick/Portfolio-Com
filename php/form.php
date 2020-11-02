<?php
    if(isset($_POST['user_message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page aide de MMI Master</h1>
        <b>Email : </b>' . $_POST['email'] . '<br><br>
        <b>Nom - Prénom : </b>' . $_POST['name'] . '<br><br>
        <b>Message : </b>' . $_POST['subject'] . '</p>';

        $retour = mail('ferreira.alexandre.2000@outlook.com', $_POST['user_sujet'], $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
?>