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
    <link rel="stylesheet" href="estilo/styleForm.css">
    <title>Formulario cadastro de clientes</title>
</head>

<body>
<div class="formulario">
    <form action="script.php" method="post">
        <div class="mensagemTela">
            <?php
            $MensagemErro = obterMensagemErro();
            if (!empty($MensagemErro)) {
                echo $MensagemErro;
            }
            $MensagemSucesso = obterMensagemSucesso();
            if (!empty($MensagemSucesso)) {
                echo $MensagemSucesso;
            }
            ?>
        </div> </br>
        <!-- Dados pessoas -->
        <fieldset class="formDadosPessoa">
         <legend > Dados Pessoas </legend>
         <table cellspacing="10">
         <tr>
             <td>
              <label for="nome" class="daodsCliesnte">Nome *:</label> 
             </td> 
             <td align="left">
               <input type="text" name="nome" size="38" maxlength="40" id="nome">
             </td>
            
         </tr>
         <tr>
             <td>
             <label class="daodsCliesnte">Nascimento *:</label>
             </td>
             <td aling="left">
             <input type="date" name="nascimento" id="" max="2000-01-01">
             <!-- <input type="text" name="dia" size="2" maxlength="2" value="dd">
             <input type="text" name="mes" size="2" maxlength="2" value="mm">
             <input type="text" name="ano" size="4" maxlength="4" value="aaaa"> -->
             </td>
             <td>
             <label for="email" class="daodsCliesnte">E-mail:</label>
             </td>
             <td aling="left">
               <input type="email" name="email">
             </td>
         </tr>
         <tr> 
          <td>
          <label for="rg" class="daodsCliesnte">GR *:</label>
          </td>
          <td align="left">
          <input type="text" name="rg" \ pattern="\d{3}\.\d{3}\.\d{3}" \ title="O RG deve seguir essa ordem: XXX.XXX.XXX" >
          </td>
          <td>
          <table for="tel" class="daodsCliesnte">Telefone *:</table>
          </td>
          <td align="left">
            <input type="text" name="tel" id="" \ pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$" title="Digite seu numero de telefone assim: (XX)XXXXX-XXXX">
         </td>
         </tr>
         <tr>
             <td>
                 <label class="daodsCliesnte">CPF *:</label>
             </td>
                <td align="lefit">
                <input type="text" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite o CPF dessa Formar: XXX.XXX.XXX-XX"> 
             </td>
         </tr>
         </table>
        </fieldset> <br/>
        <!-- ENDEREÇO -->
        <fieldset>
            <legend >Endereço</legend>
            <table cellspacing="10">
                <tr>
                    <td>
                        <table for="rua" class="daodsCliesnte">Rua *:</table>
                    </td>
                    <td aling="left">
                        <input type="text" name="rua" size="9" id="">
                    </td>
                    <td>
                        <table for="numero" class="daodsCliesnte">Numero *:</table>
                    </td>
                    <td aling="left">
                        <input type="text" name="numero" size="4" id="" maxlength="5">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bairro" class="daodsCliesnte">Bairro *:</label>
                    </td>
                    <td aling="left">
                        <input type="text" name="bairro" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cidade" class="daodsCliesnte">Cidade *:</label>
                    </td>
                    <td aling="left">
                        <input type="text" name="cidade" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cep" class="daodsCliesnte">CEP *:</label>
                    </td>
                    <td>
                        <input type="text" name="cep" \ pattern="\d{5}-\d{3}" title="Digite assim o seu CEP: XXXXX-XXX"> <!-- <input type="text" name="cep2" size="3" maxlength="3">-->
                    </td>
                </tr>
            </table>
        </fieldset><br />
        <input type="submit"  value="Enviar" class="bataoEnv">
        <input type="reset" value="Limpar" class="bataoEnv">


    </form>
</div>    
</body>

</html>