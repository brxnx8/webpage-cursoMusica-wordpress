<?php
// Template Name: front-page

?>
<?php 
    get_header();
?>
<h1>HomePage</h1>
<section class="sectionTitle">   
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
            <div class="text-about">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore rem provident, perferendis minima facilis, aut eos corrupti magni quisquam blanditiis et impedit repellendus quia tempore tempora harum totam voluptatem! Pariatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laudantium laboriosam natus odio, dolore asperiores ducimus autem consequatur tenetur sit! Quidem quisquam ab animi quos voluptate error assumenda sint maxime?</div>
            <iframe  class="iframe-about" width="400" height="200" src="https://www.youtube.com/embed/X2mOfqeAH7c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="about-button">CONHEÇA MAIS</div>
</section>
<section class="sectionCorses">
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
                <h3 class="stage"><?php the_field('depoimento_status_do_aluno'); ?></h3>
            </div> 
        </div>
        <div class="card">
            <p class="Testimony">                 
                <?php the_field('depoimento_2_texto_depoimento'); ?>
            </p>
            <div class="student">
                <h3 class="name"><?php the_field('depoimento_2_nome'); ?></h3>
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