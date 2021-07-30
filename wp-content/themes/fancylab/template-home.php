<?php

/**
 * Template Name: Home Page
 * 
 */


get_header(); ?>

<div class="content-area">
    <main>
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <?php

                    for ($i = 1; $i < 4; $i++) :
                        $slider_page[$i] = get_theme_mod('set_slider_page' . $i);
                        $slider_button_text[$i] = get_theme_mod('set_slider_button_text' . $i);
                        $slider_button_url[$i] = get_theme_mod('set_slider_button_url' . $i);
                    endfor;

                    $args = array(
                        'post_type' => 'page',
                        'posts_per_page' => 3,
                        'post__in' => $slider_page,
                        'orderby' => 'post__in'
                    );

                    $slider_loop = new WP_Query($args);
                    $j = 1;

                    if ($slider_loop->have_posts()) :
                        while ($slider_loop->have_posts()) :
                            $slider_loop->the_post();
                    ?>
                            <li>
                                <!-- <img src="slide4.jpg" /> -->
                                <?php the_post_thumbnail('fancy-lab-slider', array('class' => 'img-fluid')); ?>
                                <div class="container">
                                    <div class="slider-details-container">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="slider-discription">
                                            <div class="subtitle">
                                                <?php the_content(); ?>
                                                <a href="<?php echo $slider_button_url[$j]; ?>"><?php echo $slider_button_text[$j]; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                    <?php
                            $j++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </section>
        <?php
        if (class_exists('WooCommerce')) :
        ?>
            <?php

            $popular_limit =  get_theme_mod('set_popular_max_num', 4);
            $popular_col =  get_theme_mod('set_popular_max_column', 4);
            $arrival_limit = get_theme_mod('set_new_arrival_max_num', 4);
            $arrival_col =  get_theme_mod('set_new_arrival_max_column', 4);

            ?>
            <section class="popular-products">
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo get_theme_mod('set_popular_title', 'Popular Products'); ?></h2>
                    </div>
                    <?php echo do_shortcode('[products limit="' . $popular_limit . '" columns="' . $popular_col . '" orderby="popularity"]'); ?>
                </div>
            </section>
            <section class="new-arrivals">
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo get_theme_mod('set_new_arrivals_title', 'New Arrivals'); ?></h2>
                    </div>
                    <?php echo do_shortcode('[products limit="' . $arrival_limit . '" columns="' . $arrival_col . '" orderby="date"]'); ?>
                </div>
            </section>

            <?php

            $show_deal       =   get_theme_mod('set_deal_show', 0);
            $deal_product_id =  get_theme_mod('set_deal_ID', 0);
            $regular = get_post_meta($deal_product_id, '_regular_price', true);
            $sale = get_post_meta($deal_product_id, '_sale_price', true);
            $currency = get_woocommerce_currency_symbol();

            if ($show_deal == 1 && (!empty($deal_product_id))) :
                $discount_percentage = absint(100 - (($sale / $regular) * 100));
            ?>

                <section class="deal-of-the-week">
                    <div class="container">
                        <div class="section-title">
                            <h2><?php echo get_theme_mod('set_deal_title', 'Deal of the Week'); ?></h2>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="deal-img col-md-6 col-12 ml-auto text-center">
                                <?php echo get_the_post_thumbnail($deal_product_id, 'large', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="deal-desc col-md-4 col-12 mr-auto text-center">
                                <?php if (!empty($sale)) : ?>
                                    <span class="discount">
                                        <?php echo $discount_percentage . '% OFF'; ?>
                                    </span>
                                <?php endif; ?>
                                <h3>
                                    <a href="<?php echo get_permalink($deal_product_id); ?>"><?php echo get_the_title($deal_product_id); ?></a>
                                </h3>
                                <p><?php echo get_the_excerpt($deal_product_id); ?></p>
                                <div class="prices">
                                    <span class="regular">
                                        <?php
                                        echo $currency;
                                        echo $regular;
                                        ?>
                                    </span>

                                    <?php if (!empty($sale)) : ?>
                                        <span class="sale">
                                            <?php
                                            echo $currency;
                                            echo $regular;
                                            ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <a href="<?php echo esc_url('?add-to-cart=' . $deal_product_id); ?>" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>

                    </div>
                </section>

            <?php
            endif;
            ?>
        <?php
        endif;
        ?>

        <section class="lab-blog">
            <div class="container">
                <div class="section-title">
                    <h2><?php echo get_theme_mod('set_blog_title', 'News From Our Blog'); ?></h2>
                </div>
                <div class="row">
                    <?php

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                    );

                    $blog_posts = new WP_Query($args);

                    // If there are any posts
                    if ($blog_posts->have_posts()) :

                        // Load posts loop
                        while ($blog_posts->have_posts()) : $blog_posts->the_post();
                    ?>
                            <article class="col-12 col-md-6">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) :
                                        the_post_thumbnail('fancy-lab-blog', array('class' => 'img-fluid'));
                                    endif;
                                    ?>
                                </a>
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="excerpt"><?php the_excerpt(); ?></div>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>

                        <p>Nothing to display</p>

                    <?php endif; ?>

                </div>
            </div>
        </section>


    </main>
</div>

<?php get_footer(); ?>