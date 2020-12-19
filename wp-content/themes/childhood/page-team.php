<?php 
/*
Template Name: Наша команда
*/
?>

<?php 
    get_header( );
?>

<div class="specialists">
    <div class="container">
        <div class="title"><?php the_field('about_command'); ?></div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                    <?php 
                        $photo = get_field('photo_team');

                        if(!empty($image)): ?>
                            <img 
                                class="specialists__img"
                                src="<?php echo $photo['url']; ?>" 
                                alt="<?php echo $photo['alt']; ?>">
                        <?php endif; 
                    ?>
            </div>
        </div>
    </div>
</div>


<?php 
    get_footer( );
?>