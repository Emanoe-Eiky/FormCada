<?php
include "Sevicos/Validacao.php";
include "Sevicos/MensagemDeErro.php";
include "Sevicos/ClienteSucesso.php";

// $parametros = array
// (
//     'nome' => $_POST['nome'],
//     'nacimento' => $_POST['nascimento'],
//     'email' => $_POST['email'],
//     'rg' => $_POST['rg'],
//     'cpf' => $_POST['cpf'],
//     'rua' => $_POST['rua'],
//     'numero' => $_POST['numero'],
//     'bairro' => $_POST['bairro'],
//     'cidade' => $_POST['cidade'],
//     'cep' => $_POST['cep'],
// );
// para saber oq está sendo enviado pelo post
var_dump($_POST); 
var_dump($parametros);
MensagemConfirma ($_POST);
header("Location: index.php");

