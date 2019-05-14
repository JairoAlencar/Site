<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "Loja");

    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}