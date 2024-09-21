<?php require '../bootstrap.php' ?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Diário de Sucesso, o app que te levará pelo caminho do sucesso">
    <meta name="author" content="Roque Devs">

    <title>Diário de Sucesso | Entrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <main>
        <?php
            try {
                include loadPage();

            } catch (\Exception $e) {
                include_once 'pages/404.php';
            }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>