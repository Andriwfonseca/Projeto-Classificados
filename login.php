<?php require('pages/header.php'); ?>
<div class="container">
    <br>
    <h1>Login</h1>

    <?php
    require 'classes/usuarios.class.php';
    $user = new Usuarios();
    if(isset($_POST['email'])){

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha');

        if($email && $senha){
           if($user->login($email, $senha)){
            ?>
            <script type="text/javascript">window.location.href="./";</script>
            <?php
           }else{
               ?>
                <div class="alert alert-danger">
                Usuário e/ou Senha errados!
                </div>
            <?php
            }
        }else{
            ?>
            <div class="alert alert-warning">
                Preencha todos os campos!
            </div>
            <?php
        }
    }
    ?>

    <form method="post">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" />
        </div>
        <input type="submit" value="Fazer Login" class="btn btn-dark" />
    </form>
</div>
<?php require('pages/footer.php'); ?>