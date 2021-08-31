<?php
/**
 * The template for displaying all pages.
 * Template Name: MyPage
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

    .image{
    background: url(http://teamgfa.shop/wp-content/uploads/2021/05/tic-tac-toe-1777933_1920-1.png) no-repeat center center;
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
    color:white;
    text-shadow: 0px 4px 4px
    rgba(0,0,0,0.25);
    margin-top:0px;
    text-align: center;
    padding-top:200px;
    margin-bottom:60px;
    }

    .top-area p{
    text-align: center;
    color:#FFFFFF;
    font-size: 30px;
    line-height: 40px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
    }

    .mainContents{
        width:100%;
        height:auto;
        margin-left:auto;
        margin-right:auto;
        margin-top:170px;
    }

    .profile{
        height:400px;
        width:100%;
        max-width:1000px;
        margin-left:auto;
        margin-right:auto;
        border:solid 5px;; 
        border-color:#4E82BE;
    }

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
    }

    img{
        margin-top:80px;
        margin-left:100px;
        padding-right:150px;
        padding-bottom:80px;
        float:left;
    }
    h3{
        display:inline-block;
        width:auto;
        margin-top:30px;
        color: #4E82BE;
        font-size: 22px;
    }

.profile p{
    font-size: 25px;
    margin-bottom:20px;
    font-weight:bold;
}

.profile h1{
    margin-top:220px;
}
h1{
    margin-top:160px;
    text-align:center;
    margin-bottom:25px;
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

    .image{
    background: url(http://teamgfa.shop/wp-content/uploads/2021/05/tic-tac-toe-1777933_1920-1.png) no-repeat center center;
    background-size:cover;
    min-height:180px;
    width:auto;
    height:auto;
    }

    .top-area h1{
    font-weight: bold;
    font-size: 25px;
    font-style: normal;
    color:white;
    text-shadow: 0px 4px 4px
    rgba(0,0,0,0.25);
    margin-top:0px;
    text-align: center;
    padding-top:50px;
    }

    .top-area p{
    text-align: center;
    color:#FFFFFF;
    font-size: 20px;
    line-height: 40px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
    padding-bottom:50px;
    }

    .mainContents{
        width:100%;
        height:auto;
        margin-left:auto;
        margin-right:auto;
    }

    .profile{
        height:150px;
        width:100%;
        max-width:320px;
        margin-left:auto;
        margin-right:auto;
    }

    .courseList{
        height: 127px;
    max-width: 1000px;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    border: solid 5px;
    border-color: #4E82BE;
    border-radius: 30px;
    }

    .courseList p{
        margin-top: 32px;
    font-size: 15px;
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    font-weight: bold;
    }

    h2{
        text-align:center;
        width:auto;
    }

    img{
        margin-top:30px;
        margin-right:30px;
        width: 104px;
        height: 102px;
        float:left;
    }
    h3{
        display:inline-block;
        width:auto;
        margin-top:0px;
        color: #4E82BE;
        font-size: 10px;
    }

.profile p{
    font-size: 15px;
    font-weight:bold;
    margin-bottom:-8px;
}

h1{
    margin-top:65px;
    text-align:center;
    margin-bottom:25px;
}

.attendanceInformation{
    width: 95%;
    max-width: 1320px;
    margin-left: auto;
    margin-right: auto;
    height: 130px;
    margin-bottom: 60px;
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
    list-style: none;
    float: left;
    width: 50%;
    font-size: 16px;
    height: 32px;
    color: white;
    text-align: center;
    background-color: #4E82BE;
    margin-bottom: 5px;
}

.second{
    position: relative;
    display: inline-block;
}

.second:before {
    content: '';
  position: absolute;
  left: 0%;
  bottom: 4px;/*線の上下位置*/
  display: inline-block;
  width: 3px;/*線の長さ*/
  height: 24px;/*線の太さ*/
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);/*位置調整*/
  background-color: white;/*線の色*/
  border-radius: 2px;/*線の丸み*/
}
#sp a{
padding:25px 8px;
height: 35px;
background: #FFFFFF;
border: 1px solid #4E82BE;
box-sizing: border-box;
font-size:15px;
font-weight: bold;
border-radius: 10px;
}
}

 </style>
</head>

<body>
    <main>
    <div class="top-area">
    <div class="image">
          <h1>My Page</h1>
          <p>You can check information about you and your the courses they're taking</p>
    </div>
</div>

<div class="mainContents">
<h1>Profile</h1>
<div class="profile">
<img src="http://teamgfa.shop/wp-content/uploads/2021/05/800px-Portrait_of_a_Man_Said_to_be_Christopher_Columbus-1.png">
<h3>Name</h3>
<p>Christopher Columbus</p>
<h3>Nick Name</h3>
<p>C.Columbus</p>
<h3>Emergency contact</h3>
<p>+380)111-2222-3333</p>
</div>

<h1>Course List</h1>
<div class="courseList">
<p>There is no class details or it is before the class is confirmed</p>
</div>

<h1>Attendance information</h1>
<div class="attendanceInformation">
    <ul>
    <li style="border-top-left-radius:10px;">Total class</li>
    <li class="second" style="border-top-right-radius:10px;">0 Instructor days off</li>
    </ul>
    <ul>
    <li>0 Attendance</li>
    <li class="second">0 class cancellation</li>
    </ul>
    <ul>
    <li style="border-bottom-left-radius:10px;">0 Absences</li>
    <li class="second" style="border-bottom-right-radius:10px">0 Remaining classes</li>
    </ul>
</div>

    <div class="Test" id="pc">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FKiev&amp;src=MmJ1NmhhMnRsM2VtNGVqNjlwNWY2OWFsZDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=amEudWtyYWluaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23F09300&amp;color=%230B8043&amp;title=Schedule%20for%20English%20Lessons" style="border:solid 1px #777; height:800px; width:100%;" frameborder="0" scrolling="no"></iframe>
    </div>

<div id="sp">
<a href="https://calendar.google.com/calendar/u/0?cid=MmJ1NmhhMnRsM2VtNGVqNjlwNWY2OWFsZDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ">View Schedule</a>
</div>

</div>
</main>
</body>
</html>

<?php get_footer(); ?>
