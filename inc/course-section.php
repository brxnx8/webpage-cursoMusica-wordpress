<?php

function createDescription($courseIndex){
    $description = get_field('curso_' . $courseIndex . '_descricao');
    $descriptionTopics = preg_split('/\r\n|\n|\r/', $description);
    ?>
    <ul class="courseDescriptionList">
        <?php 
            foreach($descriptionTopics as $topic){
                echo('<li><p>' . $topic . '</p></li>');
    
            }
        ?>
    </ul>
<?php
}
?>

<?php
function createCourseSection($courseIndex, $buttonMessage = 'ADQUIRA JÁ'){
    ?>
    <div class="courseSection">
        <div class="courseHeader">
            <?php 
                $image = get_field('curso_' . $courseIndex . '_icone');
                if( $image ) {
                    echo wp_get_attachment_image( $image );
                }
            ?>
            <h2 class="courseTitle">
                <?php the_field('curso_' . $courseIndex . '_titulo')?>
            </h2>
        </div>
        <?php 
            createDescription($courseIndex);
        ?>
        <div class="courseFooter">
            <p class="coursePrice">
                R$<?php the_field('curso_' . $courseIndex . '_preco')?>
            </p>
            <a>
                <button class="courseSectionButton">
                    <?= $buttonMessage?>
                </button>
            </a>
        </div>
    </div>
    <?php
}

?>