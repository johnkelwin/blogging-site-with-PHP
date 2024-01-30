
<!DOCTYPE html>
<html>
<head>
  <title>kalvikali-AboutUs-page</title>
  <link rel = "icon" type = "image/png" href = "images/logo.png"> 
  
   <!-----meta----->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="kalvikalai About Us page">
  <meta name="description" content="Learn more about us from this page.You can find our aim and why kalvikalai was created in this page.">
  <meta name="keywords" content="kalvikalai,aboutkalvikalai">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="author" content="kelwin">
  <meta property="og:site_name" content="kalvikalai">
  <meta property="og:url" content="https://www.kalvikalai.com/about-us.php">
  <link rel="canonical" content="https://www.kalvikalai.com/about-us.php">
  <meta property="og:type" content="website">

   <?php
    include 'plugins/kalvikalaiheadlink.php';
   ?>
   <style type="text/css">
    body{
      background-image: url("images/20200721_185706.jpg");
    }
    .subject_heading
    {
      color:red;
    }
    #top{
      margin-bottom:-20px;
    }
    a{
      text-decoration:none;
    }
    .entrance-exam-link a{
      color:white;
    }
    #demo img{
     max-width:100%;
     width:100%;
     height:300px;

    }
    #demo{
     max-width:100%;
    }
    .question-download
    {

      margin:5px;
      border-radius:30px;
      box-shadow:5px 5px 20px 1px grey;
    }
    .entrance-exam-link
    {
      margin:0px 20px 0px 20px;
      border-radius:7px;
    }
    .entrance-exam-link div
    {
      border-radius:20px;
    }
  
    .mycontainer
    {
      margin-top:40px;    
    }
    .question-download :hover div{
       box-shadow:5px 5px 20px 1px grey;
    }
    nav{
      width:100%;
    }
    h6{
      text-decoration:underline;
    }
   .footer
   {
    left:0;
    bottom:0;
    width:100%;
    height:100%;
    margin-bottom:-10px;
   }
   nav
   {
    left:0;
    right:0;
    
   }
   
  
  </style>
</head>
<body class="bg-light">
  <?php
   include 'plugins/kalvikalaibodylink.php';
   $bannertitle="About kalvikalai";
   include 'plugins/educationalblognavbar.php';
  ?>
  <h1 class="text-center text-success">About Kalvi Kalai</h1>
  <div class="container bg-light">
    <div class="row">
      <div col-md-6>
        <img src="images/logo.png" class="img-thumbnail rounded-circle" style="width:200px; float:left; margin-top:20px;margin-right:20px;"/>
        <p style="margin-top:40px;font-size:20px; color:gray;">Kalvi Kalai is an educational website.The aim  kalvikalai is to develop today for a better tomorrow.We know students are the pillar of the nation.We achive our aim by helping students to perform better in their academic.We will help student by providing model question paper and answer keys.We don't stop with academics we also post some exciting tings about tech and some useful products review.Here we will also teach computer programs and we will also conduct some exciting events in future.We won't stop with this website in future we will do lot of better things.</p>
      </div>
    </div>
  </div>
  
        <!--FOOTER-->
  <?php
   include 'plugins/educationalblogfooter.php';
  ?>
   
</body>
</html>