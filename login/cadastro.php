<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];

    $handle = fopen("cadastrados.txt", "a");
    fwrite($handle, $nome."\n");
    fwrite($handle, $cpf."\n\n");
    fflush($handle);
    fclose($handle);

}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Cadastro de pessoas</h1>
    </div>
    <p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group p-5">
                <label>Nome</label>
                <input type="text" name="nome" class="" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group p-5">
                <label>CPF</label>
                <input type="text" name="cpf" class="" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>

        <br><br>

        <a href="welcome.php" class="btn btn-danger">Voltar</a>
    </p>
</body>
</html>