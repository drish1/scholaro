<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Scholaro_next</title>
<link rel="icon" type="image/png" href="new logo.jfif">
<style>
body{
    margin:0;
    padding:0;
}
.box{
    height:60px;
    width:200px;
    border-radius:8px;
    border:2px solid;
    background-color:#0000cd;
    color:white;
    margin-left:15px;
    font-size:30px;
    font-weight:bold;
    padding-top:14px;
    padding-left:13px;
}
#main_bar{
    display:flex;
    width:100%;
}
#textbox{
 width:450px;
 height:50px;
 margin-left:40px;
 margin-top:38px;
 font-size:28px;
 color:black;
 border-style:solid;
 font-weight:bold;
 border-right:none;
}
.search2{
    margin-top:38px;
    height:55px;
    width:200px;
    margin-left:10px;
    border-style:solid;
    font-size:25px;

}
.search3{
    height:50px;
    width:60px;
    margin-top:38px;
    border-style:solid;
}
#login{
    
    color:#0000cd;
    margin-left:500px;
    font-size:30px;
    font-weight:bold;
    padding-top:14px;
    padding-left:15px;
    margin-top:38px;
    text-decoration:none;
}
#register{
    color:#0000cd;
    font-size:30px;
    font-weight:bold;
    padding-top:14px;
    padding-left:15px;
    margin-top:38px;
    text-decoration:none;
    margin-left:50px;
}
#topbar{
    height:50px;
    background-color:#00008b;
    padding-top:15px;
}
#topbar a{
    height:50px;
    width:100%;
    color:white;
    padding:14px 26px;
    margin-top:15px;
    margin-left:79px;
    font-size: 23px;
    font-weight:bold;
    transition: 0.6s all;
    text-decoration:none;
    text-align:center;
}
#topbar a:hover{
  background-color: #6ca0dc;
}
#flex{
    display:flex;
    width:75%;
    margin:0 auto;
}
#textalign{
    font-size:80px;
    margin-right:0;
    margin-top: 170px;
    margin-left:50px;
    padding-left:100px;
    padding-right:0px;

}
#logo{
    margin-left:150px;
    height:800px;
    width:900px;
    margin-top:10px;
    padding-top:0;
    
}
#between{
    text-align:center;
    font-size:75px;
    margin-top:0px;
    color:#333399;
    text-shadow: 1px 1px 2px black;
}
.row{
    margin-left:240px;
    margin-top:0;
}
.column {
  float: left;
  width: 28%;
  margin-top:50px;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column h2{
  font-size: 35px;
  font-weight:bold;
}
.column p{
  font-size:28px;

}
.gallery img{
  width:900px;
  height:650px;
}
div.gallery {
  margin: 15px;
  margin-left:70px;
  border: 1px solid #ccc;
  float: left;
  width: 350px;
  height:350px;
  margin-bottom:0px;
  box-shadow: 10px 10px 5px 10px #888888;
  padding-bottom:0px;
}

div.gallery:hover {
  border: 1px solid #777;
  box-shadow: 8px 8px 5px 10px #E5E4E2 ;
}

div.gallery img {
  width: 100%;
  height: auto;

}

div.desc {
  padding: 15px;
  text-align: center;
  font-size:25px;
}
#gallery{
  margin-left:130px;
  height:450px;
}
.t1{
  margin-left:180px;
  margin-top:0;
  display:flex;

}
.c1{
  width:700px;
  float:left;
  margin-top:0px;
  padding:15px;
  padding
  margin-left:50px;
  margin-right:150px;


}
.t1:after{
  content: "";
  display: table;
  clear: both;
}
.tabledesign{
  border:solid;
  border-width:3px;
  font-size:30px;
  background-color:"blue";
  text-shadow: 1px 1px 2px black;
  box-shadow: 8px 8px 5px 10px #191970;
  border-color:#00008b;
}
th,td{
  border:solid;
  border-color:grey;
  border-width:1px;
}
center{
  text-align:center;
    font-size:75px;
    margin-top:0px;
    color:#333399;
    text-shadow: 1px 1px 2px black;
}
.ft{
  text-decoration:none;
  color:black;
}
.ft:hover{
  color:grey;
}
#flex2{
  display:flex;
    width:80%;
    margin:0 auto;
}
#textalign2{
  font-size:70px;
    margin-right:0;
    margin-top: 100px;
    margin-left:30px;
    padding-left:80px;
    padding-right:0px;
}
#logo2{
  margin-left:150px;
    height:600px;
    width:900px;
    margin-top:30px;
    padding-top:30px;
}
.color{
  background-color:#E5E4E2;
  height:750px;
  margin-bottom:50px;
}
#button{
  width:400px;
  background-color:#0000cd;
  border:solid;
  border-radius:10px;
  font-size:30px;
  height:70px;
  margin-bottom:50px;
}
#button a{
  text-decoration:none;
  color:white;
}
.gallery1 img{
  width:900px;
  height:650px;
}
div.gallery1 {
  margin: 15px;
  margin-left:50px;
  border: 1px solid #ccc;
  float: left;
  width: 380px;
  height:430px;
  margin-bottom:0px;
  box-shadow: 8px 8px 5px 10px #000039;
  padding-bottom:0px;
}

div.gallery1:hover {
  border: 1px solid #777;
  box-shadow: 8px 8px 5px 10px #E5E4E2 ;
}

div.gallery1 img {
  width: 100%;
  height: 50%;

}

div.desc {
  padding: 15px;
  text-align: center;
  font-size:25px;
}
#gallery1{
  margin-left:130px;
  height:450px;
}
.container {
  position: relative;
}

/* Bottom right text */
.text-block {
  position: absolute;
  bottom: 350px;
  right: 500px;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
  height:150px;
  width:900px;
}
.segment{
    margin-left:240px;
    margin-top:0;
}
.subseg {
  float: left;
  width: 28%;
  margin-top:50px;
  padding: 15px;
}

/* Clear floats after the columns */
.segment:after {
  content: "";
  display: table;
  clear: both;
}
.subseg h2{
  font-size: 25px;
  font-weight:bold;
}
.subseg p{
  font-size:20px;
  padding:2px;

}
.footer{
  background-color:black;
  height:300px;
  margin-left:240px;
}
.complete{
  background-color:black;
}
</style>
<script type="text/javascript">
function myfun(){
  return(document.getElementById("textbox").value=="sat");
    //location.href="international.php";
    //window.open("C:\xampp\htdocs\php program\scholaro_login.php");
  }
</script>
</head>
<body>
<?php
if(isset($_POST['submit'])){
  $a="<script>myfun();</script>";
  if($a==1){
      echo("<script>document.location='http://localhost/internatinal.php'</script>");
    //echo ("<script>window.open('new.php','_self')</script>");
  }
}
?>
<div id="main_bar">
<p class="box">Scholaro_next</p>
<input id="textbox" type="text" name="text" placeholder="What are you looking for--">
<img class="search3 " src="search.png">
<form method="post">
<input class="search2" onclick="myfun()" type="submit" name="submit"  placeholder="Submit">
</form>
<a id="login" href="scholaro_login.php">Log in</a>
<a id="register" href="scholaro_register.php"> Register</a>
</div>
<div id="topbar">
   <a href="#home">Home</a>
   <a href="#e-learning">E-learning Platforms</a>
   <a href="#scholarships">Scholarships</a>
   <a href="#englishprof">English Proficiency</a>
   <a href="#national">Entrance Exams</a>
   <a href="#international">Apply International</a>
</div>
<div id="flex">
<h1 id="textalign">Learn Effortlessly and Grow with our experience</h1>
<img id="logo" src="cartoon logo2.jfif">
</div>
<h1 id="between">Take your first step on the ladder of Success</h1>
<div class="row">
  <div class="column">
    <h2>Choose your goal</h2>
    <p>Getting started with the right goal can pave the way to success.Take your step to become a person to want to see yourself as.</p>
  </div>
  
  <div class="column">
    <h2>Find your options</h2>
    <p>Exploring all the options provide you a great probability to achieve the desired goal.</p>
  </div>
  
  <div class="column">
    <h2>Apply</h2>
    <p>Getting to the most crucial stage that is applying to the dream college,taking one step closer to your glorious future. </p>
  </div>
</div>
<center style="font-size:35px;"><h1 id="e-learning">Prepare yourself for future,
Learn a new skill</h1></center>
<div id="gallery">
<div class="gallery">
<a target="_blank" href="https://www.udemy.com/?utm_source=adwords-brand&utm_medium=udemyads&utm_campaign=Brand-Udemy_la.EN_cc.INDIA&utm_term=_._ag_78279294239_._ad_450776424635_._de_c_._dm__._pl__._ti_kwd-43360705933_._li_21341_._pd__._&utm_term=_._pd__._kw_udemy%20courses_._&matchtype=e&gclid=Cj0KCQjwh_eFBhDZARIsALHjIKcR4GZ-JG_e203dOXjR7kKN3VJx7pYGXW0wRGDhO2pukySSAv4B55IaAtUsEALw_wcB">
<img src="udemy.png" alt="udemy" width="900" height="600"></a>
<div class="desc">Get what you want,choose from thousands of courses on udemy</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.coursera.org/in">
<img src="coursera.png" alt="udemy" width="900px" height="600px"></a>
<div class="desc">Get free courses and certification for the skills you have learnt on coursera.</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.freecodecamp.org/">
<img src="white.png" alt="udemy" width="900" height="600"></a>
<div class="desc">Practice with hundred of exercise without paying anything on codecamp</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.datacamp.com/">
<img src="datacamp.jfif" alt="udemy" width="900" height="600"></a>
<div class="desc">Learn datascience skills and get indulged in it with free courses on datacamp</div>
</div>
</div>
<div class="color">
<div id="flex2">
<h1 id="textalign2">Don't let anything get in your way. Explore from plenty of Scholarships</h1>
<img id="logo2" src="logo2.jpg">
</div>
</div>
<center style="font-size:35px; margin-top:0; padding-top:0;"><h1 id="scholarships">Scholarships for Financial Assistance</h1></center>
<div class="t1">
<div class="c1">
<table class="tabledesign"  cellpadding="5" cellspacing="7">
<thead>
<tr>
<th>National Scholarship</th>
</tr>
</thead>
<tbody>
<tr>
<td><a class="ft" href="Scholarship.html">->Pre and Post Matric Scholarship for students with disabilities</a></td>
</tr>
<tr>
<td><a class="ft" href="Scholarship.html">->Scholarship for Minorities</a></td>
</tr>
<tr>
<td><a class="ft" href="Scholarship.html">->Prime Minister Scholarship Scheme</a></td>
</tr>
<tr>
<td><a class="ft" href="Scholarship.html">->Central Sector Scheme Of Scholarship for College and University students</a></td>
</tr>
</tbody>
</table>
</div>
<div class="c1">
<table class="tabledesign"  cellpadding="5" cellspacing="7">
<thead>
<tr>
<th>International Scholarship</th>
</tr>
</thead>
<tbody>
<tr>
<td><a class="ft"href="Scholarship.html">->Commonwealth Scholarship and Fellowship</a></td>
</tr>
<tr>
<td><a class="ft"href="Scholarship.html">->Global Korea Scholarship</a></td>
</tr>
<tr>
<td><a class="ft"href="Scholarship.html">->Inlaks Shivdasani Foundation Scholarships</a></td>
</tr>
<tr>
<td><a class="ft"href="Scholarship.html">->Chinese Government Scholarship(under Indo-Chinese Relationship)</a></td>
</tr>
<tr>
<td><a class="ft"href="Scholarship.html">->Australian Embassy Fully Funded Scholarship </a></td>
</tr>
</tbody>
</table>
</div>
</div>
<center><button id="button"><a href="Scholarship.html">Explore More Scholarship</a></center></button>
<div class="color" style="background-color:#F5F5F5;">
<div id="flex2">
<img id="logo2" style="margin-left:90px; margin-top:50px;" src="exam.jpg">
<h1 id="textalign2">Get to know about some popular entrance exam in  the country</h1>
</div>
</div>
<div id="national">
<div id="gallery1">
<div class="gallery1">
<a href="national.html">
<img src="jee.jfif" alt="jee" width="900" height="600"></a>
<div class="desc">The Joint Entrance Examination is an all India standarised test for admission to various undergraduate engineering, technical and architectural courses.</div>
</div>
<div class="gallery1">
<a  href="national.html">
<img src="neet.jfif" alt="neet" width="900px" height="600px"></a>
<div class="desc">National Eligibility cum Entrance Exam, is an all India pre medical test for students who wish to pursue medical,dental and equivalent courses in government and private institutions.</div>
</div>
<div class="gallery1">
<a  href="national.html">
<img src="cat.jfif" alt="cat" width="900" height="600"></a>
<div class="desc">The Common Admission Test is a computer based test for admission in a graduate management program.</div>
</div>
<div class="gallery1">
<a  href="national.html">
<img src="gate.jfif" alt="gate" width="900" height="600"></a>
<div class="desc">The Graduate Aptitude Test in Engineering is an examination for undergraduate students in engineering and science for admission into the Masters Program and Job in Public Sector Companies.</div>
</div>
</div>
</div>
<center><button id="button" style="margin-top:50px;"><a href="national.html">Click here to know more</a></center></button>
<div class="container">
  <img src="grad2.jpg" alt="Norway" style="width:100%; height:700px;">
  <div class="text-block">
    <h1>Fullfil your dream, graduate from the college of your choice</h1>
    <h2>Be a better version of yourself</h2>
  </div>
</div>
<div class="segment">
  <div class="subseg">
    <h2 id="englishprof">English Proficiency test</h2>
    <p><a style="text-decoration:none;" href="english_proficiency.php">TOEFL</a>
    <br><a style="text-decoration:none;" href="english_proficiency.php">IELTS</a>
    <br><a style="text-decoration:none;" href="english_proficiency.php">TOEIC</a>
    <br><a style="text-decoration:none;" href="english_proficiency.php">CAE</a>
    <br><a style="text-decoration:none;" href="english_proficiency.php">CPE</a>
    <br><a style="text-decoration:none;" href="english_proficiency.php">Duolingo Test</a></p>
  </div>
  
  <div class="subseg">
    <h2>National Entrance Exam (after 12th)</h2>
    <p><a style="text-decoration:none;" href="national.html">DUET</a>
    <br><a style="text-decoration:none;" href="national.html">CLAT</a>
    <br><a style="text-decoration:none;" href="national.html">NIFT</a>
    <br><a style="text-decoration:none;" href="national.html">NID</a>
    <br><a style="text-decoration:none;" href="national.html">NATA</a>
    <br><a style="text-decoration:none;" href="national.html">BITSAT</a></p>
  </div>
  
  <div class="subseg">
    <h2>Other Popular Exam</h2>
    <p><a style="text-decoration:none;" href="national.html">UPSC</a>
    <br><a style="text-decoration:none;" href="national.html">PCS</a>
    <br><a style="text-decoration:none;" href="national.html">ISRO</a>
    <br><a style="text-decoration:none;" href="national.html">DRDO</a>
    <br><a style="text-decoration:none;" href="national.html">TIFR</a>
    <br><a id="international" style="text-decoration:none;" href="international.php">SAT</a>
    <br><a style="text-decoration:none;" href="international.php">GRE</a>
    <br><a style="text-decoration:none;" href="international.php">GMAT</a></p>
  </div>
</div>
<div class="complete">
<footer class="footer">
<div class="subseg" style="color:white;">
 <h2>Contact info</h2>
 <p>drishtisharma35@gmail.com</p>
</div>
<div class="subseg" style="color:white;">
<h2>Some other useful sites </h2>
<p><a href="https://www.w3schools.com/">W3 school</a><br><a href="https://www.geeksforgeeks.org/">GeeksforGeeks</a><br><a href="https://www.javatpoint.com/">Javatpoint</a></p>
</div>
<div class="subseg" style="color:white;">
<h2>Temperature Of Language</h2>
<p>I am strong because i've been weak.I am fearless coz i've been afraid.I am wise because i've been foolish. </p>
</div>
</footer>
<p style="color:white; font-size:20px; padding-bottom:5px; padding-left:1700px;">&#169 created by Drishti</p>
</div>
</body>
</html>