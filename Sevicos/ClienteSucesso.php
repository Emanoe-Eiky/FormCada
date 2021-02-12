<?php
function MensagemConfirma(string $Nome, string $Numero, string $Nacimento, string $Rua, string $Bairro, string $Cidade): ?string
{
    if (ValidaNome($Nome) && ValidaNumero($Numero) && ValidaNascimento($Nacimento) && ValidaRua($Rua) && ValidaBairro($Bairro)) {
        setarMensagemSucesso('deu certo');
        return null;
    }
    return obterMensagemErro();
}
