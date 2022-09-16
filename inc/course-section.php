<?php

function createDescription(){
    $description = get_the_content();
    $descriptionTopics = explode('</li>', $description);

    foreach($descriptionTopics as $topic){
        if($topic != ''){
            echo($topic . '</li>');
            echo('<hr>');
        }     
    }
}
?>

<?php
function createCourseSection($courseIndex, $buttonMessage = 'ADQUIRA JÁ'){
    ?>
    <div class="courseSection" id="<?= 'course' . $courseIndex ?>">
        <div class="courseHeader">
            <?php 
                $image = get_field('icone');
                if( $image ) {
                    echo wp_get_attachment_image( $image );
                }
            ?>
            <h2 class="courseTitle">
                <?php the_title()?>
            </h2>
        </div>
        <?php 
            createDescription();
        ?>
        <div class="courseFooter">
            <p class="coursePrice">
                R$<?php the_field('preco')?>
            </p>
            <a href="<?php the_field('Link_adquiraja')?>">
                <button class="courseSectionButton">
                    <?= $buttonMessage?>
                </button>
            </a>
        </div>
    </div>
    <?php
}

?>