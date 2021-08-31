<?php
/**
 * The template for displaying all pages.
 * Template Name:freeleveltest-page
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
    width: 100%;
    font-family: Roboto;
		height: 5000px;
  }
  .banner{
    width: 100%;
    height: 600px;
    display: flex;
    flex-direction: column;
    color: white;
    background-image:url("http://teamgfa.shop/wp-content/uploads/2021/04/people-6027028_1920-1.png");
  }

  .banner h1{
    color: white;
  font-family: Roboto;
  font-style: normal;
  font-weight: bold;
  font-size: 80px;
  line-height: 94px;
  margin: 50px auto;
  }

  .banner h6{
  color: white;
  font-family: Roboto;
  font-style: normal;
  font-weight: bold;
  font-size: 50px;
  line-height: 59px;
  text-align: center;
  }

  .banner p{
  color: white;
  font-family: Roboto;
  font-style: normal;
  font-weight: bold;
  font-size: 30px;
  line-height: 39px;
  text-align: center;
  }

  #yellow{
    color: #ffe500;
  }

  .applicationBox{

    flex-direction: column;
    width: 100%;
    left: 320px;
    top: 1044px;
		margin-top: 166px;
  }

  .applicationBox h2{
	display: flex;
  font-family: Roboto;
  font-style: normal;
  font-weight: bold;
  font-size: 40px;
  line-height: 47px;
  width: 100%;
  text-align: center;
	justify-content:center;
	align-items: center;
	margin: 20px auto;
  }

  .applicationBox P{
  font-family: Roboto;
  font-style: normal;
  font-weight: normal;
  font-size: 30px;
  line-height: 35px;
  text-align: center;
  color: #656565;
  width: 100%;
  }

  .basicInformation{
	display: flex;
  flex-direction: column;
  background-color: white;
  width: 630px;
	height: 640px;
	box-shadow: 5px,5px,5px,5px black;
	background: #F9F9F9;
	box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.25);
	border-radius: 20px;
	margin: 0 auto;
  }

	.basicInformation h2{
	display: flex;
	width: 201.79px;
	height: 43.05px;
	font-weight: bold;
	font-size: 16px;
	text-align: center;
	background-color: #4E82BE;
	border-radius: 10px;
	color:white;
	align-items: center;
	justify-content: center;
	}

	.inputInfo{
		width: 275px;
		height: 70px;
		margin: 0 auto;
	}

	h3{
		display: flex;
		width: 375px;
		height: 80px;
		font-weight: bold;
		font-size: 30px;
		text-align: center;
		margin: 50px auto;
		background-color: #4E82BE;
		border-radius: 10px;
		color:white;
		align-items: center;
		justify-content: center;
	}

	.level-test_wrapper-grid{
		align-items: flex-end;
		justify-content: center;
		display: grid;
		width:370px;
		height: 400px;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 200px 150px;
	}

.level-test_wrapper-grid p{
grid-row: 2/3;
grid-column: 1/3;
justify-content: center;
align-items: center;
display: flex;
}

.level-test_wrapper-grid div{
}


.Info-1{
display: flex;
height: 180px;
flex-direction:column;
justify-content: space-between;

}

.wpcf7-form-control.wpcf7-text.level-test_name-field,.wpcf7-form-control.wpcf7-text.wpcf7-tel.wpcf7-validates-as-required.wpcf7-validates-as-tel{
	width: 319px;
height: 70px;
border-radius: 10px;
border: 1px solid #8B8B8B;
}

.wpcf7-form-control.wpcf7-text.wpcf7-email.wpcf7-validates-as-required.wpcf7-validates-as-email{
	width: 570px;
border-radius: 10px;
height: 70px;
border: 1px solid #8B8B8B;
}

.select{
	margin-left: 30px;
	margin-right: 30px;
	display: flex;
	justify-content:center;
}

.wpcf7 form>div, .wpcf7 form>p{
margin: 0 auto;
}

.wpcf7-list-item.first,.wpcf7-list-item.last{
	display: flex;
	background-color: white;
	color: #8B8B8B;
	border:1px solid #8B8B8B;
	width: 80px;
	height: 70px;
	text-align: center;
	justify-content: center;
}

label{
display: flex;
align-items: center;
}

.wpcf7-list-item.first{
	border-radius: 20px 0px 0px 20px;
}

.wpcf7-list-item.last{
	border-radius: 0px 20px 20px 0px;
}

.select input:checked+ label:before {
	  color: white;
	}

	.select input[type="radio"]{
	 display: none;
	 cursor: pointer;
	}

.select input[type="radio"]:checked + label:after{
  background-color: #4E82BE;
	color:white;

}

input[type="submit"]{
	display: flex;
	width: 600px;
	height: 100px;
	background-color: #4E82BE;
	border-radius: 10px;
	font-size: 40px;
	font-weight: bold;
	margin: 80px auto;
	text-align: center;
	align-items:center;
	justify-content: center;
}

.system{
	background-color: #F7F7F7;
	color: #000000;
	width: 100%;
	height: 600px;
	display: flex;
	margin: 200px auto;
	flex-direction: column;
	justify-content: center;
}

.class-system{
	display: flex;
	flex-direction: column;
	width: 100%;
}

.class-system ul{
	width: 1320px;
	margin: 80px auto;
	display:inline-flex;
	align-items: center;
	justify-content: space-between;
}

.icon img{
	width: 100px!important;
	height: 100px!important;
}

.icon{
	display: flex;
	list-style: none;
	width: 270px !important;
	height: 270px !important;
	border: 5px solid #4E82BE;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 50%;
	flex-direction: column;
	align-items: center!important;
	justify-content: center!important;
	font-size: 25px;
}

.arrow{
	display: flex;
	width: 18px!important;
	height: 40px!important;
	list-style: none;
	align-items: center;
	justify-content: center;
	margin: 30px!important;
}

.icon p{
	width: 200px!important;
	margin: 0 auto;
	text-align: center!important;
	line-height: 29px;
	word-break: normal;
	font-size: 25px;
}

.system h2{
	font-size: 40px;
	color: black;
	text-align: center;
	font-weight: bold;
}

.step{
	display: flex;
	flex-direction: column;
	justify-content:center;
	text-align: center;
	font-size: 30px;
	font-weight: bold;
	width: 1242px;
height: 964px;
margin: 0 auto;
color:black;
}

.step h2{
	font-size: 40px;
	color: black;
}

.level-config-h2{
display:flex;
margin: 35px auto;
font-weight: bold;
justify-content: center;
align-items: center;
border-radius: 20px;
background-color: #4E82BE;
width: 1050px;
height: 85px;
font-size: 40px;
line-height: 60px;
color:white;
}

.level-config{
display: flex;
width: 1050px;
height: 400px;
align-items: center;
justify-content: center;
margin: 0 auto;
box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.25);
border-radius: 20px;
}

.content{
display: grid;
grid-gap: 10px;
grid-template-columns: 250px 700px;
grid-template-rows: 1fr 1fr 1fr;
grid-auto-flow: dense;
width: 950px;
height: 350px;
margin: 0 auto;

}

.level-config ul:nth-child(odd){
width: 250px;
height: 108px;
background-color: #4E82BE;
color:white;
border-radius: 20px 0px 0px 20px;
list-style: none;
font-weight: bold;
font-size: 20px;
line-height: 25px;
text-align: center;
}

ul:nth-child(odd)>li{
display: flex;
width: 205px;
height: 108px;
align-items: center;
justify-content: center;
margin: 0 auto;
}

.level-config ul:nth-child(even){
width: 700px;
height: 108px;
background-color: #EAEAEA;
color:black;
border-radius: 0px 20px 20px 0px;
list-style: none;
font-weight: bold;
font-size: 20px;
line-height: 25px;
}

ul:nth-child(even)>li{
display: flex;
width: 500px;
height: 108px;
align-items: center;
justify-content: flex-start;
margin-left: 28px;
}

.site-below-footer-wrap[data-section="section-below-footer-builder"]{
margin-top: 195px;
}


@media screen and (max-width:375px) {

html{
  width: 100%;
	font-family: Roboto;
	height: 2500px;
}

.Info br{
display:none;
}
	.banner{
		width: 100%;
		height: 182px;
		display: flex;
		flex-direction: column;
		color: white;
		background-image:url("http://teamgfa.shop/wp-content/uploads/2021/04/people-6027028_1920-1.png");
		background-size: cover;
	}

	.banner h1{
		color: white;
	font-family: Roboto;
	font-style: normal;
	font-weight: bold;
	font-size: 20px;
	line-height: 20px;
	margin: 80px auto;
	}

	.banner h6{
	display: none;
	color: white;
	font-family: Roboto;
	font-style: normal;
	font-weight: bold;
	font-size: 20px;
	line-height: 20px;
	text-align: center;
	}

	.banner p{
		display: none;
	color: white;
	font-family: Roboto;
	font-style: normal;
	font-weight: bold;
	font-size: 30px;
	line-height: 39px;
	text-align: center;
	}

	#yellow{
		display: none;
	}

	.applicationBox{

		flex-direction: column;
		width: 100%;
		margin-top: 66px;
	}

.applicationBox h2{
color: black;
display: flex;
font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 15px;
line-height: 17.58px;
width: 100%;
text-align: center;
justify-content:center;
align-items: center;
margin: 10px auto;
}

.applicationBox P{
font-family: Roboto;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 14.06px;
text-align: center;
color: #656565;
width: 100%;
}

.basicInformation{
	width: 339px;
height: 263px;
}

.basicInformation h2{
display: flex;
width: 201.79px;
height: 43.05px;
font-weight: bold;
font-size: 16px;
text-align: center;
background-color: #4E82BE;
border-radius: 10px;
color:white;
align-items: center;
justify-content: center;
}


h3{
	width: 201.79px;
height: 43.05px;
font-size: 16px;
line-height: 19px;
margin: 20px auto;
}

.level-test_wrapper-grid{
	align-items: flex-end;
	justify-content: start;
	display: grid;
	width:290px;
	height: 160px;
	grid-template-columns: 60% 40%;
	grid-template-rows: 90px 80px;
}

.level-test_wrapper-grid p{
grid-row: 2/3;
grid-column: 1/3;
justify-content: center;
align-items: center;
display: flex;
}

.Info-1{
height: 100px;
flex-direction: column;
}

.inputInfo{
		width: 275px;
		height: 70px;
		margin: 0 auto;
	}

.wpcf7-form-control.wpcf7-text.level-test_name-field,.wpcf7-form-control.wpcf7-text.wpcf7-tel.wpcf7-validates-as-required.wpcf7-validates-as-tel{
width: 147.98px;
height: 37.67px;
border-radius: 10px;
border: 1px solid #8B8B8B;
}

.wpcf7-form-control.wpcf7-text.wpcf7-email.wpcf7-validates-as-required.wpcf7-validates-as-email{
	width: 306.71px;
height: 37.67px;
border-radius: 10px;
border: 1px solid #8B8B8B;
}

.select{
	display: flex;
	justify-content: flex-start;
	margin:0 auto;
}

.gender-i{
	width: 100px;
	height:40px;
}

.wpcf7-list-item.first,.wpcf7-list-item.last{
	background-color: white;
	color:black;
	border:1px solid #8B8B8B;
	width: 43.05px;
height: 37.67px;
}
.select input:checked+ label:before {
		color: white;
	}

	.select input[type="radio"]{
	 display: none;
	 cursor: pointer;
	}

.select input[type="radio"]:checked + label:after{
	background-color: #4E82BE;
	color:white;

}

input[type="submit"]{
	display: flex;
width: 339px;
height: 40px;
	background-color: #4E82BE;
	border-radius: 10px;
	font-size: 15px;
	font-weight: bold;
	margin: 30px auto;
	text-align: center;
	align-items:center;
	justify-content: center;
}

.system{
	background-color: white;
	color: #000000;
	width: 100%;
height: 1000px;
	display: flex;
	margin: 0 auto;
	flex-direction: column;
}

.system h2{
margin: 80px auto;
width: 262px;
	font-size: 20px;
	color: black;
	text-align: center;
	font-weight: bold;
}

.class-system{
	display: flex;
	flex-direction: row;
	width: 100%;
	background-color: #F7F7F7;
}

.class-system ul{
	flex-direction: column;
	width: 320px;
	margin: 0 auto;
	display:inline-flex;
	align-items: flex-start;
	justify-content: space-between;
}

.icon img{
margin-left: 22px;
width: 45px !important;
height: 45px !important;
}

	.icon{
		display: flex;
		list-style: none;
		width: 99px !important;
height: 99px !important;
		border: 5px solid #4E82BE;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	border-radius: 50%;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		font-size: 25px;
		flex-wrap: wrap;
		margin:0 !important;
	}

	.icon p{
		display: flex;
		font-size: 15px;
		width: 200px;
		height: 58px;
		margin-left: 30px !important;
		justify-content: center!important;
		align-items: center!important;
		text-align: center!important;
		line-height: 29px;
		word-break: normal;
	}

	.arrow{
		display: flex;
		width: 6.6px !important;
height: 14.67px !important;
		list-style: none !important;
		align-items: center !important;
		justify-content: center!important;
		margin: 15px!important;
		transform: rotate(90deg);
	}
.arrow img{
	margin-bottom:60px!important;
}



	.step{
		display: flex;
		flex-direction: column;
		justify-content:center;
		text-align: center;
		font-size: 14px;
line-height: 20px;
		font-weight: bold;
		width: 297px;
height: 560px;
	margin: 100px auto;
	color:black;
	}

	.step h2{
		font-size: 20px;
	}

.level-config-h2{
font-style: normal;
display:flex;
margin: 12px auto;
font-weight: bold;
justify-content: center;
align-items: center;
border-radius: 20px;
background-color: #4E82BE;
width: 354px;
height: 29px;
font-size: 13px;
line-height: 15px;
color:white;
}

.level-config{
font-style: normal;
display: flex;
width: 350px;
height: 260px;
align-items: center;
justify-content: center;
margin: 0 auto;
box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.25);
border-radius: 20px;
}

.content{
display: grid;
grid-gap: 4px;
grid-template-columns: 84px 236px;
grid-template-rows: 1fr 1fr 1fr;
    width: 320px;
    height: 250px;

margin: 0 auto;

}

.level-config ul:nth-child(odd){
width: 84px;
height: 80px;
background-color: #4E82BE;
color:white;
border-radius: 20px 0px 0px 20px;
list-style: none;
font-weight: bold;
font-size: 13px;
line-height: 15px;
text-align: center;
}

ul:nth-child(odd)>li{
display: flex;
width: 84px;
height: 80px;
align-items: center;
justify-content: center;
margin: 0 auto;
}

.level-config ul:nth-child(even){
width: 236px;
height: 80px;
background-color: #EAEAEA;
color:black;
border-radius: 0px 20px 20px 0px;
list-style: none;
font-weight: bold;
font-size: 13px;
line-height: 15px;
}

ul:nth-child(even)>li{
display: flex;
width: 192px;
height: 80px;
align-items: center;
justify-content: flex-start;
margin-left: 16px;
}

}

  </style>
<div class="banner">
  <h1>Free Level Test</h1>
  <h6>Enjoy <span id="yellow">free level testing </span>and <span id="yellow">hands-on classes</span> on Speak Online!</h6>
  <p>Let's start with an easy conversation, like introducing yourself.</p>
</div>

<div class="applicationBox">
  <h2>Fill out the application form</h2>
  <p>Make a reservation at the time you want and get an objective evaluation of your skills.</p>
	</div>
  <div class="basicInformation">
  <h3>Enter Information</h3>
	<?php echo do_shortcode( '[contact-form-7 id="341" title="Contact form"]' ); ?>
</div>
	<?php echo do_shortcode( '[contact-form-7 id="377" title="Untitled"]'); ?>
<div class="system">
	<h2>Level Testing and Experience Class Information</h2>
<div class="class-system">
	<ul>
		<li class="icon"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/online-class-1.png" alt=""><p>Apply	for free level testing
		hands-on classes</p></li>
		<li class="arrow"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/icon_05-1.png" alt=""> </li>
		<li class="icon"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/chart-1.png" alt=""><p>Free hands-on classes</p> </li>
		<li class="arrow"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/icon_05-1.png" alt=""> </li>
		<li class="icon"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/note-1.png" alt=""> <p>Check
			level test results</p></li>
		<li class="arrow"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/icon_05-1.png" alt=""> </li>
		<li class="icon"> <img src="http://teamgfa.shop/wp-content/uploads/2021/05/consultant-1.png" alt=""> <p>Class counseling</p></li>
	</ul>
	</div>
</div>

<div class="step">
	<h2>STEP.1 Free Level Testing and Experience Class Application</h2>
<p>Complete the application form to book level tests and hands-on classes.</p>
<h2>STEP.2 Level Test & Experience Class with Native English Instructors</h2>
	<p>Level tests and hands-on classes will be held at the time you reserved</p> <h2>STEP.3 Level Test Results</h2> <p>We will let you know the result of the level test within 1~2 days and
	the teacher who can teach through your Kakaotalk (or line).</p>
	<h2> STEP.4 Course Counseling</h2>
	<p>Talk to the study manager directly or through Kakao Talk (or Line) within 1~2 days after sending the test results. We will explain in detail questions about the overall class, such as the selection of instructors and textbooks according to the level, purchase, and class methods.</p>
</div>

<h2 class="level-config-h2">Level Test Configuration</h2>

<div class="level-config">
<div class="content">
<ul>
	<li class"config">Level Test 10 Minutes</li>
</ul>
<ul>
<li class"config">Starting with easy topics such as self-introduction, level tests conducted within 	native English teachers</li>
</ul>

<ul>
<li class"config">Experience class 10 minutes</li>
</ul>

<ul>
<li class"config">After the level test, a simple hands-on class is conducted with the desired course of study.</li>
</ul>

<ul>
<li class"config">Reading and Listening Level Test</li>
</ul>
<ul>
<li class"config">50 minutes (25 minutes read, 25 minutes listen) only for applicants.</li>
</ul>
</div>

</div>
<?php get_footer(); ?>
