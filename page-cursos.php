<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
    <script src="<?= get_template_directory_uri()?>/js/addCourseSectionAnimation.js" type="text/javascript"></script>
</head>
<body>


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

</body>
</html>