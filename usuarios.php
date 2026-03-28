<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>


<div class="dashboard-container">
<?php include 'menu.php'; ?>

<link rel="stylesheet" href="dash.css">

<main>
<div class="header-content">
        <div>
            <h2>Gestão de Usuários</h2>
            <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
        </div>
        <a href="cad-usuarios.php" class="btn-add-user">
            <i class="fa-solid fa-user-plus"></i> Novo Usuário
        </a>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Acesso</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Eric Freitas</td>
                    <td>eric@unifev.edu.br</td>
                    <td>Administrador</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td class="actions-cell">
                        <button class="btn-icon btn-view" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                        <button class="btn-icon btn-edit" title="Editar"><i class="fa-solid fa-pen"></i></button>
                        <button class="btn-icon btn-delete" title="Excluir"><i class="fa-solid fa-trash"></i></button>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Ana Souza</td>
                    <td>ana.souza@email.com</td>
                    <td>Editor</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td class="actions-cell">
                        <button class="btn-icon btn-view" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
                        <button class="btn-icon btn-edit" title="Editar"><i class="fa-solid fa-pen"></i></button>
                        <button class="btn-icon btn-delete" title="Excluir"><i class="fa-solid fa-trash"></i></button>
                </tr>
            </tbody>
        </table>
    </div>
</main>
</div>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</body>
</html>