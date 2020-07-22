<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema nivel de senha</title>
</head>
<body>
    <form method="post">
        <input type="password" name="senha">
        <input type="submit" name="acao" value="Enviar!">
    </form>
    <?php 
        if(isset($_POST['acao'])){
            $senha = $_POST['senha'];
            if(preg_match('/^[A-Z]{1}[a-z]{3,}[0-9]{1,}$/',$senha)){
                echo '<h1>Sua senha foi redefinida com sucesso!</h1>';
            }else{
                echo '<h1>ERRO, sua senha precisa ter pelo menos 1 character maiúsculo, 1 character especial e 1 numero!</h1>';
            }
        }
    ?>
</body>
</html>