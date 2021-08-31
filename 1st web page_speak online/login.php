<?php
/**
 * The template for displaying all pages.
 * Template Name: Login
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

require ('db_connection.php');
session_start();

if(isset($_COOKIE['email'])){
if($_COOKIE['email'] !== ''){
  if(isset($email)){
  $email != $_COOKIE['email'];
  }
}

get_header(); 
}

if(!empty($_POST)){
  if($_POST['email']!='' && $_POST['password'] != ''){
      $login = $pdo->prepare('SELECT * FROM contacts WHERE email=? 
      AND password=?');

      $login->execute(array($_POST['email'],sha1($_POST['password'])));

      $member =$login->fetch();

      if($member){
        $_SESSION['id'] = $member['id'];
        $_SESSION['time'] = time();

        if($_POST['save'] == 'on'){
          setcookie('email',$_POST['email'],time()+60*60*24*14);
        }

        header('Location: http://teamgfa.shop/');
        exit();
      }else{
        $error['login'] = 'failed'; 
      }
  }else{
    $error['login'] = 'blank';
  }
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">

body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}


body {
	background: url(images/bg_main.png) top center repeat-y #eeeeee;
	color: #333;
}

#wrap {
	width: 802px;
	margin: 0 auto;
}

#head {
	border-left: 1px solid #d4d4d4;
	border-right: 1px solid #d4d4d4;
	border-bottom: 1px solid #d4d4d4;
	background: url(images/bg_head.png) bottom left repeat-x #106eb7;
	color: #fff;
	padding: 20px;
	margin-bottom: 20px;
}

h1 {
	background: url(images/bg_ttl.png) top left no-repeat;
	padding-left: 25px;
	font-size: 197%;
	font-weight: bold;
}

h2 {
	font-weight: bold;
	margin-bottom: 0.5em;
}

#content {
	padding: 20px;
	background: url(images/bg_content.png) left bottom no-repeat #ecf7fc;
	width: 720px;
	min-height: 490px;
	margin: 0 auto;
	margin-bottom: 10px;
	font-size: 153.9%;
}

* html #content {
	height: 490px;
}

p {
	line-height: 1.2em;
	margin-bottom: 0.5em;
}

dl {
	margin-bottom: 10px;
}
dt {
	border-left: 5px solid #106eb7;
	padding-left: 5px;
	margin-bottom: 5px;
}
dd {
	margin-bottom: 0.5em;
}

.required {
	background-color: #BB1850;
	color: #fff;
	font-size: 90%;
	padding: 2px;
	margin-left: 10px;
}

#foot {
	width: 780px;
	text-align: right;
}

th, td {
	border: 1px solid #999;
	padding: 3px;
}

th {
	background-color: #106eb7;
	color: #fff;
	font-weight: bold;
}

li {
	list-style: circle;
	margin-left: 20px;
	margin-bottom: 0.5em;
}

.paging {
	margin-top: 10px;
	text-align: center;
}
.paging li {
	display: inline;
	list-style: none;
}

.error {
	font-size: 90%;
	color: #BB1850;
}

#lead {
	margin-bottom: 1em;
}

.msg {
	clear: both;
	border-top: 1px solid #ccc;
	padding: 10px 0;
}
.msg img {
	float: left;
	margin-right: 5px;
}
.msg p {
	margin: 0;
}
.msg .day,
.msg .day a {
	font-size: 80%;
	color: #999;
}

</style>
<title>ログインする</title>
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>Login</h1>
  </div>
  <div id="content">
    <div id="lead">
      <p>メールアドレスとパスワードを記入してログインしてください。</p>
      <p>入会手続きがまだの方はこちらからどうぞ。</p>
      <p>&raquo;<a href="join/">入会手続きをする</a></p>
    </div>
    <form action="" method="post">
      <dl>
        <dt>メールアドレス</dt>
        <dd>
        <?php 
        if(isset($email)):?>
          <input type="text" name="email" size="35" maxlength="255" value="<?php print(htmlspecialchars($email,ENT_QUOTES));?>" />
<?php endif; ?>
<input type="text" name="email" size="35" maxlength="255" />
          <?php
           if(isset($error['login'])):
           if($error['login']=='blank'):?>
        <p class="error">please enter Email and Password</p>
        <?php endif; ?>
        <?php endif; ?>
        </dd>
        

        <h1><?php echo $_POST['email'];?></h1>
        <?php 
        if(isset($error['login'])):
        if($error['login']=='failed'):?>

<p class="error">failed to login</p>
        <?php endif; ?>
<?php endif;?>
</dd>
        <dt>パスワード</dt>
        <dd>
          <input type="password" name="password" size="35" maxlength="255"   />
        </dd>
        <dt>ログイン情報の記録</dt>
        <dd>
          <input id="save" type="checkbox" name="save" value="on">
          <label for="save">次回からは自動的にログインする</label>
        </dd>
      </dl>
      <div>
        <input type="submit" value="ログインする" />
      </div>
    </form>
  </div>
  <div id="foot">
    <p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O Space. MYCOM" /></p>
  </div>
</div>
</body>
</html>



<?php get_footer(); ?>
