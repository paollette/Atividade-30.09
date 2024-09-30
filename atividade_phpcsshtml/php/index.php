<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

<nav>

<div id="titulo">
<h2>Cadastro e consulta de alunos</h2>
</div>

    <form action="cadastro.php" method="post">

    <div id="formulario">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Insira o nome" required><br><br>

        <label for="idade">Idade:</label><br>
        <input type="int" id="idade" name="idade" placeholder="Idade" required><br><br>

        <label for="">Email:</label><br>
        <input type="e-mail" id="email" name="email" placeholder="E-mail" required><br><br>

        <label for="curso">Curso:</label><br>
        <input type="text" id="curso" name="curso" placeholder="Curso" required><br><br>
    </div>
    
    <div id="botoes">
        <input type="submit" value="Cadastrar">
        <input type="submit" value="Deletar">
    </div>

    </form>

    <div id="tabela">

    </div>
<nav>

<section class="tabela">
    

</section>

</body>

</html>