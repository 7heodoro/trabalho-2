<?php
// 1. Inicia a sessão (essencial para o login funcionar)
session_start();

// 2. Dados de acesso
$userMaster = "admin@blog.com";
$passMaster = "123456";

// 3. Recebendo via POST (Verifique se os nomes batem com o 'name' do HTML)
$email = $_POST['email'];
$senha = $_POST['senha'];

// 4. Validação
if ($email == $userMaster && $senha == $passMaster) {
    // Sucesso: Cria a sessão e vai para o Index
    $_SESSION['logado'] = true;
    header("Location: Index.php");
} else {
    // Erro: Volta para o login com o marcador
    header("Location: login.php?erro=1");
}

// 5. Finaliza a execução do script
exit();
?>