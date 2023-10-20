<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= BASE_DIR; ?>imgs/programing.svg">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="<?= BASE_DIR; ?>css/style.css">
    <link rel="stylesheet" href="<?= BASE_DIR; ?>css/tablet.css">
    <link rel="stylesheet" href="<?= BASE_DIR; ?>css/smartphone.css">
    <title>Front Controller</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="<?= BASE_DIR; ?>inicio/index">PHP ORIENTADO A OBJETOS</a>
            </div>
            <ul class="links">
                <li><a href="<?= BASE_DIR; ?>inicio/">INCIO</a></li>
                <li><a href="<?= BASE_DIR; ?>clientes/">CLIENTES</a></li>
                <li><a href="<?= BASE_DIR; ?>clientes/new">REGISTRO</a></li>
            </ul>
            <a href="https://github.com/Ever-VC/Front_Controller_PHP.git" class="action_btn" target="_blank">
                <i class="fa-brands fa-github"></i>
                GitHub
            </a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        <div class="dropdown_menu">
            <li><a href="<?= BASE_DIR; ?>inicio/">INICIO</a></li>
            <li><a href="<?= BASE_DIR; ?>index.php?controller=About&action=showAbout">CLIENTES</a></li>
            <li><a href="<?= BASE_DIR; ?>index.php?controller=Contact&action=showContact">REGISTRO</a></li>
            <li><a href="https://github.com/Ever-VC" class="action_btn">GitHub</a></li>
        </div>
    </header>