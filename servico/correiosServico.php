<?php

function calcular_frete($cep_destino, $tipo_do_frete){

$cep_origem = 18202000;
$peso = 2;
$valor = 100;
//$tipo_do_frete = 41106; // Sedex: 40010 | Pac: 41106
$altura = 6; //cm
$largura = 20; //cm
$comprimento = 20; //cm


    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "nCdEmpresa=";
    $url .= "&sDsSenha=";
    $url .= "&sCepOrigem=" . $cep_origem;
    $url .= "&sCepDestino=" . $cep_destino;
    $url .= "&nVlPeso=" . $peso;
    $url .= "&nVlLargura=" . $largura;
    $url .= "&nVlAltura=" . $altura;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" . $comprimento;
    $url .= "&sCdMaoProria=n";
    $url .= "&nVlValorDeclarado=" . $valor;
    $url .= "&sCdAvisoRecebimento=n";
    $url .= "&nCdServico=" . $tipo_do_frete;
    $url .= "&nVlDiametro=0";
    $url .= "&StrRetorno=xml";

    //Sedex: 40010
    //Pac: 41106

    $xml = simplexml_load_file($url);


    //echo $xml;
    return $xml->cServico;
}