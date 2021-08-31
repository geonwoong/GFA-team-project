<?php
/**
 * The template for displaying all pages.
 * Template Name: introduce company
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
<html !DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Introduction</title>
 <link rel="stylesheet" href="Introduction_page.css">
 <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
 <script src="Introduction.js" type="text/javascript"></script>
 <style type="text/css">
	@media screen and (min-width:1024px) {

body{
  width: 1560px;
  margin: 0;
}

.header-top{
  height:80px;
}

.header-top h1{
  width:100px;
  margin: 0px;
}

.header-top nav{
height: 80px;
}

.header-top h2{
  margin: 0px;
  display: inline-block;
  font-size: 32px;
  width: 260px;
  margin-top: 15px;
}

.header-top nav h2 a{
    text-decoration: none;
    color: black;
    padding: 10px;
}

.header-top nav li{
  font-weight: bold;
  text-align: center;
  list-style: none;
  float: right;
  width:90px;
  padding-top:10px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
  font-family: Roboto;
  font-style: normal;
  line-height: 50px;
}

.header-top nav ul{
    margin-right: 60px;
  padding-left: 0px;
}
.header-top nav li a{
    text-decoration: none;
    color: black;
    padding: 10px;
}

.header-top nav li a:hover{
  color:royalblue;
}

.header-itself nav{
height: 48px;
width:1200px;
}

.header-itself nav li{
  list-style: none;
  float: left;
  background-color:#C4C4C4;
  width:240px;
  padding-top:10px;
  padding-bottom: 10px;
	padding-left:40px;
	padding-right: 40px;
  font-family: Roboto;
  font-style: normal;
}

.header-itself nav .my-page{
  font-weight: bold;
  font-family: Roboto;
  font-style: normal;
}

.header-itself nav ul{
  margin: 0;
	width: 100%;
  padding-left: 0px;
}
.header-itself nav li a{
    text-decoration: none;
    color: black;
    padding: 10px;
}

.header-itself nav li a:hover{
  color:white;
}

.image{
  background-image: url(http://teamgfa.shop/wp-content/uploads/2021/03/English_lesson.jpg);
  background-repeat:no-repeat;
  background-size: 1560px;
  height:700px;
}

.top-area h1{
  font-weight: bold;
  font-size: 60px;
  font-style: normal;
  line-height: 112px;
  color:#FFFFFF;
  text-shadow: 0px 4px 4px
  rgba(0,0,0,0.25);
  margin-top:0px;
  text-align: center;
  padding-top:240px;
}

.top-area p{
  text-align: center;
  color:#FFFFFF;
  font-size: 30px;
  line-height: 40px;
  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
}

.main-contents{
    width:1000px;
    margin-left:250px;
    margin-right: 150px;
}
.main-contents h1{
  text-align: center;
  padding-top:120px;
}

.slide-p{
  text-align: center;
  font-size: 25px;
  font-weight: bold;
  padding-top: 200px;
}

.slide-image img{
    margin-left: 150px;
}

.paragraph{
  text-align: center;
  font-size: 25px;
  margin-top: 90px;
}

.paragraph2{
  text-align: center;
  font-size: 25px;
  margin-top: 70px;
}

.paragraph3{
  text-align: center;
  font-size: 28px;
  margin-top: 130px;
  margin-bottom: 130px;
  font-weight: bold;
}

.border{
  border-top: 15px solid;
  border-color: #CECECE;
  width:1000px;
  margin-bottom:130px;
}

.slide-image img{
  height:500px;
  width:700px;
}
.main-contents2{
  margin-bottom: 200px;
  width: 1000px;
  margin-left:250px;
  margin-right: 150px;
}

.main-contents2 h1{
  color:#C80000;
  text-align:center;
}

.contents2-paragraph{
  text-align: center;
  font-size: 25px;
  font-weight: bold;
  margin-top: 80px;
  margin-bottom: 50px;
}

.global{
  margin-left: 150px;
}

.contents2-question{
  text-align: center;
  font-size: 28px;
  font-weight: bold;
  margin-top: 150px;
  margin-bottom: 100px;
}

.btn{
 margin-left: 450px;
 border-radius: 5px;
 background-color: #EEEEEE;
 padding: 15px 50px;
 text-decoration: none;
 color: Black;
 font-weight: bold;
}

.btn:hover{
  color:royalblue;
}

#slide-show{
  width:100%;
  height:500px;
  max-width:820px;
  overflow:hidden;
  position:relative;
  margin-left: 65px;
}

#slide{
  width:10000px;
  list-style:none;
}

#slide li{
  float:left;
}

#nav_btn .prev{
  position:absolute;
  left:50px;
  top:45%;
}

#nav_btn .next{
  position:absolute;
  right:10px;
  top:45%;
}
}

@media screen and (max-width:640px) {

body{
  width:630px;
  margin-left:5px;
  margin-right: 5px;
}

.header-top nav{
height: 60px;
}

.header-top h2{
  margin: 0px;
  display: inline-block;
  font-size: 20px;
  width: 160px;
  margin-top: 15px;
}

.header-top nav h2 a{
    text-decoration: none;
    color: black;
    padding: 10px;
}

.header-top nav li{
  font-weight: bold;
  text-align: center;
  list-style: none;
  float: right;
  width:90px;
  padding-top:5px;
  padding-bottom: 5px;

  font-family: Roboto;
  font-style: normal;
  line-height: 50px;
}

.header-top nav ul{
    margin-right: 5px;
  padding-left: 0px;
}
.header-top nav li a{
    text-decoration: none;
    color: black;
    padding: 10px;
}


  .header-itself nav{
  height: 50px;
  }

  .header-itself nav li{
    list-style: none;
    float: left;
    background-color:#C4C4C4;
    padding-top:20px;
    padding-bottom: 20px;
    padding-left: 15px;
    padding-right:16px;
    font-family: Roboto;
    font-style: normal;
    line-height: 10px;
  }

  .header-itself nav .my-page{
    font-weight: bold;
    font-family: Roboto;
    font-style: normal;
  }

  .header-itself nav ul{
    margin: 0;
    padding-left: 0px;
  }
  .header-itself nav li a{
      text-decoration: none;
      color: black;
      padding: 5px;
  }

  .header-itself nav li a:hover{
    color:white;
  }

  .image{
    background-image: url(English_lesson.jpg);
    background-repeat:no-repeat;
    background-size: 640px;
    height:300px;
  }

  .top-area h1{
    font-weight: bold;
    font-size: 20px;
    font-style: normal;
    line-height: 20px;
    color:#FFFFFF;
    text-shadow: 0px 4px 4px
    rgba(0,0,0,0.25);
    margin-top:0px;
    text-align: center;
    padding-top:100px;
  }

  .top-area p{
    text-align: center;
    color:#FFFFFF;
    font-size: 15px;
    line-height: 20px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
  }

  .main-contents{
      width:630px;
  }
  .main-contents h1{
    text-align: center;
    font-size: 25px;
    padding-top:80px;
  }

  .slide-p{
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    padding-top: 100px;
  }

  .slide-image img{
      margin-left: 65px;
      margin-top: 30px;
      height:300px;
      width:500px;
  }

  .paragraph{
    text-align: center;
    font-size: 20px;
    margin-top: 50px;
    font-weight: bold;
  }

  .paragraph2{
    text-align: center;
    font-size: 20px;
    margin-top: 50px;
    font-weight: bold;
  }

  .paragraph3{
    text-align: center;
    font-size: 25px;
    margin-top: 100px;
    margin-bottom: 100px;
    font-weight: bold;
  }

  .border{
    border-top: 15px solid;
    border-color: #CECECE;
    width:630px;
    margin-bottom:130px;
  }

  .main-contents2{
    margin-bottom: 200px;
    width: 640px;
  }

  .main-contents2 h1{
    color:#C80000;
    text-align:center;
  }

  .global{
    width:500px;
    height:400px;
    margin-left: 70px;
  }

  .contents2-paragraph{
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    margin-top: 80px;
    margin-bottom: 50px;
  }


  .contents2-question{
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    margin-top: 100px;
    margin-bottom: 100px;
  }

  .btn{
   margin-left: 250px;
   border-radius: 5px;
   background-color: #EEEEEE;
   padding: 15px 50px;
   text-decoration: none;
   color: Black;
   font-weight: bold;
  }

  .btn:hover{
    color:royalblue;
  }

  #slide-show{
    width:600px;
    height:400px;
    max-width:640px;
    overflow:hidden;
    position:relative;
  }

  #slide{
    width:10000px;
    list-style:none;
  }

  #slide li{
    float:left;
  }

  #nav_btn .prev{
    position:absolute;
    left:50px;
    top:45%;
  }

  #nav_btn .next{
    position:absolute;
    right:10px;
    top:45%;
  }
}

 </style>
</head>

<body>
    <header>

      <div class="header-top">
        <nav>
             <ul>
               <h2><a href="#">Speak Online</a></h2>
               <li><a href="#">Home</a></li>
               <li><a href="#">Login</a></li>
               <li><a href="#">Sign up</a></li>
            </ul>
        </nav>
      </div>

      <div class="header-itself">
      <nav>
           <ul>
             <li><a href="#">Speaking Online</a></li>
             <li><a href="#">Course</a></li>
             <li><a href="#">Register</a></li>
             <li><a href="#">Contact</a></li>
             <li><a href="#" class="my-page">My page</a></li>
         </ul>
      </nav>
    </div>
    </header>

    <main>
    <div class="top-area">
    <div class="image">
          <h1>Now is the "age" of Speak Online!</h1>
          <p>Prepare your future-oriented study habits<br>with Speak Online one step ahead of the others.
          <br>(Headline,Online Related Images)</p>
    </div>
    </div>

    <div class ="main-contents">
        <h1>We are the Online English education platform<br>Speak Online</h1>
        <p class="slide-p">Before 2021</p>

        <div id="slide-show">
          <ul id="slide">
            <li><img src="http://teamgfa.shop/wp-content/uploads/2021/03/5.png"></li>
            <li><img src="http://teamgfa.shop/wp-content/uploads/2021/03/2.png"></li>
            <li><img src="http://teamgfa.shop/wp-content/uploads/2021/03/4.png"></li>
            <li><img src="http://teamgfa.shop/wp-content/uploads/2021/03/1.png"></li>
            <li><img src="http://teamgfa.shop/wp-content/uploads/2021/03/3.png"></li>
          </ul>

          <div id="nav_btn">
            <img class="prev" src="http://teamgfa.shop/wp-content/uploads/2021/03/btn_prev.png">
            <img class="next" src="http://teamgfa.shop/wp-content/uploads/2021/03/btn_next.png">
          </div>
        </div>

        <p class="paragraph">Just a year ago, overseas training, studying abroad were considered<br>
        as a great educational content, a new leap forward and countless people stepped <br>
        beyond the sea into a new world.<br>
        (Before Corona)</P>
        <div class="slide-image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/Coming-soon.png">
        </div>
        <p class="paragraph2">After 2020, a new era has opened with the establishment of 'untouch culture'.<br>
          Living in the online world is no longer a distant future.</p>
        <p class="paragraph3">Speak Online will create, online education beyond offline classes.</p>
        <div class="border"></div>
    </div>

    <div class="main-contents2">
      <h1>Our vision and goal</h1>
      <p class="contents2-paragraph">We will not just give you English education</p>
      <img src="http://teamgfa.shop/wp-content/uploads/2021/03/e.jpg" class="global"  width="700" height="400">
      <p class="contents2-paragraph">Speak Online's ultimate goal is to become a global<br>
      educational platform that connects people<br>
      who want to be educated and those who want to be educated.</p>
      <div class="slide-image">
      <img src="http://teamgfa.shop/wp-content/uploads/2021/03/graph.png"  width="700" height="500">
      </div>
      <p class="contents2-paragraph">Explanation about figure or document</p>
      <p class="contents2-question">Would you like to go with Speak Online in this online global era?</p>
      <a href="#" class="btn">YES</a>
    </div>
    </main>
</body>
</html>

<?php get_footer(); ?>
