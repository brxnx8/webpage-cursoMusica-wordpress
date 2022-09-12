<?php get_header() ?>

<?php
    @require 'inc/course-section.php';

    $args = array('category_name' => 'Curso');
    $courses = get_posts($args);
?>

<h1 class="coursesPageTitle">Cursos</h1>

<div class="coursesOptions">
    <?php 
        foreach($courses as $courseIndex => $post){
            setup_postdata($post);
            createCourseSection($courseIndex);
        }
    ?>
</div> 

<script type="text/javascript">
    addAnimationToCourses(<?= sizeof($courses) ?>, 0.4)
</script>

<?php get_footer() ?>