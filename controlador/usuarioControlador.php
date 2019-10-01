<?php

require_once "modelo/usuarioModelo.php";

/** Adm */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** anon */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        alert(adicionarUsuario($nome, $email, $senha));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}

/** Adm */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

/** Adm, User */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarUsuario($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

/** Adm, User */
function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}