<?php
/**
 * The template for displaying all pages.
 * Template Name: teachersPage
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>teacher's page</title>
    <style type="text/css">
		html{
			font-family: Roboto;
		}
		br{
			height:
		}
		.banner{
			background-image: url("http://teamgfa.shop/wp-content/uploads/2021/03/teachersPage.jpg");
			width: 100%;
			height:600px;
			display: flex;
			background-size: cover;
			flex-direction: column;
		}
		.banner h1{
			height: 113px;
			display: flex;
			justify-content: center;
			font-size: 96px;
			font-weight: 700;
			font-family: Roboto;
			margin:100px auto;
			padding-top: 50px;
		}
		.banner p{
			height: 42px;
			font-size: 36px;
			font-weight: 700;
			font-family: Roboto;
			display: flex;
			justify-content: center;
			margin:30px auto;
			padding-bottom: 50px;
		}
		.containar{
			display: grid;
			grid-template-columns:400px 400px 400px ;
			grid-auto-rows: 421px;
			grid-gap: 28px;
			width: 1255px;
			height:1600px;
			margin:0 auto;
		}
		.box{
			width: 400px;
			height: 421px;
			border:4px solid #A3A3A3;
			margin:0;
			box-shadow: 0 4px 4px -4px black;
		}
		.item{
			width:206px;
			height: 206px;
			background-color: #C4C4C4;
			border-radius: 50%;
			margin:30px auto;
		}
		.box h6{
			font-size: 36px;
			text-align: center;
			font-weight: 400;
			margin:0 auto;
		}
		.box p{
			text-align: center;
			justify-content: center;
			font-size: 36px;
			font-weight: 400;
			color: #505050;
			margin:0 auto;
		}
		.name{
			height: 42px;
			font-size: 36px;
			font-weight: 700;
			font-family: Roboto;
			margin:100px auto;
			justify-content: center;

			display: flex;
		}
		.line{
			width: 1280px;
			height: 0px;
			border-top: 1px solid;
			justify-content: center;
			margin: 140px auto;
		}
		footer{
		height: 600px;
		width: 100%;
		display:flex;
		background-color: #595959;
		color: white;
		font-size: 25px;
		font-weight: 400px;
		font-family: Roboto;
		}
		footer p{
		display: flex;
		margin:300px auto;
		justify-content: center;
		}
		@media screen and (max-width:375px) {

			html{
				color: black;
			}
			.banner{
				background-image: url("http://teamgfa.shop/wp-content/uploads/2021/03/teachersPage.jpg");
				width: 100%;
				height:150px;
				display: flex;
				background-size: contain;
				flex-direction: column;
			}
			.banner h1{
				height: 27px;
				display: flex;
				justify-content: center;
				font-size: 20px;
				font-weight: 700;
				font-family: Roboto;
				margin:30px auto;
				padding-top: 25px;
			}
			.banner p{
				height: 42px;
				font-size: 12px;
				font-weight: bold;
				font-family: Roboto;
				display: flex;
				justify-content: center;
				margin:5px auto;
				padding-bottom: 15px;
			}
			.containar{
				display: grid;
				grid-template-columns:1fr 1fr ;
				grid-auto-rows: 127px;
				grid-gap: 28px;
				width: 268px;
				height: 787px;
				margin:0 auto;
			}
			.box{
				width: 120px;
				height: 127px;
				border:4px solid #A3A3A3;
				margin:0;
			}
			.item{
				width:60px;
				height: 60px;
				background-color: #C4C4C4;
				border-radius: 50%;
				margin:8px auto;
			}

			.item img{
				border-radius: 50%;
				object-fit: cover;
			}
			.box h6{
				font-size: 10px;
				text-align: center;
				font-weight: bold;
				margin:0 auto;
				font-family: Roboto;
			}
			.box p{
				text-align: center;
				justify-content: center;
				font-size: 10px;
				font-weight: 400;
				color: #505050;
				margin:0 auto;
				font-family: Roboto;
			}
			.name{
				height: 18px;
				font-size: 15px;
				font-weight: 700;
				font-family: Roboto;
				margin:30px auto;
				justify-content: center;
				display: flex;
			}
			.line{
				width: 300px;
				height: 0px;
				border-top: 1px solid;
				justify-content: center;
				margin: 20px auto;
			}
			footer{
			height: 145px;
			width: 100%;
			display:flex;
			background-color: #595959;
			color: white;
			font-size: 14px;
			font-weight: 400px;
			font-family: Roboto;
			}
			footer p{
			display: flex;
			margin:70px auto;
			justify-content: center;
			}

		}
    </style>
  </head>
  <body>
    <div class="banner">
      <h1>Our teachers</h1>
      <p>You can choose your the best teacher who you like</p>
    </div>
		<div class="name">
			<p>Teacher's list</p>
		</div>
		<div class="line">
		</div>
	<div class="containar">
		<a href="http://teamgfa.shop/our-teachers/">
			<div class="box">
				<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Erfan.png" alt="">
	  	</div>
			<h6>Youngin\Japanese</h6>
			<p>Basic, Elemental</p>
		</div>
		</a>
		<a href="http://teamgfa.shop/our-teachers/">
			<div class="box">
		<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Erfan.png" alt="">
	</div>
	<h6>Youngin\Japanese</h6>
	<p>Basic, Elemental</p>
</div>
</a>
<a href="http://teamgfa.shop/our-teachers/">
 	<div class="box">
		<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Erfan.png" alt="">
		</div>
		<h6>Youngin\Japanese</h6>
			<p>Basic, Elemental</p>
		</div>
	</a>
	<a href="http://teamgfa.shop/our-teachers/">
<div class="box">
	<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Diana.png" alt="">
</div>
<h6>Maria/Russain</h6>
<p>intermediate</p>
</div>
</a>
<a href="http://teamgfa.shop/ourt-eachers/">
<div class="box">
	<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Diana.png" alt="">
</div>
<h6>Maria/Russain</h6>
<p>intermediate</p>
</div>
</a>
<a href="http://teamgfa.shop/our-teachers/">
<div class="box">
	<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Diana.png" alt="">
</div>
<h6>Maria/Russain</h6>
<p>intermediate</p>
</div>
</a>
<a href="http://teamgfa.shop/our-teachers/">
<div class="box">
	<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Maxim.png" alt="">
</div>
<h6>Mila/Albanian</h6>
<p>advanced</p>
</div>
</a>
<a href="http://teamgfa.shop/our-teachers/">
<div class="box">
	<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Maxim.png" alt="">
</div>
<h6>Mila/Albanian</h6>
<p>advanced</p>
</div>
</a>
<a href="http://teamgfa.shop/our-teachers/">
<div class="box">
	<div class="item"><img src="http://teamgfa.shop/wp-content/uploads/2021/05/Maxim.png" alt="">
</div>
<h6>Mila/Albanian</h6>
<p>advanced</p>
</div>
</a>
	</div>
		<footer>
			<p>Copyright ⓒ 2020 SPEAK ONLINE </p>
		</footer>
  </body>
</html>
