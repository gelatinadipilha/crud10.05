
<?php

// definir as constantes de acesso ao banco
define("SERVIDOR", "localhost"); 
define("USUARIO", "root"); 
define("SENHA", ""); 
define("BANCO", "crud_sesi_senai"); 
define("PORTA", 3306);

function abrirbanco() {
    $con = new mysqli(SERVIDOR,USUARIO, SENHA, BANCO, PORTA);

    if ($con->connect_error){
        die("falha na conexao: " . $con->connect_error);

    }

    return $con;
}

function fecharbanco($con) {
    $con->close();
}