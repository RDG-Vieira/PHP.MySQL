<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Inserir Novo Aluno</h1>
        <form action="../model1/processar_inserir_aluno.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            
            <div class="form-group">
                <label for="CPF">CPF:</label>
                <input type="text" class="form-control" id="CPF" name="CPF" required>
            </div>

            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
            </div>

            <div class="form-group">
                <label for="curso">Curso:</label>
                <select class="form-control" name="curso" id="curso" required>
                    <option value="ADS">ADS</option>
                    <option value="CD">CD</option>
                    <option value="GTI">GTI</option>
                    <option value="MKT">MKT</option>

                </select>

                <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>

                <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>

            </div>
                <br>
            <button type="submit" class="btn btn-primary">Inserir Aluno</button>

        </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>


</html>
