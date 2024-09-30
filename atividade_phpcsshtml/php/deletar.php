<?php
if(input value="Deletar" == true){
 require_once 'db.php'; 
    $host = 'localhost';
    $db = 'escola_sql';
    $user = 'paolla';
    $pass = '123456';
    $port = 3307;
    $database = new Database($host,$db,$user,$pass,$port);
    $database -> connect();
    $pdo = $database->getConnection();

    /*
    Recuperação de dados do form
    */
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $email = $_GET["email"];
    $curso = $_GET["curso"];

    /*
    Insere os dados no banco
    */

    $stmt = $pdo->prepare("DELETE INTO escola_sql.alunos(nome, idade, email, curso) VALUES('$nome', '$idade', '$email', '$curso');");
    $stmt->execute();}

?>