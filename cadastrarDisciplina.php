<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Calibri;
        }
    </style>
</head>
<?php
    include 'conexaoDisciplinas.php';
    $resultado ="";
    if (mysqli_connect_errno())
        $resultado = "Erro de conexão com o BD: " . mysqli_connect_error() . ". ";

    $codd = $_POST['coddisciplina'];
    $nomd = $_POST['nomedisciplina'];
    
    if(!empty($_POST['coddisciplina']) && !empty($_POST['nomedisciplina'])) {
        $sqlres = mysqli_query($con, "INSERT INTO disciplinas(coddisciplina, nomedisciplina) VALUES ('$codd', '$nomd')");
        if($sqlres == false) {
            $resultado = "Erro ao inserir a discplina. Verifique os dados e se a chave primária está repetida.";
        }
        else $resultado = "Cadastro da disciplina ok!";
    }
    else {
        $resultado = $resultado . "Não foi possível cadastrar a disciplina, dados vazios.";
    }
    $con->close();
?>
<body>
    <h2>Cadastro de disciplina</h2>
    <p>
    <?php
        echo $resultado;
    ?>
    </p>
    <a href="formCadastrarDisciplina.php">Voltar</a>
</body>
</html>