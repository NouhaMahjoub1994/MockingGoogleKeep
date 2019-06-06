<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 name="message" value=""></h1>
<a href="keepAjoutForm.html">Ajouter une autre note</a><br>
<a href="keepAfficheNotes.php">Consulter toutes les notes</a>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 08/08/2018
 * Time: 20:19
 */
session_start();


$contenu = $titre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = test_input($_POST["titre"]);
    $contenu = test_input($_POST["contenu"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(!isset($_SESSION['nbNotes'])){
    $_SESSION['nbNotes']=0;
}


function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
    if (isset($_POST['titre']) && isset($_POST['contenu'])) {
        if (!empty( $contenu) && !empty($titre)) {
            $_SESSION['nbNotes']++;
            $note='note_'.$_SESSION['nbNotes'];
            $_SESSION[$note]['titreNote'] = $_POST['titre'];
            $_SESSION[$note]['contenuNote'] = $_POST['contenu'];
            $_SESSION[$note]['couleurNote'] =rand_color();
            echo "note ajouté avec succés";
        } else {
            echo "echec d'ajout de la note";
        }

    }
