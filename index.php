<?php 
include "Sevicos/MensagemDeErro.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="Width=device-width, initial-scale=1">
    <title>Formulario cadastro de clientes</title>
</head>
<body>
    <form action="script.php" method="post">
    <?php
       $MensagemErro = obterMensagemErro();
        if(!empty($MensagemErro)){
            echo $MensagemErro;
        }
        $MensagemSucesso = obterMensagemSucesso();
        if(!empty($MensagemSucesso)){
            echo $MensagemSucesso;
        }
    ?>
    <!-- Dados pessoas -->
        <fieldset>
         <legend> Dados Pessoas </legend>
         <table cellspacing="10">
         <tr>
             <td>
              <label for="nome">Nome:</label> 
             </td>
             <td align="left">
               <input type="text" name="nome" size="38" maxlength="40" id="nome">
             </td>
            
         </tr>
         <tr>
             <td>
             <label>Nascimento:</label>
             </td>
             <td aling="left">
             <input type="date" name="nacimento" id="">
             <!-- <input type="text" name="dia" size="2" maxlength="2" value="dd">
             <input type="text" name="mes" size="2" maxlength="2" value="mm">
             <input type="text" name="ano" size="4" maxlength="4" value="aaaa"> -->
             </td>
             <td>
             <label for="email">E-mail:</label>
             </td>
             <td aling="left">
               <input type="email" name="email">
             </td>
         </tr>
         <tr> 
          <td>
          <label for="rg">GR:</label>
          </td>
          <td align="left">
          <input type="text" name="rg" \ pattern="\d{3}\.\d{3}\.\d{3}" \ title="O RG deve seguir essa ordem: XXX.XXX.XXX">
          </td>
         </tr>
         <tr>
             <td>
                 <label>CPF:</label>
             </td>
                <td align="lefit">
                <input type="text" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite o CPF dessa Formar: XXX.XXX.XXX-XX"> 
             </td>
         </tr>
         </table>
        </fieldset> <br/>
        <!-- ENDEREÇO -->
        <fieldset >
            <legend>Endereço</legend>
            <table cellspacing="10">
                <tr>
                    <td>
                        <table for="rua">Rua</table>
                    </td>
                    <td aling="left">
                        <input type="text" name="rua" size="9" id="">
                    </td>
                    <td>
                        <table for="numero">Numero:</table>
                    </td>
                    <td aling="left">
                        <input type="text" name="numero" size="4" id="" maxlength="5">
                    </td>
                </tr>
                <tr>
                    <td> 
                        <label for="bairro">Bairro:</label>
                    </td>
                    <td aling="left">
                    <input type="text" name="bairro" id="">
                    </td> 
                </tr>
                <tr>
                    <td>
                        <label for="cidade">Cidade:</label>
                    </td>
                    <td aling="left">
                        <input type="text" name="cidade" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cep">CEP:</label>
                    </td>
                    <td>
                        <input type="text" name="cep" \ pattern="\d{5}-\d{3}" title="Digite assim o seu CEP: XXXXX-XXX"> <!-- <input type="text" name="cep2" size="3" maxlength="3">-->
                    </td>
                </tr>
            </table>
        </fieldset><br/>
        <input type="submit" value="Enviar" >
        <input type="reset" value="Limpar">

    
    </form>
</body>
</html>