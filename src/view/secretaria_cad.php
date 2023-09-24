<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siga Secretaria</title>
</head>
<body>
<form  method='post' action='cadastrarAluno.php' name='dados' onSubmit='return enviardados();'>
            <table width='588'>

            <tr>
            <td width='200'>
            <size='2' face='Verdana, Arial, Helvetica, sans-serif'>NOME:
            </td>
            <td width='460'>
            <input name='nome' type='text' class='formbutton' id='nome' size='52' maxlength='150'>
            </td>
            </tr>
            
            <tr>
            <tr>
            <td width='118'><size='2' face='Verdana, Arial, Helvetica, sans=serif'> GÊNERO: </td>
            <td width='460'>
        
            <select name='sexo' id='sexo'>
            <option disabled selected>Escolha uma opção</option>
            <option value='FEMININO'>FEMININO</option>
            <option value='MASCULINO'>MASCULINO</option>
            <option value='TRANSGENERO'>TRANSGÊNERO</option>
            <option value='NEUTRO'>NEUTRO</option>
            <option value='NAO BINARIO'>NÃO BINÁRIO</option>
            <option value='OUTROS'>OUTROS</option>
            </select>
            </td>
            </tr>
            
            <tr>
            <td>
            <size='2' face='Verdana, Arial, Helvetica, sans-serif'>DATA DE NASCIMENTO:</size>
            </td>
            <td>
            <size='2'>
            <input name='data' type='date' id='data' class='formbutton'>
            </size=>
            </td>
            </tr>

            
            <tr>
            <td height='22'></td>
            <td>
            <br>
            <input name='Submit' type='submit' class='botao' value='Cadastrar'>
            <input name='Reset' type='reset' class='botao' value='Limpar campos'>
            <button class='botao' type='submit' formaction='crudAtor.php?acao=selecionar'>Voltar</button>
            </td>
            </tr>
            </table>
            </form>
       
</body>
</html>
