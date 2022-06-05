$(document).ready(function(){
	$(window).on("scroll",function(){
  	var wn = $(window).scrollTop();
    if(wn > 120){
    	$(".navbar").css("background","#f2f2f2");
      $(".navbar").removeClass("mt-md-5");
      $(".navbar").css("transition","0.3s");
    }
    else{
    	$(".navbar").css("background","none");
      $(".navbar").addClass("mt-md-5");
    }
  });
});

/* circular scroll to top - start */
(function($) { "use strict";
$(document).ready(function(){"use strict";

  //Scroll back to top
  
  var progressPath = document.querySelector('.progress-wrap path');
  var pathLength = progressPath.getTotalLength();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
  progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
  var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;
  }
  updateProgress();
  $(window).scroll(updateProgress);	
  var offset = 50;
  var duration = 550;
  jQuery(window).on('scroll', function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.progress-wrap').addClass('active-progress');
    } else {
      jQuery('.progress-wrap').removeClass('active-progress');
    }
  });				
  jQuery('.progress-wrap').on('click', function(event) {
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
  
  
});

})(jQuery);


/* navbar-new - START */
const html = document.documentElement;
const toggle = document.getElementById("toggle");
const circle = document.getElementById("bg-circle");
const navlinks = document.getElementById("navlinks")
const circleWidth = circle.clientWidth;

// Math calcul to get Height, Width, Diagonal and Circle Radius

const getVpdr = () => {
  const vph = Math.pow(html.offsetHeight, 2); // Height
  const vpw = Math.pow(html.offsetWidth, 2); // Width
  const vpd = Math.sqrt(vph + vpw); // Diagonal
  return vpd * 2 / circleWidth; // Circle radius
};

const openNavbar = () => {
  const openTimeline = new TimelineMax();
  openTimeline.to(".navbar-new", 0, { display: "flex" });
  openTimeline.to("#bg-circle", 1.5, { scale: getVpdr(), ease: Expo.easeInOut });
  openTimeline.staggerFromTo(".navbar-new ul li", 0.5, { y: 25, opacity: 0 }, { y: 0, opacity: 1 }, 0.1, 1);
};

const closeNavbar = () => {
  const closeTimeline = new TimelineMax();
  closeTimeline.staggerFromTo(".navbar-new ul li", 0.5, { y: 0, opacity: 1, delay: 0.5 }, { y: 25, opacity: 0 }, -0.1);
  closeTimeline.to("#bg-circle", 1, { scale: 0, ease: Expo.easeInOut, delay: -0.5 });
  closeTimeline.to(".navbar-new", 0, { display: "none" });
};

let isOpen = false;

toggle.onclick = function () {
  if (isOpen) {
    this.classList.remove("active");
    closeNavbar();
  } else {
    this.classList.add("active");
    openNavbar();
  }
  isOpen = !isOpen;
};
circle.onclick = function () {
  if (isOpen) {
    toggle.classList.remove("active");
    closeNavbar();
  } else {
    toggle.classList.add("active");
    closeNavbar();
  }
  isOpen = !isOpen;
};
navlinks.onclick = function () {
  if (isOpen) {
    toggle.classList.remove("active");
    closeNavbar();
  } else {
    toggle.classList.add("active");
    closeNavbar();
  }
  isOpen = !isOpen;
}


// On windows resize, recalcule circle radius and update

window.onresize = () => {
  if (isOpen) {
    gsap.to("#bg-circle", 1, { scale: getVpdr(), ease: Expo.easeInOut });
  }
};
/* Navabr - END */


/* LazyLoad - START */
gsap.registerPlugin(ScrollTrigger);

gsap.from(".image1", {
  scrollTrigger: {
    trigger: ".image1",
    start: "top bottom",
    end: "bottom 30%",
    toggleActions: "play reset play reset",
    scrub: 1
  },
  rotation:45,
  scale: 0.2,
  duration: 1
});
gsap.from(".image3", {
  scrollTrigger: {
    trigger: ".image3",
    start: "top bottom",
    end: "bottom 0%",
    toggleActions: "play reset play reset"
  },
  rotation:45,
  scale: 0.2,
  duration: 1
});
gsap.from(".image2", {
  scrollTrigger: {
    trigger: ".image2",
    start: "top bottom",
    end: "bottom 50%",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  rotation: +20,
  duration: 1
});
gsap.from(".image4", {
  scrollTrigger: {
    trigger: ".image4",
    start: "top bottom",
    end: "bottom 50%",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  rotation: +20,
  scale: 0.2,
  duration: 1
});
gsap.from(".image5", {
  scrollTrigger: {
    trigger: ".image5",
    start: "top bottom",
    end: "bottom 50%",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  rotation: +20,
  scale: 0.2,
  duration: 1
});
gsap.from(".image6", {
  scrollTrigger: {
    trigger: ".image6",
    start: "top bottom",
    end: "bottom 50%",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  rotation: +20,
  scale: 0.2,
  duration: 1
});


gsap.from(".gsap3", {
  scrollTrigger: {
    trigger: ".gsap3",
    start: "top bottom",
    end: "bottom 20%",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x:+600,
  duration: 1
});

gsap.from(".gsap4", {
  scrollTrigger: {
    trigger: ".gsap4",
    start: "top bottom",
    end: "bottom 20%",
    toggleActions: "play reset play reset",
    scrub: 1,
  },
  x:+600,
  duration: 1
});


/* Lazy Load for sections */
var sections = gsap.utils.toArray('.section');
sections.forEach((section) => {
  gsap.from(section, {
    scrollTrigger: {
      trigger: section,
      toggleActions: "play reverse play reverse",
    },
    opacity: 0,
    duration: 1
  });
})