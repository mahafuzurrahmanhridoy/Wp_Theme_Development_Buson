<?php get_header(); ?>
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><?php
                            printf(
                                esc_html(
                                    'Results for "%s"',
                                    'buson'
                                ),
                                '<span class="page-description serach-term">' . esc_html(get_search_query()) . '</span>'
                            );
                            ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="search-result">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php the_post_thumbnail('', array('class' => 'card-img rounded-0')); ?>
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo get_the_date('d'); ?></h3>
                                    <p><?php echo get_the_date('M'); ?></p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <?php the_excerpt(); ?>
                                <ul class="blog-info-link">
                                    <li><i class="fa fa-user"></i> <?php the_category(', '); ?></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a></li>
                                </ul>
                            </div>
                        </article>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
</section>
<?php get_footer(); ?>