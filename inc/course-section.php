<?php

function createDescription(){
    $description = get_the_content();
    $descriptionTopics = explode('.', $description);
    ?>
    <ul class="courseDescriptionList">
        <?php 
            foreach($descriptionTopics as $topic){
                if($topic != ''){
                    echo('<li><p>' . $topic . '</p></li>');
                    echo('<hr>');
                }
                
            }
        ?>
    </ul>
<?php
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