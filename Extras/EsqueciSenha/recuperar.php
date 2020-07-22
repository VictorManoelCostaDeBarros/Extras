<?php 
    session_start();
    if(isset($_POST['acao'])){
        // Existe o post para recuperação de senha!
        $token = uniqid();
        $_SESSION['token'] = $token;
        $_SESSION['email'] = $_POST['email'];
?>
    <h2>Você fez uma solicitação de nova senha!</h2>
    <p>Clique <a href="recuperar.php?token=<?php echo $_SESSION['token']; ?>">Aqui</a> para redefinir.</p>


<?php 
    }else if($_GET['token']){
        $token = $_GET['token'];
        if($token != $_SESSION['token']){
            die("O token no parametro get nao e válido!");  
        }else{
            // Podemos redefinir a senha.
            echo '<h2>Redefinição de senha para o email: '.$_SESSION['email'].' </h2>';
            echo '<form method="post">
                <input type="password" name="password" placeholder="Nova senha..."/>
                <input type="submit" name="redefinir" value="REDEFINIR!"/>
            </form>';
        }
?>


<?php 
    }
?>

<?php 
    if(isset($_POST['redefinir'])){
        echo 'A senha foi redefinida com sucesso!';
    }
?>