<?php 
   include_once "conexao.php";

   $conexaoComBanco = abrirbanco();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>agenda de contatos</h1>
        <nav>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="cadastrar.php">cadastrar</a></li>
            </ul>
        </nav>
    </header>
     <section>
        <h2>lista de contatos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nome</th>
                    <th>sobrenome</th>
                    <th>nascimento</th>
                    <th>endeco</th>
                    <th>telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>carlos</td>
                    <td>silva</td>
                    <td>15/02/2000</td>
                    <td>rua do calos silva</td>
                    <td>(65)99999-2222</td>
                </tr>
            </tbody>
        </table>
     </section>

</body>
</html>