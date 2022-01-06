<?php


// Ici, il y a le code de detail-voiture.php


if (isset($_GET["id"]) && !empty($_GET["id"])){


    echo "Super, il existe bien un id !<br> Et il est egal a " . $_GET["id"];
}