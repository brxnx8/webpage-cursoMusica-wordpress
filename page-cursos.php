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


<?php
    $courses = ['a', 'b', 'c', 'd'];
    @require 'inc/course-section.php';
?>

<h1 class="coursesPageTitle">Cursos</h1>

<div class="coursesOptions">
    <?php 
        foreach($courses as $courseIndex){
            createCourseSection($courseIndex);
        }
    ?>
</div> 



</body>
</html>