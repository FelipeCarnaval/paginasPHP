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
    $str = "";
    if (mysqli_connect_errno())
        $resultado = "Erro de conexão com o BD: " . mysqli_connect_error() . ". ";

    $sqlres = mysqli_query($con, "SELECT * FROM disciplinas ORDER BY nomedisciplina");
    if($sqlres == false) {
            $resultado = "Erro ao tentar listar disciplinas.";
    }
    else {
        mysqli_select_db($db, $con);
        $dados = mysqli_query($con,"SELECT * FROM disciplinas ORDER BY nomedisciplina");
        $linha = mysqli_fetch_assoc($dados);
        $total = mysqli_num_rows($dados);
        if($total > 0) {
          do {
              $str =  $str . $linha['coddisciplina'] . ", " . $linha['nomedisciplina'] . "<br/>";
          } while($linha = mysqli_fetch_assoc($dados));
        }
        mysqli_free_result($dados);
    }
?>
<body>
    <h2>Lista de disciplinas cadastradas</h2>
    <p>
    <?php
        echo $resultado . $str;
    ?>
    </p>
    <a href="disciplinas.php">Página inicial</a> <br/>
    <br/><br/><br/><br/>
</body>
</html>

