<?php get_header(); /*Template Name: Blogs*/ ?>

<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="blogs">
    <div class="blogListing">
        <?php
            $groupID = 'post';
            $custom_query_args = array('post_type' => 'post','posts_per_page' => 50,'order' => 'DESC','post_status' => 'publish');
            $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $custom_query = new WP_Query( $custom_query_args );
            $count = $custom_query->found_posts;
            while ($custom_query->have_posts()) : $custom_query->the_post();
            $title = strtolower(the_title('', '', false));
              //print_r($custom_query->query);
        ?>

        <?php
            $terms = get_the_category( $post->ID, 'categories' );
            if ( $terms && ! is_wp_error( $terms ) ) :
            $links = array();
            foreach ( $terms as $term ) {
            $links[] = $term->slug;
            }
            $tax_links = join( " ", str_replace(' ', '-', $links));
            $tax = strtolower($tax_links);
            else :
            $tax = '';
            endif;
        ?>
            <a href="<?php the_permalink();?>" class="blogListingBox">
                <div class="blogListingImg">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>">
                </div>
                <div class="blogListingContent">
                    <div class="categoryDate">
                        <h4 class="font20 fontW800 colorBlack fontPoppins">
                            <?php
                                $category_detail=get_the_category($post->ID);//$post->ID
                                foreach($category_detail as $cd){
                                $nm = $cd->cat_name; echo ' ';
                                }
                                echo $category_detail[0]->name;                
                            
                                $terms = get_the_category( $post->ID, 'categories' );
                                $links = array();
                                foreach ( $terms as $term ) {
                                    $links[] = $term->slug;
                                    $linksname[] = $term->name;
                                }
                                //print_r($linksname);
                                //echo $linksname[0];
                            ?>
                        </h4>
                        <img class="slash" src="<?php bloginfo('template_directory'); ?>/images/slash.svg">
                        <?php if( have_rows('author_details') ): ?>
                        <?php while( have_rows('author_details') ): the_row(); ?>
                        <div class="blogDate">
                            <img src="<?php bloginfo('template_directory'); ?>/images/blog-calendor.svg">
                            <?php $value = get_sub_field( "post_date" );
                            if ( $value ) {?>    
                                <p class="font16 fontW500 fontPoppins colorBlack"><?php echo get_sub_field('post_date'); ?></p>
                            <?php } else { ?>
                                <p class="font16 fontW500 fontPoppins colorBlack"><?php echo get_the_date(); ?></p>
                            <?php } ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <h2 class="font40 fontW800 colorBlack fontPoppins"><?php the_title(); ?></h2>
                        <?php $content = wp_strip_all_tags(get_field('blog_intro_box')); echo '<p class="font20 fontW500 fontPoppins colorBlack">' .substr($content, 0, 250) . '...</p>';
                        ?>
                </div>
            </a>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>