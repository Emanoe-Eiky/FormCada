<?php
function MensagemConfirma(string $nome, string $numero, string $nacimento, string $endereco) : ?string
{
    if (validaNome($nome) && validaNumero($numero) && 
        validaNasCimento($nacimento) && validaCamposEndereco($endereco))
    {
        unset($_SESSION['Mensagem-de-erro']);
        unset($_SESSION['Mensagem-de-Sucesso']);
        setarMensagemSucesso('deu certo');
        return null;
    }
    return obterMensagemErro();
}
