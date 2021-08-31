<?php
/**
 * The template for displaying all pages.
 * Template Name: Course Information
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Speak Online</title>  
</head>
  <style>
    /* background: #E5E5E5; */
    @font-face {
  font-family:"Roboto";
  src: url("/fonts/Roboto-Light.woff2"),
  url("/fonts/Roboto-Light.woff");
  font-weight: 300;
  font-display: swap;
  font-style: normal;
}
@font-face {
  font-family: "Roboto";
  src: url("/fonts/Roboto-Regular.woff2"),
  url("/fonts/Roboto-Regular.woff");
  font-weight: 500;
  font-display: swap;
  font-style: normal;
}
@font-face {
  font-family: "Roboto";
  src: url("/fonts/Roboto-Bold.woff2"),
    url("/fonts/Roboto-Bold.woff");
  font-weight: 700;
  font-display: swap;
  font-style: normal;
}
* {
  margin: 0;
  padding: 0;
}
body {
  /* background: #E5E5E5; */
  font-family: 'Roboto', sans-serif;
  padding: 0;
  margin: 0;
}


.section {
  
}
.poster {
  max-width: 1320px;
  height: 750px;
  
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-content: center;

  margin: 0 auto;

  overflow: hidden;
  position: relative;
}
.poster_image {
  width: 100%;
  height: auto;
  position: absolute;
  z-index: 1;
  top: 160px;
  height: 600px;
  border-radius: 10px;
}
.poster__title {
  position: relative;
  z-index: 10;
  margin-top: 290px;

  font-family: Roboto;
  font-weight: bold;
  font-size: 50px;
  line-height: 59px;

 text-shadow: -0 -3px 0 #FFFFFF,
 0 -3px 0 #FFFFFF,
 -0 3px 0 #FFFFFF,
 0 3px 0 #FFFFFF,
 -3px -0 0 #FFFFFF,
 3px -0 0 #FFFFFF,
 -3px 0 0 #FFFFFF,
 3px 0 0 #FFFFFF,
 -1px -3px 0 #FFFFFF,
 1px -3px 0 #FFFFFF,
 -1px 3px 0 #FFFFFF,
 1px 3px 0 #FFFFFF,
 -3px -1px 0 #FFFFFF,
 3px -1px 0 #FFFFFF,
 -3px 1px 0 #FFFFFF,
 3px 1px 0 #FFFFFF,
 -2px -3px 0 #FFFFFF,
 2px -3px 0 #FFFFFF,
 -2px 3px 0 #FFFFFF,
 2px 3px 0 #FFFFFF,
 -3px -2px 0 #FFFFFF,
 3px -2px 0 #FFFFFF,
 -3px 2px 0 #FFFFFF,
 3px 2px 0 #FFFFFF,
 -3px -3px 0 #FFFFFF,
 3px -3px 0 #FFFFFF,
 -3px 3px 0 #FFFFFF,
 3px 3px 0 #FFFFFF,
 -3px -3px 0 #FFFFFF,
 3px -3px 0 #FFFFFF,
 -3px 3px 0 #FFFFFF,
 3px 3px 0 #FFFFFF; 
  text-align: center;
  color: #50A0FF;
}

.poster__text {
  position: relative;
  z-index: 10;
  text-align: center;
  
  width: 70%;

  margin: 0 auto;
  margin-top: 52px;
}

.poster__text p {
  padding-bottom: 29px;
  font-family: Roboto;
  font-weight: bold;
  font-size: 24px;
  line-height: 28px;

  color: #FFFFFF;

  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.83);
  text-shadow: 3px #FFFFFF;
}
.title-list {
   width: 66%;
   height: 85px;
   background: #529FF9;
   margin: 0 auto;
   margin-top: 105px;
}
.title-list-2 {
  width: 66%;
  height: 85px;
  background: #529FF9;
  margin: 0 auto;
  margin-top: 170px;
}
.title__padding {
  width: 66%;
  height: 85px;
  background: #529FF9;
  margin: 0 auto;
  margin-top: 210px;
}
.title-list-2 h2 {
  font-weight: bold;
  font-size: 35px;
  line-height: 41px;
  text-align: center;
  color: #FFFFFF;
  padding-top: 22px;
  padding-bottom: 22px;
}
.title-list h2 {
  font-weight: bold;
  font-size: 35px;
  line-height: 41px;
  text-align: center;
  color: #FFFFFF;
  padding-top: 22px;
  padding-bottom: 22px;
}
.title__padding h2 {
  font-weight: bold;
  font-size: 35px;
  line-height: 41px;
  text-align: center;
  color: #FFFFFF;
  padding-top: 22px;
  padding-bottom: 22px;
}
.list {
  width: 70%;
  margin: 0 auto;
  padding-left: 90px;
  margin-top: 88px;
}
.list h2{
  font-family: Roboto;
  font-weight: bold;
  font-size: 40px;
  line-height: 47px;

  color: #000000;
}
.catalog {
  width: 73%;
  display: flex;
  justify-content: space-around;
  margin: 80px auto 130px;
}
.catalog__width {
  width: 55%;
  display: flex;
  justify-content: space-around;
  margin: 80px auto 130px;
}
.lesson {
  margin-bottom: 120px;
  
}
.lesson img{
  object-fit: cover;
  width: 320px;
  height: 300px;
  position: absolute;
  z-index: 10;
}
.lesson__title {
  width: 320px;
  height: 140px;

  background-color: rgba(0, 0, 0, 0.5);
  ;
  position: relative;
  z-index: 20;

  top: 80px;
}
.lesson__title p {
  padding-top: 25px;
  padding-bottom: 25px;


  font-family: Roboto;
  font-style: normal;
  font-weight: bold;
  font-size: 35px;
  line-height: 41px;
  text-align: center;

  color: #FFFFFF;
	text-shadow: 
		-0   -3px 0   #3A3A3A,
		 0   -3px 0   #3A3A3A,
		-0    3px 0   #3A3A3A,
		 0    3px 0   #3A3A3A,
		-3px -0   0   #3A3A3A,
		 3px -0   0   #3A3A3A,
		-3px  0   0   #3A3A3A,
		 3px  0   0   #3A3A3A,
		-1px -3px 0   #3A3A3A,
		 1px -3px 0   #3A3A3A,
		-1px  3px 0   #3A3A3A,
		 1px  3px 0   #3A3A3A,
		-3px -1px 0   #3A3A3A,
		 3px -1px 0   #3A3A3A,
		-3px  1px 0   #3A3A3A,
		 3px  1px 0   #3A3A3A,
		-2px -3px 0   #3A3A3A,
		 2px -3px 0   #3A3A3A,
		-2px  3px 0   #3A3A3A,
		 2px  3px 0   #3A3A3A,
		-3px -2px 0   #3A3A3A,
		 3px -2px 0   #3A3A3A,
		-3px  2px 0   #3A3A3A,
		 3px  2px 0   #3A3A3A,
		-3px -3px 0   #3A3A3A,
		 3px -3px 0   #3A3A3A,
		-3px  3px 0   #3A3A3A,
		 3px  3px 0   #3A3A3A,
		-3px -3px 0   #3A3A3A,
		 3px -3px 0   #3A3A3A,
		-3px  3px 0   #3A3A3A,
		 3px  3px 0   #3A3A3A;
}
.lesson__title .top {
  padding-top: 10px;
}
.lesson__title .top-1 {
  padding-top: 50px;
}
.lesson__title .top-1 {
  padding-top: 50px;
}
.language-offer {
  width: 68%;
  height: 120px;
  background: rgba(0, 71, 255, 0.64);
  margin: 0 auto;
  margin-top: 247px;
}
.language-offer h2 {
  font-family: Roboto;
  font-weight: bold;
  font-size: 40px;
  line-height: 47px;
  text-align: center;
  color: #FFFFFF;
  padding-top: 35px;
}

/* offer-section */
.offer-section {
    width: 1104px;
    height: 1193px;

    background: #FFFFFF;
    border: 4px solid #CACACA;

    margin: 92px auto 127px;
}
.offer-section__title {
  margin-top: 70px;
  margin-left: 61px;
}
.offer-section__h2 {
  font-weight: bold;
  font-size: 55px;
  line-height: 64px;
}
.description {
  display: flex;
  margin-top: 90px;
}
.description__text {
  padding-left: 35px;
  width: 650px;
}
.description__text p {
  font-size: 30px;
  line-height: 45px;
  margin-bottom: 43px;
}
.description__img {
  margin-left: 56px;
}

.recommendation {
  display: flex;
  margin-top: 77px;
  margin-left: 60px;

}
.recommendation__block {
  width: 221px;
  height: 100px;
  background: #C4C4C4;
}
.recommendation__block {
  font-size: 20px;
  line-height: 23px;
  text-align: center;
  color: #000000;
}
.recommendation__block p {
  position: relative;
  top: 35px;
}
.recommendation__options {
  margin-left: 62px;
  margin-top: 10px;
}

.recommendation__options ul li {
  font-size: 20px;
  line-height: 23px;
  margin-bottom: 25px;
  
  list-style: url(http://teamgfa.shop/wp-content/uploads/2021/03/Ellipse18.png);
  color: #000000;
}
.recommendation__options ul li span {
  position: relative;
  top: -5px;
  left: 20px;
}
.materials {
  display: flex;

  margin-top: 49px;
  margin-left: 152px;
}
.materials__text h2{
  font-weight: bold;
  font-size: 30px;
  line-height: 35px;
}
.materials__list {
  margin-top: 47px;
  margin-left: 103px;
}
.materials__list ul {
  list-style: none;
}
.materials__list ul li {
  padding-bottom: 37px;
  font-size: 25px;
  line-height: 14px;
}
.materials__image {
  position: relative;
  left: 112px;
  top: -40px;
}
.button__lesson {
  position: relative;
  bottom: 72px;
  
  width: 300px;
  height: 80px;

  background: #95B3FF;
  border-radius: 10px;

  margin: 0 auto;
  text-align: center;
}

.button__lesson a::before{
  content: url(http://teamgfa.shop/wp-content/uploads/2021/03/arrow-51.png);

  width: 40px;
  height: 40px;

  position: relative;
  right: 35px;
  top: 10px;
}
.button__lesson a {
  font-family: Roboto;
  font-size: 36px;
  line-height: 42px;


  text-decoration: none;
  color: #000000;

  position: relative;
  top: 8px;
  left: 11px;
}
.margin-bottom {
  padding-bottom: 0px;
}



@media (max-width: 1349.98px) {
  .list {
    width: 70%;
    margin: 0 auto;
    padding-left: 0px; 
    margin-top: 88px;
  }
  .title-list {
    width: 990px;
    height: 85px;
    margin: 0 auto;
    margin-top: 85px;
  }
  .catalog {
    width: 1010px;
    margin: 130px auto;
    flex-wrap: wrap;
  }
  .lesson {
    margin-bottom: 200px;
  }
  .title-list-2 {
   width: 1010px;
   height: 85px;
   margin: 0 auto;
   margin-top: 105px;
  }
  .catalog__width {
    width: 1010px;
    margin: 130px auto;
    flex-wrap: wrap;
  }
  .title__padding {
    width: 1010px;
    height: 85px;
    margin: 0 auto;
    margin-top: 105px;
  }
  .language-offer {
    width: 790px;
    margin: 0px auto;
    margin-top: 105px;
  }
  .offer-section {
    width: 1104px;
    margin: 92px auto 127px;
  }
  .button__lesson {
    margin: 0px auto;
  }
}
@media (max-width: 1150.98px) {
  .list {
    width: 80%;
  }
  .catalog {
    width: 90%;
  }
  .catalog__width {
    width: 90%;
  }
  .offer-section {
    width: 90%;
    height: auto;
    margin: 92px auto 127px;
  }
  .description {
    display: flex;
    margin-top: 40px;
    flex-direction: column-reverse;
  }
  .offer-section__title {
    margin: 20px auto;
    text-align: center;
  }
  .offer-section__h2 {
    font-size: 44px;
  }
  .description__img {
    margin: 0 auto 30px;
  }
  .description__text {
    padding-left: 35px;
    width: 90%;
  }
  .recommendation {
    display: flex;
    margin-top: 7px;
    margin-left: 60px;
  }
  .materials {

    margin-top: 50px;
    margin-left: 40px;
  }
  .materials__image {
    display: none;
  }
  .margin-bottom {
    margin-bottom: 10px;
  }
}
@media (max-width: 991.98px) {
  .poster {
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    height: 780px;
  }
  .title-list {
    width: 90%;
    margin: 0 auto;
    margin-top: 85px;
  }
  .title-list-2 {
    width: 90%;
    margin: 0 auto;
    margin-top: 85px;
  }
  .title__padding {
    width: 90%;
    margin: 0 auto;
    margin-top: 85px;
  }
  .poster_image {
    width: 100%;
    object-fit: cover;
  }
  .list {
    width: 80%;
    text-align: center;
  }
  .language-offer {
    width: 90%;
    margin: 0px auto;
    margin-top: 105px;
  }
  .recommendation__options ul li {
    list-style: none;
  }
  .recommendation__options {
    margin-left: 15px;
    margin-top: 15px;
  }
  .margin-bottom p{
    padding-bottom: 10px;
  }
  .materials {
    display: none;
  }

}
@media (max-width: 767.98px) {
  .poster__title {
  margin-top: 230px;
  }
  .poster__text p {
  font-size: 22px;
  }
  .recommendation__block {
    display: none;
  }
  .recommendation {
    width: 95%;
    margin: 10px 0 0 -10px;
  }
  .materials__list {
    margin: 40px 0px;
  }
  
}
@media (max-width: 575.98px) {
  .display-no {
    display: none;
  }
  .poster__title {
    position: relative;
    z-index: 10;
    margin-top: 290px;
  }
  .list h2 {
    font-size: 36px;
  }
  .title-list h2 {
    font-size: 26px;
  }
  .poster__text p {
    font-size: 22px;
  }
  .title-list-2 h2 {
    font-size: 25px;
  }
  .poster__text-2 p {
    font-size: 22px;
  }
  .title__padding h2 {
    font-size: 24px;
  }
  .language-offer h2 {
    font-size: 26px;
  }
  .materials {
    display: none;
  }
  .description__img img {
    width: 240px;
    height: 240px;
    object-fit: cover;
  }
  .description__text {
    padding-left: 15px;
  }
  .button__lesson {
    width: 290px;
  }
  .button__lesson a { 
    font-size: 26px;
  }

}
  </style>

</head>

<body>
  <!--    Link      -->
  <a name="top"></a>


  <!-- section -->
  <div class="section">

    <!-- advertisement -->
    <div class="poster">
      <img src="http://teamgfa.shop/wp-content/uploads/2021/03/watercolour.png" class="poster_image" alt="">
      <div class="poster__title">
        Course Information
      </div>

      <div class="poster__text">
        <p>SPEAK ONLINE offers courses tailored to students' various objectives.Lessons can also be reserved for any
          day and time of the week (9:00 to 25:00) that suits your lifestyle.</p>

        <p class="display-no">Even if you're new to English conversation, it's okay. Friendly Filipino instructors who
          are easy to get
          used
          to Japanese people will give you fun lessons.Even if you are not sure which course to choose, the Japanese
          staff will support you with care.Please try out the free trial lesson and find the best course for you.
        </p>
      </div>
    </div>
  </div>

  <!--          list           -->
  <div class="list">
    <h2>SPEAK ONLINE course list</h2>
  </div>

  <div class="title-list">
    <h2>English conversation</h2>
  </div>

  <!--      catalog        -->
  <div class="catalog">

    <!--    lesson         -->
    <a href="#Regular" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/regular.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p>Regular conversation</p>
        </div>
      </div>
    </a>

    <a href="#Phonics" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/toys-3644073_19201.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p class="top-1">Phonics</p>
        </div>
      </div>
    </a>

    <a href="#Englsih" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/children.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p class="top">Englsih conversation for children</p>
        </div>
      </div>
    </a>
  </div>

  <!--      title-list         -->
  <div class="title-list-2">
    <h2>Test preparation course</h2>
  </div>

  <div class="catalog__width">

    <!--    lesson         -->
    <a href="#TOEIC" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/children.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p class="top-1">TOEIC</p>
        </div>
      </div>
    </a>

    <a href="#IELTS" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/children.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p class="top-1">IELTS</p>
        </div>
      </div>
    </a>

  </div>

  <!--      title-list         -->
  <div class="title__padding">
    <h2>Advanced English course</h2>
  </div>

  <div class="catalog">

    <!--    lesson         -->
    <a href="#News" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/photo1.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p class="top-1">News+Free talking</p>
        </div>
      </div>
    </a>

    <a href="#Discussion" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/discussion.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p class="top-1">Discussion English</p>
        </div>
      </div>
    </a>

    <a href="#Business" style="text-decoration: none;">
      <div class="lesson">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/business.png" alt="" class="lesson__image">
        <div class="lesson__title">
          <p class="top-1">Business English</p>
        </div>
      </div>
    </a>
  </div>

  <div class="language-offer">
    <h2>English convarsation</h2>
  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="Regular"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        Regular conversation
      </div>
    </div>


    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p>Did you know that English conversation can take you on a fun adventure?</p>
        <p>Conversing (talking) with others in English opens up a whole new world of opportunities.</p>
        <p>Thanks to English, you will be able to talk with people who don’t speak your native language.</p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/regular.png" alt="regular ">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <li><span>For people who want to learn grammar</span></li>
          <li><span>For peple who want to talk to others</span></li>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>American English File</li>
            <li>Starter~5(total 6 books)</li>
            <li>Basic(level 3)~advanced(level 14)</li>
          </ul>
        </div>
      </div>
      <div class="materials__image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="Phonics"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        Phonics
      </div>
    </div>
    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p style="margin-bottom: 0px;">The course introduces the basic knowledge in the correct pronunciation of
          English
          sounds that help the
          learner to continue improving his/her English.</p>
        <p style="margin-bottom: 0px;">Through the course you will be able to recognize the different sounds of
          English and
          pronounce it
          correctly.</p>
        <p style="margin-bottom: 0px;">The course will help the learner to read and write English correctly through
          distinguishing the different.
        </p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/abc-3523453_19201.png" alt="regular">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <ul>
            <li style="padding-top: 25px;"><span>For children who don’t know English</span></li>
          </ul>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>Let’s go Phonics
              (For level 1~ level2)</li>
          </ul>
        </div>
      </div>
      <div class="materials__image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="Englsih"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        English coversation for children
      </div>
    </div>

    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p style="margin-bottom: 0;" class="margin-bottom">The course introduces the basic knowledge in the correct
          pronunciation of English
          sounds that help the
          learner to continue improving his/her English.</p>
        <p style="margin-bottom: 0;" class="margin-bottom">Through the course you will be able to recognize the
          different sounds of English and pronounce it correctly.</p>
        <p style="margin-bottom: 0;" class="margin-bottom">The course will help the learner to read and write English
          correctly through
          distinguishing the different
          sounds of English.</p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/children.png" alt="regular ">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <li><span>Let’s go series Let’s begin 1 to 6 (For level 1~ level4)</span></li>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>American English File</li>
            <li>Starter~5(total 6 books)</li>
            <li>Basic(level 3)~advanced(level 14)</li>
          </ul>
        </div>
      </div>
      <div class="materials__image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--      button__lesson     -->
  <div class="button__lesson">
    <a href="#top">go to top</a>
  </div>

  <!--    language-offer     -->
  <div class="language-offer" style="margin-top: 115px;">
    <h2>Test preparation course</h2>
  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="TOEIC"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        TOIEC
      </div>
    </div>
    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p>Did you know that English conversation can take you on a fun adventure?</p>
        <p>Conversing (talking) with others in English opens up a whole new world of opportunities.</p>
        <p>Thanks to English, you will be able to talk with people who don’t speak your native language.</p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/regular.png" alt="regular ">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <li><span>For people who want to learn grammar</span></li>
          <li><span>For peple who want to talk to others</span></li>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>American English File</li>
            <li>Starter~5(total 6 books)</li>
            <li>Basic(level 3)~advanced(level 14)</li>
          </ul>
        </div>
      </div>
      <div class="materials__image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="IELTS"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        IELTS
      </div>
    </div>

    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p style="margin-bottom: 0px;">The course introduces the basic knowledge in the correct pronunciation of
          English sounds that help the
          learner to continue improving his/her English.</p>
        <p style="margin-bottom: 0px;"> Through the course you will be able to recognize the
          different sounds of English and pronounce it correctly.</p>
        <p style="margin-bottom: 0px;">The course will help the learner to read and write English correctly through
          distinguishing the different
          sounds of English.</p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/abc-3523453_19201.png" alt="regular">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <li style="padding-top: 25px;">
            <span>For children who don’t know English</span>
          </li>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>Let’s go Phonics</li>
            <li>(For level 1~ level2) </li>
          </ul>
        </div>
      </div>
      <div class="materials__image" style="position: relative; left: 253px;">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--      button__lesson     -->
  <div class="button__lesson">
    <a href="#top">go to top</a>
  </div>

  <!--    language-offer     -->
  <div class="language-offer" style="margin-top: 115px;">
    <h2>Advanced English</h2>
  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="News"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        News and free talking
      </div>
    </div>
    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p>Did you know that English conversation can take you on a fun adventure?</p>
        <p>Conversing (talking) with others in English opens up a whole new world of opportunities.</p>
        <p>Thanks to English, you will be able to talk with people who don’t speak your native language.</p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/pexels-jopwell-24222902.png" alt="regular ">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <li><span>For people who want to learn grammar</span></li>
          <li><span>For peple who want to talk to others</span></li>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>American English File</li>
            <li>Starter~5(total 6 books)</li>
            <li>Basic(level 3)~advanced(level 14)</li>
          </ul>
        </div>
      </div>
      <div class="materials__image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="Discussion"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        Discussion English
      </div>
    </div>
    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p style="margin-bottom: 0px;">The course introduces the basic knowledge in the correct pronunciation of
          English sounds that help the
          learner to continue improving his/her English.</p>
        <p style="margin-bottom: 0px;">Through the course you will be able to recognize the
          different sounds of English and pronounce it correctly.</p>
        <p style="margin-bottom: 0px;">The course will help the learner to read and write English correctly through
          distinguishing the different
          sounds of English.</p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/abc-3523453_19201.png" alt="regular ">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <li style="margin-top: 25px;"><span>For children who don’t know English</span></li>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>Let’s go Phonics</li>
            <li>(For level 1~ level2)</li>
          </ul>
        </div>
      </div>
      <div class="materials__image" style="position: relative; left: 253px;">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--    offer-section      -->
  <div class="offer-section">
    <a name="Business"></a>
    <!--    offer-section__title     -->
    <div class="offer-section__title">
      <div class="offer-section__h2">
        Business English
      </div>
    </div>

    <!-- description -->
    <div class="description">

      <div class="description__text">
        <p style="margin-bottom: 0px;">The course introduces the basic knowledge in the correct pronunciation of
          English sounds that help the
          learner to continue improving his/her English.</p>
        <p style="margin-bottom: 0px;">Through the course you will be able to recognize the
          different sounds of English and pronounce it correctly.</p>
        <p style="margin-bottom: 0px;">The course will help the learner to read and write English correctly through
          distinguishing the different
          sounds of English.</p>
      </div>

      <div class="description__img">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/jopwel.png" alt="regular ">
      </div>
    </div>

    <!-- recommendation -->
    <div class="recommendation">
      <div class="recommendation__block">
        <p>recommendation</p>
      </div>
      <div class="recommendation__options">
        <ul>
          <li><span>Let’s begin 1 to 6</span></li>
          <li><span>Let’s begin 1 to 6</span></li>
        </ul>
      </div>
    </div>


    <!-- materials -->
    <div class="materials">
      <div class="materials__text">
        <div class="materials__title">
          <h2>
            Lesson materials
          </h2>
        </div>

        <!-- materials__list -->
        <div class="materials__list">
          <ul>
            <li>American English File</li>
            <li>Starter~5(total 6 books)</li>
            <li>Basic(level 3)~advanced(level 14)</li>
          </ul>
        </div>
      </div>
      <div class="materials__image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/book.png" alt="" class="materials__img">
      </div>
    </div>


  </div>

  <!--      button__lesson     -->
  <div class="button__lesson" style="margin-top: 115px;">
    <a href="#top">go to top</a>
  </div>


</body>

</html>