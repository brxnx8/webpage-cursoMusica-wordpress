<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="headerc">
        <div class="nome">
            <img src="assets\images\Logo.png" alt="" width="25%">
        </div>
        <div>
            <input id="menu-hamburguer" type="checkbox" />
            <label for="menu-hamburguer">
                <div class="menu">
                    <span class="hamburguer"></span>
                </div>
                <ul class="menuh">
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Quem Somos</a></li>
                    <li><a href="#">Preços</a></li>
                </ul>
            </label>
        </div>
</header>