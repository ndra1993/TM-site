// lotttie animation tagged js starts
// var animation = bodymovin.loadAnimation({
//     container: document.getElementById('animationmblmoving'),
//     path: site_url+'/wp-content/themes/theminimalist/js/json/mblAnime.json', // Required
//     renderer: 'svg', // or 'canvas', 'html'
//     loop: true,
//     autoplay: true
//   });
  // lotttie animation tagged js ends



  /*
 * Libraries used:
 * http://airbnb.io/lottie/#/web
 * http://scrollmagic.io/docs/
*/

// /* Get all Lottie animations on page */
// const animations = document.querySelectorAll('.lottie-animation');

// /* Initialize ScrollMagic */
// const controller = new ScrollMagic.Controller();

// /* Initialize each lottie animation */
// animations.forEach(async (animation) => {
//   const lottieInstance = lottie.loadAnimation({
//     container: animation,
//     renderer: 'svg',
//     loop: false,
//     autoplay: false,
//     path: animation.dataset.animPath,
//   })
  
//   const animDuration = (() => {
//     let duration;

//     if (animation.dataset.animDuration) {
//       duration = animation.dataset.animDuration;
//       const durationIsNumString = /^\d+$/.test(duration);
//       if ( durationIsNumString ) {
//         duration = parseInt(duration)
//       }
//     } else {
//       duration = "parentHeight"
//     }
//     return duration
//   })();

//   const animTriggerHook = (() => {
//     let triggerHook;

//     if (animation.dataset.animTriggerHook) {
//       triggerHook = animation.dataset.animTriggerHook;
//       triggerHook = parseFloat(triggerHook)
//     } else {
//       triggerHook = 0.5
//     }

//     return triggerHook
//   })();

//   const animOffset = (() => {
//     let offset;

//     if (animation.dataset.animOffset) {
//       offset = animation.dataset.animOffset;
//       offset = parseInt(offset)
//     } else {
//       offset = 0
//     }

//     return offset
//   })();


//   lottieInstance.addEventListener('DOMLoaded', async (e) => {
//     /* Waits until the SVGs have loaded to get height of container - prevents breaking of non-fixed height containers. */
//     let parent = animation.parentElement;

//     /* Build ScrollMagic scene once all SVGs are loaded*/
//     new ScrollMagic.Scene({
//         /* Animation will be linked to the scroll progress of its container, starting when the top of container is halfway through viewport and ending when bottom of container is halfway through viewport */
//         triggerElement: parent,
//         triggerHook: animTriggerHook,
//         offset: animOffset,
//         duration: animDuration === "parentHeight" ? parent.offsetHeight : animDuration === "elemHeight" ? animation.offsetHeight : animDuration
//       })
//       .addTo(controller)
//       .addIndicators() /* Debugging tool to see where an  d when animations occur */
//       .on("progress", function (e) {
//         const scrollFrame = e.progress * (lottieInstance.totalFrames - 1);
//         lottieInstance.goToAndStop(scrollFrame, true);
//       });
//   })
// })




// for ventures highway slider
function LottieScrollTrigger(vars) {
  let playhead = { frame: 0 },
    target = gsap.utils.toArray(vars.target)[0],
    speeds = { slow: "+=6000", medium: "+=1000", fast: "+=500" },
    st = { trigger: target, pin: true, start: "top top", end: speeds[vars.speed] || "+=1000", scrub: 1 },
    animation = lottie.loadAnimation({
      container: target,
      renderer: vars.renderer || "svg",
      loop: false,
      autoplay: false,
      path: vars.path
    });
  for (let p in vars) { // let users override the ScrollTrigger defaults
    st[p] = vars[p];
  }
  animation.addEventListener("DOMLoaded", function () {
    gsap.to(playhead, {
      frame: animation.totalFrames - 1,
      ease: "none",
      onUpdate: () => animation.goToAndStop(playhead.frame, true),
      scrollTrigger: st
    });
  });
}
function animation() {
  const animationContainer = document.querySelector('.animationContainer')
  LottieScrollTrigger({
    target: animationContainer,
    path: 'https://assets8.lottiefiles.com/packages/lf20_BEX9KC.json',
    speed: 'slow',
    scrub: 1,
    onUpdate: (self) => {
      const features = document.querySelectorAll('.animationContainer')
      // console.log(self.progress)
      if (self.progress > 0.100) {
        features[0].classList.add('active')
      } else {
        features[0].classList.remove('active')
      }
      if (self.progress > 0.400) {
        features[0].classList.add('activeTwo')
      } else {
        features[0].classList.remove('activeTwo')
      }
      if (self.progress > 0.700) {
        features[0].classList.add('activeThree')
      } else {
        features[0].classList.remove('activeThree')
      }
    }
  })
}

function init() {
  animation()
}