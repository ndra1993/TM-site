$(document).ready(function () {
    $(".videoHoverBox").hover(
          function () {
            $(".bannerVideo").addClass("vidHover");
            $(".bannerText").addClass("textHover");
          },
          function () {
            $(".bannerVideo").removeClass("vidHover");
            $(".bannerText").removeClass("textHover");
          }
    );
  });




  


  
  if($("#logosAnime").length) {
    var logosAnime = lottie.loadAnimation({
        container: document.getElementById('logosAnime'), // Required
        path: site_url+'/wp-content/themes/theminimalist/js/json/logosAnime.json', // Required
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional
        name: "logosAnime", // Name for future reference. Optional.
    });
}



