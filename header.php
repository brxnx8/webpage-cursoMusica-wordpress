<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importação de fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;700;800;900&family=Noto+Sans+Display:wght@100;200;400;700&display=swap" rel="stylesheet">

    <title><?php bloginfo('name') ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php if(is_page($homepage_id)) echo('onload="displayFirst()"'); ?>>
<header class="headerc">
        <div class="nome">
            <a href="http://cursos-musica.local/"><img src="<?= get_template_directory_uri() ?>\assets\images\logo.png" alt="" width="90px" height="55px"></a>
        </div> 
        <div>
            <input id="menu-hamburguer" type="checkbox" />
            <label for="menu-hamburguer">
                <div class="menu">
                    <span class="hamburguer"></span>
                </div>
                <ul class="menuh">
                    <li><a href="http://cursos-musica.local/">Inicio</a></li>
                    <li><a href="http://cursos-musica.local/sobre/">Sobre</a></li>
                    <li><a href="http://cursos-musica.local/cursos/">Preços</a></li>
                </ul>
            </label>
        </div>
</header>