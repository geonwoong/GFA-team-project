<?php
/**
 * The template for displaying all pages.
 * Template Name: teachersInDetail Page
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


<style type="text/css">
		html{
			font-family: Roboto;
		}
		body{
			margin: 0;
			padding: 0;
		}
		.main{
			height: 1600px;
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
		.contentBox{
			width: 1280px;
			height: 1300px;
			margin:0 auto;
			border:solid 5px black;
			display: flex;
			flex-direction:row;
			flex-wrap: wrap;
		}
		.contentBox h2{
			font-size: 36px;
			height: 42px;
			font-weight: bold;
			justify-content: flex-start;
			margin:50px auto;
			padding-right: 600px;

		}
		.photo{
			background-color: #A3A3A3;
			width: 327.76px;
			height: 338px;
			font-size: 36px;
			font-weight: bold;
			justify-content: center;
			align-content: start;
			color: #A3A3A3;
			margin:0 auto;
		}

		img{
			width: 327.76px;
			height: 338px;
			object-fit: cover;
		}
		.contentBox p{
			width: 709.82px;
			height: 317px;
			font-size: 24px;
			display: inline-flex;
			align-content: flex-end;
			margin-right: 40px;
			margin-bottom: 0;
			line-height: 28px;
		}

		.content{
			height:338px;
			flex-direction: row;
			align-content: center;
		}

		.Carear {
			margin:0 auto;
			padding-left: 450px;
		}

		.carear{
			list-style-type: none;
			font-size: 25px;
			margin:0 auto;
		}
		li{
			font-size: 25px;
		}
		.teachersIntroduceVideo{
			display: inline-block;
			margin: 85px auto;
			width: 620.61px;
			height: 360px;
			border: 5px solid #A3A3A3;
			font-weight:bold;
			text-align: center;
		}
			.teachersIntroduceVideo img{
			object-fit: cover;
			width: 620px;
			height: 350px;
			}

			@media screen and (max-width:375px){
				body{
					/*height: 1200px;*/
					width: 100%;
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
				.name{
					height: 42px;
					font-size: 15px;
					font-weight: 700;
					font-family: Roboto;
					margin:30px auto;
					justify-content: center;

					display: flex;
				}
				.name p{
					margin: 0 auto;
				}
				.line{
					width: 300px;
					height: 0px;
					border-top: 1px solid;
					justify-content: center;
					margin: 20px auto;
					padding-bottom: 30px;
				}
				.contentBox{
					width: 300px;
					height: 550px;
					margin:0 auto;
					border:solid 5px gray;
					display: flex;
					flex-direction:column;
				}
				.contentBox h2{
					display: inline-flex;
					font-size: 15px;
					height: 18px;
					font-weight: bold;
					justify-content: center;
					margin:20px auto;
					padding-right: 0px;
				}
				.photo{
					background-color: #A3A3A3;
					width: 96px;
					height: 96px;
					font-size: 1px;
					border-radius: 50%;
					font-weight: bold;
					justify-content: center;
					align-content: center;
					margin: 10px auto;
					color: #A3A3A3;
				}
				.photo img{
					width: 96px;
					height: 96px;
				}
				.main{
					height: 673px;
				}
				.content{
					height:338px;
					flex-direction: row;
					align-content: center;
				}
				.contentBox p{
					width: 235px;
					height: 129px;
					font-size: 10px;
					line-height: 12px;
					margin:0 auto;
				}
				.Carear {
					text-align: center;
					margin:0 auto;
					padding-left: 0px;
					font-size: 15px;
					height: 80px;
					line-height: 36px;
				}

				.carear {
					width: 60px;
					height: 18px;
					list-style-type: none;
					font-size: 15px;
					margin:0 auto;
					width: 191px;
					height: 36px;
				}
				.carear li{
					width: 190px;
					font-size: 10px;
					line-height: 12px;
					text-align: left;
					margin:0 auto;

				}
				.carear li>li{
					margin:0 auto;
				}
				ul{
					list-style-position: outside;
					margin:0 auto;
				}
				.teachersIntroduceVideo{
					display: inline-block;
					margin:0 auto;
					width: 182px;
					height: 94px;
					border: 5px solid #A3A3A3;
					font-weight:bold;
					text-align: center;
					margin-top: 30px;
				}
					.teachersIntroduceVideo img{
						width: 182px;
						height: 84px;
					}

			}
		</style>


		<div class="banner">
			<h1>Our teachers</h1>
			<p>You can choose your the best teacher who you like</p>
		</div>
		<div class="name">
			<p>Theacher's profile</p>
		</div>
		<div class="line">
		</div>
		<div class="main">
			<div class="contentBox">
				<h2>Teacher's basic information</h2>
					<div class="photo">
						<img src="http://teamgfa.shop/wp-content/uploads/2021/05/ironman-e1569489910569.jpg" alt="">
					</div>
						 <p>iCIMS Hiring Suite enables users to save information regarding candidates and other persons (e.g., contacts, employees, and hiring managers), with all relevant information stored within the individual's Person profile. <br><br>A Person profile may be accessed through a relevant quick search or full search, from the linked person name in the profile card of an associated candidate's Recruiting Workflow profile, and/or from a pinned dashboard or quick links search, among other navigation options.
						 </p>

					<ul class="Carear">
			<li class="carear">carear
			<ul>
				<li>Graduated from Seoul National University in English Literature</li>
			<li>Three years as an English instructor</li>
			</ul>
			</li>
			</ul>
			<a class="teachersIntroduceVideo" data-fancybox href="https://youtu.be/cWGJw_h9gwg"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/teachers-in-detail.png" alt=""> </a>


<?php get_footer(); ?>
