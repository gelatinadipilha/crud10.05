
<?php 
   include_once "conexao.php";
 
//verificar se houve envio do formulario via POST   
// echo"<pre>";
//print_r($_SERVER);
//echo"</pre>"; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nascimento = $_POST['nascimento'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $conexaoComBanco = abrirbanco();

    $sql = "insert into pessoas (nome,sobrenome,nascimento,endereco,telefone)
    values ('$nome','$sobrenome','$nascimento','$endereco','$telefone')";

    
    if ($conexaoComBanco->query($sql) === TRUE) {
        echo "contato salvo com sucesso no banco de dados";
    } else {
        echo "erro ao salvar no banco de dados: " . $conexaoComBanco->error;
    }

    fecharbanco($conexaoComBanco);
}
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
        <h2>cadastro de pessoas</h2>

       <form action="" method="POST">
            <label for="nome">nome</label>
            <input type="text"name="nome" required >

            <label for="sobrenome">sobrenome</label>
            <input type="text"name="sobrenome" required >

            <label for="nascimento">nascimento</label>
            <input type="date"name="nascimento" required >

            <label for="endereco">endereço</label>
            <input type="text"name="endereco" required >

            <label for="telefone">telefone</label>
            <input type="text"name="telefone" required >

            <button type="submit">salvar</button>
       </form>

     </section>

</body>
</html>