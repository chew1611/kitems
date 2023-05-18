<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <style>
    .col{
        
     height: 88px;margin-top: 23px;
    

    }
  body{background-color:plum;font-family: 'Times New Roman', Times, serif;
    font-size: 18px;

  }

    * {
 	padding: 0;
 	margin: 0;
 	box-sizing: border-box;
 }
 .box {
 	display: flex;
 	align-items: flex-start;
 	
 	height: 55vh;
 	overflow: hidden;
 	position: relative;
    margin-top: 2%;margin-left: 45px;
 
 }
 .box .single-box img {
 	position: absolute;
 	min-width: 80%;
 	min-height: 30%;
 	height: auto;
 	background: #000;
 	-webkit-backface-visibility: hidden;
 	backface-visibility: hidden;
 	opacity: 0;
 	transform: scale(1.5) rotate(15deg);
 	-webkit-animation: animate 32s infinite;
 	animation: animate 32s infinite;margin-left: 88px;
 }
 .box .single-box:nth-child(3) img {
 	-webkit-animation-delay: 8s;
 	animation-delay: 8s;
 }
 .box .single-box:nth-child(2) img {
 	-webkit-animation-delay: 16s;
 	animation-delay: 16s;
 }
 .box .single-box:nth-child(1) img {
 	-webkit-animation-delay: 24s;
 	animation-delay: 24s;
 }
 @keyframes animate {
 	25% {
 		opacity: 1;
 		transform: scale(1) rotate(0);
 	}
 	40% {
 		opacity: 0;
 	}
 }


    </style>
</head>


<body>
<?php include 'unav.php';?>
<div class="container text-center">
  <div class="row">
    <div class="col" style="background-color: pink;height:380px;
     border-top-left-radius: 5px;border-bottom-left-radius:2px;margin-top:77px;
     box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
<h2 style="margin-top: 4%">About Us</h2>

<p style="color:black;text-align:justify;
margin-top:55px;margin-left:22px">Our page is 
intended for K-pop fans in Myanmar. The main thing is to sell the products of the popular singer group Tha in Korea online. This project is only a mini project made in school. It was written by three students who are majoring in computer science in the third year, Thu Rain Min Than, Than Myat Oo, and Aye Chu Khin.</p>
   <div style="margin-top: 12%;">
<img src="twitter.png" width="20px">&nbsp;&nbsp;&nbsp;
<img src="facebook.png" width="20px">
   </div>
</div>
    <div class="col" style="background-color: pink;height:380px;margin-top:2%;
     border-top-right-radius: 5px;border-bottom-top-radius:2px;margin-top:77px;
    ">
    <div class="wrapper box">
		<div class="single-box"><img alt="" src="b2.jpg" width="100px"></div>
		<div class="single-box"><img alt="" src="4.jpg"  width="100px"></div>
		<div class="single-box"><img alt="" src="g.jpg"  width="100px"></div>
		<div class="single-box"><img alt="" src="bb.jpg"  width="100px"></div>
	</div>
  </div>

</div>
</body>
</html>