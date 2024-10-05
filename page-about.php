<?php get_header(); ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <section class="home-blog">
                    <div class="container">
                        <div class="blog-items">
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    ?>
                                        <article>
                                            <h2><?php the_title(); ?></h2>
                                            <div class="meta-info">
                                                <p><?php esc_html_e('Posted in', 'text-domain'); ?> <?php echo get_the_date(); ?> <?php esc_html_e('by', 'text-domain'); ?> <?php the_author_posts_link(); ?></p>
                                                <p><?php esc_html_e('Categories:', 'text-domain'); ?> <?php the_category( ' ' ); ?></p>
                                                <p><?php esc_html_e('Tags:', 'text-domain'); ?> <?php the_tags( '', ', '); ?></p>
                                            </div>
                                            <?php the_content(); ?>
                                        </article>
                                    <?php
                                    endwhile;
                                else: ?>
                                    <p><?php esc_html_e('Nothing yet to be displayed!', 'text-domain'); ?></p>
                            <?php endif; ?>                                
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
<?php get_footer(); ?>
