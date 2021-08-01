<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fancy Lab
 */


get_header(); ?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <?php
                // // If there are any posts
                if (have_posts()) :
                    // Load posts loop
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'page');
                    endwhile;
                else :
                ?>

                    <p><?php esc_html_e('Nothing to display', 'fancylab'); ?></p>

                <?php endif; ?>


            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>