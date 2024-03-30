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
<body>
    <h2>Formulário para cadastro de disciplina</h2>
    <p>
        <form action="cadastrarDisciplina.php" method="POST" >
            Código da disciplina:&nbsp;<input name="coddisciplina" type="text" /> <br/>
            Nome da disciplina:&nbsp;&nbsp;&nbsp;<input name="nomedisciplina" type="text" /> <br/><br/>
            <input type="submit" value="Gravar" />
        </form>
    </p>
    <a href="disciplinas.php">Página inicial</a> <br/>
    <br/><br/><br/><br/>
</body>
</html>