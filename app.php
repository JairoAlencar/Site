<?php

//include 'acesso.php';
//include 'alert.php';

define('CONTROLADOR_PADRAO', 'paginas'); //por padrão vem definido o controlador de paginas estáticas (paginasControlador)
define('URL_BASE', 'http://localhost/site/');

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
//acesso.php

define('ACESSO', true);

function acessoLogar($usuario) {
    if(!empty($usuario)) { //se o usuario não for vazio, logo existe o usuário na base com as credenciais
        $_SESSION["acesso"] = array( //cria a sessao acesso com os dados do usuario
            "email" => $usuario["email"], 
            "tipousuario" => $usuario["tipousuario"]
        );
        return true; 
    }
    return false;
}

function acessoDeslogar() {
    if (isset($_SESSION["acesso"])) {
        $_SESSION["acesso"] = null;
        unset($_SESSION["acesso"]);
    }
}

function acessoUsuarioEstaLogado() {
    return isset($_SESSION["acesso"]);
}

function acessoPegarPapelDoUsuario() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["acesso"]["tipousuario"];
    }
}

function acessoPegarUsuarioLogado() {
    if (acessoUsuarioEwstaLogado()) {
        return $_SESSION["acesso"]["email"];
    }   
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
//alert.php

/**
 * Para utilizar a biblioteca você deve fazer a chamada da função alertComponentRender() seu arquivo `template.php`. 
 */
function alertInit() {
    if (!isset($_SESSION["alert"])) {
        $_SESSION["alert"] = array();
    }
}
function alertGetMessages() {
    if (!empty($_SESSION["alert"])) {
        return $_SERVER["alert"];
    }
}
function alert($msg, $level = "danger") {
    $_SESSION["alertLevel"] = $level;
    $_SESSION["alert"][] = $msg;
}
function alertClear() {
    $_SESSION["alert"] = array();
    $_SESSION["alertLevel"] = "danger";
}
function alertComponentRender() {
    if (!empty($_SESSION["alert"])) {
        $msgs = implode(',', $_SESSION["alert"]);
        $alertLevel = $_SESSION["alertLevel"];
        $html = '<div class="alert alert-' . $alertLevel . '" role="alert">';
        $html .= '<strong>' . $msgs . '</strong>';
        $html .= '</div>';
        alertClear();
        echo $html;
    }
}
alertInit();
