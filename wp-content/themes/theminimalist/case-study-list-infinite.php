<?php get_header(); /*Template Name: case studies listing Swiper */
$homepage_id = get_option( 'page_on_front' );
?>  
<link rel='stylesheet' href='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css'>
<style>
  
.slider {
  padding: 32px;
  color: #000;
}
.slider .swiper-container {
  width: 100%;
  height: 100%;
}
.slider__flex {
  display: flex;
  align-items: flex-start;
}
.slider__col {
  display: flex;
  flex-direction: column;
  width: 150px;
  margin-right: 32px;
}
.slider__prev,
.slider__next {
  cursor: pointer;
  text-align: center;
  font-size: 14px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  display: none;
}
.slider__prev:focus,
.slider__next:focus {
  outline: none;
}
.slider__thumbs {
  /*height: calc(400px - 96px);*/
  width: 650px;
  height: 400px;
}
.slider__thumbs .slider__image {
  transition: 0.25s;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
  opacity: 0.5;
}
.slider__thumbs .slider__image:hover {
  opacity: 1;
}
.slider__thumbs .swiper-slide-thumb-active .slider__image {
  -webkit-filter: grayscale(0%);
  filter: grayscale(0%);
  opacity: 1;
}
.slider__images {
  height: calc(400px - 52px);
  margin-left: 505px;
   
}
 /* height: 150px;*/
}
.slider__images .slider__image img {
  transition: 3s;
}
.slider__images .slider__image:hover img {
  transform: scale(1.1);
}
.slider__image {
  width: 100%;
  height: 100%;
  border-radius: 0px;
  /*overflow: hidden;*/
}
.slider__image img {
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}
@media (max-width: 767.98px) {
  .slider__flex {
    flex-direction: column-reverse;
  }
  .slider__col {
    flex-direction: row;
    align-items: center;
    margin-right: 0;
    margin-top: 24px;
    width: 100%;
  }
  .slider__images {
    width: 100%;
  }
  .slider__thumbs {
    height: 100px;
    width: calc(100% - 96px);
    margin: 0 16px;
  }
  .slider__prev,
  .slider__next {
    height: auto;
    width: 32px;
    display:none;
  }
}

.swiper-slide-active h2 
{
      /* border-bottom: 5px solid #00FFA3; */
    cursor: url(https://ixdtm.com/projects/theminimalist-site/wp-content/themes/theminimalist/images/detail-page-cursor.svg) 0 0, auto;
/*height: calc(490px - 96px) !important;*/
height: 180px !important;
  font-size: 40px;
}

p {
    margin-top: 0;
    margin-bottom: 0rem !important;
}

.slider__images .swiper-slide
{
/*height: 96px !important;
    margin-bottom: 32px;*/
    border-bottom: 1px solid black;
  }
  
  header
{
    border-bottom: 1px solid #000;
}


</style>


<body>
<div class="desktopSection">
  <div class="caseStudyFilter">
    <ul id="filters">
      <li class="filterLi active"><span class="filter font12 fontW500" data-filter=".experience, .technology, .marketing, .branding, .video, .strategy">All</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".experience">Experience Design</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".technology">Technology</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".marketing">Marketing Solutions</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".branding">Branding</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".video">Video Production</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".strategy">Strategy And Consulting</span></li>
    </ul>
  </div>
  <div class="caseStudycontainer">
    <div class="container-inner">
        <div class="caseStudycontainerRow">
         

<!--swiper-->
<section class="slider">
  <div class="slider__flex">
    <div class="slider__col">

      <div class="slider__prev">Prev</div> <!-- Кнопка для переключения на предыдущий слайд -->

      <div class="slider__thumbs">
        <div class="swiper-container"> <!-- Слайдер с превью -->
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slider__image"><img src="https://picsum.photos/1920/1080" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="slider__image"><img src="https://picsum.photos/1920/1081" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="slider__image"><img src="https://picsum.photos/1920/1082" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="slider__image"><img src="https://picsum.photos/1920/1083" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="slider__image"><img src="https://picsum.photos/1920/1084" alt=""/></div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider__next">Next</div> <!-- Кнопка для переключения на следующий слайд -->

    </div>

    <div class="slider__images">
      <div class="swiper-container"> <!-- Слайдер с изображениями -->
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slider__image">
              <p class="fontW800">Strategy And Consulting One </p>
              <h2 class="fontW800">Strategy And Consulting |  Strategy And Consulting | Strategy And Consulting |</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider__image">
              <p class="fontW800">Strategy And Consulting Two</p>
              <h2 class="fontW800">Strategy And Consulting || Strategy And Consulting || Strategy And Consulting ||</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider__image">
<p class="fontW800">Strategy And Consulting Three</p>
              <h2 class="fontW800">Strategy And Consulting |||</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider__image">
              <p class="fontW800">Strategy And Consulting Four</p>
              <h2 class="fontW800">Strategy And Consulting IV</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider__image">
             <p class="fontW800">Strategy And Consulting</p>
              <h2 class="fontW800">Strategy And Consulting V</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!--swiper-->























    </div>
  </div>
 
</div>







  </div>
</div>

</body>

<?php get_footer(); ?>
<script src='https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js'></script>
<script>
// Инициализация превью слайдера
const sliderThumbs = new Swiper('.slider__thumbs .swiper-container', { // ищем слайдер превью по селектору
  // задаем параметры
  direction: 'vertical', // вертикальная прокрутка
  slidesPerView: 1, // показывать по 3 превью
  spaceBetween: 24, // расстояние между слайдами
  freeMode: true, // при перетаскивании превью ведет себя как при скролле
  breakpoints: { // условия для разных размеров окна браузера
    0: { // при 0px и выше
      direction: 'horizontal', // горизонтальная прокрутка
    },
    768: { // при 768px и выше
      direction: 'vertical', // вертикальная прокрутка
    }
  }
});
// Инициализация слайдера изображений
const sliderImages = new Swiper('.slider__images .swiper-container', { // ищем слайдер превью по селектору
  // задаем параметры
  direction: 'vertical', // вертикальная прокрутка
  slidesPerView: 3, // показывать по 1 изображению
  spaceBetween: 0, // расстояние между слайдами
  mousewheel: true,
  loop: true, // можно прокручивать изображения колёсиком мыши
  grabCursor: true, // менять иконку курсора
  thumbs: { // указываем на превью слайдер
    swiper: sliderThumbs // указываем имя превью слайдера
  },
  breakpoints: { // условия для разных размеров окна браузера
    0: { // при 0px и выше
      direction: 'horizontal', // горизонтальная прокрутка
    },
    768: { // при 768px и выше
      direction: 'vertical', // вертикальная прокрутка
    }
  }
});

</script>



<script>


$(document).ready(function(){

var ab = $(".swiper-slide-active h2").text().length;
    if(ab>50)
    {
         $(".slider__images .swiper-slide-active").height(170);
   }






   $(".swiper-slide").mousemove(function(){
       var ab = $(".swiper-slide-active h2").text().length;
    if(ab>60)
    {
    //alert(ab);
     $(".slider__images .swiper-slide-active").height(170);
     $(".slider__images .swiper-slide-prev").height(116);
     
   }
  });

});



</script>


<!-- 
<script>
document.getElementsByClassName("swiper-slide").addEventListener("wheel", myFunction);

function myFunction() {
  alert("hellojs")
  document.getElementsByClassName(".slider__images .swiper-slide-active").style.fontSize = "35px";
}
</script> -->