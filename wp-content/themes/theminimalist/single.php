<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Website
 */

get_header();
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
?>
<main id="primary" class="site-main">

<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="blogsDetails">
    <div class="blogsDetailsSection">
        <div class="blogsDetailsOne">
            <?php if( have_rows('author_details') ): ?>
            <?php while( have_rows('author_details') ): the_row(); ?>
            <div class="blogDate">
                <img src="<?php bloginfo('template_directory'); ?>/images/blog-calendor.svg">
                <p class="font16 fontW500 fontPoppins colorBlack"><?php echo get_sub_field('post_date'); ?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <h1 class="font60 fontW800 fontPoppins colorBlack"><?php the_title(); ?></h1>
            <div class="authorBoxDesktop">
                <div class="shareIcons">
                    <p class="font20 fontW800 fontPoppins colorBlack">SHARE</p>
                    <div class="icons">
                        <div class="iconsImg">
                            <a href="https://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" target="_blank">
                                <svg class="fb" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                	<circle cx="18" cy="18" r="18" fill="#E5E5E5"/>
                                	<path d="M13.7434 18.5868H15.7165V26.7097C15.7165 26.8701 15.8465 27 16.0069 27H19.3523C19.5127 27 19.6426 26.8701 19.6426 26.7097V18.6251H21.9109C22.0583 18.6251 22.1824 18.5144 22.1993 18.3679L22.5438 15.3775C22.5532 15.2952 22.5272 15.2128 22.4721 15.1511C22.417 15.0893 22.3382 15.0539 22.2554 15.0539H19.6427V13.1794C19.6427 12.6143 19.947 12.3277 20.5472 12.3277C20.6327 12.3277 22.2554 12.3277 22.2554 12.3277C22.4158 12.3277 22.5457 12.1977 22.5457 12.0374V9.29247C22.5457 9.1321 22.4158 9.00215 22.2554 9.00215H19.9012C19.8846 9.00134 19.8477 9 19.7934 9C19.3849 9 17.965 9.08019 16.8435 10.112C15.6008 11.2554 15.7735 12.6244 15.8148 12.8618V15.0539H13.7434C13.5831 15.0539 13.4531 15.1838 13.4531 15.3442V18.2964C13.4531 18.4568 13.5831 18.5868 13.7434 18.5868Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                        <div class="iconsImg">
                            <a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo $current_url; ?>" target="_blank">
                                <svg class="twitter" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                	<circle cx="18" cy="18" r="18" fill="#E5E5E5"/>
                                	<path d="M26.9443 13.0412C27.0132 12.9578 27.0187 12.8389 26.9579 12.7495C26.8971 12.66 26.7844 12.6213 26.6816 12.6548C26.2042 12.8104 25.7071 12.921 25.1942 12.9833C25.8059 12.6133 26.3105 12.0808 26.6474 11.4448C26.6967 11.3518 26.6805 11.2376 26.6074 11.1619C26.5342 11.0862 26.4206 11.0663 26.3259 11.1124C25.7309 11.4019 25.0945 11.619 24.4274 11.7514C23.7102 10.9813 22.6894 10.5 21.559 10.5C19.3895 10.5 17.6297 12.2744 17.6297 14.4636C17.6297 14.7737 17.6646 15.0759 17.7321 15.3667C14.7621 15.216 12.0975 13.8969 10.1819 11.8553C10.0494 11.7141 9.85171 11.6545 9.66333 11.6987C9.47491 11.7429 9.3242 11.8843 9.26855 12.0697C9.15954 12.4332 9.10075 12.8189 9.10075 13.2181C9.10075 14.594 9.70935 15.8069 10.7635 16.5176C10.4789 16.5084 10.0816 16.4202 9.72685 16.3248C9.52896 16.2716 9.31765 16.3274 9.17205 16.4717C9.02649 16.616 8.96905 16.8266 9.0203 17.025C9.40233 18.5039 10.6463 19.6563 12.1363 19.9583C11.8057 20.0491 11.5019 20.0973 11.1433 20.0973C11.1432 20.0973 11.1431 20.0973 11.1429 20.0973C10.9823 20.0973 10.8336 20.1827 10.7528 20.3215C10.6719 20.4604 10.6711 20.6315 10.7502 20.7714C11.4172 21.9506 12.6724 22.7527 14.1064 22.7799C12.7615 23.8424 11.0721 24.4756 9.23189 24.4756C9.23077 24.4756 9.22961 24.4756 9.22849 24.4756C9.12359 24.4755 9.03216 24.547 9.00679 24.6487C8.98143 24.7506 9.02872 24.8565 9.12136 24.9057C10.6745 25.7314 12.444 26.2012 14.3215 26.2012C21.5485 26.2012 25.5015 20.1609 25.5015 14.9234C25.5015 14.751 25.4978 14.5813 25.4903 14.4107C26.0293 14.0176 26.5186 13.5564 26.9443 13.0412Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                        <div class="iconsImg">
                            <a href="https://www.linkedin.com/shareArticle?url=<?php echo $current_url; ?>&title=<?php echo the_title(); ?>&summary=<?php echo the_title(); ?>" target="_blank">
                                <svg class="linkdin" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                	<circle cx="18" cy="18" r="18" fill="#E5E5E5"/>
                                	<g clip-path="url(#clip0_4317_1685)">
                                		<path d="M13.1996 14.7837H9.57807C9.41734 14.7837 9.28711 14.914 9.28711 15.0747V26.709C9.28711 26.8697 9.41734 26.9999 9.57807 26.9999H13.1996C13.3603 26.9999 13.4905 26.8697 13.4905 26.709V15.0747C13.4905 14.914 13.3603 14.7837 13.1996 14.7837Z" fill="black"/>
                                		<path d="M11.3897 9C10.072 9 9 10.0709 9 11.3871C9 12.704 10.072 13.7752 11.3897 13.7752C12.7064 13.7752 13.7775 12.7039 13.7775 11.3871C13.7776 10.0709 12.7064 9 11.3897 9Z" fill="black"/>
                                		<path d="M22.4117 14.4944C20.9572 14.4944 19.882 15.1197 19.2298 15.8301V15.0745C19.2298 14.9138 19.0996 14.7835 18.9389 14.7835H15.4707C15.3099 14.7835 15.1797 14.9138 15.1797 15.0745V26.7088C15.1797 26.8696 15.3099 26.9998 15.4707 26.9998H19.0842C19.245 26.9998 19.3752 26.8696 19.3752 26.7088V20.9525C19.3752 19.0128 19.9021 18.2571 21.2542 18.2571C22.7269 18.2571 22.8439 19.4686 22.8439 21.0523V26.7089C22.8439 26.8696 22.9741 26.9998 23.1348 26.9998H26.7498C26.9105 26.9998 27.0407 26.8696 27.0407 26.7089V20.3273C27.0407 17.4429 26.4907 14.4944 22.4117 14.4944Z" fill="black"/>
                                	</g>
                                	<defs>
                                		<clipPath id="clip0_4317_1685">
                                			<rect width="18" height="18" fill="white" transform="translate(9 9)"/>
                                		</clipPath>
                                	</defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blogTags">
                    <?php
                    $tags = get_the_tags($post->ID);
                        foreach ( $tags as $tagm ) {
                        $tagsm[] = $tagm->name;
                        }
                        
                       
                        $terms = get_the_category( $post->ID, 'categories ' );
                        if ( $terms && ! is_wp_error( $terms ) ) :
                        $links = array();
                        foreach ( $terms as $term ) {
                        $links[] = $term->slug;
                        }
                        $tax_links = join( " ", str_replace(' ', '-', $links));
                        $tax = ucwords($tax_links);
                        else :
                        $tax = '';
                        endif;
                    ?>
                    <p class="font20 fontW800 fontPoppins colorBlack">Tags <span class="fontW500"><?php  echo implode(" / ",$tagsm);//echo str_replace(' ', ' / ', $tax);echo $tagsm[0]; ?></span> </p>
                </div>
            </div>
        </div>
        <div class="blogsDetailsTwo">
            <div class="blogContentBox">
			   <?php the_content(); ?>
            </div>
            <div class="blogModal">
                <?php if( have_rows('blog_modal') ): ?>
                    <?php while( have_rows('blog_modal') ): the_row(); ?>
                        <div class="">
                            <?php

                             if( have_rows('blog_modal_div') ): ?>
                            <?php while( have_rows('blog_modal_div') ): the_row(); ?>

                            <?php if (get_sub_field('references_heading')!=''){  ?>
                            <a href="#modal-10" class="link fontW800 colorBlack fontPoppins"><?php echo get_sub_field('references_heading'); ?> </a> 
                            <?php } ?>
                            <?php endwhile; ?>
                                <?php endif; ?>
                        </div>
                        <div data-ml-modal id="modal-10">
                            <a href="#!" class="modal-overlay"></a>
                            <div class="modal-dialog modal-dialog-lg">
                                <?php if( have_rows('blog_modal_section') ): ?>
                                <?php while( have_rows('blog_modal_section') ): the_row(); ?>
                                <div class="modalHeader">
                                    <!-- <a href="#!" class="modal-close">&times;</a> -->
                                    <span class="modaltitle font60 fontW800 fontPoppins colorBlack"><?php echo get_sub_field('blog_modal_title'); ?></span> 
                                    <a href="#!" class="modal-close">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/modal-close-blog.svg"> 
                                    </a>
                                </div>
                                <div class="modal-content newspaper">
                                    <ul>
                                        <?php if( have_rows('blog_modal_list') ): ?>
                                        <?php while( have_rows('blog_modal_list') ): the_row(); ?>
                                        <li><a href="<?php echo get_sub_field('blog_modal_list_link'); ?>" target="_blank" class="fontW500 font20 fontPoppins colorBlack"><?php echo get_sub_field('blog_modal_list_title'); ?></a></li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
        </div>
        <div class="authorBoxMobile">
            <div class="shareIcons">
                <h4 class="font20 fontW800 fontPoppins colorBlack">Share</h4>
                <div class="icons">
                    <div class="iconsImg">
                       <a href="https://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" target="_blank">
                            <svg class="fb" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="18" fill="#E5E5E5"/>
                                <path d="M13.7434 18.5868H15.7165V26.7097C15.7165 26.8701 15.8465 27 16.0069 27H19.3523C19.5127 27 19.6426 26.8701 19.6426 26.7097V18.6251H21.9109C22.0583 18.6251 22.1824 18.5144 22.1993 18.3679L22.5438 15.3775C22.5532 15.2952 22.5272 15.2128 22.4721 15.1511C22.417 15.0893 22.3382 15.0539 22.2554 15.0539H19.6427V13.1794C19.6427 12.6143 19.947 12.3277 20.5472 12.3277C20.6327 12.3277 22.2554 12.3277 22.2554 12.3277C22.4158 12.3277 22.5457 12.1977 22.5457 12.0374V9.29247C22.5457 9.1321 22.4158 9.00215 22.2554 9.00215H19.9012C19.8846 9.00134 19.8477 9 19.7934 9C19.3849 9 17.965 9.08019 16.8435 10.112C15.6008 11.2554 15.7735 12.6244 15.8148 12.8618V15.0539H13.7434C13.5831 15.0539 13.4531 15.1838 13.4531 15.3442V18.2964C13.4531 18.4568 13.5831 18.5868 13.7434 18.5868Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                    <div class="iconsImg">
                        <a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo $current_url; ?>" target="_blank">
                            <svg class="twitter" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="18" fill="#E5E5E5"/>
                                <path d="M26.9443 13.0412C27.0132 12.9578 27.0187 12.8389 26.9579 12.7495C26.8971 12.66 26.7844 12.6213 26.6816 12.6548C26.2042 12.8104 25.7071 12.921 25.1942 12.9833C25.8059 12.6133 26.3105 12.0808 26.6474 11.4448C26.6967 11.3518 26.6805 11.2376 26.6074 11.1619C26.5342 11.0862 26.4206 11.0663 26.3259 11.1124C25.7309 11.4019 25.0945 11.619 24.4274 11.7514C23.7102 10.9813 22.6894 10.5 21.559 10.5C19.3895 10.5 17.6297 12.2744 17.6297 14.4636C17.6297 14.7737 17.6646 15.0759 17.7321 15.3667C14.7621 15.216 12.0975 13.8969 10.1819 11.8553C10.0494 11.7141 9.85171 11.6545 9.66333 11.6987C9.47491 11.7429 9.3242 11.8843 9.26855 12.0697C9.15954 12.4332 9.10075 12.8189 9.10075 13.2181C9.10075 14.594 9.70935 15.8069 10.7635 16.5176C10.4789 16.5084 10.0816 16.4202 9.72685 16.3248C9.52896 16.2716 9.31765 16.3274 9.17205 16.4717C9.02649 16.616 8.96905 16.8266 9.0203 17.025C9.40233 18.5039 10.6463 19.6563 12.1363 19.9583C11.8057 20.0491 11.5019 20.0973 11.1433 20.0973C11.1432 20.0973 11.1431 20.0973 11.1429 20.0973C10.9823 20.0973 10.8336 20.1827 10.7528 20.3215C10.6719 20.4604 10.6711 20.6315 10.7502 20.7714C11.4172 21.9506 12.6724 22.7527 14.1064 22.7799C12.7615 23.8424 11.0721 24.4756 9.23189 24.4756C9.23077 24.4756 9.22961 24.4756 9.22849 24.4756C9.12359 24.4755 9.03216 24.547 9.00679 24.6487C8.98143 24.7506 9.02872 24.8565 9.12136 24.9057C10.6745 25.7314 12.444 26.2012 14.3215 26.2012C21.5485 26.2012 25.5015 20.1609 25.5015 14.9234C25.5015 14.751 25.4978 14.5813 25.4903 14.4107C26.0293 14.0176 26.5186 13.5564 26.9443 13.0412Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                    <div class="iconsImg">
                        <a href="https://www.linkedin.com/shareArticle?url=<?php echo $current_url; ?>&title=<?php echo the_title(); ?>&summary=<?php echo the_title(); ?>" target="_blank">
                            <svg class="linkdin" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="18" fill="#E5E5E5"/>
                                <g clip-path="url(#clip0_4317_1685)">
                                    <path d="M13.1996 14.7837H9.57807C9.41734 14.7837 9.28711 14.914 9.28711 15.0747V26.709C9.28711 26.8697 9.41734 26.9999 9.57807 26.9999H13.1996C13.3603 26.9999 13.4905 26.8697 13.4905 26.709V15.0747C13.4905 14.914 13.3603 14.7837 13.1996 14.7837Z" fill="black"/>
                                    <path d="M11.3897 9C10.072 9 9 10.0709 9 11.3871C9 12.704 10.072 13.7752 11.3897 13.7752C12.7064 13.7752 13.7775 12.7039 13.7775 11.3871C13.7776 10.0709 12.7064 9 11.3897 9Z" fill="black"/>
                                    <path d="M22.4117 14.4944C20.9572 14.4944 19.882 15.1197 19.2298 15.8301V15.0745C19.2298 14.9138 19.0996 14.7835 18.9389 14.7835H15.4707C15.3099 14.7835 15.1797 14.9138 15.1797 15.0745V26.7088C15.1797 26.8696 15.3099 26.9998 15.4707 26.9998H19.0842C19.245 26.9998 19.3752 26.8696 19.3752 26.7088V20.9525C19.3752 19.0128 19.9021 18.2571 21.2542 18.2571C22.7269 18.2571 22.8439 19.4686 22.8439 21.0523V26.7089C22.8439 26.8696 22.9741 26.9998 23.1348 26.9998H26.7498C26.9105 26.9998 27.0407 26.8696 27.0407 26.7089V20.3273C27.0407 17.4429 26.4907 14.4944 22.4117 14.4944Z" fill="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4317_1685">
                                        <rect width="18" height="18" fill="white" transform="translate(9 9)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blogTags">
                <?php
                $tagsmo = get_the_tags($post->ID);
                    foreach ( $tagsmo as $tagmo ) {
                    $tagsmom[] = $tagmo->name;
                    }
                    $terms = get_the_category( $post->ID, 'categories ' );
                    if ( $terms && ! is_wp_error( $terms ) ) :
                    $links = array();
                    foreach ( $terms as $term ) {
                    $links[] = $term->slug;
                    }
                    $tax_links = join( " ", str_replace(' ', '-', $links));
                    $tax = ucwords($tax_links);
                    else :
                    $tax = '';
                    endif;
                ?>
                <h4 class="font20 fontW800 fontPoppins colorBlack">Tags <span class="fontW500"><?php  echo implode(" / ",$tagsmom);//echo str_replace(' ', ' / ', $tax);echo $tagsm[0]; ?></span> </h4>
            </div> 
        </div>
    </div>
    
    <!-- <div class="relatedBlogs">
        <?php if( have_rows('related_blogs_section') ): ?>
            <?php while( have_rows('related_blogs_section') ): the_row(); ?>
                <h3 class="fontW800 font20 fontPoppins colorBlack"><?php echo get_sub_field('related_blogs_heading'); ?></h3>
                <div class="relatedBlogsSection relatedBlogsDesktop">
                    <?php $related_blogs = get_sub_field('related_blogs');
                        if ($related_blogs) : ?>
                        <?php foreach ($related_blogs as $post) : setup_postdata($post); ?>
                            <div class="relatedBlogsBox">
                                <a href="<?php the_permalink(''); ?>">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" class="">
                                    <div class="details">
                                        <div class="detailsBox">
                                            <h4 class="font16 fontW800 fontPoppins colorWhite">Economics</h4>
                                            <p class="font24 fontW800 fontPoppins colorWhite"><?php the_title(); ?></p> 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="relatedBlogsSlider relatedBlogsMobile">
                    <div class="relatedBlogsSliderBox">
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                            <div class="details">
                                <h3 class="font16 fontW800 fontPoppins colorWhite">Economics</h3>
                                <p class="font24 fontW800 fontPoppins colorWhite">Warburg Pincus Sets up Oona Insurance with a USD350M Equity Commitment...</p>
                            </div>
                        </a>
                    </div>
                    <div class="relatedBlogsSliderBox">
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img-1.png" class="">
                            <div class="details">
                                <h3 class="font16 fontW800 fontPoppins colorWhite">Economics</h3>
                                <p class="font24 fontW800 fontPoppins colorWhite">Warburg Pincus Sets up Oona Insurance with a USD350M Equity Commitment...</p>
                            </div>
                        </a>
                    </div>
                    <div class="relatedBlogsSliderBox">
                        <a href="#">
                            <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                            <div class="details">
                                <h3 class="font16 fontW800 fontPoppins colorWhite">Economics</h3>
                                <p class="font24 fontW800 fontPoppins colorWhite">Warburg Pincus Sets up Oona Insurance with a USD350M Equity Commitment...</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div> -->
    
</div>

</main><!-- #main -->

<?php get_footer(); ?>