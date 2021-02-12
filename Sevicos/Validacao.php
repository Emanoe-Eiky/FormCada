<?php
function  validaNome(string $Nome): bool
{
    if (empty($Nome)) {
        setarMensagemErro('O nome não pode ser vazio');
        return false;
    } else if (strlen($Nome) < 6) {
        setarMensagemErro('O nome deve conter mais que 3 caractere! Por favor coloque seu nome completo.');
        return false;
    } else if (is_numeric($Nome)) {
        setarMensagemErro('Seu nome não pode ser um numero.');
        return false;
    }
    return true;
}


function ValidaNumero(string $Numero): bool
{
    if (!is_numeric($Numero)) {
        setarMensagemErro("Digete um numero valido para o numero da casa");
        return false;
    }
    return true;
}

function ValidaNascimento(string $Nacimento): bool
{
    if (empty($Nacimento)) {
        setarMensagemErro('Você esqueceu de preenche sua idade.');
        return false;
    }
    return true;
}

function ValidaRua(string $Rua): bool
{
    if (empty($Rua)) {
        setarMensagemErro('O nome da sua Rua não pode ser vazio');
        return false;
    } else if (strlen($Rua) < 3) {
        setarMensagemErro('O nome da sua Rua deve conter mais que 3 caractere! Por favor tente .');
        return false;
    } else if (is_numeric($Rua)) {
        setarMensagemErro('A Rua não pode ser um numero.');
        return false;
    }

    return true;
}

function ValidaBairro(string $Bairro) : bool
{
    if (empty ($Bairro)) {
        setarMensagemErro('O bairro não pode ser vazio');
        return false;
    } else if (strlen ($Bairro) < 3) {
        setarMensagemErro('O nome do bairro de conter mais que 3 caractere!');
        return false;
    }else if (is_numeric($Bairro)){
        setarMensagemErro('O bairro não pode ser um numero');
        return false;
    }
    return true;
}

function ValidaCidade (string $Cidade) : bool {
    if (empty ($Cidade)){
        setarMensagemErro('A cidade não pode ser vazio');
        return false;
    }else if (strlen($Cidade) < 3){
        setarMensagemErro('O nome da cidade deve conter masi de 3 caracter');
        return false;
    }else if (is_numeric ($Cidade)){
        setarMensagemErro('A cidade não pode ser um numero');
        return false;
    }
    return true;
}
