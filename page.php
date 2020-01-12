<?php get_header( ) ;?>


<?php

    while (have_posts()): the_post();
    
?>

    <h1><?php the_title( ) ;?></h1>

    <?php the_content( ); ?>

    <p>Escrito por: <?php  the_author( );?></p>
    <p>Fecha edicion: <?php  the_date( );?></p>

<?php endwhile; ?>

<?php get_footer( ) ;?>