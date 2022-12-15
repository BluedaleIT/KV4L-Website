<?php
  include "conn.php";
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
    
  $sql = "Insert into contact_us (visitor_name,visitor_contact,visitor_email,visitor_message
  ) VALUES
  ('$name','$contact','$email','$message');";
  mysqli_query($conn, $sql);

  if (mysqli_affected_rows($conn)<=0)
  {
     echo "<script> alert ('Unable to register ! \\The Email Address Is Already In Use!');";
     die ("window.history.go(-1);</script>");
  }
  echo "<script> alert ('Thank you for contacting us! We will contact you again');";
  echo "window.location.href='index.html';</script>";
  ?>