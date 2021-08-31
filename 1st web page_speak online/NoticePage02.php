<?php
/**
 * The template for displaying all pages.
 * Template Name: Notice Page 02
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

    html, body { height: 100%;
      font-family: Roboto;
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  line-height: 21px; }

    body{
    width:100%;
    margin: 0;
    color:black;
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


		.title{
			margin-top: 200px;
		}


.title h1{
  text-align: left;
  max-width: 1060px;
  margin: auto;
  padding: 20px 0 20px 20px;

}

 li {
      display: inline-block;
      margin : auto 0px;
    }


}
.log{
  margin : auto;
  text-align: left;
  max-width: 1060px;
  padding: 10px 10px;
}


.right {
    margin: auto;
    text-align: right;
    display:inline-block;
    left: 90px;
}

.contents {
  max-width: 860px;
  text-align: left;
  padding: 20px 200px 20px 10px;
  margin: auto;
  padding-bottom: 162px;
  border-top: #AFAFAF 1px solid;
  border-bottom: #AFAFAF 1px solid;

}

 </style>
</head>

<body>
    <main>
    <div class="top-area">
    <div class="image">
          <h1>Notice</h1>
    </div>
</div>


<div class="title"><h1>Announcment of COVID 19</h1></div>
<div class="log">
	<li><img src="http://teamgfa.shop/wp-content/uploads/2021/06/person-icon.png" alt="Paris" style="width:24px"></li>
	<li>admin</li>
  <li>2021-03-10</li>
  <li>33 views</li>
		<div class="right">
			<li><img src="http://teamgfa.shop/wp-content/uploads/2021/06/icon_02.png" alt="Paris" style="width:24px"></li>
			<li><img src="http://teamgfa.shop/wp-content/uploads/2021/06/sharp_view_list_black_24dp.png" alt="Paris" style="width:24px"></li>
			<li><img src="http://teamgfa.shop/wp-content/uploads/2021/06/sharp_more_vert_black_24dp.png" alt="Paris" style="width:24px"></li>
    </div>
</div>

<div class="contents">thank you for your helpness!!!</div>
</main>
</body>
</html>


<?php get_footer(); ?>
