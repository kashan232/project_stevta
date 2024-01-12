<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>IESS MAIN</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/main_assets/img/favicon.png" />
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/main_assets/css/normalize.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="/main_assets/css/main.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/main_assets/css/bootstrap.min.css" />
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/main_assets/css/all.min.css" />
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="/main_assets/css/fullcalendar.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/main_assets/css/animate.min.css" />
    <!-- dataTables - css -->
    <link rel="stylesheet" href="/main_assets/css/jquery.dataTables.min.css" />
    <!--datepicke css  -->
    <link rel="stylesheet" href="/main_assets/css/datepicker.min.css" />
    <!--select2 css  -->
    <link rel="stylesheet" href="/main_assets/css/select2.min.css" />

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/main_assets/fonts/flaticon.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/main_assets/css/style.css" />

    <!-- Modernize js -->
    <script src="main_assets/js/modernizr-3.6.0.min.js"></script>

    <style>
        .progress-circle {
   font-size: 20px;
   margin: 20px;
   position: relative; /* so that children can be absolutely positioned */
   padding: 0;
   width: 5em;
   height: 5em;
   background-color: #F2E9E1; 
   border-radius: 50%;
   line-height: 5em;
      float: left;
}

.progress-circle:after{
    border: none;
    position: absolute;
    top: 0.35em;
    left: 0.35em;
    text-align: center;
    display: block;
    border-radius: 50%;
    width: 4.3em;
    height: 4.3em;
    background-color: white;
    content: " ";
}
/* Text inside the control */
.progress-circle span {
    position: absolute;
    line-height: 5em;
    width: 5em;
    text-align: center;
    display: block;
    color: #53777A;
    z-index: 2;
}
.left-half-clipper { 
   /* a round circle */
   border-radius: 50%;
   width: 5em;
   height: 5em;
   position: absolute; /* needed for clipping */
   clip: rect(0, 5em, 5em, 2.5em); /* clips the whole left half*/ 
}
/* when p>50, don't clip left half*/
.progress-circle.over50 .left-half-clipper {
   clip: rect(auto,auto,auto,auto);
}
.value-bar {
   /*This is an overlayed square, that is made round with the border radius,
   then it is cut to display only the left half, then rotated clockwise
   to escape the outer clipping path.*/ 
   position: absolute; /*needed for clipping*/
   clip: rect(0, 2.5em, 5em, 0);
   width: 5em;
   height: 5em;
   border-radius: 50%;
   border: 0.45em solid #53777A; /*The border is 0.35 but making it larger removes visual artifacts */
   /*background-color: #4D642D;*/ /* for debug */
   box-sizing: border-box;
  
}
/* Progress bar filling the whole right half for values above 50% */
.progress-circle.over50 .first50-bar {
   /*Progress bar for the first 50%, filling the whole right half*/
   position: absolute; /*needed for clipping*/
   clip: rect(0, 5em, 5em, 2.5em);
   background-color: #53777A;
   border-radius: 50%;
   width: 5em;
   height: 5em;
}
.progress-circle:not(.over50) .first50-bar{ display: none; }


/* Progress bar rotation position */
.progress-circle.p66 .value-bar { transform: rotate(238deg); }

.progress-bar {
  background: #f1f6fa;
  border-radius: 5px;
  box-shadow: inset 0 0 0 1px #ccd6dd;
  height: 10px;
  overflow: hidden;
  position: relative;
  text-indent: 100%;
  width: 300px;
}
.progress-bar--counter {
  margin-left: 10px;
  position: relative;
  top: -1px;
}
.progress-bar--counter .hidden {
  display: inline-block;
}
.progress-bar--wrap {
  display: -webkit-box;
  display: -moz-box;
  display: box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  font-size: 13px;
  font-weight: 500;
  line-height: 1;
  margin: 10px 0;
}
.progress-bar--inner {
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  border-radius: 10px;
  height: 10px;
  left: 0;
  min-height: 10px;
  position: absolute;
  top: 0;
}
.progress-bar--green {
  color: #6fc14b;
}
.progress-bar--green .progress-bar--inner {
  background-color: #6fc14b;
}
.progress-bar--blue {
  color: #068eda;
}
.progress-bar--blue .progress-bar--inner {
  background-color: #068eda;
}
.progress-bar--red {
  color: #fb797e;
}
.progress-bar--red .progress-bar--inner {
  background-color: #fb797e;
}
.progress-bar--yellow {
  color: #f7a81d;
}
.progress-bar--yellow .progress-bar--inner {
  background-color: #f7a81d;
}


@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700);
.wrap {
  max-width: 600px;
  margin: 0 auto;
}

.bars {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.bars > div {
  margin: 10px;
}
.bars > div:nth-child(odd) {
  margin-left: 0;
}

.progress-bar2 {
  background: #DEE2E3;
  border-radius: 99px;
  width: 200px;
  height: 5px;
  position: relative;
  overflow: hidden;
}
.progress-bar2::before {
  border-radius: 99px;
  position: absolute;
  height: 5px;
  background: #1E9EF6;
  content: '';
  width: 0;
  transition: width .2s;
}

.progress-bar-10::before {
  width: 10%;
}

.progress-bar-20::before {
  width: 20%;
}

.progress-bar-30::before {
  width: 30%;
}

.progress-bar-40::before {
  width: 40%;
}

.progress-bar-50::before {
  width: 50%;
}

.progress-bar-60::before {
  width: 60%;
}

.progress-bar-70::before {
  width: 70%;
}

.progress-bar-80::before {
  width: 80%;
}

.progress-bar-90::before {
  width: 90%;
}

.progress-bar-100::before {
  width: 100%;
}


.progressWrapper {
  position: relative;
  width: 250px;
}
.progressWrapper .progressColor {
    width: 250px;
    height: 12px;
    margin-bottom: 60px;
    appearance:none;
    -moz-appearance: none;
    -webkit-appearance: none;
    border: none;
    border-radius: 2px;
    overflow: hidden;
    background-color: #d7d7d7;
}
.progressWrapper .progressColor::webkit-progress-bar {
  background-color: #d7d7d7;
  -moz-transition: 4s;
  -o-transition: 4s;
  -webkit-transition: 4s;
  transition: 4s;
}
.progressWrapper .tooltip2 {
  display: inline-block;
  background-color: #717880;
  font-size: 11px;
  color: #fff;
  padding: 4px 8px;
  width: auto;
  border-radius: 3px;
  position: absolute;
  top: -27px;
  left: 0%;
  margin-left: -15px;
}

.progressWrapper .tooltip2:after {
  content: '';
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  border-top: 3px solid #717880;
  position: absolute;
  left: 50%;
  top: 100%;
  -moz-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -webkit-transform: translateX(-50%);  
}

.progressWrapper .tooltip2 {
  -moz-transition: 0.4s;
  -o-transition: 0.4s;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  left: 0%;
}

.progressWrapper progress.progressColor::-moz-progress-bar {
  background: #08da9d;
  border-radius: 2px;
  position: relative;
}

.progressWrapper progress.progressColor::-webkit-progress-value {
  background: #08da9d;
  border-radius: 2px;
  position: relative;
}
.progressColor progress[value]{
  color: #08da9d;
}
.progressColor progress[value]::-webkit-progress-bar {
  background-color: #d7d7d7;
}

.rect-auto,
.c100.p66 .slice{
    clip: rect(auto, auto, auto, auto);
}

.pie,
.c100 .bar,
.c100.p66 .fill{
    position: absolute;
    border: 0.08em solid #307bbb;
    width: 0.84em;
    height: 0.84em;
    clip: rect(0em, 0.5em, 1em, 0em);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
}

.pie-fill,
.c100.p66 .bar:after,
.c100.p66 .fill{
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}

.c100 {
    position: relative;
    font-size: 120px;
    width: 1em;
    height: 1em;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    float: left;
    margin: 0 0.1em 0.1em 0;
    background-color: #cccccc;
}

.c100 *,
.c100 *:before,
.c100 *:after {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

.c100.center {
    float: none;
    margin: 0 auto;
}

.c100 > span {
    position: absolute;
    width: 100%;
    z-index: 1;
    left: 0;
    top: 0;
    width: 5em;
    line-height: 5em;
    font-size: 0.2em;
    color: #cccccc;
    display: block;
    text-align: center;
    white-space: nowrap;
    -webkit-transition-property: all;
    -moz-transition-property: all;
    -o-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: 0.2s;
    -moz-transition-duration: 0.2s;
    -o-transition-duration: 0.2s;
    transition-duration: 0.2s;
    -webkit-transition-timing-function: ease-out;
    -moz-transition-timing-function: ease-out;
    -o-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.c100:after {
    position: absolute;
    top: 0.08em;
    left: 0.08em;
    display: block;
    content: " ";
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    background-color: whitesmoke;
    width: 0.84em;
    height: 0.84em;
    -webkit-transition-property: all;
    -moz-transition-property: all;
    -o-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: 0.2s;
    -moz-transition-duration: 0.2s;
    -o-transition-duration: 0.2s;
    transition-duration: 0.2s;
    -webkit-transition-timing-function: ease-in;
    -moz-transition-timing-function: ease-in;
    -o-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
}
.c100 .slice {
    position: absolute;
    width: 1em;
    height: 1em;
    clip: rect(0em, 1em, 1em, 0.5em);
}
.c100.p66 .bar {
    -webkit-transform: rotate(237.6deg);
    -moz-transform: rotate(237.6deg);
    -ms-transform: rotate(237.6deg);
    -o-transform: rotate(237.6deg);
    transform: rotate(237.6deg);
}
.c100:hover {
    cursor: default;
}
.c100:hover > span {
    width: 3.33em;
    line-height: 3.33em;
    font-size: 0.3em;
    color: #307bbb;
}
.c100:hover:after {
    top: 0.04em;
    left: 0.04em;
    width: 0.92em;
    height: 0.92em;
}
.c100.dark {
    background-color: #777777;
}
.c100.dark .bar,
.c100.dark .fill {
    border-color: #c6ff00 !important;
}
.c100.dark > span {
    color: #777777;
}
.c100.dark:after {
    background-color: #666666;
}
.c100.dark:hover > span {
    color: #c6ff00;
}
.c100.green .bar,
.c100.green .fill {
    border-color: #4db53c !important;
}
.c100.green:hover > span {
    color: #4db53c;
}
.c100.green.dark .bar,
.c100.green.dark .fill {
    border-color: #5fd400 !important;
}
.c100.green.dark:hover > span {
    color: #5fd400;
}
.c100.orange .bar,
.c100.orange .fill {
    border-color: #dd9d22 !important;
}
.c100.orange:hover > span {
    color: #dd9d22;
}
.c100.orange.dark .bar,
.c100.orange.dark .fill {
    border-color: #e08833 !important;
}
.c100.orange.dark:hover > span {
    color: #e08833;
}
    </style>
</head>
<body>