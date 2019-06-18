<?php

function conn() {
    $cnx = mysqli_connect("localhost", "Jairo", "123456789", "IFTECH");

    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}