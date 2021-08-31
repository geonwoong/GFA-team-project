<?php
/**
 * The template for displaying all pages.
 * Template Name: Course-Guide
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Guide</title>
</head>

  <style>
    @font-face {
  font-family:"Roboto";
  src: url("/fonts/Roboto-Light.woff2"),
  url("/fonts/Roboto-Light.woff");
  font-weight: 300;
  font-display: swap;
  font-style: normal;
}
@font-face {
  font-family: "Roboto";
  src: url("/fonts/Roboto-Regular.woff2"),
  url("/fonts/Roboto-Regular.woff");
  font-weight: 500;
  font-display: swap;
  font-style: normal;
}
@font-face {
  font-family: "Roboto";
  src: url("/fonts/Roboto-Bold.woff2"),
    url("/fonts/Roboto-Bold.woff");
  font-weight: 700;
  font-display: swap;
  font-style: normal;
}

* {
  margin: 0;
  padding: 0;
}
.content {
  width: 100%;
  height: 600px;

  margin: 0px auto 250px 0px;

  z-index: 20;
  position: relative;
  overflow: hidden;
}
.content img {
  width: 100%;
  height: 100%;

  position: absolute;
  z-index: 10;
  object-fit: cover;
}
.content__title {
  text-align: center;
  margin: 0 auto;

  top: 250px;
  position: relative;
  z-index: 20;
}
.content__title h2 {
  font-weight: bold;
  font-size: 80px;
  line-height: 94px;
  font-family: Roboto;

  color: #000000;
}
main {
  margin: 0 auto;

  max-width: 1280px;
}
.main__title {
  width: 310px;

  margin-left: 10px;
}
.main__title h2 {
  font-family: Roboto;
  font-weight: bold;
  font-size: 36px;
  line-height: 42px;
  text-align: center;

  color: #000000;
}
.main__image {
  width: 95%;

  overflow: hidden;

  margin: 60px 10px 160px;
  
}
.main__image img {
  margin: 0 auto;

  width: 100%;
  object-fit: cover;
}
.info {
  width: 90%;
  margin: 0px auto 60px;
}

.info h4 {
  font-family: Roboto;
  font-weight: 700;
  font-size: 25px;
  line-height: 58px;
}
.info p {
  font-family: Roboto;
  font-weight: 400;
  font-size: 25px;
  line-height: 42px;
}
.margin__bottom {
  margin-bottom: 25px;
}
.button {
  margin-top: 22px;
  margin-bottom: 22px;
  margin-left: 5px;
}
.button__link {
  text-decoration: none;

  padding: 6px 32px;

  background-color: #2B8CFF;
  color: #fff;

  border: 3px solid #313131;
  border-radius: 10px;

  font-family: Roboto;
  font-size: 25px;
  line-height: 25px;
}
.info-schedule {
  width: 90%;
  margin: 70px auto 60px;
}
.info-schedule h5 {
  font-family: Roboto;
  font-weight: 700;
  font-size: 25px;
  line-height: 28px;
}
.info-schedule p {
  font-family: Roboto;
  font-weight: 400;
  font-size: 25px;
  line-height: 28px;
}

@media screen and (max-width: 800px) {
  .content {
    width: 100%;
    height: 600px;

    margin: 22px auto 250px;

    z-index: 20;
    position: relative;
    overflow: hidden;
  }
}

@media screen and (max-width: 500px) {
  .main__title h2 {
    font-family: Roboto;
    font-weight: bold;
    font-size: 32px;
  }
  .content {
    width: 100%;
    height: 600px;

    margin: 21px auto 50px;

    z-index: 20;
    position: relative;
    overflow: hidden;
  }
  .main__image {
    margin: 60px 10px 60px;
  }
  .button__link {
    font-size: 15px;
  }
  .button {
    text-align: center;
    margin: 0 auto;
    margin-top: 22px;
    margin-bottom: 22px;
  }
}
  </style>
<body>

  <!-- content -->
  <div class="content">
    <img src="http://teamgfa.shop/wp-content/uploads/2021/04/banner.png" alt="#">
    <div class="content__title">
      <h2>Course Guide</h2>
    </div>
  </div>

  <!-- main -->
  <main>

    <!-- main__title -->
    <div class="main__title">
      <h2>
        Course Procedures
      </h2>
    </div>

    <div class="main__image">
      <img src="http://teamgfa.shop/wp-content/uploads/2021/04/courseInfo.png" alt="">
    </div>

    <div class="info">

      <h4>STEP 1 Apply for free level testing and hands-on classes</h4>

      <p>Fill out the application form and reserve a level test and experience class.</p>

      <br>
      <div class="button">
        <a href="#" class="button__link">
          Start to do Free TEST
        </a>
      </div>
      <br>

      <h4> STEP 2 Level Test & Experience Class with Native American Instructors</h4>

      <p> The level test and experience class will be held at the time you reserved.</p>

      <br>
      <br>

      <h4> STEP 3 Level Test Results View</h4>

      <p> We will inform you of the results within 1~2 days after taking the level test and the teacher who can take the
        class through Kakaotalk (or Line). </p>

      <br>
      <br>

      <h4> STEP 4 TRAINING CONSULTATION </h4>

      <p> Consult the study manager directly or via Kakaotalk (or Line) within 1~2 days after sending the test
        results.<br>
        I will explain in detail the questions about the overall class, such as selecting instructors and textbooks
        according to the level, purchasing, and teaching methods</p>

      <br>

      <h4> STEP 5 Tuition and Payment </h4>

      <p> After the consultation, fill out the course application form and deposit the tuition fee, and the application
        will be completed. </p>

      <br>
      <div class="button">
        <a href="#" class="button__link">
          Application for classes
        </a>
      </div>
      <br>

      <h4> STEP 6 Check the course schedule and the teacher in charge </h4>

      <p> After receiving the final confirmation message about the class schedule such as the day, time, and instructor,
        the class will be held in earnest. </p>

      <br>
      <br>

      <h4> STEP 7 Class Starts </h4>

      <p> We receive an invitation link from our teacher 3 minutes before the scheduled date and time and proceed with
        the class.</p>
    </div>

    <!-- main__title -->
    <div class="main__title ">
      <h2>
        Course Procedures
      </h2>
    </div>

    <!--  info-schedule  -->
    <div class="info-schedule">
      <h5>1. Proceeding with class </h5>
      <p>Classes are available from Monday to Friday (6:00 to 24:00).
        If the instructor contacted you more than 3 times after the class starts, but it is not connected due to your
        circumstances, it will be considered absent.</p>

      <br>
      <br>

      <h5>2. Postpone the class </h5>
      <p>If you can't take the class due to unavoidable reasons, you can postpone the class, but there is a limit on the
        number of times as follows:
        Number of classes/number of times that can be postponed </p>

      <br>
      <br>

      <p>
        5 classes per week (Monday-Friday) / 3 classes per month<br>
        3 classes per week (Monday, Wednesday, Friday) / 2 classes per month<br>
        Twice a week (Tuesday and Thursday) / once a month
      </p>

      <br>
      <br>

      <p>
        You have to apply for a class postponement by clicking the class postponement button on the My Page of PC or
        mobile homepage.<br>
        ▶ Shortcut to application for postponement of class
      </p>

      <br>
      <br>

      <p>
        The afternoon class on that day can be postponed until 11:59 am. From noon (12:00) on the same day, the class
        postponement button disappears.
        The morning class on that day is available until 1:59 am on that day. The class postponement button disappears
        from 2 a.m. on that day.
      </p>

      <br>
      <br>

      <p>
        £If you are unable to attend a long-term course due to overseas training or business trips, you can apply for
        "class holding (long-term postponement)" through [1:1 inquiry] or the customer center.
      </p>

      <br>
      <br>

      <p>
        "School Holding (long-term class postponement)" may be held up to three times during the course period, and the
        postponement period may not exceed 365 days in total. "If the class holding period exceeds 365 days, the
        remaining classes will be destroyed. Please contact the customer center before the rest of the class expires.
      </p>

      <br>
      <br>

      <h5>3. Change class time </h5>
      <p>If you want to change the class time, you can apply for the change through [1:1 inquiry] or the customer
        center. </p>

      <br>
      <br>

      <p>The Lead Talk manager will check the class schedule of the instructor and change the class schedule from the
        next day. If it is difficult to change the class time due to the class schedule of the instructor in charge, the
        instructor in charge may change, so please be careful when applying for the change.</p>

      <br>
      <br>

      <h5>4. Teacher Change</h5>
      <p>If you want to change your instructor, you can apply for a change of instructor through [1:1 inquiry] or the
        Customer Center. </p>

      <br>
      <br>

      <h5>5. Retaking classes </h5>
      <p>Only by the end of the class, you can apply for a re-instruction to continue the class on the same schedule as
        your instructor. </p>

      <br>
      <br>

      <p>The schedule may be assigned to other members after the end of the class.</p>

      <br>
      <br>

      <h5>6. Absenteeism </h5>
      <p>If students do not enter the video classroom during class, the instructor will call you more than twice and
        "miss" you when class is over (you will be waiting for the video classroom during class, so please attend the
        class even if you are late). </p>

      <br>
      <br>

      <p>No supplementary classes are provided for absenteeism due to the member's negligence, such as computer and
        Internet problems. Classes not provided due to company negligence (including company computers, Internet
        problems, and absence of instructors) will automatically be assigned supplementary classes to the last available
        schedule of the class. </p>

      <br>
      <br>

      <p>
        Even if the class starts late due to personal circumstances of the member, such as computer and Internet
        problems, the class will end at the scheduled time as it may interfere with the class scheduled for the next
        student.
      </p>

      <br>
      <br>

      <h5>7. REFUND REGULATIONS </h5>
      <p>If a member requests a refund, the study fee will be refunded in accordance with Article 23 of the Enforcement
        Decree of the Lifelong Education Act and Article 16 of the Lead Talk Terms and Conditions. </p>

      <br>
      <br>

      <p>Arrangement of criteria for return of learning expenses (see attached Table 3 of Article 23 (2) of the
        Enforcement Decree of the Lifelong Education Act)</p>


    </div>

  </main>


</body>

</html>