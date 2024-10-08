<?php /*
 * Template Name: Landing Page 2
 */ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="https://demos.freehtml5.co/solution/owl-carousel/assets/owl.carousel.min.css" type="text/css">
<style>

@font-face {
  font-family: "Lato-Regular";
  src: url(../fonts/Lato-Regular.ttf);
}
@font-face {
  font-family: "Lato-Black";
  src: url(../fonts/Lato-Black.ttf);
}
@font-face {
  font-family: "Lato-Bold";
  src: url(../fonts/Lato-Bold.ttf);
}
@font-face {
  font-family: "Lato-Light";
  src: url(../fonts/Lato-Light.ttf);
}
@font-face {
  font-family: "Lato-Medium";
  src: url(../fonts/Lato-Medium.ttf);
}
@font-face {
  font-family: "Lato-Semibold";
  src: url(../fonts/Lato-Semibold.ttf);
}
@font-face {
  font-family: "OpenSans-Bold";
  src: url(../fonts/OpenSans-Bold.ttf);
}
@font-face {
  font-family: "OpenSans-Regular";
  src: url(../fonts/OpenSans-Regular.ttf);
}
@font-face {
  font-family: "OpenSans-Semibold";
  src: url(../fonts/OpenSans-Semibold.ttf);
}
p {
  font-family: "OpenSans-Regular";
  color: #666666;
  font-size: 18px;
}

body {
  overflow: hidden;
  overflow-y: auto;
  font-family: "OpenSans-Regular";
}

@media (min-width: 1200px) {
  .container {
    max-width: 1240px;
  }
}
#gtco-main-nav {
  padding: 20px 0;
}
#gtco-main-nav .navbar-brand {
  font-size: 36px;
  font-family: "Lato-Black";
  text-transform: uppercase;
  background: -webkit-linear-gradient(left, #1d3ede, #01e6f8);
  background: -ms-linear-gradient(left, #1d3ede, #01e6f8);
  background: -moz-linear-gradient(left, #1d3ede, #01e6f8);
  background: -o-linear-gradient(left, #1d3ede, #01e6f8);
  -webkit-background-clip: text;
  -ms-background-clip: text;
  -o-background-clip: text;
  -webkit-text-fill-color: transparent;
  -ms-text-fill-color: transparent;
  -o-text-fill-color: transparent;
  margin-right: 50px;
}
#gtco-main-nav .bar1, #gtco-main-nav .bar2, #gtco-main-nav .bar3 {
  width: 25px;
  height: 2px;
  background-color: #fff;
  margin: 5px 0;
  transition: 0.4s;
  display: block;
  position: relative;
}
#gtco-main-nav .change .bar1 {
  -webkit-transform: rotate(-42deg) translate(-2px, 6px);
  transform: rotate(-42deg) translate(-2px, 6px);
}
#gtco-main-nav .change .bar2 {
  opacity: 0;
}
#gtco-main-nav .change .bar3 {
  -webkit-transform: rotate(46deg) translate(-4px, -8px);
  transform: rotate(46deg) translate(-4px, -8px);
}
#gtco-main-nav .navbar-nav li a {
  font-family: "OpenSans-Regular";
  font-size: 18px;
  color: #666666;
  padding: 5px 15px !important;
  text-transform: uppercase;
}
#gtco-main-nav form a {
  font-family: "OpenSans-Semibold";
  font-size: 18px;
  color: #fff;
  padding: 5px 25px;
  border-radius: 20px;
  border-width: 2px;
}
#gtco-main-nav form a.btn-info {
  background: #01e6f8;
  border-color: #01e6f8;
}
#gtco-main-nav form a.btn-outline-dark {
  border-color: #fff;
  background-color: transparent;
}
@media (max-width: 991px) {
  #gtco-main-nav form a.btn-outline-dark {
    border-color: #1d3ede;
    color: #1d3ede;
  }
}
#gtco-main-nav::after {
  position: absolute;
  content: "";
  height: 600px;
  width: 900px;
  background-image: -webkit-linear-gradient(-220deg, #1d3ede, #01e6f8);
  background-image: -moz-linear-gradient(-220deg, #1d3ede, #01e6f8);
  background-image: -ms-linear-gradient(-220deg, #1d3ede, #01e6f8);
  background-image: -o-linear-gradient(-220deg, #1d3ede, #01e6f8);
  background-image: linear-gradient(-220deg, #1d3ede, #01e6f8);
  left: 49.5%;
  top: -50px;
  z-index: -1;
  border-radius: 50% 0 50% 50%;
}
@media (max-width: 1400px) {
  #gtco-main-nav::after {
    height: 550px;
    width: 800px;
  }
}
@media (max-width: 1199px) {
  #gtco-main-nav::after {
    width: 700px;
  }
}
@media (max-width: 991px) {
  #gtco-main-nav::after {
    width: 55%;
    left: auto;
    right: 0;
  }
}
@media (max-width: 600px) {
  #gtco-main-nav::after {
    width: 100%;
    height: 400px;
  }
}
#gtco-main-nav::before {
  position: absolute;
  content: "";
  height: 590px;
  width: 930px;
  background-image: -webkit-linear-gradient(to right, #e8eefc, #e6fafe);
  background-image: -moz-linear-gradient(to right, #e8eefc, #e6fafe);
  background-image: -ms-linear-gradient(to right, #e8eefc, #e6fafe);
  background-image: -o-linear-gradient(to right, #e8eefc, #e6fafe);
  background-image: linear-gradient(to right, #e8eefc, #e6fafe);
  left: 47.5%;
  top: -25px;
  z-index: -1;
  border-radius: 50% 0 50% 50%;
}
@media (max-width: 1400px) {
  #gtco-main-nav::before {
    height: 540px;
    width: 810px;
  }
}
@media (max-width: 1199px) {
  #gtco-main-nav::before {
    width: 710px;
  }
}
@media (max-width: 991px) {
  #gtco-main-nav::before {
    width: 55%;
    left: auto;
    right: 0;
  }
}
@media (max-width: 600px) {
  #gtco-main-nav::before {
    width: 100%;
    height: 390px;
  }
}

.gtco-banner-area a, .gtco-feature a, .gtco-features a, .gtco-news .owl-carousel .card a, #gtco-footer .submit-button {
  background-image: -moz-linear-gradient(0deg, #06c6f9 0%, #38eaf9 100%);
  background-image: -webkit-linear-gradient(0deg, #06c6f9 0%, #38eaf9 100%);
  background-image: -ms-linear-gradient(0deg, #06c6f9 0%, #38eaf9 100%);
  font-size: 18px;
  font-family: "OpenSans-Semibold";
  color: #fff;
  border-radius: 50px;
  padding: 5px 30px;
  display: inline-block;
  text-transform: uppercase;
  padding-right: 5px;
  text-decoration: none !important;
}
.gtco-banner-area a .fa, .gtco-feature a .fa, .gtco-features a .fa, .gtco-news .owl-carousel .card a .fa, #gtco-footer .submit-button .fa {
  background: #fff;
  border-radius: 50%;
  height: 32px;
  width: 32px;
  color: #37eaf9;
  font-size: 22px;
  text-align: center;
  padding-top: 5px;
  margin-left: 15px;
}

.gtco-feature h2, .gtco-features h2 {
  font-family: "Lato-Regular";
  color: #000000;
  font-size: 36px;
  margin-bottom: 30px;
}

.card {
  border: none;
  background: transparent;
}

.gtco-banner-area {
  margin-top: 20px;
  min-height: 500px;
}
.gtco-banner-area h1 {
  font-family: "Lato-Light";
  font-size: 48px;
  color: #000000;
  max-width: 500px;
  margin-top: 70px;
}
.gtco-banner-area h1 span {
  font-family: "Lato-Medium";
}
@media (max-width: 1199px) {
  .gtco-banner-area h1 {
    margin-top: 30px;
  }
}
.gtco-banner-area p {
  max-width: 450px;
  margin: 20px 0;
  margin-bottom: 40px;
}
.gtco-banner-area a {
  display: inline;
  padding: 10px 30px;
  padding-right: 5px;
}
.gtco-banner-area .col-md-6 .card .card-img-top {
  max-width: 430px;
  margin: 0 auto;
  margin-top: 30px;
  margin-right: 0;
}
@media (max-width: 1400px) {
  .gtco-banner-area .col-md-6 .card .card-img-top {
    max-width: 400px;
    margin-top: 20px;
    margin-right: auto;
  }
}
@media (max-width: 1199px) {
  .gtco-banner-area .col-md-6 .card .card-img-top {
    max-width: 350px;
  }
}
@media (max-width: 767px) {
  .gtco-banner-area .col-md-6 .card .card-img-top {
    margin-top: 100px;
  }
}

.gtco-feature {
  margin-top: 100px;
}
.gtco-feature .card .back-bg {
  margin-left: -30px !important;
  margin-top: -20px;
}
.gtco-feature .card svg {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.gtco-feature .card svg.defs {
  position: absolute;
  width: 0;
  height: 0;
}
.gtco-feature .card .squircle {
  width: 100%;
  height: 450px;
  background: url(../https://demos.freehtml5.co/solution/images/learn-img.jpg) center/cover, #aaa;
  clip-path: url(#clip-path);
  background-position-x: -50px;
}
.gtco-feature p small {
  font-size: 16px;
}
.gtco-feature a {
  margin-top: 20px;
  display: inline-block;
}

.gtco-features {
  margin-top: 100px;
}
.gtco-features svg {
  position: absolute;
  margin-left: -100px;
  margin-top: 100px;
}
@media (max-width: 767px) {
  .gtco-features svg {
    margin: 0 auto;
    margin-top: 200px;
  }
}
.gtco-features h2 {
  margin-top: 200px;
}
@media (max-width: 991px) {
  .gtco-features h2 {
    margin-top: 0;
  }
}
.gtco-features .col-lg-4 p {
  max-width: 320px;
  margin-bottom: 30px;
}
.gtco-features .col-lg-8 {
  padding: 10px 100px;
}
@media (max-width: 767px) {
  .gtco-features .col-lg-8 {
    padding: 10px 0;
  }
}
.gtco-features .col-lg-8 .row .col:first-child {
  margin-top: 150px;
}
@media (max-width: 600px) {
  .gtco-features .col-lg-8 .row .col:first-child {
    margin-top: 50px;
  }
}
@media (max-width: 600px) {
  .gtco-features .col-lg-8 .col {
    flex: 0 0 100%;
    max-width: 100%;
  }
}
.gtco-features .col-lg-8 .card {
  background: #fff;
  margin: 30px 5px;
  padding: 20px 10px;
  border-radius: 20px;
  box-shadow: 0 15px 40px 0 rgba(0, 0, 0, 0.08);
}
.gtco-features .col-lg-8 .card .oval {
  background: linear-gradient(to right, #f1f6fd, #f0fbfe);
  padding: 10px;
  width: 150px;
  border-radius: 50%;
  margin: auto;
  transform: rotate(20deg);
  margin-top: 20px;
}
.gtco-features .col-lg-8 .card .card-img-top {
  max-width: 0.8in;
  margin: 0 auto;
  transform: rotate(-20deg);
}
.gtco-features .col-lg-8 .card h3 {
  font-family: "Lato-Regular";
  font-size: 24px;
  color: #1d3ede;
}
.gtco-features .col-lg-8 .card p {
  font-size: 16px;
}

.gtco-numbers-block {
  margin: 100px auto;
  margin-top: 200px;
  color: #fff;
}
@media (max-width: 600px) {
  .gtco-numbers-block {
    margin-top: 100px;
  }
}
@media (max-width: 1299px) {
  .gtco-numbers-block .row {
    max-width: 1000px;
    margin: 0 auto;
  }
}
@media (max-width: 767px) {
  .gtco-numbers-block .row .col-3 {
    padding: 0;
  }
}
.gtco-numbers-block #custom-map::before {
  position: absolute;
  content: "";
  height: 100px;
  width: 100%;
  border: 2px solid red;
}
.gtco-numbers-block svg {
  margin-top: -100px;
  position: absolute;
  left: 0;
  max-width: 1500px;
  right: 0;
  margin-left: auto;
  margin-right: auto;
}
@media (max-width: 1299px) {
  .gtco-numbers-block svg {
    margin-top: -90px;
  }
}
@media (max-width: 1199px) {
  .gtco-numbers-block svg {
    margin-top: -60px;
  }
}
@media (max-width: 991px) {
  .gtco-numbers-block svg {
    margin-top: -40px;
  }
}
@media (max-width: 650px) {
  .gtco-numbers-block svg {
    margin-top: -20px;
  }
}
@media (max-width: 600px) {
  .gtco-numbers-block svg {
    margin-top: -10px;
  }
}
.gtco-numbers-block h5 {
  font-family: "Lato-Bold";
  font-size: 60px;
}
@media (max-width: 1299px) {
  .gtco-numbers-block h5 {
    font-size: 48px;
  }
}
@media (max-width: 767px) {
  .gtco-numbers-block h5 {
    font-size: 24px;
  }
}
@media (max-width: 600px) {
  .gtco-numbers-block h5 {
    margin: 0;
    font-size: 18px;
  }
}
.gtco-numbers-block p {
  font-family: "Lato-Semibold";
  font-size: 24px;
  color: #fff;
}
@media (max-width: 1299px) {
  .gtco-numbers-block p {
    font-size: 18px;
  }
}
@media (max-width: 991px) {
  .gtco-numbers-block p {
    font-size: 16px;
  }
}
@media (max-width: 991px) {
  .gtco-numbers-block p {
    font-size: 16px;
  }
}
@media (max-width: 600px) {
  .gtco-numbers-block p {
    line-height: 1.1;
  }
}
@media (max-width: 500px) {
  .gtco-numbers-block p {
    font-size: 8px;
  }
}

.gtco-testimonials {
  position: relative;
  margin-top: 200px;
}
@media (max-width: 767px) {
  .gtco-testimonials {
    margin-top: 100px;
  }
}
.gtco-testimonials h2 {
  font-family: "Lato-Medium";
  font-size: 36px;
  text-align: center;
  color: #333333;
  margin-bottom: 100px;
}
.gtco-testimonials .owl-stage-outer {
  padding-bottom: 30px;
}
.gtco-testimonials .owl-nav {
  display: none;
}
.gtco-testimonials .owl-dots {
  text-align: center;
}
.gtco-testimonials .owl-dots span {
  position: relative;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  display: block;
  background: #fff;
  border: 2px solid #01e6f8;
  margin: 0 5px;
}
.gtco-testimonials .owl-dots .active {
  box-shadow: none;
}
.gtco-testimonials .owl-dots .active span {
  background: #01e6f8;
  box-shadow: none;
  height: 12px;
  width: 12px;
  margin-bottom: -1px;
}
.gtco-testimonials .card {
  background: #fff;
  box-shadow: 0 15px 40px 0 rgba(0, 0, 0, 0.08);
  margin: 0 30px;
  padding: 0 20px;
  border-radius: 50px;
}
.gtco-testimonials .card .card-img-top {
  max-width: 100px;
  border-radius: 50%;
  margin: 0 auto;
  border: 5px solid #1d3ede;
  width: 100px;
  height: 100px;
}
.gtco-testimonials .card h5 {
  color: #1d3ede;
  font-size: 21px;
  line-height: 1.3;
  font-family: "Lato-Medium";
}
.gtco-testimonials .card h5 span {
  font-size: 18px;
  color: #666666;
  font-family: "OpenSans-Regular";
}
.gtco-testimonials .card p {
  font-size: 18px;
}
.gtco-testimonials .active {
  opacity: 0.5;
  transition: all 0.3s;
}
.gtco-testimonials .center {
  opacity: 1;
}
.gtco-testimonials .center h5 {
  font-size: 24px;
}
.gtco-testimonials .center h5 span {
  font-size: 20px;
}
.gtco-testimonials .center p {
  font-size: 20px;
}
.gtco-testimonials .center .card-img-top {
  max-width: 100%;
  height: 120px;
  width: 120px;
}

.gtco-features-list {
  margin-top: 100px;
}
.gtco-features-list .media {
  margin: 20px 0;
}
.gtco-features-list .oval {
  border-radius: 50%;
  background-color: white;
  box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.1);
  padding: 15px;
  height: 60px;
  width: 60px;
}
.gtco-features-list .oval .align-self-start {
  width: 100%;
  padding: 3px;
}
.gtco-features-list .media-body {
  font-family: "OpenSans-Regular";
  font-size: 16px;
  color: #666666;
  padding-right: 20px;
}
.gtco-features-list .media-body h5 {
  font-family: "Lato-Semibold";
  margin-bottom: 20px !important;
  font-size: 22px;
}

.gtco-logo-area {
  margin: 50px auto;
}
.gtco-logo-area .col .img-fluid {
  max-height: 32px;
}
@media (max-width: 600px) {
  .gtco-logo-area .col {
    flex: 0 0 50%;
    max-width: 50%;
    margin: 20px 0;
  }
}

.gtco-news {
  background: #fcfcfc;
  padding: 50px 0;
  margin: 100px auto;
}
.gtco-news h2 {
  font-size: 36px;
  font-weight: "Lato-Medium";
  text-align: center;
  margin-bottom: 50px;
}
.gtco-news .owl-carousel .owl-nav {
  display: block !important;
  position: absolute;
  top: 25%;
  width: 100%;
}
@media (max-width: 600px) {
  .gtco-news .owl-carousel .owl-nav {
    display: none !important;
  }
}
.gtco-news .owl-carousel .owl-nav .owl-prev, .gtco-news .owl-carousel .owl-nav .owl-next {
  font-size: 120px;
  color: #666666;
  position: absolute;
}
.gtco-news .owl-carousel .owl-nav .owl-prev {
  left: -50px;
}
.gtco-news .owl-carousel .owl-nav .owl-next {
  right: -50px;
}
.gtco-news .owl-carousel .card {
  padding: 0 25px;
}
.gtco-news .owl-carousel .card .card-img-top {
  border-radius: 40px;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.08);
}
.gtco-news .owl-carousel .card h5 {
  font-family: "Lato-Medium";
  font-size: 22px;
  color: #333333;
  margin-bottom: 20px;
}
@media (max-width: 767px) {
  .gtco-news .owl-carousel .card h5 {
    font-size: 18px;
  }
}
.gtco-news .owl-carousel .card p {
  font-size: 17px;
}
@media (max-width: 767px) {
  .gtco-news .owl-carousel .card p {
    font-size: 15px;
  }
}
.gtco-news .owl-carousel .card a {
  padding-top: 3px !important;
  padding-bottom: 3px !important;
}

#gtco-footer {
  padding-bottom: 20px;
}
#gtco-footer h4 {
  font-family: "Lato-Medium";
  font-size: 24px;
  color: #1d3ede;
  margin-bottom: 30px;
}
#gtco-footer input, #gtco-footer textarea {
  background-color: white;
  box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.08);
  border-radius: 50px;
  max-width: 450px;
  width: 100%;
  height: 60px;
  border: none;
  margin-bottom: 30px;
  padding-left: 30px;
  color: #000;
}
#gtco-footer input::-webkit-input-placeholder, #gtco-footer input::-moz-placeholder, #gtco-footer input:-ms-input-placeholder, #gtco-footer input:-moz-placeholder, #gtco-footer textarea::-webkit-input-placeholder, #gtco-footer textarea::-moz-placeholder, #gtco-footer textarea:-ms-input-placeholder, #gtco-footer textarea:-moz-placeholder {
  color: #999999;
  font-family: "OpenSans-Regular";
  font-size: 18px;
}
#gtco-footer textarea {
  min-height: 200px;
  border-radius: 30px;
  padding-top: 20px;
  padding-right: 20px;
  resize: none;
}
#gtco-footer .company-nav, #gtco-footer .services-nav {
  font-family: "OpenSans-Regular";
  font-size: 20px;
}
#gtco-footer .company-nav a, #gtco-footer .services-nav a {
  color: #666666;
  margin: 0;
  padding: 0;
}
#gtco-footer .follow-us-nav a {
  padding: 0 10px;
  color: #666666;
}
@media (max-width: 385px) {
  #gtco-footer .follow-us-nav a {
    padding-right: 0;
  }
}
#gtco-footer .follow-us-nav a .fa {
  font-size: 24px;
}
#gtco-footer .col-12 {
  margin-top: 90px;
}
#gtco-footer .col-12 p {
  font-family: "Lato-Regular";
  font-size: 22px;
  color: #999999;
}
@media (max-width: 991px) {
  #gtco-footer .col-12 {
    margin-top: 20px;
  }
}
@media (max-width: 991px) {
  #gtco-footer .col-lg-6 {
    margin-bottom: 50px;
  }
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand">Solution</a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="#" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">login</a> <a href="#"
                                                                                                       class="btn btn-info my-2 my-sm-0 text-uppercase">sign
                up</a>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1> We promise to bring
                    the best <span>solution</span> for
                    your business. </h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus turpis nisl. </p>
                <a href="#">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-md-6">
                <div class="card"><img class="card-img-top img-fluid" src="https://demos.freehtml5.co/solution/images/banner-img.png" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-feature" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                                class="back-bg"
                                width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>
                        <!-- *************-->

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="https://demos.freehtml5.co/solution/images/learn-img.jpg" width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h2> We are a Creative Digital
                    Agency & Marketing Experts </h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus turpis nisl, vitae dictum mi
                    semper convallis. Ut sapien leo, varius ac dapibus a, cursus quis ante. </p>
                <p>
                    <small>Nunc sodales lobortis arcu, sit amet venenatis erat placerat a. Donec lacinia magna nulla,
                        cursus impediet augue egestas id. Suspendisse dolor lectus, pellentesque quis tincidunt ac,
                        dictum id neque.
                    </small>
                </p>
                <a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2> Explore The Services<br/>
                    We Offer For You </h2>
                <p> Nunc sodales lobortis arcu, sit amet venenatis erat placerat a. Donec lacinia magna nulla, cursus
                    impediet augue egestas id. Suspendisse dolor lectus, pellentesque quis tincidunt ac, dictum id
                    neque. </p>
                <a href="#">All Services <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-lg-8">
                <svg id="bg-services"
                     width="100%"
                     viewBox="0 0 1000 800">
                    <defs>
                        <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                            <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                            <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                        </linearGradient>
                    </defs>
                    <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                          d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                </svg>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/web-design.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Web Design</h3>
                                <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                    eget.</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/marketing.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Marketing</h3>
                                <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                    eget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/seo.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">SEO</h3>
                                <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                    eget.</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/graphics-design.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Graphics Design</h3>
                                <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                    eget.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-numbers-block">
    <div class="container">
        <svg width="100%" viewBox="0 0 1600 400">
            <defs>
                <linearGradient id="PSgrad_03" x1="80.279%" x2="0%"  y2="0%">
                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />

                </linearGradient>

            </defs>
            <!-- <clipPath id="clip-path3">

                                      </clipPath> -->

            <path fill-rule="evenodd"  fill="url(#PSgrad_03)"
                  d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>

            <clipPath id="ctm" fill="none">
                <path
                        d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>
            </clipPath>

            <!-- xlink:href for modern browsers, src for IE8- -->
            <image  clip-path="url(#ctm)" xlink:href="https://demos.freehtml5.co/solution/images/word-map.png" height="800px" width="100%" class="svg__image">

            </image>

        </svg>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">125</h5>
                        <p class="card-text">Active Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">200</h5>
                        <p class="card-text">Business Growth</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">530</h5>
                        <p class="card-text">Completed Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">941</h5>
                        <p class="card-text">Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-testimonials">
    <div class="container">
        <h2>What our customers say about us.</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/customer1.jpg" alt="">
                    <div class="card-body">
                        <h5>Lisa Gally <br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/customer2.jpg" alt="">
                    <div class="card-body">
                        <h5>Missy Limana<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/customer3.jpg" alt="">
                    <div class="card-body">
                        <h5>Aana Brown<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/customer3.jpg" alt="">
                    <div class="card-body">
                        <h5>Aana Brown<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features-list">
    <div class="container">
        <div class="row">
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="https://demos.freehtml5.co/solution/images/quality-results.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Quality Results</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="https://demos.freehtml5.co/solution/images/analytics.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Analytics</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="https://demos.freehtml5.co/solution/images/affordable-pricing.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Affordable Pricing</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="https://demos.freehtml5.co/solution/images/easy-to-use.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Easy To Use</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="https://demos.freehtml5.co/solution/images/free-support.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Free Support</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="https://demos.freehtml5.co/solution/images/effectively-increase.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Effectively Increase</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-logo-area">
    <div class="container">
        <div class="row">
            <div class="col"><img src="https://demos.freehtml5.co/solution/images/logo1.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="https://demos.freehtml5.co/solution/images/logo2.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="https://demos.freehtml5.co/solution/images/logo3.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="https://demos.freehtml5.co/solution/images/logo4.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="https://demos.freehtml5.co/solution/images/logo5.png" class="img-fluid" alt=""></div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-news" id="news">
    <div class="container">
        <h2>Latest News & Articles</h2>
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/news1.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Aenean ultrices lorem quis blandit
                            tempor urabitur accumsan. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/news2.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5> Nam vel nisi eget odio pulvinar
                            iaculis. Fusce aliquet. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/news3.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Morbi faucibus odio sollicitudin
                            risus scelerisque dignissim. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/news1.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Aenean ultrices lorem quis blandit
                            tempor urabitur accumsan. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/news2.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5> Nam vel nisi eget odio pulvinar
                            iaculis. Fusce aliquet. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="https://demos.freehtml5.co/solution/images/news3.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Morbi faucibus odio sollicitudin
                            risus scelerisque dignissim. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <h4> Contact Us </h4>
                <input type="text" class="form-control" placeholder="Full Name">
                <input type="email" class="form-control" placeholder="Email Address">
                <textarea class="form-control" placeholder="Message"></textarea>
                <a href="#" class="submit-button">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Company</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                        <h4 class="mt-5">Fllow Us</h4>
                        <ul class="nav follow-us-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-facebook"
                                                                                      aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                                                                 aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>Services</h4>
                        <ul class="nav flex-column services-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Web Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Graphics Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">App Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">SEO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Marketing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Analytic</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>&copy; 2019. All Rights Reserved. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php get_footer(); ?>
<script src="https://demos.freehtml5.co/solution/owl-carousel/owl.carousel.min.js"></script>
<script>
    (function () {

'use strict';

var carousels = function() {
    $(".owl-carousel1").owlCarousel(
        {
            loop:true,
            center: true,
            margin:0,
            responsiveClass:true,
            nav:false,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        }
    );

    $(".owl-carousel2").owlCarousel(
        {
            loop:true,
            center: false,
            margin:0,
            responsiveClass:true,
            nav:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:true
                }
            }
        }
    );
}


// svg responsive in mobile mode
var checkPosition = function() {
    if ($(window).width() < 767) {
        $("#bg-services").attr("viewBox", "0 0 1050 800");

    }
};

(function($) {
    carousels();
    checkPosition();
})(jQuery);


}());

// menu toggle button
function myFunction(x) {
x.classList.toggle("change");
}
</script>