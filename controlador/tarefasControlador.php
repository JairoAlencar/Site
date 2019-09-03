<?php

function index(){

    $tarefa = $_POST["tarefa"];

    if (isset($_SESSION["tarefa"])) {
        $tarefas = array();
        $tarefas = $tarefa;
        
        $dados["tarefa"] = $tarefas;
        exibir("tarefa/tarefa", $dados);
        
    } else {
        exibir("tarefa/tarefa");
    }
}

function adicionar($id){

    if (!isset($_SESSION["tarefa"])) {
        $_SESSION["tarefa"] = array();
    }

    $alt = false ;

    for ($i=0; $i < count($_SESSION["tarefa"]); $i++) {
        if ($_SESSION["tarefa"][$i]["id"] == $id) {
            $alt = true; 
        }
    }

    if (!$alt) {

        $tarefa["id"] = $id;
        $_SESSION["tarefa"][] = $tarefa;   
    }
    redirecionar("tarefas/index");  
}

?>