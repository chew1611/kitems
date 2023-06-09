const slideSelector = ".views-row";
const $carousels = $(".view-carousel .view-content");

const prevBtn =
  '<button class="carousel-button carousel-button--prev" type="button" aria-label="previous"><i class="fas fa-arrow-circle-left"></i></button>';
const nextBtn =
  '<button class="carousel-button carousel-button--next" type="button" aria-label="next"><i class="fas fa-arrow-circle-right"></i></button>';
const carouselDefaults = {
  dots: false,
  infinite: false,
  nextArrow: nextBtn,
  prevArrow: prevBtn,
  speed: 500,
  centerMode: false,
  variableWidth: false,
  mobileFirst: true,
  slidesToScroll: 4,
  slidesToShow: 4
};

/**
 * Calculate the number of slides to show
 * and the number of slides to scroll
 */
function slidesTo($carousel) {
  const $slides = $carousel.find(slideSelector);
  $slides.removeAttr("style");
  const $first = $slides.first();
  let slideWidth = $first.width();
  let toShow = 1;
  let toScroll = 1;
  let carouselWidth = $carousel.width();
  if (slideWidth * 1.2 < carouselWidth) {
    toShow = carouselWidth / slideWidth; // show a decimal peeking out
    toScroll = Math.floor(carouselWidth / slideWidth); // scroll only the fully visible
  }
  var options = {
    slidesToShow: toShow,
    slidesToScroll: toScroll
  };
  console.log(options);
  return options;
}

/**
 * Build options based on slides and screen size
 */
function carouselOptions($carousel) {
  var options = carouselDefaults;
  Object.assign(options, slidesTo($carousel));
  console.log(options);
  // Set any properties from the .view-carousel attributes
  for (var prop in options) {
    if (Object.prototype.hasOwnProperty.call(options, prop)) {
      // do stuff
      var attr = "data-" + prop.toLowerCase();
      if ($carousel.parent().attr(attr)) {
        var value = $carousel.parent().attr(attr);
        options[prop] = value;
      }
    }
  }
  return options;
}

/**
 * Fires after each change.
 * Align the active slide to the left edge of the carousel
 * to prevent items from getting cut off.
 */
function carouselAfterChange(event, slick, currentSlideIndex) {
  // align left edge in case of drift.
  const $current = jQuery(slick.$slides[currentSlideIndex]);
  const $track = jQuery(slick.$slideTrack);
  let left = $current[0].offsetLeft * -1;
  let style = $track.attr("style");
  style = style.replace(/translate3d\([^,]+,/, "translate3d(" + left + "px,");
  setTimeout(function () {
    $track.attr("style", style);
  }, 10);
}

/**
 * Unset the carousel and re-init
 */
function carouselReset($carousel) {
  $carousel.slick("unslick");
  var options = carouselOptions($carousel);
  $carousel.slick(options);
}

// Initialize carousels.
$carousels.each(function () {
  var $carousel = jQuery(this);
  $carousel.on("afterChange", carouselAfterChange);
  var options = carouselOptions($carousel);
  $carousel.slick(options);
});

// Reset and re-Config carousels on window resize
let winResizeBounce = null;
jQuery(window).on("resize", function () {
  clearTimeout(winResizeBounce);
  winResizeBounce = setTimeout(function () {
    $carousels.each(function () {
      var $carousel = jQuery(this);
      carouselReset($carousel);
    });
  }, 50);
});
const slides = document.querySelectorAll(".slide");
const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");
const auto = true;
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.nextElementSibling) {
    current.nextElementSibling.classList.add("current");
  } else {
    slides[0].classList.add("current");
  }
};

const prevSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add("current");
  } else {
    slides[slides.length - 1].classList.add("current");
  }
};

nextButton.addEventListener("click", () => {
  nextSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});
prevButton.addEventListener("click", () => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dote");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activee", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activeee";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}