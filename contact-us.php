<!DOCTYPE html>
<html>
<head>
  <title>Contact us page of kalvikalai.</title>
  <link rel = "icon" type = "image/png" href = "images/logo.png"> 
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Contact us page of kalvikalai">
  <meta name="description" content="This is the contact us page of our website.you can contact us by filling this form,your message will be send to our team.Our kalvikalai team will respond you.">
  <meta name="keywords" content="kalvikalai,contact us of kalvikalai">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="author" content="kelwin">
  <link rel="canonical" href="https://www.kalvikalai.com/contact-us.php" />
  <meta property="og:site_name" content="kalvikalai">
  <meta property="og:url" content="https://www.kalvikalai.com/contact-us.php">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Contact us form of our website, you can contact us by filling this form,your message will be send to our team.Our kalvikalai team will respond you ">

  <?php
   include 'plugins/kalvikalaiheadlink.php';
  ?>
  <style type="text/css">
    p{
      color:gray;
    }
    footer p{
      color:white;
    }
    li{
        color:gray;
    }
    
  </style>
</head>
<body class="bg-light">
  <?php
    include 'plugins/kalvikalaibodylink.php';
    $bannertitle="Contact Us";
    include 'plugins/blognavbar.php';  
  ?>
  <div class="container text-center mb-5" style="border-radius:20px; ">
     <div class="row">
         <div class="col-lg-6 m-auto">
            <div class="card mt-5" style="border-radius: 20px;">
               <div class="card-title">
                 <h2 class="text-center py-2">Contact Us </h2>
                 <hr>
                 <?php
                   $msg="";
                   if(isset($_GET['error']))
                   {
                      $msg="Please Fill In the blanks";
                      echo '<div class="alert alert-danger">'.$msg.'</div>';

                 }
                 if(isset($_GET['success']))
                 {
                  $msg="Your message has been sent successfully";
                  echo '<div class="alert alert-success">'.$msg.'</div>';
                 }
                 ?>
               </div>
               <div class="card-body">
                 <form action="process.php" method="post">

                    <input type="text" name="name" placeholder="Your name" class="form-control mb-2">
                    <input type="email" name="Email"placeholder="E-mail" class="form-control mb-2">
                    <input type="text" name="subject" placeholder="Subject" class="form-control mb-2">
                    <textarea name="msg" class="form-control" placeholder="Enter your message"></textarea>
                    <button class="btn btn-success mt-5" name="submit">Send E-mail</button>

                   
                 </form>
               </div>
              
            </div>
           
         </div>
     </div>
  </div>

    

<!-------------------------------------------------FOOTER------------------------------------------------------------------------->
  <footer class="jumbotron bg-warning">
    <div class="row">
      <div class="col-md-6">
        <h5>kalvikalai:</h5>
        <p>Our aim is to develop today for a better tomorrow.</p>

      </div>
    </div>
    <hr class="bg-light" style="border:1px solid white;">
    <p class="text-center">&copy <span id="year"> </span> All rights reserved.</p>
  </footer>

        <!--FOOTER-->

  

        <!--LINKS-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootnavbar.js"></script>
  <script type="text/javascript">
    $("#navbar").bootnavbar();
  </script>
  <script>
    var year=new Date().getFullYear();
    document.getElementById("year").innerHTML(year);
  </script>
</body>
</html>
