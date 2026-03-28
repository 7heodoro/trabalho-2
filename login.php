<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <i class="fa-solid fa-newspaper logo-icon"></i>
            <h2>Painel do Blog</h2>
        </div>

<?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
            <div class="error-alert">
                <i class="fa-solid fa-circle-exclamation"></i>
                Usuário ou senha incorretos!
            </div>
        <?php endif; ?>

        <form action="valida_login.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="form-group">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>

            <button type="submit" class="btn-login">
                <i class="fa-solid fa-right-to-bracket"></i> Acessar Painel
            </button>
        </form>
    </div>
</div>

        </body>