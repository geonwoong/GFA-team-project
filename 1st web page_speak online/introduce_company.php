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
 <script src="js/Introduction.js" type="text/javascript"></script>
 <style type="text/css">


	@media screen and (min-width:769px) {

body{
  width:100%;
  margin: 0;
}

/* .header-top{
  height:80px;
}

.header-top h1{
  width:100px;
  margin: 0px;
}

.header-top nav{
height: 80px;
width:100%;
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
	margin-top:10px; 
  padding-top:10px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
  font-family: Roboto;
  font-style: normal;
}

.header-top nav ul{
  margin-right: 60px;
}
.header-top nav li a{
    text-decoration: none;
    color: black;
    padding: 10px;
}

.header-top nav li a:hover{
  color:royalblue;
} */

.header-itself nav{
height: 60px;
background-color:#C4C4C4;
padding-left:350px;
width:100%;
}

.header-itself nav li{
  list-style: none;
  float: left;
  background-color:#C4C4C4;
  padding-top:15px;
  padding-bottom: 10px;
	/* /* padding-left:10px; */
	padding-left: 80px; */
  font-family: Roboto;
  font-style: normal;
}

.header-itself nav ul{
  margin: 0;
	width: 100%;
  background-color:#C4C4C4;
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
  background-size: 100%;
  height:900px;
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
  padding-top:320px;
}

.top-area p{
  text-align: center;
  color:#FFFFFF;
  font-size: 30px;
  line-height: 40px;
  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
}

.main-contents{
    width:100%;
    text-align:center;
}
.main-contents h1{
  text-align: center;
  padding-top:200px;
}

#slide-show{
  width:100%;
  margin:0px auto;
}
.slide-p{
  text-align: center;
  font-size: 25px;
  font-weight: bold;
  padding-top: 200px;
}

.slide-image img{
  margin : 0 auto
  text-align:center;
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
  width:60%;
  margin-bottom:130px;
  text-align:center;
  display:inline-block;
}

.slide-image img{
  height:500px;
  width:700px;
}
.main-contents2{
  margin-bottom: 200px;
  width: 100%;
  text-align:center;
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

.contents2-question{
  text-align: center;
  font-size: 28px;
  font-weight: bold;
  margin-top: 150px;
  margin-bottom: 100px;
}

.btn{
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
  text-align:center;
}

#slide{
  width:10000px;
  list-style:none;
}

#slide li{
  float:left;
  text-align:center;
}

#nav_btn .prev{
  position:absolute;
  left:630px;
  top:34%;
}

#nav_btn .next{
  position:absolute;
  right:630px;
  top:34%;
}
}

@media screen and (max-width:768px) {

body{
  width:100%;
  margin:0px auto;
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
    color: white;
    padding: 10px;
}


  .header-itself nav{
  height: 50px;
  }

  .header-itself nav li{
    list-style: none;
    float: left;
    background-color:#595959;
    color:white;
    padding-top:15px;
    padding-bottom: 15px;
    padding-left: 15px;
    padding-right:15px;
    font-family: Roboto;
    font-style: normal;
    font-size:5px;
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
      color: white;
      padding: 5px;
      padding-bottom:10px;
  }

  .header-itself nav li a:hover{
    color:yellow;
  border-bottom:3px solid yellow;
  }

  .image{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/03/English_lesson.jpg);
    background-repeat:no-repeat;
    background-size: 100%;
    height:300px;
  }

  .top-area{
    width:100%;
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
    padding-top:50px;
  }

  .top-area p{
    text-align: center;
    color:#FFFFFF;
    font-size: 15px;
    line-height: 20px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
  }
  .main-contents{
    width:100%;
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
    padding-top: 50px;
  }

  .slide-image img{
      height:300px;
      width:100%;
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
    width:100%;
    margin-bottom:130px;
  }

  .main-contents2{
    text-align:center;
    margin-bottom: 200px;
    width:100%;
  }

  .main-contents2 h1{
    color:#C80000;
    text-align:center;
  }

  .global{
    width:350px;
    height:200px;
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
    height:200px;
    max-width:350px;
    overflow:hidden;
    position:relative;
  }

  #slide{
    width:10000px;
    margin:0px;
    list-style:none;
  }

  #slide li{
    float:left;
    width:350px;
  }

  #nav_btn .prev{
    position:absolute;
    left:10px;
    top:20%;
  }

  #nav_btn .next{
    position:absolute;
    right:10px;
    top:20%;
  }

  
}

 </style>
</head>

<body>
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

    
        <div class="slide-image">
        <img src="http://teamgfa.shop/wp-content/uploads/2021/03/5.png">
          </div>

          <div id="nav_btn">
            <img class="prev" src="http://teamgfa.shop/wp-content/uploads/2021/03/btn_prev.png">
            <img class="next" src="http://teamgfa.shop/wp-content/uploads/2021/03/btn_next.png">
          </div>
      

        <p class="paragraph">Just a year ago, overseas training, studying abroad were considered<br>
        as a great educational content, a new leap forward and countless people stepped <br>
        beyond the sea into a new world.<br>
        (Before Corona)</P>
        <p class="paragraph2">After 2020, a new era has opened with the establishment of 'untouch culture'.<br>
          Living in the online world is no longer a distant future.</p>
        <p class="paragraph3">Speak Online will create, online education beyond offline classes.</p>
        <div class="border"></div>
    </div>

    <div class="main-contents2">
      <h1>Our vision and goal</h1>
      <p class="contents2-paragraph">We will not just give you English education</p>
      <img src="http://teamgfa.shop/wp-content/uploads/2021/05/together-2450090_1280-2.png" class="global"  width="700" height="400">
      <p class="contents2-paragraph">Speak Online's ultimate goal is to become a global<br>
      educational platform that connects people<br>
      who want to be educated and those who want to be educated.</p>
      <div class="slide-image">
      <img src="http://teamgfa.shop/wp-content/uploads/2021/05/colorful-182220_1280-2.png"  width="700" height="500">
      </div>
      <p class="contents2-paragraph">Explanation about figure or document</p>
      <p class="contents2-question">Would you like to go with Speak Online in this online global era?</p>
      <a href="http://teamgfa.shop/free-level-test-page/" class="btn">YES</a>
    </div>
    </main>
</body>
</html>

<?php get_footer(); ?>
