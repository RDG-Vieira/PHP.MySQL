<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Alunos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Serviços de Gestão de Alunos</h1>
        <div class="list-group">
            <!-- Link para inserir aluno-->
            <a href="inserir_aluno.php" class="list-group-item list-group-item-action">Inserir Aluno</a>

            <!--Link para atualizar aluno-->
            <a href="atualizar_aluno.php" class="list-group-item list-group-item-action">Atualizar Aluno</a>

            <!--Link para listar alunos-->
            <a href="listar_aluno.php" class="list-group-item list-group-item-action">Listar Aluno</a>

            <!--Link para deletar aluno-->
            <a href="deletar_aluno.php" class="list-group-item list-group-item-action">Deletar Aluno</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>