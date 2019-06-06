<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="keepLayout.css">
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 09/08/2018
 * Time: 11:07
 */

session_start();
?>
<div class="note-square-container">
    <?php
for($i=1;$i<=$_SESSION['nbNotes'];$i++){
    $note='note_'.$i;

    if (empty($_SESSION[$note]['titreNote']) || empty($_SESSION[$note]['titreNote'])){ continue;}else{ ?>

<div class="note-square" style="background: <?=$_SESSION[$note]['couleurNote']?>">
    <h1><?= $_SESSION[$note]['titreNote'] ?></h1>
    <p><?= $_SESSION[$note]['contenuNote'] ?></p>
</div>
        <?php
        }//end if
        ?>

    <?php
    }//endof for
    ?>
</div><!-- close container-->
<a href="keepAjoutForm.html">Ajouter une autre note</a><br>
</body>
</html>




