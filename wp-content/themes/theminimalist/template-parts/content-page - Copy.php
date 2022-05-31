<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TM-Website
 */

?>
<div class="wrapper">
    <header class="mainHeader">
        <div class="headerSection">
            <a href="<?php echo site_url();?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="" class="tmLogo" /></a>
            <div class="qrCode">
                <div class="qrcodeContent">
                    <h4 class="h4">
                        *This is strictly work in<br />
                        progress but here are<br />
                        some signs.
                    </h4>
                    <a href="<?php echo site_url();?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/qr-code.png" alt="" /></a>
                </div>
                <div class="letstalksection">
                    <a href="<?php echo site_url('/forms/');?>" class="letstalkCta">LETS TALK</a>
                </div>
            </div>
        </div>
    </header>

    <section class="videoSec">
        <div class="textVideo">
            <div class="textLarge">
                <h1 class="h1">
                    We aspire to be India’s most inventive company in the creative business
                </h1>
            </div>
            <div class="videoLogos">
                <div class="hoverDiv"></div>
                <div class="mainVideo">
                    <video id="video" src="<?php bloginfo('template_directory');?>/images/butterfly_nectar_feeding_moth_beak_689.mp4" controls="true" autoplay="autoplay" loop="true"muted defaultmuted playsinline /></video>
                    <!-- <video id="video" controls>
                        <source src="<?php bloginfo('template_directory');?>/images/butterfly_nectar_feeding_moth_beak_689.mp4" type=video/mp4 >
                    </video> -->
                </div>
                <div class="logos">
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/coca-cola-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/mondelez-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/tata-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/airtel-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/mtv-logo.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
