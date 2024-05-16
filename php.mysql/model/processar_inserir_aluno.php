<?php
//incluir o arquivo de conexão e executá-lo, caso não encontre-o gera um erro fatal
    require_once "../config/conexao.php";
    //verifica se o formulário foi submetido
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $curso = $_POST['curso'];
        $matricula = $_POST['matricula'];
        $cpf = $_POST['CPF'];
        $email = $_POST['email'];
        $endereço = $_POST['endereco'];
            if(isset($nome) && isset($dataNascimento) && isset($curso) && isset($matricula) &&
             isset($cpf) && isset($email) && isset($endereço)) {
        
                try {
                    //esse primeiro smtm ele guarda os valores nessa variavel
                $smtm = $conn -> prepare("INSERT INTO aluno  (nome , DataNascimento , Curso , Matricula, CPF, Email, Endereco) 
                VALUES(:nome , :DataNascimento , :Curso , :Matricula , :CPF, :Email, :Endereço))";

                //bindParam faz a ligação do valor da variável com os dados que saram colocados nas colunas do BC.
                // esse segundo smtm liga os valores as colunas
                $smtm -> bindParam(":nome" , $nome);
                $smtm -> bindParam(":DataNascimento" , $dataNascimento);
                $smtm -> bindParam(":Curso" , $curso);
                $smtm -> bindParam(":Matricula" , $matricula);
                $smtm -> bindParam(":CPF" , $cpf);
                $smtm -> bindParam(":Email" , $email);
                $smtm -> bindParam(":Endereco" , $endereço);
                
                //esse smtm que executa a consulta
                $stmt -> execute();

                //REDIRECIONA PARA A PASTA INDEX.PHP
                header("Location = ../templates/index.php");
                    exit(); //faz com que o script para de ser executa e fecha ápos acabar

                } // FIM TRY    

                catch(PDOException $e) { //essa função $e carrega todas possiveis mensagens de erros possiveis, que o getMessagem pode mostrar ao rastrear os erros.
                    echo "Erro ao inserir aluno" . $e -> getMessage(); //getMessage() é um padrão do PHP não fomos nós que definimos. 

                }
             }
    }//FIM IF

    else {
        echo "<h1>Valores não definidos</h1>";
    }
?>