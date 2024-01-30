<?php
  if(isset($_POST["submit"]))
  {
  	$name=$_POST["name"];
  	$email=$_POST['Email'];
  	$subject=$_POST['subject'];
  	$message=$_POST['msg'];
  	if(empty($name)||empty($email)||empty($subject)||empty($message))
  	{
  		header('location:contact-us.php?error');
  	}
  	else
  	{
  		$to="kalvikalai.com@gmail.com";

  		if(mail($to,$subject,$message,$email))
  		{
  			header("location:contact-us.php?success");
  		}

  	}
  }
  else
  {
  	header('location:contact-us.php');
  }
?>