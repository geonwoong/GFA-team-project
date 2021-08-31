<?php
/**
 * The template for displaying all pages.
 * Template Name: Speak online Entire Course page
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


 //今回やってみたことっていうのは上の三つのリストの要素に関していろいろと試していったけど
 //その中でまず親要素をwidth80%に設定して、margin right leftにautoをかけてお思い描く通り左右から縮まったんだけど
 //今度は下の四つのリストとも兼ね合いがあってうまくいかなかった。　levelのテキストのところの場所が合わない
 //なんか動かしていたらうまくいくかもしれない

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
  #sp { display: none; }
body{
  width:100%;
  margin: 0;
  color:black;
}

.image{
  background:#ddd url(http://teamgfa.shop/wp-content/uploads/2021/03/banner.png) no-repeat center center;
    background-size:cover;
    width:auto;
    height:600px;
}

.top-area h1{
  font-weight: bold;
  font-size: 80px;
  color:black;
  text-shadow: 0px 4px 4px
  rgba(0,0,0,0.25);
  text-align: center;
  padding-top:200px;
  max-width:1000px;
  width:100%;
  margin: 0 auto;
}

.top-area p{
  text-align: center;
  color:#FFFFFF;
  font-size: 30px;
  line-height: 40px;
  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
}

.MenuBar{
  max-width:290px;
  width:100%;
  margin:0px;
}

.MenuBar .Heading{
    list-style: none;
    margin-bottom:3px;
    font-size: 25px;
    width: 290px;
    height: 60px;
    padding-top:5px;
    color:white;
    text-align:center;
    background-color:rgba(79, 91, 154, 0.91);
}

.MenuBar .Heading2{
  list-style: none;
    margin-bottom:3px;
    font-size: 35px;
    line-height:19px;
    width: 290px;
    height: 60px;
    padding-top:5px;
    color:white;
    text-align:center;
    background-color:rgba(79, 91, 154, 0.91);
}

ul{margin:0px;}
.MenuBar li .head1{
    list-style: none;
    margin-bottom:3px;
    color:white;
    text-align:center;
}

.HeadList{
    list-style: none;
    margin-bottom:3px;
    font-size: 25px;
    width: 290px;
    padding-bottom:100px;
    padding-top:100px;
    color:white;
    text-align:center;
    background-color:rgba(79, 91, 154, 0.91);
}

.list{
  background-color: #BFBAFF;
    list-style: none;
    margin-bottom:3px;
    font-size: 25px;
    width: 290px;
    height: 60px;
    padding-top:5px;
    color:white;
    text-align:center;
}

.MenuBar li .headTitle{
    background-color: #BFBAFF;
    list-style: none;
    margin-bottom:3px;
    font-size: 25px;
    width: 290px;
    height: 60px;
    padding-top:5px;
    color:white;
    text-align:center;
}

.main-contents{
    width:100px;
    text-align:center;
}
.main-contents h1{
  text-align: center;
  padding-top:200px;
}

#container {
  margin-top:180px;
  height:1400px;
  max-width:1320px;
  min-width:800px;
  margin-left:auto;
  margin-right:auto;
  width:100%;
    /* display: grid;
    grid-template-rows: 100px;
    grid-template-columns: 300px 360px 1000px; */
}

table{
  max-width:930px;
  width:100%;
}


#container ul .flex{
  display:flex;
}

#container li{
  list-style: none;
}

.flex-item {
flex-basis: auto; /* flexアイテムの幅を自動で調整 */
}

/* アイテム */
#itemA {
    /* grid-row: 1 / 3;
    grid-column: 2 / 2; */
    max-width:290px;
    margin-right:80px;
    height:auto;
    float:left;
}
#itemB {
    /* grid-row: 1 / 2;
    grid-column: 3 / 4; */
    max-width:950px;
    max-height:800px;
    float:left;
}

#itemB h1{
  font-size:50px;
  color:black;
}
#itemB h2{
  margin-top:60px;
  font-size: 35px;
  color:black;
}

#itemB th{
  width:55px;
  text-align:center;
}

.sentence{
  font-size:25px;
  line-height:20px;
}


.HeadList img{
  margin-top:5px;
}

.HeadingTitle{
  color:navy;
}

.HeadingP{
  margin-top:30px;
  font-size: 25px;
  width:740px;
  height:90px;
  margin-bottom:90px;
  color:black;
}

td{
  text-align:center;
  padding:0px;
  width:55px;
  border-color:gray;
}

.crossLine{
      padding: 20px;
      background: linear-gradient(30deg, transparent, transparent 49%, black 49%, black 51%, transparent 51%, transparent);
}

.RowTitle{
  background-color:pink;
  color:#FA6969;
  padding-top:0px;
  height:80px;
}

.level{
  background-color:#87cefa;
  font-size:20px;
  text-align:center;
  color:#5D5FEF;
  border: 1px solid;
  border-color:gray;
}


.item2{
  background-color:rgba(145, 135, 254, 0.53);
  border: 3px solid;
  border-color:gray;
  border-radius: 10px;
}
.item2 img{
    float:left;
    padding-left:5px;
    height:80px;
}

.item2 p{
  font-weight:bold;
  float:left;
  width:60px;
  height:50px;
  margin-top:5px;
  margin-left:30px;
  margin-right:30px;
  text-align:center;
  padding-top:5px;
}



.item4{
  text-align:left;
  background-color:  rgba(148, 202, 79, 0.53);
  border: 3px solid;
  border-color:gray;
  border-radius: 10px;
height:80px;
}

.item4 img,p{
  float:left;
  padding-left:5px;
}

.item4 p{
  margin-top:10px;
  width:55px;
  margin-bottom:0px;
  font-size:13px;
  line-height:15px;
  font-weight:bold;
}

.item4 img{
  padding-top:5px;
  padding-bottom:5px;
  height:52px;
  width:48px;
}

.item5{
  border: 3px solid;
  border-color:gray;
  border-radius: 10px;
  background-color: rgba(255, 227, 80, 0.53);
}

.item5 img,p{
  float:left;
  padding-left:5px;
  margin-bottom:0px;
}

.item5 p{
  font-weight:bold;
  margin-top:20px;
  margin-left:5px;
  line-height:15px;
}

.item5 img,p{
  float:left;
  padding-left:5px;
  margin-bottom:0px;
}

.item6{
  width:130px;
  margin-top:10px;
}

.item7 p{
  text-align:center;
  margin-bottom:0px;
  margin-left:150px;
}

.RowTitle2{
  border: 3px solid;
  border-color:gray;
}
}

@media screen and (max-width:768px) {

  #pc { display: none; }
  #sp { display:block; }

  body{
    width:100%;
    height:900px;
    margin:0px;
  }

  .image{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/03/banner.png);
    background-size: 100%;
    height:190px;
  }

  .top-area{
    width:100%;
  }

  .top-area h1{
    font-weight: bold;
    font-size: 20px;
    font-style: normal;
    line-height: 20px;
    color:#000000;
    text-shadow: 0px 4px 4px
    rgba(0,0,0,0.25);
    margin-top:0px;
    text-align: center;
    padding-top:90px;
  }

  .main-contents{
    color:black;
    display: inline-block;
    width:100%;
    height:350px;
    padding-top:15px;
    background-color: rgba(0, 71, 255, 0.07);
    text-align:center;
    margin:0 auto;
  }

  .main-contents h2{
    padding:5px 5px;
    text-align: center;
    color:white;
    font-size: 15px;
    background-color: rgba(0, 71, 255, 0.5);
  }

  .child{
    margin:  0 auto;  
    width: 250px;
    height:40px;
  }

  .headImg li{
      list-style:none;
      width:86px;
      height:75px;
      float:left;
      font-size: 10px;
      font-weight:bold;
      text-align:center;
      margin-top:100px;
      margin:5px 10px;
      transition: box-shadow .5s;
  }

  .headimg:hover{
    box-shadow: 0 12px 12px gray;
  }

  .item1{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/pexels-jopwell-2422290-2.png);
    transition: all 0.6s ease 0s;
  }

a{
  box-shadow: 0 0 3px 0 rgba(0,0,0,.12), 0 2px 3px 0 rgba(0,0,0,.22);
	transition: .3s;
}
  a:hover{
    box-shadow: 0 15px 30px -5px rgba(0,0,0,.15), 0 0 5px rgba(0,0,0,.1);
	transform: translateY(-4px);
}

  .item2{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/toys-3644073_1920-1.png);
  }

  .item3{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/toys-3644073_1920-1.png);
  }

  .item4{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/toys-3644073_1920-1.png);
  }

  .item5{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/toys-3644073_1920-1.png);
  }
  .item6{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/photo-01.png);
  }
  .item7{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/photo-02.png);
  }
  .item8{
    background-image: url(http://teamgfa.shop/wp-content/uploads/2021/04/photo-03.png);
  }

  .liP{
    color:white;
    text-align:center;
    margin:20px 0px;
    padding:5px 5px;
    line-height:10px;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .liP2{
    color:white;
    text-align:center;
    margin:25px 0px;
    padding:5px 5px;
    line-height:10px;
    background-color: rgba(0, 0, 0, 0.5);
  }

  ul{
    margin:0;
  }

  #container {
    width:100%;
    margin-left:5px;
    text-align:center;
    display: grid;
  }

  /* アイテム */
  #itemA {
      grid-row: auto;
      grid-column: 1 / 3;
      height:auto;
      margin-right:auto;
      margin-left:auto;
  }
  #itemB {
      grid-row: auto;
      text-align:center;
      grid-column: 1 / 3;
      height:auto;
      margin-left:50px;
      margin-right:auto;
      margin-left:auto;
  }

  #itemC{
      grid-row:auto;
      grid-column: 2 / 3;
      width:100%;
      height:auto;
      margin-right:auto;
      margin-left:auto;
  }


  #container3 {
    width:50%;
    min-width:300px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
    display: grid;
    grid-template-rows: auto auto auto;
    grid-template-columns: auto auto auto;
  }

  /* アイテム */
  #itemB2 {
      grid-row: auto;
      grid-column: 1 / 4;
      grid-row:1/4;
      height:auto;
  }

  #itemB3 {
      grid-column: 3 / 4;
      grid-row:2/4;
  
      height:auto;
  }

  #itemB4 {
      grid-row: auto;
      grid-column: 1 / 4;
      grid-row:4/4;
      height:auto;
  }

  #itemB6 {
      grid-row: auto;
      grid-column: 1 / 4;
      height:auto;
  }
  #itemB5 {
      grid-row: auto;
      grid-column: 1 / 4;
      grid-row:4/4;
      width:260px;
      margin-top:25px;
      height:auto;
  }

  #container2 {
    width:50%;
    min-width:300px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
    display: grid;
    grid-template-rows: auto auto auto;
    grid-template-columns: auto auto auto;
  }

  /* アイテム */
  #itemA2 {
      grid-row: auto;
      grid-column: 1 / 4;
      height:auto;
  }

  #itemA3 {
      grid-row: auto;
      grid-column: 1 / 4;
      height:auto;
  }

  #itemA4 {
      grid-row: auto;
      grid-column: 4 / 4;
      grid-row:1/4;
      margin-top:40px;
      height:auto;
  }


  .main-contents2{
    width:100%;
    height:1600px;
    margin-top:30px;
    color:black;
  }

  .main-contents2 h1{
    font-size: 20px;
    margin-bottom:20px;
    text-align:center;
    color:black;
  }

  .main-contents2 h2{
    text-align:left;
    font-size:15px;
    margin-bottom:15px;
    width:280px;
    color:black;
    weight:bold;
    height:20px;
    margin:0px auto;
  }

  .main-contents2 .HeadingP{
    font-size:11px;
    text-align:left;
    width:280px;
    weight:bold;
    height:20px;
    margin:5px auto;
    margin-bottom:70px;
  }


.HeadingTitle{
  color:navy;
}

.main-contents2 h3{
  color:rgba(250, 105, 105, 0.95);
  font-size:15px;
  text-align:left;
}

h3{
  text-align:left;
  margin-top:40px;
}

.main-contents2 li{
  width:auto;
  list-style:none;
  float:left;
  font-weight:bold;
  margin-left:5px;
}

.type2{
  float:right;
  font-weight:bold;
}

.type3{
  float:right;
  font-weight:bold;
}

.type4{
  float:right;
  font-weight:bold;
}

.type6{
  float:right;
  font-weight:bold;
}

.Level{
  color: #5D5FEF;
  margin-bottom:40px;
  font-size:14px;
}

.b{
  float:left;
  font-size:14px;
}

.ImgTitle{
  margin-bottom:0px;
  text-align:left;
  float:left;
  margin-left:5px;
}

.type21{
  height:300px;
}

.type5{
  width:300px;
}

}

 </style>
</head>

<body>
    <main>
    <div id="pc">
    <div class="top-area">
    <div class="image">
          <h1>Speak Online Entire course</h1>
    </div>
    </div>
    <div id="container">
    <ul class="flex">
    <li class="flex-item">
     <div id="itemA">
    <div class="MenuBar">
    <ul>
    <div class = "HeadList">
    <li><span class="head1">Educational course</span></li></div>
    <div class = "list">
    <li>Entire course</li></div>
    <li class="Heading2"><span class="sentence">Regular<br>conversation</span></li>
    <li class="Heading">Phonics</li>
    <li class="Heading2"><span class="sentence">English conversation<br> for children</span></li>
    <li class="Heading">TOEIC</li>
    <li class="Heading">IELTS</li>
    <li class="Heading">News+Free talking</li>
    <li class="Heading">Discussion English</li>
    <li class="Heading">Business English</li>
    </ul>
    </div>
    </div>
    </li>

    <li class="flex-item">
    <div id="itemB">
    <h1>Speak Online <span class="HeadingTitle">Entire course</span></h1>
    <h2>From level 1 to level 13</h2>
    <p class="HeadingP">Experience various textbooks and curriculum prepared 
    by online speaking for each student from Level 1 to 14. 
    Whatever course you choose, you can go beyond your imagination.</p>
    
  <table>
    <tr>
      <td class="crossLine" colspan="1" rowspan="2"></td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
      <td>11</td>
      <td>12</td>
      <td>13</td>
      <td>14</td>
    </tr>
    <tr>
    <td class="level" colspan="2">Basic</td>
    <td class="level" colspan="4">Beginer</td>
    <td class="level" colspan="4">Intermediate</td>
    <td class="level" colspan="4">Advanced</td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">Regular<br>conversation</th>
      <td></td>
      <td></td>
      <td colspan="12" class="item2"><img src="http://teamgfa.shop/wp-content/uploads/2021/04/image-2.png" style="width315px;height=80px;">
      <p>AEF Series</p>
      <img class="item3" src="http://teamgfa.shop/wp-content/uploads/2021/04/矢印.png" style="width210px;height=80px;">
      </td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">Phonics</th>
      <td colspan="2" class="item4"><img src="http://teamgfa.shop/wp-content/uploads/2021/04/image-7.png">
      <p>Let's go phonics</p>
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">English<br> 
      conversation<br> 
      for children</th>
      <td colspan="5" class="item5"><img src="http://teamgfa.shop/wp-content/uploads/2021/04/image-4.png">
      <p>Let’s Go<br> Series</p>
      <img  class="item6" src="http://teamgfa.shop/wp-content/uploads/2021/04/矢印.png"style="width=60px;" >
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">TOEIC</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="7"></td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">IELTS</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="7"></td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">News<br>
      +Free talking</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="6" class="RowTitle2"><a href="http://teamgfa.shop/?page_id=213">http://teamgfa.shop/?page_id=213</a></td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">Disucussion<br>English</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="6" class="RowTitle2"><a href="http://teamgfa.shop/?page_id=213">http://teamgfa.shop/?page_id=213</a></td>
    </tr>

    <tr>
      <th class="RowTitle" colspan="1">Bisiness<br>English</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="8" class="RowTitle2 item7"><p>Own Text Book</p></td>
    </tr>
  </table>
  </li>

  </ul>
    </div>
    </div>
  </div>
  </main>
</body>
</div>

<div id="sp">
<body>
<main>
    <div class="top-area">
      <div class="image">
            <h1>Speak Online Entire course</h1>
      </div>
    </div>

    <div class ="main-contents">
      <div class="child">
        <h2>Entire course</h2>
      </div>
        <div id="container">
          <div id="itemA">
            <ul class="headImg">
            <li class="item1"><p class="liP">Regular conversation</p></li>
            <li class="item2"><p class="liP2">Phonics</li>
            <li class="item3"><p class="liP">Englsih conversation for children</p></li>
            </ul>
          </div>
          
          <div id="itemB">  
            <ul class="headImg">
            <li class="item4"><p class="liP2">TOEIC</p></li>
            <li class="item5"><p class="liP2">IELTS</p></li>
            </ul>
          </div>

          <div id="itemC">
            <ul class="headImg"> 
            <li class="item6"><p class="liP">News+Free talking</p></li>
            <li class="item7"><p class="liP">Discussion English</p></li>
            <li class="item8"><p class="liP">Business English</p></li>
            </ul>
          </div> 
      </div>
    </div>

    <div class="main-contents2">
    <h1>Speak Online <span class="HeadingTitle">Entire course</span></h1>
    <h2>From level 1 to Level 13</h2>
    <p class="HeadingP">Experience various textbooks and curriculum prepared 
    by online speaking for each student from Level 1 to 14. 
    Whatever course you choose, you can go beyond your imagination.</p>
    
    
    <ul>
    <div id="container3">
      <div id="itemB2">
  <h3><li>Regular conversation</li></h3>
  </div>
  <div id="itemB3">
    <li class="type3">Level 4 to 14</li>
    </div>
    <div id="itemB4"> 
    <p class="ImgTitle">AEF Series</p>
    </div>
    <div id="itemB5">
    <li><img src="http://teamgfa.shop/wp-content/uploads/2021/04/image-2.png"></li>
    </div>
    <div id="itemB6">
    <li class="Level" style="margin-left:10px;margin-right:10px;">beginner</li>
    <li class="Level" style="margin-right:10px;">intermediate</li>
    <li class="Level" style="margin-right:10px;">advanced</li>
    </div>
    </ul>
    <ul>
    <div id="container3">
      <div id="itemB2">
  <h3><li>Phonics</li></h3>
  </div>
  <div id="itemB3">
    <li class="type6">Level 1 to 2</li>
    </div>
    <div id="itemB4"> 
    <p class="ImgTitle">Let's Go Fonics</p>
    </div>
    <div id="itemB5">
    <li class="type5"><img src="http://teamgfa.shop/wp-content/uploads/2021/04/image-7.png" style="width:80px;height:80px; "></li>
    </div>
    <div id="itemB6">
    <li class="Level" style="margin-left:30px;" >Basic</li>
    </div>
    </div>
    </ul>
    <ul>
    <div id="container3">
      <div id="itemB2">
  <h3><li><span style="font-size:13px;">English conversation for children</span></li></h3>
  </div>
  <div id="itemB3">
    <li style="margin-left:35px;">Level 1 to 5</li>
    </div>
    <div id="itemB4"> 
    <p style="margin-left:5px;margin-bottom:0px;"class="ImgTitle">Let’s Go Series</p>
    </div>
    <div id="itemB5">
    <li class="type5"><img src="http://teamgfa.shop/wp-content/uploads/2021/04/image-4.png" style="width:80px;height:80px; "></li>
    </div>
    <div id="itemB6">
    <li class="Level" >Basic beginner</li>
    </div>
    </div>

    </ul>
    <ul>

  <div id="container2">
      <div id="itemA2">
  <h3><li>TOEIC/IELTS</li></h3>
  </div>
  <div id="itemA3">
  <li class="Level">intermediate</li>
    <li class="Level">advanced</li>
    </div>
    <div id="itemA4">
    <li class="type4">Level 7 to 14</li>
    </div>
    </ul>
    <ul>

    <div id="container2">
      <div id="itemA2">
  <h3><li>News+Free talking</li></h3>
  </div>
  <div id="itemA3">
    <li class="Level">intermediate</li>
    <li class="Level">advanced</li>
    </div>
    <div id="itemA4">
    <li class="type3" style="margin-left:15px;">Level 7 to 14</li>
    </div>
    </ul>
   <ul>

   <div id="container2">
      <div id="itemA2">
  <h3><li>Discussion English</li></h3>
  </div>
  <div id="itemA3">
    <li class="Level">intermediate</li>
    <li class="Level">advanced</li>
    </div>
    <div id="itemA4">
    <li class="type3">Level 7 to 14</li>
    </div>
    </ul>
    <ul>
    <div id="container2">
      <div id="itemA2">
  <h3><li>Business English</li></h3>
  </div>
  <div id="itemA3">
    <li class="Level">intermediate</li>
    <li class="Level">advanced</li>
    </div>
    <div id="itemA4">
    <li class="type2">Level 7 to 14</li>
    </div>
    </ul>
  
</div>
</main>
<body>
</div>
</html>

<?php get_footer(); ?>
