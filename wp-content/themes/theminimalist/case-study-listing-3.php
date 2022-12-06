<?php get_header(); /*Template Name: case studies listing three*/
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

<style type="text/css">
  .row{display: flex;}
  .img-column{width: 50%;}
  .detail-column{width: 50%;}
  .img-holder{
    padding: 15px;
}
.img-holder span{
    display: block;
    box-shadow: 0 5px 10px rgb(0 0 0 / .1);
}
.img-holder img{
    max-width: 100%;
    border-radius:8px
}
.content-item{
    padding: 0 15px
}
.item-inner{
    padding: 30px;
    position: relative;
    overflow:hidden;
    max-height: 70px;
    transition: .5s ease;
}
span.bar{
    display:block;
    height:4px;
    width: 100%;
    background: rgb(255 131 107 / .15);
    position:absolute;
    left: 0;
    top:0;

    visibility: hidden
}
span.bar::after{
    content:"";
    position:absolute;
    width: 100%;
    height: 100%;
    background: #ff836b;
    animation: progress 5s infinite;
}
@keyframes progress{
    from{
        width:0;
    }
    to{
        width:100%;
    }
}

.slick-current.current-item{
    padding: 15px;
}
.slick-current .item-inner{
    max-height: unset;
    box-shadow: 0 5px 10px rgb( 0 0 0 / .1);
    border-radius: 5px;
}
.slick-current span.bar{
    visibility: visible;
}
.slick-vertical .slick-slide.content-item:not(.slick-current) .item-inner{
    border-bottom: 1px solid #ebebeb
}
.detail-column .slick-list.draggable{
    height: auto !important;
}
</style>

<body>
  
<div class="container">
    <div class="container-inner">
        
        <div class="row">
            <div class="img-column">
                <div class="img-grp">
                    <div class="img-holder">
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></span>
                    </div><!--img-holder-->
                    <div class="img-holder">
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png"></span>
                    </div><!--img-holder-->
                    <div class="img-holder">
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/phone-three.png"></span>
                    </div><!--img-holder-->
                    <div class="img-holder">
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></span>
                    </div><!--img-holder-->
                </div>
            </div>
            <div class="detail-column">
                <div class="content-grp">
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <h4>Add Account</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div><!--content-item-->
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <h4>Social Permissions</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div><!--content-item-->
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <h4>Create a Personal Account</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div><!--content-item-->
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <h4>Upgrade</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div><!--content-item-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<?php get_footer(); ?>


<
<script type="text/javascript">
  
jQuery(document).ready(function(){
   
    $('.img-grp').slick({
        infinite: true,
        slidesToShow:1,
        fade: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        asNavFor: '.content-grp'
    });

    $('.content-grp').slick({
        arrows:false,
        vertical:true,
        slidesToShow: 3,
        focusOnSelect: true,
        asNavFor: '.img-grp',
        infinite:false,
        centerMode: false

    });

});
</script>