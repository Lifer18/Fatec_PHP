<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
print_r($_POST);
echo '<br/><br/>';
$senha="lifer18";
$tentativa=$_POST['senha'];

    if ($tentativa==$senha){
        echo 'Parabéns, você sabe a senha';
    }
    else{
        echo 'Você errou a senha.';

        $handle = fopen("senhas_enviadas.txt", "a");
        fwrite($handle, $tentativa."\n");
        fflush($handle);
        fclose($handle);

    }

?>
</body>
</html>