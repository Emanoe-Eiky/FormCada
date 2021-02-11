<?php
session_start();
$Nome = $_POST['nome'];
$Nacimento = $_POST['nacimento'];
$Email = $_POST['email'];
$GR = $_POST['rg'];
$CPF = $_POST['cpf'];
$Rua = $_POST['rua'];
$Numero = $_POST['numero'];
$Bairro = $_POST['bairro'];
$Cidade = $_POST['cidade'];
$CEP = $_POST['cep'];
// para saber oq está sendo enviado pelo post
// var_dump($_POST); 
if(empty($Nome && $Nacimento && $Email && $RG && $CEP && $Rua && $Numero && $Bairro && $Cidade && $CP)){
    echo ('Todos os campos são obrigatorios ');
    return false;
}
