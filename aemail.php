<?php
   include('db.php');
   include("adminsession.php");
   if(isset($_POST['submit'])
   {
      $from = $_SESSION['login_firstname'];
      /*$lname =  $_REQUEST["lastname"];*/
      $receiver =  $_REQUEST["to"];
      $subject =  $_REQUEST["subject"];
      $mailtext =  $_REQUEST["mailtext"];
      $headers .= "Cc:avibarfa98@gmail.com\r\n";
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html\r\n";

     // $reciver=filter_var($reciver,FILTER_SANITIZE_EMAIL);
      //$reciver=filter_var($reciver,FILTER_VALIDATE_EMAIL);
         
      mail($receiver,$subject,$mailtext); 
   }
?> 