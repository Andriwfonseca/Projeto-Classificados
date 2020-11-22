<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificados</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./" class="navbar-brand">Classificados</a>
            </div>
            <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                <li class="nav-item"><a class="nav-link" href="#"> <?php echo $_SESSION['nome']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="meus-anuncios.php">Meus Anúncios</a></li> 
                <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
            <?php else: ?> 
                <li class="nav-item"><a class="nav-link" href="cadastre-se.php">Cadastre-se</a></li> 
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> 
            <?php endif; ?>
        </ul> 
        </div>
    </nav>