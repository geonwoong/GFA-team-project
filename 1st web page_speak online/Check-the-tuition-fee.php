<?php
/**
 * The template for displaying all pages.
 * Template Name: Check-the-tuition-fee
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
    <title>Check the tuition fee</title>

    <style>
       @font-face {
  font-family: "Roboto";
  src: url("/fonts/Roboto-Light.woff2"), url("/fonts/Roboto-Light.woff");
  font-weight: 300;
  font-display: swap;
  font-style: normal; }
@font-face {
  font-family: "Roboto";
  src: url("/fonts/Roboto-Regular.woff2"), url("/fonts/Roboto-Regular.woff");
  font-weight: 500;
  font-display: swap;
  font-style: normal; }
@font-face {
  font-family: "Roboto";
  src: url("/fonts/Roboto-Bold.woff2"), url("/fonts/Roboto-Bold.woff");
  font-weight: 700;
  font-display: swap;
  font-style: normal; }
* {
  margin: 0;
  padding: 0; }

body {
  font-family: Roboto, arial, sans-serif; }

.content {
  width: 100%;
  height: 600px;
  margin: 0px auto 90px;
  z-index: 20;
  position: relative;
  overflow: hidden; }
  .content img {
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 10;
    -o-object-fit: cover;
       object-fit: cover; }

.content__title {
  text-align: center;
  margin: 0 auto;
  top: 250px;
  position: relative;
  z-index: 20; }
  .content__title h2 {
    font-weight: bold;
    font-size: 80px;
    line-height: 94px;
    font-family: Roboto;
    color: #000000; }

.section-body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0 auto;
  max-width: 1320px;
  width: 100%; }

.curriculumAndClass {
  margin-left: 20px;
  width: 55%; }

.course {
  width: 45%; }

.curriculum {
  margin-right: 30px;
  margin-bottom: 60px; }
  .curriculum__title {
    width: 100%;
    margin-bottom: 4px; }
    .curriculum__title h2 {
      font-size: 20px;
      font-weight: bold;
      line-height: 21px; }
  .curriculum .list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    width: 100%; }
  .curriculum .list__programs {
    max-width: 210px;
    width: 100%;
    height: 70px;
    border: 1px solid #DBDBDB;
    background-color: #DBDBDB;
    color: #6A6A6A;
    outline: none;
    cursor: pointer;
    margin: 5px;
    -webkit-transition: 0.5s;
    transition: 0.5s; }
    .curriculum .list__programs h3 {
      font-size: 18px;
      line-height: 21px;
      font-weight: bold; }
    .curriculum .list__programs span {
      font-size: 12px;
      line-height: 12px;
      text-align: center; }
  .curriculum .list__programs:focus {
    background-color: #4E82BE;
    color: white;
    border: 1px solid #4E82BE; }
  .curriculum .list__programs:hover {
    background-color: #4E82BE;
    color: white;
    border: 1px solid #4E82BE; }

.class {
  margin: 0px 6px; }
  .class__title {
    width: 100%;
    margin-bottom: 4px; }
    .class__title h2 {
      font-size: 20px;
      font-weight: bold;
      line-height: 21px; }
  .class__list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between; }
    .class__list ul {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      margin: 5px 0px;
      width: 100%;
      list-style-type: none; }
      .class__list ul li {
        width: 95%;
        height: 45px;
        margin: 5px 8px;
        margin-left: 0; }
        .class__list ul li button {
          border: 1px solid #DBDBDB;
          background-color: #FFFFFF;
          color: #6A6A6A;
          padding: 12px;
          width: 100%;
          outline: none;
          cursor: pointer;
          -webkit-transition: 0.5s;
          transition: 0.5s; }
          .class__list ul li button span {
            font-size: 18px;
            line-height: 21px;
            color: #515151; }
        .class__list ul li .button-first {
          background-color: #E6E9F0;
          border: 1px solid blue; }
        .class__list ul li button:hover {
          background-color: #4E82BE;
          color: #FFFFFF;
          border: 1px solid #4E82BE; }
        .class__list ul li button:focus {
          background-color: #4E82BE;
          border: 1px solid #4E82BE; }
        .class__list ul li button:hover span {
          color: #FFFFFF; }
        .class__list ul li button:focus span {
          color: #FFFFFF; }

.course {
  width: 45%;
  margin-right: 20px; }
  .course__header {
    width: 100%;
    margin-bottom: 4px; }
    .course__header h3 {
      font-size: 18px;
      line-height: 21px;
      font-weight: bold; }
  .course__body {
    width: 100%; }
  .course__body-title {
    width: 100%;
    height: auto;
    background-color: #4E82BE; }
    .course__body-title h4 {
      color: #FFFFFF;
      padding: 14px 0px 14px 25px;
      margin: 3px 0 0; }
  .course ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    width: 100%;
    list-style-type: none; }
    .course ul li {
      width: 100%;
      height: 40px;
      margin: 2px 0px; }
      .course ul li button {
        width: 100%;
        padding: 10px 0px 10px 0px;
        background-color: rgba(111, 143, 224, 0.88);
        outline: none;
        border: 1px solid rgba(111, 143, 224, 0.88);
        cursor: pointer;
        text-align: left; }
        .course ul li button span {
          font-size: 18px;
          line-height: 21px;
          color: #FFFFFF;
          position: relative;
          left: 25px; }
      .course ul li button:hover {
        background-color: rgba(111, 143, 224, 0.78); }
      .course ul li button:focus {
        background-color: rgba(111, 143, 224, 0.78); }
  .course__footer {
    width: 100%;
    background-color: #000000;
    text-align: center; }
    .course__footer h4 {
      color: #FFFFFF;
      font-size: 22px;
      line-height: 26px;
      font-weight: bold;
      padding: 12px 0px; }

.section__bottom {
  margin: 0 auto;
  max-width: 1320px;
  width: 95%; }
  .section__bottom .reservation {
    width: 100%;
    padding-left: 0px; }
    .section__bottom .reservation ul {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      list-style: none; }
      .section__bottom .reservation ul li {
        width: 93px;
        margin-right: 2px; }
        .section__bottom .reservation ul li button {
          border: 1px solid #DBDBDB;
          background-color: #DBDBDB;
          color: #6A6A6A;
          width: 100%;
          height: 44px;
          outline: none;
          cursor: pointer; }
          .section__bottom .reservation ul li button span {
            font-size: 18px;
            line-height: 21px; }
        .section__bottom .reservation ul li button:hover {
          background-color: #4E82BE;
          color: white;
          border: 1px solid #4E82BE; }
        .section__bottom .reservation ul li button:focus {
          background-color: #4E82BE;
          color: white;
          border: 1px solid #4E82BE; }

.reservation__class__title {
  margin-bottom: 16px; }

.timetable {
  margin-top: 66px; }
  .timetable label span {
    font-size: 20px;
    line-height: 23px; }
  .timetable label .label__input {
    width: 130px; }

.timetable__label {
  margin-top: 10px; }

@media screen and (max-width: 975px) {
  .curriculum .list {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }

  .class__list ul li button span {
    font-size: 17px; } }
@media screen and (max-width: 885px) {
  .curriculum .list {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }

  .class__list ul li button span {
    font-size: 14px; } }
@media screen and (max-width: 800px) {
  .content {
    width: 100%;
    height: 600px;
    margin: 0px auto 90px;
    z-index: 20;
    position: relative;
    overflow: hidden; }

  .section-body {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column; }

  .curriculumAndClass {
    margin: 0 auto;
    margin-bottom: 50px;
    width: 100%; }

  .course {
    width: 95%;
    margin: 0 auto; }

  .curriculum .list__programs {
    margin: 10px; }

  .curriculum__title h2 {
    text-align: center; }

  .class__title h2 {
    text-align: center; }

  .class__list ul li button span {
    font-size: 14px; }

  .course ul li {
    margin: 3px 0px; }

  .section__bottom {
    margin-top: 40px; }

  .section__bottom .reservation {
    padding-left: 0px; }

  .reservation ul li {
    width: 100%; }

  .reservation ul {
    margin-top: 40px; }
  
  .section__bottom .reservation ul {  
  margin: 0 auto;
  justify-content: center;
  }

  .curriculum {
    margin-right: 0; } }
  
@media screen and (max-width: 500px) {
  .content {
    width: 100%;
    height: 600px;
    margin: 0px auto 50px;
    z-index: 20;
    position: relative;
    overflow: hidden; }

  .content__title h2 {
    font-size: 62px; }

  .class__list ul li button span {
    font-size: 10px; }

  .section__bottom .reservation ul li button span {
    font-size: 18px; }

  .timetable {
    margin-left: 20px;
    margin-top: 66px; }
    .timetable label span {
      font-size: 16px;
      line-height: 23px; }

  .class {
    margin: 0 6px; } }
    </style>
</head>
<body>
    <header>
        <section class="content">
            <img src="http://teamgfa.shop/wp-content/uploads/2021/03/banner.png" class="content-img" alt="#">
            <div class="content__title">
              <h2>Check the tuition fee</h2>
            </div>
          </section>
    </header>
    <main>        
        <section class="section-body">   
            <!-- curriculumAndClass -->
            <div class="curriculumAndClass">
                <div class="curriculum">

                    <!-- curriculum__title -->
                    <div class="curriculum__title">
                        <h2>1. Select a curriculum</h2>
                    </div>
    
                    <!-- curriculum-list -->
                    <div class="list">
                        
                        <!-- programs-list -->
                        <button class="list__programs">
                            <h3>General course</h3>
                            <span>
                                Regular conversation, Phonics,<br>
                                Englsih conversation for childrendd
                            </span>
                        </button>

                        <!-- programs-list -->
                        <button class="list__programs">
                            <h3>Discussion</h3>
                            <span>
                                News+Free talking, Discussion <br>
                                English
                            </span>
                        </button>

                        <!-- programs-list -->
                        <button class="list__programs">
                            <h3>Business English</h3>
                            <span>                                
                            </span>
                        </button>

                        <!-- programs-list -->
                        <button class="list__programs">
                            <h3>Exam preparation</h3>
                            <span>
                                TOEIC, IELTS
                            </span>
                        </button>                        
                    </div>
                </div>                
                <div class="class">
                    <div class="class__title">
                        <h2>2. Select class period/number/time</h2>
                    </div>
                    <div class="class__list">
                        <ul>
                            <li><button class="button-first"><span>1 month</span></button></li>
                            <li><button><span>3 months</span></button></li>
                            <li><button><span>6 months</span></button></li>
                            <li><button><span>12 months</span></button></li>
                        </ul>
                        <ul>
                            <li><button class="button-first"><span>1 times a week</span></button></li>
                            <li><button><span>2 times a week</span></button></li>
                            <li><button><span>3 times a week</span></button></li>
                            <li><button><span>5 times a week</span></button></li>
                            <li><button><span>weekend</span></button></li>
                        </ul>
                        <ul>
                            <li><button class="button-first"><span>30 min</span></button></li>
                            <li><button><span>1 hour</span></button></li>
                            <li><button><span>2 hours</span></button></li>                            
                        </ul>
                    </div>                    
                </div>
            </div> 
            <!-- course -->
            <div class="course">
                <div class="course__header">
                    <h3>3. Course Selection</h3>
                </div>
                <div class="course__body">
                    <div class="course__body-title">
                        <h4>Application History</h4>
                    </div>
                    <ul>
                        <li><button><span>Class method</span></button></li>
                        <li><button><span>Class course</span></button></li>
                        <li><button><span>Class period</span></button></li>
                        <li><button><span>Number of times</span></button></li>
                        <li><button><span>Time</span></button></li>
                        <li><button><span>Start date</span></button></li>
                        <li><button><span>Start time</span></button></li>
                    </ul>
                    <div class="course__body-title">
                        <h4>Payment information</h4>
                    </div>
                    <ul>
                        <li><button><span>Payment amount</span></button></li>
                        <li><button><span>Payment method</span></button></li>
                        <li><button><span>Bank account</span></button></li>
                    </ul>
                </div>
                <div class="course__footer">
                    <h4>To register for a course</h4>
                </div>
            </div>
        </section>
        <section class="section__bottom">
            <div class="reservation">
                <div class="class__title reservation__class__title">
                    <h2>4. Select days of the week</h2>
                </div>
                <ul>
                    <li><button><span>Mon</span></button></li>
                    <li><button><span>Tue</span></button></li>
                    <li><button><span>Wed</span></button></li>
                    <li><button><span>Tur</span></button></li>
                    <li><button><span>Fri</span></button></li>
                    <li><button><span>Sat</span></button></li>
                    <li><button><span>Sun</span></button></li>
                </ul>
            </div>
            <div class="timetable">
                <div class="class__title class__title-margin">
                    <h2>5. Select Start Date/Start Time</h2>
                </div>
                <br>
                <label class="timetable__label">
                    <span>Desired start date:</span>
                    <input type="date" class="label__input">                    
                    <span>(Click the Calendar button)</span>
                </label>
                <br>
                <br>
                <label>
                    <span>Desired start time:</span>
                    <input type="time" class="label__input">                    
                    <button>search</button>
                </label>
            </div>          
        </section>
    </main>
    <br>
    <br>
    <br>  
</body>
</html>