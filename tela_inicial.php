<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    
<a class="btn btn-outline-danger" href="php/logout.php" role="button">Sair</a>


    <div class="container text-center text-light" style="margin-top: 10%; border: 10px solid; padding: 40px;">
    <h1><?php
    include 'php/conexao.php';
    session_start();
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
        $query = $conexao->query($sql);
        $resultado = $query->fetch_assoc();
        echo $resultado['nome']."!";
    }else {
        echo "<script> alert('Você não está logado!'); history.back(); </script>"; 
    }
    ?> Seja bem vindo ao sistema de lançamentos</h1>
        <p>Escolha uma opção para lançar</p>
    
    <div style="display: flex; flex-direction: column; align-items: center; gap: 20px; margin-top: 50px;">
    <a href="cad_categoria.php" class="btn btn-success" style="font-size: 30px;">Cadastrar Categoria</a>
    <a href="cad_lancamento.php" class="btn btn-warning" style="font-size: 30px;">Realizar um laçamento</a>
    </div>
</div>
</body>
</html>