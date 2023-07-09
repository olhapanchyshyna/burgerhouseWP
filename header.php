<!Doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="title" content="Burger House">
    <meta name="description" content="Меню бургеров">
    <title><?php echo bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
  <body>
    <section class="main">
        <header class="header">
            <div class="container">
                <div class="logo">
                    <?php the_custom_logo()?>
                </div>
                <nav class="nav">
                    <ul class="menu-list">
                        <li class="menu-item"><a href="#why">Why Choose Us</a></li>
                        <li class="menu-item"><a href="#menu">Burger Menu</a></li>
                        <li class="menu-item"><a href="#order">Order Placement</a></li>
                    </ul>
                </nav>
                
                <div class="navbar__wrapper_icon">
                    <img src="<?php echo bloginfo("template_url");?>/assets/images/icons/li_menu.svg" alt="menu" class="animate__animated navbar__open">
                    <img src="<?php echo bloginfo("template_url");?>/assets/images/icons/li_close.svg" alt="close" class="animate__animated navbar__close">
                </div>
                <div class="currently" title="изменить валюту">€</div>
            </div>
        </header>