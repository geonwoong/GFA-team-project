<?php
/**
 * The template for displaying all pages.
 * Template Name: Event
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

@media screen and (min-width: 769px) {
body{
    margin:0 auto;
    width:auto;
    height:auto;
}
.MainContents{
    width : 50vw ;
    margin-top:100px;
    margin-bottom:180px;
    margin-left: auto;
    margin-right: auto;
    max-width:1320px;
    width:85%;
    min-width:500px;
    border:solid 1px;
    text-align:center;
}

.MainContents h1{
    padding-bottom:20px;
    max-width:1200px;
    width:90%;
    padding-top:50px;
    margin:0 auto;
    border-bottom:solid 1px;
}

.border{
    border-bottom: solid 1px;
    max-width:900px;
    width:75%;
    margin-left: auto;
    margin-right: auto;
}

.border2{
    max-width:900px;
    width:75%;
    margin-left: auto;
    margin-right: auto;
}

h1{
    text-align:left;
    padding-left:15px;
}

.MainContents img{
    width:80%;
    min-width:300px;
    max-width:1000px;
    padding-bottom:60px;
    padding-top:60px;
}
}


@media screen and (max-width:768px) {
    body{
    margin:0 auto;
    height:auto;
}
.contents{
    margin-top:25px;
    margin-bottom:180px;
    margin-left: auto;
    margin-right: auto;
    max-width:700px;
    width:100%;
    height:auto;
    border:solid 1px;
    text-align:center;
}

.MainContents{
    width:90%;
    margin-left:auto;
    margin-right:auto;
}

.MainContents h1{
    padding-top:50px;
    margin:0 auto;
    text-align:center;
    font-weight:bold;
}

.border2{
    margin-top:30px;
    border-bottom: solid 1px;
    min-width:200px;
    max-width:700px;
    width:70%;
    margin-left: auto;
    margin-right: auto;
}

.border{
    border-bottom: solid 1px;
    min-width:200px;
    max-width:700px;
    width:70%;
    margin-left: auto;
    margin-right: auto;
}

.MainContents img{
    width:80%;
    padding-bottom:30px;
    padding-top:30px;
}

}


 </style>
</head>

<body>
<main>

<div class="MainContents">
<h1>Event</h1>
<div class="contents">
<div class="border2" ></div>
<img src="http://teamgfa.shop/wp-content/uploads/2021/04/Ad01.png">
<div class="border" ></div>
<img src="http://teamgfa.shop/wp-content/uploads/2021/04/Ad03.png">
<div class="border" ></div>
<img src="http://teamgfa.shop/wp-content/uploads/2021/04/Ad02.png">
</div>

</div>
</main>
</body>
</html>

<?php get_footer(); ?>
