<?php
/**
 * The template for displaying all pages.
 * Template Name: online english
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
 <style type="text/css">


	@media screen and (min-width:769px) {


    #pc { display: block; }
    #sp { display:none; }

    html, body { height: 100%; }

    body{
    width:100%;
    margin: 0;
    color:black;
    }

    .head1{border: 3px solid #FFA945;
box-sizing: border-box;
border-radius: 30px;
padding: 25px 70px;
}
    .head2{border: 3px solid #FFA8A8;
box-sizing: border-box;
border-radius: 30px;
padding: 25px 65px;
font-size:34px;
}
    .head3{border: 3px solid #FFB3FC;
box-sizing: border-box;
border-radius: 30px;
padding: 25px 70px;}
    .head4{border: 3px solid #BD00FF;
box-sizing: border-box;
border-radius: 30px;
padding: 25px 70px;}
    .head5{border: 3px solid #6E6BFF;
box-sizing: border-box;
border-radius: 30px;
padding: 25px 70px;}
    .head6{border: 3px solid #4DAE00;
box-sizing: border-box;
border-radius: 30px;
padding: 25px 70px;}


    .image{
    background: url(http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-84.png) no-repeat center center;
    background-size:cover;
    height:auto;
    width:auto;
    min-height:600px;
    width:auto;
    height:auto;
    }

    .top-area h1{
    font-weight: bold;
    font-size: 94px;
    font-style: normal;
    line-height: 112px;
    color:black;
    text-shadow: 0px 4px 4px
    rgba(0,0,0,0.25);
    margin-top:0px;
    text-align: center;
    padding-top:200px;
    margin-bottom:70px;
    }

    .top-area p{
    text-align: center;
    color:black;
    font-size: 48px;
    line-height: 40px;

    }

    .mainContents{
        width:100%;
        height:auto;
        margin-left:auto;
        margin-right:auto;
        margin-top:170px;
    }

    .first{
        height:400px;
        width:100%;
        max-width:1000px;
        margin-left:auto;
        margin-right:auto;
    }

    .second{
        height:400px;
        width:100%;
        max-width:1000px;
        margin-left:auto;
        margin-right:auto;
    }

     
    .third{
        height: auto;
        width:100%;
        max-width:1000px;
        margin-left:auto;
        margin-right:auto;
        margin-bottom: 60px;
    }


    .forth{height: auto;width:100%;max-width:1000px;margin-left:auto;margin-right:auto;margin-bottom: 190px;}





    .courseList{
        height:200px;
        max-width:1000px;
        width:100%;
        margin-left:auto;
        margin-right:auto;
        border:solid 5px;
        border-color:#4E82BE;
    }

    .courseList p{
        width:805px;
        margin-top:70px;
        font-size:30px;
        margin-left:auto;
        margin-right:auto;
    }

    h2{
        text-align:center;
        width:auto;
        font-size: 47px;
        margin-bottom:60px;
    }

    
      .first  img{
        width:350px;
        height:350px;
        /* margin-left:100px; */
        margin-right: 119px;
        /* padding-bottom: 0px; */
        margin-bottom: 130px;
        float:left;
        margin-top: -110px;
    
    }

    .second  img{
        width:350px;
        height:350px;
        /* margin-left:100px; */
        margin-right: 119px;
        /* padding-bottom: 0px; */
        margin-bottom: 130px;
        float:left;
        margin-top: -110px;
    
    }

      
    .third img{
        width:350px;
        height:350px;
        /* margin-left:100px; */
        margin-right: 119px;
        /* padding-bottom: 0px; */
        margin-bottom: 100px;
        float:left;
        margin-top: -110px;
    
    }


    .forth img{
        width: 90%;
height: 414px;
        /* margin-left:100px; */
        /* padding-bottom: 0px; */

        margin-left:60px;
    
    }


    h3{
        display:inline-block;
        width:auto;
        margin-top:30px;
        color: #4E82BE;
        font-size: 22px;
    }

    .first p{
    font-size: 24px;
    margin-bottom:20px;
    margin-top:250px;
}

.second p{
    font-size: 24px;
    margin-bottom:20px;
    margin-top:250px;
}

.third p{
    font-size: 24px;
    margin-bottom:20px;
    margin-top:250px;
}

.forth p{
    font-size: 24px;
    margin-bottom:60px;
    margin-top:80px;
    width:700px;
    text-align:center;
    margin-left:auto;
        margin-right:auto;
    
}
    .fifth p{
    margin-bottom:60px;
    padding-top: 80px;
    width: 100%;
    height: auto;
    text-align:center;
    font-weight: bold;
    font-size: 42px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    color:white;
    text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.69);
}


.first h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 25px 70px;
}

.second h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 25px 70px;
}

.third h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 25px 70px;
}


.forth h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 25px 70px;
}

.fifth h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 25px 70px;
}

.sixth h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
margin-bottom:90px;
padding: 25px 70px;
}



h1{
    text-align:center;
    margin-bottom:90px;
    max-width: 1200px;
    margin-left: auto;
    font-size:35px;
    font-weight:bold;
    margin-right: auto;
}


.attendanceInformation{
    height:400px;
    width:100%;
    max-width:1320px;
    margin-left:auto;
    margin-right:auto;
    border-radius:30px;
    margin-bottom:220px;
}

.Test{
    max-width:1000px; 
    width:100%;  
    max-height:800px;
    height:800px;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:400px;
}

.attendanceInformation ul{
    border-radius:30px;
}

.attendanceInformation li{
    list-style:none;
    float:left;
    height: 120px;
    width: 50%;
    font-size:35px;
    padding-top: 30px;
    color:white;
    text-align:center;
    /* padding:32px 160px; */
    background-color:#4E82BE;
    margin-bottom:5px;
}


.second{
    position: relative;
    display: inline-block;
}

.second:before {
  content: '';
  position: absolute;
  left: 0%;
  bottom: 20px;/*線の上下位置*/
  display: inline-block;
  width: 3px;/*線の長さ*/
  height: 80px;/*線の太さ*/
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);/*位置調整*/
  background-color: white;/*線の色*/
  border-radius: 2px;/*線の丸み*/
}

.fifth{width: 80%;max-width: 900px;height: 467px;background: url(http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-85.png);background-size:cover;opacity: 0.8;border-radius: 10px;margin-left:auto;margin-right:auto;margin-bottom:200px;}


    .sixth p{
    font-size: 24px;
    width: 670px;
    line-height: 72px;
/* or 300% */
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    color: #000000;
}

.sixth{
    margin-bottom:170px;
}

    }

@media screen and (max-width:768px) {
    
    #pc { display: none; }
    #sp {width:130px; 
        display:block;
        margin-left:auto;
margin-right:auto;
margin-bottom:95px;

    }

    html, body { height: 100%; }

    body{
    width:100%;
    margin: 0;
    color:black;
    }

    .head1{border: 3px solid #FFA945;
box-sizing: border-box;
border-radius: 30px;
padding: 5px;
margin-bottom:35px;
}
    .head2{border: 3px solid #FFA8A8;
box-sizing: border-box;
border-radius: 30px;
padding: 5px;
margin-bottom:35px;
}
    .head3{border: 3px solid #FFB3FC;
box-sizing: border-box;
border-radius: 30px;
padding: 5px;
margin-bottom:35px;}
    .head4{background: #BD00FF;
padding: 5px;
height: 35px;
padding-top:10px;
margin-bottom:30px;
}
    .head5{background: rgba(235, 255, 0, 0.81);
padding: 5px;
height: 35px;
margin-bottom:50px;
}
    .head6{background: rgba(125, 255, 92, 0.85);
        height: 35px;
        padding-top:10px;
        margin-bottom:30px;
    }


.top-area{
    min-height:185px;
}
    .image{
    background: url(http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-84.png) no-repeat center center;
    background-size:cover;
    min-height:185px;
    width:auto;
    height:auto;
    }

    .top-area h1{
    font-weight: bold;
    font-weight: bold;
    font-size: 20px;
    color:black;
    text-shadow: 0px 4px 4px
    rgba(0,0,0,0.25);
    margin-top:0px;
    text-align: center;
    padding-top:60px;
    margin-bottom:15px;
    }

    .top-area p{
    text-align: center;
    color:black;
    font-size: 15px;
line-height: 18px;

    }

    .mainContents{
        width:100%;
        height:auto;
        margin-left:auto;
        margin-right:auto;
        margin-top:40px;
    }

    .first{
        /* height:400px; */
        width: 100%;
        max-width: 250px;
        /* max-width:1000px; */
        margin-left:auto;
        margin-right:auto;
    }
    .second{
        height:400px;
        width:100%;
        max-width:1000px;
        margin-left:auto;
        margin-right:auto;
    }

     
    .third{
        height: auto;
        width:100%;
        max-width: 250px;
        margin-left:auto;
        margin-right:auto;
        margin-bottom: 60px;
    }


    .forth{height: auto;width:100%;max-width: 250px;margin-left:auto;margin-right:auto;    margin-bottom: 65px;}





    .courseList{
        height:200px;
        max-width:1000px;
        width:100%;
        margin-left:auto;
        margin-right:auto;
        border:solid 5px;
        border-color:#4E82BE;
    }

    .courseList p{
        width:805px;
        margin-top:70px;
        font-size:30px;
        margin-left:auto;
        margin-right:auto;
    }

    h2{
        text-align:center;
        width:auto;
        font-size: 12px;
        margin-bottom:60px;
    }

    .first  img{
        width: 80px;
        height: 80px;
        /* margin-left:100px; */
        margin-right: 15px;
        /* padding-bottom: 0px; */
        margin-bottom: 60px;
        float:left;
        /* margin-top: -110px; */
    }


    .second  img{
        width: 80px;
height: 80px;
        /* margin-left:100px; */
        margin-right: 119px;
        /* padding-bottom: 0px; */
        margin-bottom: 130px;
        float:left;
        margin-top: -110px;
    
    }

    .third img{
        width: 80px;
        height: 80px;
        /* margin-left:100px; */
        margin-right: 15px;
        /* padding-bottom: 0px; */
        margin-bottom: 60px;
        float:left;
        /* margin-top: -110px; */
    
    }
      
      
    .forth img{
        width: 100%;
    }


    h3{
        display:inline-block;
        width:auto;
        margin-top:30px;
        color: #4E82BE;
        font-size: 22px;
    }

    .first p{
        font-size: 12px;
}

.second p{
    font-size: 12px;
}

.third p{
    font-size: 12px;
}

.forth p{
    font-size: 8px;
    margin-bottom:60px;
    width: 226px;
    height: 27px;
    text-align:center;
    margin-left:auto;
        margin-right:auto;
    
}
.fifth p{
    margin-bottom:60px;
    padding-top: 30px;
    width: 100%;
    height: auto;
    text-align:center;
    /* font-weight: bold; */
    font-size: 10px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    color:white;
    text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.69);
}


.first h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 5px;
}

.second h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 5px;
}

.third h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 5px;
}


.forth h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 5px;
}

.fifth h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
padding: 5px;
}

.sixth h1{
    margin-top:220px;
    border: 3px solid #FFA945;
border-radius: 30px;
margin-bottom:90px;
padding: 5px;
}



h1{
    text-align:center;
    /* max-width: 1200px; */
    margin-left: auto;
    font-size: 10px;
    /* font-weight:bold; */
    width: 250px;
    margin-right: auto;
}


.attendanceInformation{
    height:400px;
    width:100%;
    max-width:1320px;
    margin-left:auto;
    margin-right:auto;
    border-radius:30px;
    margin-bottom:220px;
}

.Test{
    max-width:1000px; 
    width:100%;  
    max-height:800px;
    height:800px;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:400px;
}

.attendanceInformation ul{
    border-radius:30px;
}

.attendanceInformation li{
    list-style:none;
    float:left;
    height: 120px;
    width: 50%;
    font-size:35px;
    padding-top: 30px;
    color:white;
    text-align:center;
    /* padding:32px 160px; */
    background-color:#4E82BE;
    margin-bottom:5px;
}


.second{
    position: relative;
    display: inline-block;
}

.second:before {
  content: '';
  position: absolute;
  left: 0%;
  bottom: 20px;/*線の上下位置*/
  display: inline-block;
  width: 3px;/*線の長さ*/
  height: 80px;/*線の太さ*/
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);/*位置調整*/
  background-color: white;/*線の色*/
  border-radius: 2px;/*線の丸み*/
}

.fifth{width: 100%;max-width: 215px;height: 120px;background: url(http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-85.png);/* background-size:cover; */opacity: 0.8;border-radius: 10px;margin-left:auto;margin-right:auto;margin-bottom:50px;}

    .sixth p{
    font-size: 10px;
    width: 250px;
    height: 47px;
/* or 300% */
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    color: #000000;
}

.sixth{
    margin-bottom:170px;
}

}

 </style>
</head>

<body>
    <main>
    <div class="top-area">
    <div class="image">
          <h1>Online English</h1>
          <p>Learn how to prepare for your first lesson!</p>
    </div>
</div>

<div class="mainContents">
<h1 class="head1">1. While my friend is stuck at home in Corona, let's go on a trip to Europe online!</h1>
<div class="first">
<img src="http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-93.png">
<p> Experience Europe with instructors of various European countries through video classes.</p>
</div>

<h1 class="head2">2. Customized system where I study the most convenient time for me</h1>
<div class="first">
<img src="http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-94.png">
<p> Don't need to fit your academy schedule, but learn efficiently according to your schedule.</p>
</div>

<h1 class="head3">3. If you can access the Internet, that's your own classroom.</h1>
<div class="third">
<img src="http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-95.png">
<p> You can take classes if you can only use the Internet without restrictions on the location.</p>
<h2>Grow faster than others by reducing unnecessary time to and from the academy and increasing preparation and review time.</h2>
</div>

<h1 class="head4">4.1:1 Video Lecture for Intensive Learning</h1>
<div class="forth">
<p> Focus on studying English with the perfect care of the instructor because we have 1:1 classes facing each other on the video.</p>
<img src="http://teamgfa.shop/wp-content/uploads/2021/06/Rectangle-86.png">
</div>

<h1 class="head5">5.  It's not enough just to hear! vivid English to see and hear</h1>
<div class="fifth">
<p> Is it okay if I just understand English?
Learn English with your mouth, facial expressions, and gestures and feel the joy of learning a living language.
</p>
</div>

<h1 class="head6">6. 1:1 classes with native speakers at this price?</h1>
<div class="sixth">
<p> Experience 1:1 learning with native speakers at a reasonable<br> tuition fee of up to 20,000 won per session.<br>
The longer you study, the more discounts you get!
</p>
</div>

</div>
</main>
</body>
</html>

<?php get_footer(); ?>
