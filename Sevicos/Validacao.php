<?php
function  validaNome(string $nome): bool
{
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio');
        return false;
    } else if (strlen($nome) < 6) {
        setarMensagemErro('O nome deve conter mais que 3 caractere! Por favor coloque seu nome completo.');
        return false;
    } else if (is_numeric($nome)) {
        setarMensagemErro('Seu nome não pode ser um numero.');
        return false;
    }
    return true;
}


function validaNumero(string $numero): bool
{
    if (!is_numeric($numero)) {
        setarMensagemErro("Digete um numero valido para o numero da casa");
        return false;
    }
    return true;
}

function validaNascimento(string $nacimento): bool
{
    if (empty($nacimento)) {
        setarMensagemErro('Você esqueceu de preenche sua idade.');
        return false;
    }
    return true;
}


function validaCamposEndereco(string $endereco): bool
{
    if (empty($endereco)) {
        setarMensagemErro('O nome da sua Rua não pode ser vazio');
        return false;
    } else if (strlen($endereco) < 3) {
        setarMensagemErro('O nome da sua Rua deve conter mais que 3 caractere! Por favor tente .');
        return false;
    } else if (is_numeric($endereco)) {
        setarMensagemErro('A Rua não pode ser um numero.');
        return false;
    }

    return true;
}