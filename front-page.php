<?php
// Template Name: front-page

?>
<?php 
    get_header();
?>
<section class="sectionTitle" style="background-image: url(<?= the_field('titulo_imagem_fundo') ?>); backgound-position:center;  "> 
    <div class="Presentation">
        <h1 class="title">
            <?php the_field('titulo_titulo'); ?>
        </h1> 
        <p class="description">
            <?php the_field('titulo_descricao'); ?>
        </p>
    </div>
</section>

<section class="about">
        <div class="about-text">
            <div class="text-about"><p><?php the_field('sobre_texto'); ?></p></div>
            <div class="iframe-about">
                <iframe width="450" height="250" src="<?php the_field('sobre_youtube'); ?>" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <a href="http://cursos-musica.local/sobre/" class="button-link"><button class="about-button">CONHEÇA MAIS</button></a>
</section>
<section class="sectionCourses">
        <button onclick="preview()" class="previewButton">&#10094</button>
       <?php 
            $args = array('category_name' => 'Curso');
            $courses = new WP_Query($args); 
            if ( have_posts() ) { 
                while ( $courses->have_posts() ) { 
                    $courses->the_post(); ?>
                    <section class="courses">
                        <?php if( get_field('imagem_ilustrativa') ): ?>
                            <figure class="courseFigure">
                                <img src="<?php the_field('imagem_ilustrativa'); ?>"> 
                                <figcaption class="courseCarouselTitle">
                                    <div class="courseCarouselDescription">
                                        <h1><?php the_title() ?></h1>
                                        <p>
                                            <?php the_field('breve_descricao') ?>
                                        </p>
                                    </div>
                                    <a href="http://cursos-musica.local/cursos/" class="button-link"><button class="courseButtonCarousel">Saiba Mais</button></a>
                                </figcaption>                       
                            </figure>
                        <?php endif; ?>
                    </section>
                <?php 
                }
            }
        ?>
        <button onclick="next()" class="nextButton">&#10095</button>
       

</section>

<section class="sectionDepositions">
    <h1 class="titleDepositions">Depoimentos</h1>
    <div class="cardsDepositions">       
        <?php
         $args = array('category_name' => 'Depoimento','posts_per_page' => '2');
         $quote = new WP_Query($args); 
         if ( have_posts() ) { 
             while ( $quote->have_posts() ) { 
                $quote->the_post(); ?>
                <div class="card">                    
                        <?php the_content( ); ?>                    
                    <div class="student">
                        <h3 class="name"><?php the_field('autor'); ?></h3>
                        <pre> - </pre>
                        <h3 class="stage"><?php the_field('status'); ?></h3>
                    </div> 
                </div>        
        <?php 
                }
            }
        ?>
        
        
    </div>

<a href="http://cursos-musica.local/depoimentos/"><button class="buttonSeeMore">VEJA MAIS</button></a>
</section>

<section class="sectionCalendar">
    <?php 
        $pageId = 98;
        $page = get_post($pageId);
        if($page){
            $calendar = apply_filters('the_content', $page->post_content);
            echo $calendar;
        }
    ?>
</section>


<?php
    get_footer(); 
?>