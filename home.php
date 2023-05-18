<!DOCTYPE html>
<html lang="en">
<head>
  <title>k-store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="s1.css">
    <link rel="stylesheet" href="style.css">  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  


  <style>
button:focus,
input:focus{
  outline: none;
  box-shadow: none;
}
a,
a:hover{
  text-decoration: none;
}

/*--------------------------*/
.qty-container{
  display: flex;
  align-items: center;
  justify-content: center;
}
.qty-container .input-qty{
  text-align: center;
  padding: 6px 10px;
  border: 1px solid #d4d4d4;
  max-width: 80px;
}
.qty-container .qty-btn-minus,
.qty-container .qty-btn-plus{
  border: 1px solid #d4d4d4;
  padding: 10px 13px;
  font-size: 10px;
  height: 38px;
  width: 38px;
  transition: 0.3s;
}
.qty-container .qty-btn-plus{
  margin-left: -1px;
}
.qty-container .qty-btn-minus{
  margin-right: -1px;
}


/*---------------------------*/
.btn-cornered,
.input-cornered{
  border-radius: 4px;
}
.btn-rounded{
  border-radius: 50%;
}
.input-rounded{
  border-radius: 50px;
}




/* CSS */
.button-10 {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 2px 2px;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
  border-radius: 6px;
  border: none;

  color: #fff;
  background: linear-gradient(180deg, #4B91F7 0%, #367AF6 100%);
   background-origin: border-box;
  box-shadow: 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.button-10:focus {
  box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
  outline: 0;
}
</style>
</head>
<body>
           <?php
   $con=mysql_connect("localhost","root","");
   if(!con)
   {
       Die("mysql cannot connect".mysql_error());
   }
   $selectDb=mysql_selectdb("kpop",$con);
   if(!$selectDb)
   {
       Die("cannot connect database".mysql_error());
   }
   
   
?>
       <?php include 'unav.php';?>

    <div class="slider-container">
      <div class="left-slide">
        <div style="background-color: #b99f8a">
          <h1>Twice</h1>
          <p>new collection</p>
        </div>
        <div style="background-color: purple">
          <h1>BTS</h1>
          <p>new collection</p>
        </div>
        <div style="background-color:pink">
          <h1>BlackPink</h1>
          <p>new collection</p>
        </div>
        <div style="background-color: #2b2e32">
          <h1>Accessories</h1>
          <p>new collection</p>
        </div>
      </div>
      <div class="right-slide">
        <div style="background-image: url('blackpink/bp.jpg'); " ></div>
        <div style="background-image: url('bts/bt.png'); " ></div>    
       
        <div style="background-image: url('twice/tw.jpg'); " ></div>
      </div>
      <div class="action-buttons">
        <button class="down-button">
          <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
    </div>
     <div class="buttons">
  <button id="prev"></button>
  <button id="next"></button>
</div>


 <div class="view view-carousel">
  <h2 class="view-title">Albums</h2>
  <div class="view-content">
   <?php
      $sql="SELECT * FROM product WHERE CID='C3'";
   $ret=mysql_query($sql,$con);
   while($res=mysql_fetch_array($ret)){
      ?>              <form action="addtocart.php" method="post">
      <input type="text" hidden name="id" value=<?php echo "{$res[0]}"  ?>>
    <div class="views-row">
      <div class="item-type-a" style="height:350px;">
        <img src=<?php
        echo "{$res[1]}";
        ?> width="100px" height="200px"/>
        <p style="margin-top:0%;text-align:center;
        font-size:10px;font-weight:bold;" name="choose"><?php
        echo "{$res[4]}";
        ?></p>
   
       
       
       
       <p style="margin-top:0%;text-align:center;font-size:10px;font-weight:bold;"
        
        name="price"><?php
        echo "{$res[6]}";
        ?>&nbsp;MMK</p>
         
            
       <button class="button-10" role="button" style="margin-top:1%" name="sub">Add to Cart</button>  
      </div>
    </div>
    </form>
        <?php } ?>

  </div>
</div> 
<div class="view view-carousel">  
  <h2 class="view-title">Accessories</h2>
  <div class="view-content">
   <?php
      $sql="SELECT * FROM product WHERE CID='C6'";
   $ret=mysql_query($sql,$con);
   while($res=mysql_fetch_array($ret)){
      ?>
      <form action="addtocart.php" method="post">
      <input type="text" hidden name="id" value=<?php echo "{$res[0]}"  ?>> 
    <div class="views-row">
      <div class="item-type-a" style="height:350px;">     
        <img src=<?php
        echo "{$res[1]}";
        ?> width="100px" height="200px" />
        <p style="margin-top:0%;text-align:center;font-size:10px;font-weight:bold;"><?php
        echo "{$res[4]}";
        ?></p>
        <p style="margin-top:0%;text-align:center;font-size:10px;font-weight:bold;"><?php
        echo "{$res[6]}";
        ?>&nbsp;MMK</p>

 <button class="button-10" role="button" style="margin-top:1%" name="sub">Add to Cart</button>  
      </div>
    </div>
    </form>
        <?php } ?>
    

  </div>
</div>

<div class="view view-carousel">
  <h2 class="view-title">Clothes</h2>
  <div class="view-content">
   <?php
      $sql="SELECT * FROM product WHERE CID='C1'";
   $ret=mysql_query($sql,$con);
   while($res=mysql_fetch_array($ret)){
      ?>
      <form action="addtocart.php" method="post">
      <input type="text" hidden name="id" value=<?php echo "{$res[0]}"  ?>> 
    <div class="views-row">
      <div class="item-type-a" style="height:350px;">
        <img src=<?php
        echo "{$res[1]}";
        ?> width="100px" height="200px"/>
        <p style="margin-top:0%;text-align:center;font-size:10px;font-weight:bold;"><?php
        echo "{$res[4]}";
        ?></p>
        <p style="margin-top:0%;text-align:center;font-size:10px;font-weight:bold;"><?php
        echo "{$res[6]}";
        ?>&nbsp;MMK</p>

 <button class="button-10" role="button" style="margin-top:1%" name="sub">Add to Cart</button>  
      </div>
    </div>
    </form>
        <?php } ?>

  </div>
</div> 

<?php include 'footer.php';?>
<script>
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


var buttonPlus  = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  $n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  var amount = Number($n.val());
  if (amount > 0) {
    $n.val(amount-1);
  }
});

const sliderContainer = document.querySelector(".slider-container");
const slideRight = document.querySelector(".right-slide");
const slideLeft = document.querySelector(".left-slide");
const upButton = document.querySelector(".up-button");
const downButton = document.querySelector(".down-button");
const slidesLength = slideRight.querySelectorAll("div").length;

let activeSlideIndex = 0;

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`;

const changeSlide = (direction) => {
  const sliderHeight = sliderContainer.clientHeight;
  if (direction === "up") {
    activeSlideIndex++;
    if (activeSlideIndex > slidesLength - 1) activeSlideIndex = 0;
  } else if (direction === "down") {
    activeSlideIndex--;
    if (activeSlideIndex < 0) activeSlideIndex = slidesLength - 1;
  }
  slideRight.style.transform = `translateY(-${
    activeSlideIndex * sliderHeight
  }px)`;
  slideLeft.style.transform = `translateY(${
    activeSlideIndex * sliderHeight
  }px)`;
};

upButton.addEventListener("click", () => changeSlide("up"));
downButton.addEventListener("click", () => changeSlide("down"));

</script>
</body>
</html>


