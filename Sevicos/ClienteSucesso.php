<?php
function MensagemConfirma (
    string $nome, string $numero, string $nacimento, string $rua, string $cidade, string $bairro ) : ?string
    
{
    if (validaNome($nome) && validaNumero($numero) && validaNascimento($nacimento) && validaRua($rua) &&  
    validaCidade ($cidade) && validaBairro($bairro) ) 
    {
        setarMensagemSucesso('E-mail enviado com sucesso!');
        return null;
    }
    return obterMensagemErro();
}
