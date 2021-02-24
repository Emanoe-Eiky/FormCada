<?php

function MensagemConfirma (string $nome, string $numero, string $nacimento, string $rua, string $cidade, string $bairro ) : ?string
{
    if (validaNome($nome) && validaNumero($numero) && validaNascimento($nacimento) && validaRua($rua) &&  
    validaCidade ($cidade) && validaBairro($bairro)) 
    {
        $nome = $_POST['nome'];
        $nacimento = $_POST['nacimento'];
        $email = $_POST['email'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];


        removerMensagemErro();
        echo ('Cadastro feito com Sucesso!');
        $para = "eikymanoel09@gmail.com";
        $assunto = "Formulário de requerimento de conta";
        $corpo = "Nome: " .$nome. "\r\n" . 
                 "Data nascimento: " .$nacimento. "\r\n" . 
                 "E-mail:" .$email . "\r\n" .
                 "RG: " .$rg . "\r\n"."CPF: ".$cpf . "\r\n". 
                 "Rua: " .$rua . "\r\n". "Numero da casa: ".$numero . "\r\n" . 
                 "Bairro: ".$bairro . "\r\n" . 
                 "Cidade: ".$cidade. "\r\n" . 
                 "CEP: ".$cep. "\r\n". 
        $headers = "From: $email". "\r\n". 
                    "X=Maile:PHP".phpversion();
        mail($para, $assunto, $corpo, $headers);

    }
    removerMensagemSucesso();
    return obterMensagemErro();
}
