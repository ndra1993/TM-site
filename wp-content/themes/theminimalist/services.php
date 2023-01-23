<?php get_header(); /*Template Name: Service */ ?>

<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style type="text/css">
  .header-up {
    top: -86px;
}
.addTop{top:0 !important;}

.serviceSlider{margin-bottom: 0px !important;}
/*.serviceSlider .slick-track{width: 100% !important;}
.serviceSlider .slick-slide{width: 100% !important;}*/
.serviceSlider .slick-dots li button:before{
  content: " ";
  border-radius: 10px;
  width:8px;
  height: 8px;
  background: #000;
  opacity: 1;
}

.serviceSlider .slick-dots{
  position: absolute;
  bottom: 75px;
  right: 96px;
  left: unset;
  text-align: right;
}
.serviceSlider .slick-dots li{
  width: 8px;
  height: 8px;
  margin: 0px 10px;
}
.serviceSlider .slick-dots li.slick-active{margin-right:40px;}
.serviceSlider .slick-dots li.slick-active button:before{
    opacity: 1;
    color: black;
    width: 50px;
    border-radius: 10px;
    transition: .9s all ease-in-out;
}







@media screen and (max-width:1400px) {
  .header-up {
    top: -76px;
  }
}
</style>
<section class="serviceContainer">
  <div class="tabs">
    <button class="btn btn1 active font120 fontW800" id="1">Marketing <br>Solutions</button>
    <button class="btn btn2 font120 fontW800" id="2">Experience <br>Design</button>
  </div>
  <div class="sections">
    <div class="content content1 active">
      
      <div class="serviceSlider">
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Brand Strategy<br> & Design</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-two.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Video<br> Production</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <div class="serviceSlider">
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-two.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Video<br> Production</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <div class="serviceSlider">
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">ATL and BTL<br> Communication</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <div class="serviceSlider">
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">ATL and BTL<br> Communication</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Performance <br>Marketing & Analytics</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <div class="serviceSlider">
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Performance <br>Marketing & Analytics</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Brand Strategy<br> & Design</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-two.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Video<br> Production</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <!-- <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Brand Strategy<br> & Design</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div>
      <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-two.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Video<br> Production</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div> -->
      <!-- <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div> -->
      <!-- <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div> -->
      <!-- <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">ATL and BTL<br> Communication</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div> -->
      <!-- <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Performance <br>Marketing & Analytics</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div> -->
    </div>
    <div class="content content2">
      <div class="serviceSlider">
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Brand Strategy<br> & Design</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-two.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Video<br> Production</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <div class="serviceSlider">
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-two.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Video<br> Production</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <div class="serviceSlider">
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">ATL and BTL<br> Communication</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <!-- <div class="serviceSlider">
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">ATL and BTL<br> Communication</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Performance <br>Marketing & Analytics</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>
      </div>

      <div class="serviceSlider">
        <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
          <div class="mobImg" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
          </div>
          <div class="mobtext">
            <h3 class="font24 fontW600 colorBlack">Performance <br>Marketing & Analytics</h3>
            <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
            <a class="colorBlack fontW800" href="">Case studies</a>
          </div>
        </div>

      </div> -->
      
      <!-- <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Brand Strategy<br> & Design</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div>
      <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-two.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Video <br>Production</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div>
      <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">360° Communication &<br> Campaign Strategy</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div>
      <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Influencer Marketing</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div>
      <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">ATL and BTL<br> Communication</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div>
      <div class="sectionOne wow zoomIn" data-wow-duration="1.5s">
        <div class="mobImg" data-wow-duration="4s">
          <img src="<?php bloginfo('template_directory'); ?>/images/service-one.png">
        </div>
        <div class="mobtext">
          <h3 class="font24 fontW600 colorBlack">Performance<br> Marketing & Analytics</h3>
          <h5 class="colorBlack fontW400">Our interdisciplinary approach across service, experience and product design enables our team to conceive and realise cohesive, responsive, accessible experiences in every environment.</h5>
          <a class="colorBlack fontW800" href="">Case studies</a>
        </div>
      </div> -->
    </div>
  </div>
</section>


<script>
  $('#menu').click(function(){
    if($(this).is(":checked")) {
        $('header').addClass("addTop");
    } else {
        $('header').removeClass("addTop");
    }
});



$('.serviceSlider').slick({ 
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
     cssEase: 'linear',
 prevArrow: $('.prev'),
 nextArrow: $('.next'),
 dots: true
  });
/*$('.serviceSlider').mouseover(function() {
  $(this).slick('play')
});
$('.serviceSlider').mouseout(function() {
  $(this).slick('pause')
});*/


</script>

<?php get_footer(); ?>

