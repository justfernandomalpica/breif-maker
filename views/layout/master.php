<?php use Core\Alerts\AlertManager; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/build/statics/modernizr.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">
    <title>Breif | <?= $view_title ?></title>
</head>
<body>
    <!-- Contenedor de alertas -->
    <?php if(isset($view_alerts)) : ?>
        <div class="alerts-container">
            <?php foreach($view_alerts as $alert) : ?>
                <div class="alert <?= $alert->type ?>">
                    <h6 class="alert-head"><?= $alert->head ?></h6>
                    <p class="alert-body"><?= $alert->body ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Contenido principal -->
    <?= $content ?>

    <!-- Bundle principal -->
    <script src="/build/js/bundle.min.js"></script>
</body>
</html>