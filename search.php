<?php get_header(); ?>
<?php 

    // Количество записей в слайдере
    define("SLIDER_COUNT", 3); 
    // Количество записей в Последние записи (sidebar)
    define("LATEST_POSTS", 4); 



?>


    <!-- Start Main Container -->
    <div class="container zerogrid">

        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
            <div class="wrap-col">
            <h2><?php single_cat_title("Результаты поиска " ); ?></h2>
                <!-- Start Post Item -->
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="post-margin">

                        <div class="post-avatar">
                            <div class="avatar-frame"></div>

                            <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />               
                        </div>

                        <h4 class="post-title"><a href="<?php the_guid(); ?>"><?php the_title(); ?></a></h4>
                        <ul class="post-status">
                            <li><i class="fa fa-clock-o"></i><?php the_time('j F Y'); ?></li>
                            <li><i class="fa fa-folder-open-o"></i> <?php $category = get_the_category(); echo '<a href="/category/'.$category[0]->slug.'/">'.$category[0]->cat_name.'</a>'; ?> </li>
                            <li><i class="fa fa-comment-o"></i>No Comments</li>

                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="featured-image">
                        <?php the_post_thumbnail('full', 'class="attachment-post-standard "'); ?>
                                           
                        <div class="post-icon">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                    </div>

                    <div class="post-margin">
                        <p>
                        <?php the_excerpt(); ?>

                        </p>
                    </div>

                    <ul class="post-social">
                        <li><a href="#" target="_blank">
                            <i class="fa fa-facebook"></i></a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-twitter"></i></a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-vk"></i></a>
                        </li>

                        <li>
                            <a href="<?php the_guid(); ?>" class="readmore">Читать дальше <i class="fa fa-arrow-circle-o-right"></i></a>
                        </li>
                    </ul>

                    <div class="clear"></div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <h3>Ничего не найдено!</h3>
        <?php endif; ?>
                <!-- End Post Item -->


                


                <!-- Start Pagination -->
                <div class="spacing-20"></div>
                <ul class="pagination">
                                   
                <?php
                    // global $wp_query;

                    $big = 999999999; // need an unlikely integer

                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'show_all'           => true,
                        'prev_next'          => false,
                        'before_page_number' => '<li>',
                        'after_page_number'  => '</li>'
                    ) );
                ?>
                </ul>
                <!-- End Pagination -->
                <div class="clear"></div>
            </div>
        </div>
        <!-- End Posts Container -->

        <?php get_sidebar(); ?>

        <div class="clear"></div>
    </div>
    <!-- End Main Container -->




<?php get_footer() ?>