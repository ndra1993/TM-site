<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Website
 */

get_header();
$homepage_id = get_option( 'page_on_front' );

?>
<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="casebgdetails">
<?php if( have_rows('components') ): ?>
    <?php while( have_rows('components') ): the_row();
       
        $layout=get_row_layout();
    ?>
        <?php if( get_row_layout() == 'quote_block_1' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'quote_block_2' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'heading_subtext_+_cards' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'image_blocks' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

          <?php elseif( get_row_layout() == 'top_banner_image' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
            <?php elseif( get_row_layout() == 'only_text_with_image' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
             <?php elseif( get_row_layout() == 'diff_multiple_image' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

            <?php elseif( get_row_layout() == 'only_Single_image_with_slider' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
              <?php elseif( get_row_layout() == 'dualimage_withtext' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

         <?php elseif( get_row_layout() == 'leftdualimage_withtext' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

          <?php elseif( get_row_layout() == 'rightimage_equallefttext' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
            
              <?php elseif( get_row_layout() == 'signleimage' ): ?>
             
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
             <?php elseif( get_row_layout() == 'multiple_image' ): ?>
             
             <?php
                 include(get_template_directory()."/components/".$layout.".php");
             ?>
              

        <?php elseif( get_row_layout() == 'cta_strip' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

       <?php elseif( get_row_layout() == 'rightimage_equallefttext' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>


        <?php elseif( get_row_layout() == 'image_+_text_slider' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'cta_strip_v2' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'table' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'video_carousel' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
        
        <?php elseif( get_row_layout() == 'horizontal_carousel' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'interactive_content_+_image_filter' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'faq' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'only_image' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'only_text' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'narrator_&_guests' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'image_right_slider_with_text' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'speakers' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'right_video_left_text' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
        <?php elseif( get_row_layout() == 'right_image_left_text' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'right_text_left_image' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'speakers_with_details' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'only_video' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'bullet_points' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'quote_block_3' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'heading_+_paragraph' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'heading_and_brand_logos' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'vertical_carousel' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'editor' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php endif;?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

</div>









<?php get_footer(); ?>

<script type="text/javascript">
    <?php if( have_rows('testimonial_section', $homepage_id) ): ?>
        <?php while( have_rows('testimonial_section', $homepage_id) ): the_row(); ?>
            <?php if( have_rows('member_testimonial_slider') ): ?>
                <?php $counter=1; while( have_rows('member_testimonial_slider') ): the_row(); ?>
                    $(document).ready(function() {
                        // Configure/customize these variables.
                        var showChar = 120;  // How many characters are shown by default
                        var ellipsestext = "...";
                        var moretext = "Read more";
                        var lesstext = "Read less";
                        $('.more-<?php echo $counter; ?>').each(function() {
                            var content = $(this).html();
                            if(content.length > showChar) {
                                var c = content.substr(0, showChar);
                                var h = content.substr(showChar, content.length - showChar);
                                var html = c + '<span class="moreellipses moreellipseshide-<?php echo $counter; ?>">' + ellipsestext+ '&nbsp;</span><span class="morecontent morecontentshow-<?php echo $counter; ?>"><span>' + h + '</span>&nbsp;<a class="morelinktext morelink-<?php echo $counter; ?>" id="morelink-<?php echo $counter; ?>">' + moretext + '</a></span>';
                                $(this).html(html);
                            }
                        });
                        $(".morelink-<?php echo $counter; ?>").click(function(){
                            $(".innerBox").removeClass("active");
                            $(".morecontent span").removeClass("activetext");
                            $(".moreellipses").removeClass("activedots");
                            $(".morelinktext").html(moretext);
                            $(".morelinktextbig").html(moretext).removeClass('active');
                            if($(this).hasClass("active")) {
                                $(this).removeClass("active");
                                $(this).html(moretext);
                                $(".box-<?php echo $counter; ?>").removeClass("active");
                                $(".bigbox-<?php echo $counter; ?>").removeClass("hideBox");
                                $(".morecontentshow-<?php echo $counter; ?> span").removeClass("activetext");
                                $(".moreellipseshide-<?php echo $counter; ?>").removeClass("activedots");
                            }else {
                                $(this).addClass("active");
                                $(this).html(lesstext);
                                $(".box-<?php echo $counter; ?>").addClass("active");
                                $(".bigbox-<?php echo $counter; ?>").addClass("hideBox");
                                $(".morecontentshow-<?php echo $counter; ?> span").addClass("activetext");
                                $(".moreellipseshide-<?php echo $counter; ?>").addClass("activedots");
                            }
                            // $(this).parent().prev().toggle();
                            // $(this).prev().toggle();
                            return false;
                        });
                    });

                    $(document).ready(function() {
                        // Configure/customize these variables.
                        var showCharbig = 150;  // How many characters are shown by default
                        var ellipsestextbig = "...";
                        var moretextbig = "Read more";
                        var lesstextbig = "Read less";
                        $('.bigmore-<?php echo $counter; ?>').each(function() {
                            var bigcontent = $(this).html();
                            if(bigcontent.length > showCharbig) {
                                var c = bigcontent.substr(0, showCharbig);
                                var h = bigcontent.substr(showCharbig, bigcontent.length - showCharbig);
                                var html = c + '<span class="moreellipses moreellipseshidebig-<?php echo $counter; ?>">' + ellipsestextbig+ '&nbsp;</span><span class="morecontent morecontentshowbig-<?php echo $counter; ?>"><span>' + h + '</span>&nbsp;<a class="morelinktextbig morelinkbig-<?php echo $counter; ?>" id="morelink-<?php echo $counter; ?>">' + moretextbig + '</a></span>';
                                $(this).html(html);
                            }
                        });
                        $(".morelinkbig-<?php echo $counter; ?>").click(function(){
                            $(".innerBox").removeClass("active");
                            $(".morecontent span").removeClass("activetext");
                            $(".moreellipses").removeClass("activedots");
                            $(".morelinktextbig").html(moretextbig);
                            $(".morelinktext").html(moretextbig).removeClass('active');
                            if($(this).hasClass("active")) {
                                $(this).removeClass("active");
                                $(this).html(moretextbig);
                                $(".bigbox-<?php echo $counter; ?>").removeClass("active");
                                $(".box-<?php echo $counter; ?>").removeClass("hideBox");
                                $(".morecontentshowbig-<?php echo $counter; ?> span").removeClass("activetext");
                                $(".moreellipseshidebig-<?php echo $counter; ?>").removeClass("activedots");
                            } else {
                                $(this).addClass("active");
                                $(this).html(lesstextbig);
                                $(".bigbox-<?php echo $counter; ?>").addClass("active");
                                $(".box-<?php echo $counter; ?>").addClass("hideBox");
                                $(".morecontentshowbig-<?php echo $counter; ?> span").addClass("activetext");
                                $(".moreellipseshidebig-<?php echo $counter; ?>").addClass("activedots");
                            }
                            // $(this).parent().prev().toggle();
                            // $(this).prev().toggle();
                            return false;
                        });
                    });
                <?php $counter=$counter+1; endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</script>