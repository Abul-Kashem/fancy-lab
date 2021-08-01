<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header>
        <h1>
            <?php the_title(); ?>
        </h1>
        <div class="meta">
            <p>
                <?php esc_html_e('Published by', 'fancylab'); ?> <?php the_author_posts_link(); ?> <?php esc_html_e('on', 'fancylab'); ?> <?php echo esc_html(get_the_date()); ?>
                <br>
                <?php if (has_category()) : ?>
                    <?php esc_html_e('Categories', 'fancylab'); ?> : <span><?php the_category(' '); ?></span>
                <?php endif; ?>
                <br>
                <?php if (has_tag()) : ?>
                    <?php esc_html_e('Tags', 'fancylab'); ?> : <span><?php the_tags('', ', '); ?></span>
                <?php endif; ?>

            </p>
        </div>
        <div class="post-thumbnail">
            <?php
            if (has_post_thumbnail()) :
                the_post_thumbnail('fancy-lab-blog', array('class' => 'img-fluid'));
            endif;
            ?>
        </div>
    </header>

    <div class="content">

        <?php
        wp_link_pages(
            array(
                'before' => '<p class="inner-pagination">' . 'Pages',
                'after' => '</p>',
            )
        );

        the_content();

        ?>
    </div>

</article>