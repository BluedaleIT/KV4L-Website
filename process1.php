<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Phone = $_POST['Phone'];
       $Email = $_POST['Email'];
       $Msg = $_POST['msg'];

       if(empty($Name) || empty($Phone) || empty($Email) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
		   $to = "enquiry@bluedale.com.my";
		   $Subject = "Form submission" ;
		   $Message ="Name : ".$Name. "\n"."Phone : ".$Phone."\n"."Wrote the following :"."\n".$Msg."\n"."Email : ".$Email;

           if(mail($to,$Subject,$Message))
           {
               
                echo "<script> alert ('Thank you for contacting us!');";
                echo "window.location.href='contact.php';</script>";
           }
       }
    }
    else
    {
       echo "<script> alert ('Please try again later!');";
                echo "window.location.href='contact.php';</script>";
    }
?>


