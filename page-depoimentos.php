<?php
// Template Name: Depoimentos
?>

<?php get_header(); ?>
<section class="maindepoimentos">
    <h1 class="quotesTitle">Depoimentos</h1>
    <div class="quotes">
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array('category_name' => 'Depoimento',
                          'posts_per_page' => '3',
                          'paged' => $paged);
            $loop = new WP_Query($args);
            while($loop->have_posts()){
                $loop->the_post();
            ?>
                <div class="card">
                    <?php the_content() ?>
                    <div class="student">
                        <h3 class="name"><?php the_field('autor') ?></h3>
                        <pre> - </pre>
                        <h3 class="stage"><?php the_field('status') ?></h3>
                    </div>
                </div>
            <?php
            }
        ?>
    </div>
    <div class="pagination">
        <?php
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $loop->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( '<<', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( '>>', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
        ?>
    </div>
</section>
<?php get_footer(); ?>