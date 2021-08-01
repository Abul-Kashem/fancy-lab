<?php

    /**
     * Template part for displaying posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Fancy Lab
     */

?>

<article class="col">
    <h1><?php the_title();?></h1>
    <div class="content"><?php the_content();?></div>
    <?php
        if ( comments_open() || get_comments_number() ):
            comments_template();
        endif;
    ?>
</article>