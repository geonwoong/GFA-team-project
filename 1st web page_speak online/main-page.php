<?php
/**
 * The template for displaying all pages.
 * Template Name: main-page
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
<!--
html
css
topMenu
menu
learnMore
introducePart1
introducePart2
introducePart3
-->
<html>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
  <title>Speak Online</title>

  <script type="text/javascript">
	/* 문자 새로고침 */
	function refresh_captcha(){
		document.getElementById("capt_img").src="captcha.php?waste="+Math.random(); 
//capt_img id를 불러와 문구들을 랜덤으로 돌린다
	}
</script>

	<!--css-->
	<style type="text/css">
  @media screen and (min-width: 769px) {
	.learnMore{
		background-image: url("http://teamgfa.shop/wp-content/uploads/2021/02/learnMore.jpg");
		background-size: cover;
		width: 100%;
		height: 900px;
		display: flex;
	}
	.learnMore_button{
		height: 70px;
		width: 400px;
		font-size: 50px;
		font-weight: bold;
		color: white;
		background-color: #FF7272;
		display: flex;
		margin: 300px auto;
	}
	.learnMore_button a{
		display: flex;
		align-items: center;
		justify-content: center;
		margin:0 auto;
		text-decoration: none;
		color: white;
	}

	.GridPart{display:grid;}

	.GridPart img{
		display: flex;
		border: 10px;
		height: 400px;
		width: 400px;
		margin-left: 0px;
		align-items: center;
		border:1px #000000 solid;box-sizing:border-box;grid-column:1/4;grid-row:1/4;
		}

	.GridPart h1
	{width:90%;
	margin-left:20px;
	text-align:center;
	font-size: 50px;
	margin-top:10px;
	color:white;
	box-sizing:border-box;
	grid-column:3/4;grid-row:1/2;
	}

	.GridPart p{width:90%;margin-top:30px; margin-left:20px;		font-size: 30px;
		text-align: center;
	color:white;box-sizing:border-box;grid-column:3/4;grid-row:1/2;}
	.GridPart .introducePart1_text{width:90%;margin-top:20px; margin-left:20px;text-align:center;font-size:15px;
	color:white;box-sizing:border-box;grid-row:1/2;width:800px;
	}

	/* .grid-pile {display:grid;}
.grid-pile img {border:1px #000000 solid;box-sizing:border-box;grid-column:1/4;grid-row:1/4;}
.grid-pile span {font-size:large;padding:0.5em;color:#483d8b;background-color:#7fffd4;box-sizing:border-box;grid-column:3/4;grid-row:1/2;margin-top:1em;margin-right:1em;} */

		.introducePart1_text{
			width:100%;
		}

	.introducePart1{
		display: flex;
		border: 0px;
		background-color: #242323;
		height: 800px;
		width: 100%;
		flex-direction: row;
	}

	.introducePart1_con{
		display: flex;
		width: 1200px;
		height:400px;
		margin:180px auto;
	}

	.GridPart2{display:grid;
	    grid-template-columns: 200px 200px 400px auto;
		grid-template-rows: 400px auto;
	}

	.GridPart2 img{
		display: flex;
		border: 10px;
		width: 480px;
height: 557px;
		margin-left: 10s0px;
		align-items: center;
		border:1px white solid;box-sizing:border-box;grid-column:2/4;grid-row:1/4;
		}

	.GridPart2 h1{
		width:90%;
		color:black;
	margin-left:20px;
	text-align:center;
	font-size: 50px;
	margin-top:45px;
	box-sizing:border-box;
	grid-column:4/4;grid-row:1/2;
	}

	.GridPart2 p{	color:black;width:90%;margin-top:30px; margin-left:20px;		font-size: 40px;
		text-align: center;box-sizing:border-box;grid-column:4/4;grid-row:1/2;
		}

	.GridPart2 .metrials_text{width:90%;margin-top:60px; margin-left:20px;text-align:center;font-size:15px;
	color:white;box-sizing:border-box;grid-row:1/2;grid-column:4/4;width:600px;
	}


	/* .introducePart1 img{
		display: flex;
		border: 10px;
		height: 400px;
		width: 400px;
		border: 20px solid #FFFFFF;
		margin: 0;
		align-items: center;
	} */
	/* .introducePart1 h1{
		display: flex;
		width: 420px;
		height: 118px;
		color: #FFFFFF;
		font-family: Roboto;
		font-size: 50px;
		font-weight: bold;
		text-align: center;
		margin:0;
	}
	.introducePart1 p
	{
		display: flex;
		margin: 0 auto;
		color: #FFFFFF;
		font-family: Roboto;
		font-size: 28px;
		text-align: center;
		width: 615px;
		height: 173px;
		padding-top: 25px;

	} */

	.introducePart2{
		width:100%;
		height: 900px;
		margin: 0 auto;
	}

	.introduceVideo{
		border:10px solid black;
		display: flex;
		margin:300px auto;
		width: 1205.5px;
		height: 700px;
		font-size: 60px;
		font-weight: bold;
		text-align: center;
		background-color: gray;
	}

	.introduceVideo img{
		object-fit: cover;
	}

	.metrials{
		display: flex;
		flex-direction: row;
		width: 100%;
		margin-top:200px;
		margin-bottom:350px;
		justify-content: center;
	}
	/* .metrials img{
		width:500px;
		height: 700px;
		margin-top: 200px;
		margin-bottom: 200px;
		margin-left: 220px;
		display: flex;
	} */
	/* .metrials_text {
		padding-top: 300px;
		height: 700px;
		width: 500px;
		flex-direction: row;
		align-items: center;
		margin: 100px auto;
	} */
	/* .metrials h1{
		width: 186px;
		height: 59px;
		display: flex;
		font-size: 50px;
		text-align: center;
	  font-weight: bold;
		margin: 55px auto;
	}
	.metrials p{
		font-size: 40px;
		height: 47px;
		display: flex;
		margin: 55px auto;
		padding-top: 30px;
	} */
	.levelTest{
		flex-direction: column;
		display: flex;
		background: linear-gradient(209.25deg,#3C3D59,#73A5BB);
		width: 100%;
		height: 1800px;
		box-shadow: 0px 4px 4px rgba(255, 126, 126, 0.65);
	}
	.levelTest h1{
		display: flex;
		color: white;
		font-size: 50px;
		height: 118px;
		text-align: center;
		font-weight: bold;
		margin: 200px auto;
		justify-content: center;
		padding-top: 80px;
	}
	.levelTest_coment{
		color: white;
		font-family: Roboto;
		font-size: 30px;
		font-weight: 1000px;
		display: flex;
		margin: 0 auto;
		text-align: center;
		justify-content: center;
	}
	.levelTest img{
		width: 1200px;
		display: flex;
		height: 800px;
		margin: 30px auto;
	}
	.levelTest_button{
	 width: 600px;
	 height: 100px;
	 color: white;
	 font-size: 50px;
	 font-weight: bold;
	 font-family: Roboto;
	 text-align: center;
	 background-color: #FF7272;
	 box-shadow: inset 0px 0px 4px 3px rgba(0, 0, 0, 0.25);
	 margin: 100px auto;
	}

.levelTest_button a{
	color: black;
}

.kakaochat{
position: fixed;
right: 30px;
bottom: 60px;
width: 80px;
height: 80px;
z-index: 99;
}

}

@media screen and (max-width: 768px) {

	.learnMore{
		background-image: url("http://teamgfa.shop/wp-content/uploads/2021/02/learnMore.jpg");
		background-size: cover;
		width: 100%;
		height: 300px;
		display: flex;
	}
	.learnMore_button{
		height: 50px;
		width: 40%;
		font-size: 20px;
		font-weight: bold;
		color: white;
		background-color: #FF7272;
		display: flex;
		margin:auto;
	}
	.learnMore_button a{
		display: flex;
		align-items: center;
		justify-content: center;
		margin:0 auto;
		text-decoration: none;
		color: white;
	}
	.introducePart1{
		display: flex;
		border: 0px;
		background-color: #242323;
		height: 390px;
		width: 100%;
		flex-direction: row;
	}
	.introducePart1_con{
		display: flex;
		width: 100%;
		margin-top:20px;
	}

	.GridPart{
		display:grid;
	width:100%;
	}
	.GridPart img{
		display: flex;
		border: 10px;
		height: 150px;
		width: 150px;
		margin: 0 auto;
		align-items: center;
		border:1px #000000 solid;
		box-sizing:border-box;
		grid-column:1/4;
		grid-row:1/4;
	}

	.GridPart h1{
		width:100%;
	text-align:center;
	font-size:20px;
	color:white;
	box-sizing:border-box;
	grid-column:2/3;
	grid-row:2/3;
	}

	.GridPart p{width:90%;margin-top:10px; margin-left:20px;text-align:center;font-size:15px;
	color:white;box-sizing:border-box;grid-column:2/3;grid-row:2/3;
}

	.GridPart2{
		display:grid;
	width:100%;
}

	.GridPart2 img{
		display: flex;
		border: 10px;
		height: 150px;
		width: 150px;
		margin: 0 auto;
		align-items: center;
		border:1px #000000 solid;grid-column:1/4;grid-row:1/4;}
	.GridPart2 h1{width:100%;margin-top:20px;text-align:center;font-size:30px;margin-top:10px;box-sizing:border-box;grid-column:1/4;	color:black;}
	.GridPart2 p{width:100%;margin-top:20px; text-align:center;font-size:20px;box-sizing:border-box;grid-column:1/4;
	}

	.introducePart2{
		width:100%;
		height: 300px;
		margin: 0 auto;
	}

	.introduceVideo {
		border:10px solid black;
		display: flex;
		margin:150px auto;
		width: 100%;
		height: 200px;
	}
.introduceVideo img {
	object-fit: cover;
	width: 100%;
}
	.metrials{
		display: flex;
		color:black;
		flex-direction: row;
		width: 100%;
		margin:80px 0px 150px 0px;
	}

	.metrials_text{
		color:black;
		width:100%;
		grid-column:1/4;
	}

	.levelTest{
		flex-direction: column;
		display: flex;
		background: linear-gradient(209.25deg,#3C3D59,#73A5BB);
		width: 100%;
		height: 800px;
		box-shadow: 0px 4px 4px rgba(255, 126, 126, 0.65);
	}

	.levelTest h1{
		display: flex;
		color: white;
		font-size: 25px;
		height: 118px;
		text-align: center;
		font-weight: bold;
		margin-top:100px;
		justify-content: center;
		padding-bottom:50px;
	}
	.levelTest_coment{
		color: white;
		font-family: Roboto;
		font-size: 20px;
		display: flex;
		margin: 0 auto;
		text-align: center;
		justify-content: center;
	}
	.levelTest img{
		width: 350px;
		display: flex;
		height: 800px;
		margin: 30px auto;
	}
	.levelTest_button{
	height: 50px;
	width: 150px;
	font-size: 15px;
	 color: white;
	 font-weight: bold;
	 font-family: Roboto;
	 text-align: center;
	 background-color: #FF7272;
	 box-shadow: inset 0px 0px 4px 3px rgba(0, 0, 0, 0.25);
	 margin: 100px auto;
 }
.levelTest_button a{
	width: 100%;
	height: 100%;
	display: flex;
	margin: 10px auto;
	justify-content: center;
	color: black;
}

.kakaochat{
position: fixed;
right: 10px;
bottom: 60px;
width: 60px;
height: 60px;
z-index: 99;
}

}
	</style>
	<!--html-->
</head>
<body>
  <!-- learnMore-->
  <div class="learnMore">
		<div class="learnMore_button">
			<a href="http://teamgfa.shop/introduce-company/">Learn more</a>
		</div>
  </div>
  <!--introducePart1-->
  <div class="introducePart1">
		<div class="introducePart1_con">
			<div class="GridPart">
				<img src="http://teamgfa.shop/wp-content/uploads/2021/02/introduceText.jpg" alt="">
				<div class="introducePart1_text">
					<h1>Now is the era of Speak Online!</h1>
				<p>You have difficulty when it comes to introducing yourself to someone for the first time, you shouldn’t feel embarrassed. A lot of native speakers also become tongue-tied when talking about themselves!</p>
				</div>
			</div>
		</div>
  </div>

	<!--introducePart2-->
  <div class="introducePart2">
	<a class="introduceVideo"data-fancybox href="https://youtu.be/6Eh-Eo8DxBs">
	  <img src="http://teamgfa.shop/wp-content/uploads/2021/05/20210525_094403.png" alt="">
	</a>
</div>
<!--introducePart3-->
  <div class="metrials">
	<div class="GridPart2">
		<img src="http://teamgfa.shop/wp-content/uploads/2021/02/textBook.jpg" alt="">
		<div class="metrials_text">
				<h1>Metrials</h1>
				<p>American English File serise</p>
		</div>
	</div>
  </div>
  <div class="levelTest">
		<h1>Enjoy free level testing and<br> hands-on classes on Speak Online!</h1>
		<p class="levelTest_coment">There are various Levels</p>
	<img src="http://teamgfa.shop/wp-content/uploads/2021/05/20210511_181403.png" alt="">
		<div class="levelTest_button">
			<a href="http://teamgfa.shop/free-level-test-page/"><p>	start level test</p></a>
		</div>
  </div>

  <a href="http://pf.kakao.com/_xkmXxfs"><img class="kakaochat" src="http://teamgfa.shop/wp-content/uploads/2021/06/kakaotalk.png" alt="카카오톡투명로고"/></a>

 
</body>
</html>

<?php get_footer(); ?>
