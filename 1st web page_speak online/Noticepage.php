<?php
/**
 * The template for displaying all pages.
 * Template Name: Notice page
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

    html, body { height: 100%; }

    body{
    width:100%;
    margin: 0;
    color:black;
    }

    .search{
    float:right;
    border:none;
    }

		.image{
		background: url(http://teamgfa.shop/wp-content/uploads/2021/04/time-3096535_1920-1.png) no-repeat center center;
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
    }

    .top-area p{
    text-align: center;
    color:#FFFFFF;
    font-size: 30px;
    line-height: 40px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.75);
    }

    .mainContents{
        width:1320px;
        height:1000px;
        margin-left:auto;
        margin-right:auto;
        margin-top:170px;
    }


    table{
        text-align:center;
        border:none;
        border-bottom:1px solid rgba(0,0,0,.1);
        width:100%;
        margin:0;
    }

    table,td,th{
        border-bottom:1px solid rgba(0,0,0,.1);
    }

    th{
        text-align:center;
        font-weight:normal;
        border:none;
        border-bottom:1px solid rgba(0,0,0,.1);
    }

    td{
        text-align:center;
        border: none;
    }

    .row{
        border:none;
        height:50px;
        width:auto;
        border-bottom:1px solid rgba(0,0,0,.1);
    }


    .number{
        width:190px;
    }

    .subject{
        width:770px;
    }

    .date{
        width:170px;
    }

    .user,view{
        width:100px;
    }

    .firstRow{
        background-color: #FFE0F3;
    }

    .notice{
        font-weight:bold;
        color: rgba(255, 0, 214, 0.68);
    }

    .notice span{
    text-shadow:2px 0 0 #fff,0 2px 0 #fff,-2px 0 0 #fff,0 -2px 0 #fff;
    }


    .list{
        width: 205px;
        margin-right: auto;
        margin-left: auto;
    }

    .list li{
        list-style:none;
        float:left;
        margin: 0px 2px;
        background-color: #EFEFEF;
        border-radius: 3px;
    }

    .list a{
        text-align:center;
        padding:5px 10px;
        font-size:18px;
    }

    .list a:hover{
        background-color: #6590FF;
    }

    .listTable{
        border:none;
    }
}

@media screen and (max-width:1320px) {
    html, body { height: 100%; }

    body{
    max-width:1320px;
    width:auto;
    height:auto;
    margin-left:auto;
    margin-right:auto;
    max-height:1600px;
    }

    table, th, td,tr{
    margin-left:auto;
    margin-right:auto;
    }

    .mainContents{
    max-width:1320px;
    width:90%;
    height:auto;
    margin-left:auto;
    margin-right:auto;
    max-height:1600px;
    margin-bottom:250px;
    }

}


@media screen and (max-width:768px) {
    html, body { height: 100%; }


    h1{
        text-align:center;
        color:white;
        padding-top:30px;
    }

    .image{
    background:#ddd url(http://teamgfa.shop/wp-content/uploads/2021/04/computer-820281_1920-1.png) no-repeat center center;
    background-size:cover;
    height:auto;
    width:auto;
    min-width:320px;
    min-height:120px;
    }

    .mainContents{
    margin-top:50px;
    width:95%;
    height:auto;
    margin-left:auto;
    margin-right:auto;
    margin-top:50px;
    min-width:320px;
    max-width:600px;
    margin-bottom:0px;
    }

    .search{
    float:right; border:none;
    width:190px;
    padding:0px;
    height:35px;
    }

    table,td,th{
        border-bottom:1px solid rgba(0,0,0,.1);
    }

    th{
        font-weight:normal;
        border:none;
        height:60px;
        border-bottom:1px solid rgba(0,0,0,.1);
        width:10px;
        text-align:center;
        border-left: none;
        font-size: 15px;
    }

    td{
        text-align:center;
        border: none;
        height:60px;
        width:auto;
        font-size: 15px;
    }

    .row{
        border:none;
        height:60px;
        width:auto;
        padding-left:0px;
        padding-right:0px;
        border-bottom:1px solid rgba(0,0,0,.1);
    }

    table{
        text-align:center;
        border:none;
        border-bottom:1px solid rgba(0,0,0,.1);
        margin:0;
        width:100%;
        max-width:600px;
    }

    .subject{
        width:0px;
    }

    .user,view{
        width:10px;
    }

    .date{
        width:10px;
    }

    .number{
        width:20px;
    }

    .HeadRow{
        text-align:center;
        line-height:10px;
        padding-bottom:0px;
        padding-top:30px;
    }


    .TableTitle{
        font-size:12px;
    }

    .notice span{
        color:#FF8A8A;
    }

    input[type="text"] {
        padding:0px;

    }

    .editImg{
    width:20px;
    height:18px;
    }

    .list{
        width: 200px;
        margin-left:auto;
        margin-right:auto;
    }

    .list li{
        list-style:none;
        float:left;
        margin: 0px 2px;
        background-color: #EFEFEF;
        border-radius: 3px;
    }

    .list a{
        text-align:center;
        padding:5px 9px;
        font-size:18px;
    }
    .list a:hover{
        background-color: #6590FF;
    }

    .listTable{
        border:none;
        margin-top:160px;
        margin-bottom:40px;
    }
}

 </style>

 <style type"text/css">
  A:link {text-decoration:none; color:#646464;}
	A:visited {text-decoration:none; color:#646464;}
	A:active {text-decoration:none; color:#646464;}
	A:hover {text-decoration:none; color:#646464;}
 </style>
</head>

<body>
    <main>
    <div class="top-area">
    <div class="image">
          <h1>Notice</h1>
    </div>
</div>

<div class="mainContents">
<table>
<tr><td class="HeadRow" style="float:left;border:none;"><span class="TableTitle">Total 90 / 1page</span></td>
<td class="row" style="border:none;"></td>
<td class="row"style="border:none;"></td>
    <td class="search" style="float:right;">
    <input id="sbox1" type="text" placeholder="&#x1f50d"/>
    <img style="padding-left:5px;" class="editImg" src="http://teamgfa.shop/wp-content/uploads/2021/04/icon_02.png"></td>
</tr>
</table>
<table>
    <tr>
      <th class="number">Sr.No</th>
      <th class="subject">Subject</th>
      <th class="user">User</th>
      <th class="view">View</th>
      <th class="date">Date</th>
    </tr>

    <tr class="firstRow">
      <td class="row"><div class="notice"><span >Notice</span></div></td>
      <td class="row"><a href="http://teamgfa.shop/notice-page-notice/">Event Guide</a></td>
      <td class="row">admin</td>
      <td class="row">23</td>
      <td class="row">2021-03-15</td>
    </tr>
    <tr>
      <td  class="row">90</td>
      <td  class="row"><a href="http://teamgfa.shop/notice-page-00/">The first class started on December 14th.</a></td>
      <td  class="row">admin</td>
      <td  class="row">3</td>
      <td  class="row">2021-03-14</td>
    </tr>
    <tr>
    <td class="row">89</td>
    <td class="row"><a href="http://teamgfa.shop/notice-page-01/">A new event has begun</a></td>
    <td class="row">admin</td>
    <td class="row">22</td>
    <td class="row">2021-03-09</td>
       </tr>

    <tr>
    <td class="row">88</td>
    <td class="row"><a href="http://teamgfa.shop/notice-page-02/">Announcment of COVID 19</a></td>
    <td class="row">admin</td>
    <td class="row">33</td>
    <td class="row">2021-03-02</td>


    </tr>
    <tr>
    <td class="row">87</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>


    </tr>
    <tr>
    <td class="row">86</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
    <tr>
    <td class="row">85</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
    <tr>
    <td class="row">84</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
    <tr>
    <td class="row">83</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
    <tr>
    <td class="row">82</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
    <tr>
    <td class="row">81</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
    <tr>
    <td class="row">80</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
    <tr>
    <td class="row">79</td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>
    <td class="row"></td>

    </tr>
     </table>
     <table class="listTable">
     <tr>
    <td>
    <ul class="list">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">></a></li>
    </ul>
    </td>
    </tr>
     </table>
</div>
</main>
</body>
</html>

<?php get_footer(); ?>
