<?php
// Template Name: Sobre
?>

<?php get_header() ?>

<section class="main">
        <section class='main-about'>
            <img src="<?php the_field('sua_imagem')?>" alt="">
            <div class="text">
                <?php the_field('texto_sobre')?>
            </div>
        </section>
        <div class="main-iframe">
            <iframe width="560" height="315" src="<?php the_field('iframe_youtube')?>" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
</section>
       
<?php get_footer(); ?>