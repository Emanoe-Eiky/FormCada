<?php 
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
    <!-- Dados pessoas -->
        <fieldset>
         <legend> Dados Pessoas </legend>
         <table cellspacing="10">
         <tr>
             <td>
              <label for="nome">Nome:</label> 
             </td>
             <td align="left">
               <input type="text" name="mome" size="43" maxlength="40">
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
          <input type="text" name="rg" size="13" maxlength="13">
          </td>
         </tr>
         <tr>
             <td>
                 <label>CPF:</label>
             </td>
                <td align="lefit">
                <input type="text" name="cpf" size="9" maxlength="14"> 
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
                    <input type="text" name="bairro " id="">
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
                        <input type="text" name="cep" size="8" maxlength="8"> <!-- <input type="text" name="cep2" size="3" maxlength="3">-->
                    </td>
                </tr>
            </table>
        </fieldset><br/>
        <input type="submit" value="Enviar" >
        <input type="reset" value="Limpar">

    
    </form>
</body>
</html>