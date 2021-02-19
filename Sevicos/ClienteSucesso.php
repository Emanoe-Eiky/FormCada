<?php
function MensagemConfirma (
    string $nome, string $numero, string $nacimento, string $rua, string $cidade ) : ?string
{
    if (validaNome($nome) && validaNumero($numero) && validaNascimento($nacimento) && validaRua($rua) &&  
    validaCidade ($cidade) )
    {
        unset($_SESSION['Mensagem-de-erro']);
        setarMensagemSucesso('E-mail enviado com sucesso!');
        return null;
    }
    return obterMensagemErro();
}
