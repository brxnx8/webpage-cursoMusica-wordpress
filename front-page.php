<?php
// Template Name: front-page

?>
<?php 
    get_header();
?>
<?php frontpage();?>
<section class="sectionTitle" style="background-image: url(<?= the_field('imagem_de_apresentacao') ?>); backgound-position:center;  "> 
    <div class="Presentation">
        <h1 class="title">
            <?php the_field('apresentacao_titulo'); ?>
        </h1> 
        <p class="description">
            <?php the_field('apresentacao_descricao'); ?>
        </p>
    </div>
</section>

<section class="about">
        <div class="about-text">
            <div class="text-about"><p><?php the_field('sobre-texto'); ?></p></div>
            <iframe  class="iframe-about" width="400" height="200" src="<?php the_field('sobre-youtube'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="about-button">CONHEÇA MAIS</div>
</section>
<section class="sectionCorses">


        <button onclick="preview()" class="preview">anterior</button>
       
        <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
        
        <section class="courses">
            <div>


              <?php if( get_field('curso_imagem') ): ?>
                  <img src="<?php the_field('curso_imagem'); ?>" alt="" srcset="" width="150" height="150">
              <?php endif; ?>


            </div>
            <div>
              <h1> <?php the_field('curso_nome'); ?> </h1>
            </div>
        </section>

            <?php }}?>

        <button onclick="next()" class="next">proximo</button>
       

</section>

<section class="sectionDepositions">
    <h1 class="titleDepositions">Depoimentos</h1>
    <div class="cardsDepositions">
        <div class="card">
            <p class="Testimony"> 
            <?php the_field('depoimento_texto_depoimento'); ?>
            </p>
            <div class="student">
                <h3 class="name"><?php the_field('depoimento_nome'); ?></h3>
                <pre> - </pre>
                <h3 class="stage"><?php the_field('depoimento_status_do_aluno'); ?></h3>
            </div> 
        </div>
        <div class="card">
            <p class="Testimony">                 
                <?php the_field('depoimento_2_texto_depoimento'); ?>
            </p>
            <div class="student">
                <h3 class="name"><?php the_field('depoimento_2_nome'); ?></h3>
                <pre> - </pre>
                <h3 class="stage"><?php the_field('depoimento_2_status_do_aluno'); ?></h3>
            </div>
        </div>
    </div>

<button class="buttonSeeMore">VEJA MAIS</button>
</section>

<section class="sectionCalendar">
</section>


<?php
    get_footer(); 
?>