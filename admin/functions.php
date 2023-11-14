<?php
include 'vendor/autoload.php';
use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;

$filesec = __DIR__ . '/../../';
// echo $filesec;
$dotenv = Dotenv::createImmutable($filesec);
$dotenv->load();


session_start();


// initializing variables
$username = "";
$email = "";
$errors = array();
$errors2 = array();

// connect to the database
$db = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE4']);



//edbug fucntion
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


function sendmail($subscriberemail, $content, $title)
{
    $errors2 = array();

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = $_ENV['MAIL_HOST1']; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $_ENV['MAIL_USER1']; //SMTP username
        $mail->Password = $_ENV['MAIL_PASS1']; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('it@bluedale.com.my', 'KL The Guide');
        $mail->addAddress($subscriberemail, 'Subscriber'); //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('it@bluedale.com.my');x
        // $mail->addCC('izmeera2000@gmail.com');

        // $mail->addBCC('izmeera2000@gmail.com');

        //Attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        $mail->addEmbeddedImage('../assets/img/LogoNav.png', 'logoimg'); //Add attachments
        $mail->addEmbeddedImage('../assets/email/6.jpg', 'imglink'); //Add attachments

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $title;
        $mail->Body = '
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        <a href="https://www.kltheguide.com.my/"> 
        <img src="cid:logoimg" style="display: block;
          margin-left: auto;
          margin-right: auto;">
        <a>
        <p style="font-family:Helvetica; font-size:18px">Hello ' . $subscriberemail . ',
        </p>
        <br>
        <p style="font-family:Helvetica; font-size:18px">We just updated our website.</p><a style="font-family:Helvetica; font-size:18px" href="https://www.kltheguide.com.my/">See More <br><br><br><br><br><br><img src="cid:imglink" style="display: block;max-width:650px;
          margin-left: auto;
          margin-right: auto;">
        <a>
        </a>
          
        ';
        $mail->AltBody = $title;

        // $mail->addEmbeddedImage('android-chrome-192x192.png', 'logo', 'android-chrome-192x192.png');
        $mail->send();
        // echo 'Message has been sent';
        array_push($errors2, "Message has been sent");

    } catch (Exception $e) {
        array_push($errors2, "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}
function sendmail3($subscriberemail, $content, $title)
{
    $errors2 = array();

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = $_ENV['MAIL_HOST1']; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $_ENV['MAIL_USER1']; //SMTP username
        $mail->Password = $_ENV['MAIL_PASS1']; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('enquiry@bluedale.com.my', 'KL The Guide');
        $mail->addAddress($subscriberemail, 'Subscriber'); //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('it@bluedale.com.my');x
        // $mail->addCC('izmeera2000@gmail.com');

        // $mail->addBCC('izmeera2000@gmail.com');

        //Attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
        $mail->addEmbeddedImage('../assets/img/LogoNav.png', 'logoimg'); //Add attachments
        $mail->addEmbeddedImage('../assets/img/email/6.jpg', 'footerimg', 'Sign'); //Add attachments
        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $title;
        ob_start();
        require_once 'sendemail.php';
        $output = ob_get_clean();
        $mail->Body = $output;
        // $mail->Body = '
        // <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        // <a href="https://www.kltheguide.com.my/"> 
        // <img src="cid:logoimg" style="display: block;
        //   margin-left: auto;
        //   margin-right: auto;">
        // <a>
        // <p style="font-family:Helvetica; font-size:18px">Hello ' . $subscriberemail . ',
        // </p>
        // <br>
        // <p style="font-family:Helvetica; font-size:18px">' . $content . '</p>
        // ';
        $mail->AltBody = $title;

        // $mail->addEmbeddedImage('android-chrome-192x192.png', 'logo', 'android-chrome-192x192.png');
        $mail->send();
        // echo 'Message has been sent';
        // array_push($errors2, "Message has been sent");

    } catch (Exception $e) {
        array_push($errors2, "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}

function sendmail2($subscriberemail, $content, $title)
{


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = $_ENV['MAIL_HOST1']; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $_ENV['MAIL_USER1']; //SMTP username
        $mail->Password = $_ENV['MAIL_PASS1']; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('enquiry@bluedale.com.my', 'KL The Guide');
        $mail->addAddress($subscriberemail, 'Subscriber'); //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('it@bluedale.com.my');
        // $mail->addCC('izmeera2000@gmail.com');

        // $mail->addBCC('izmeera2000@gmail.com');

        //Attachments
        $mail->addEmbeddedImage('assets/img/LogoNav.png', 'logoimg'); //Add attachments
        $mail->addEmbeddedImage('assets/img/email/6.jpg', 'footerimg', 'Sign'); //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML

        $mail->Subject = $title;
        ob_start();
        require_once 'welcomeemail.php';
        $output = ob_get_clean();
        $mail->Body = $output;
        //         $mail->Body = '

        //         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        // <a href="https://www.kltheguide.com.my/"> 
// <img src="cid:logoimg" style="display: block;
//   margin-left: auto;
//   margin-right: auto;">
// <a>
// <p style="font-family:Helvetica; font-size:18px">Hello ' . $subscriberemail . ',
// </p>
// <br>
// <p style="font-family:Helvetica; font-size:18px">Welcome to KL The Guide</p><a style="font-family:Helvetica; font-size:18px" href="https://www.kltheguide.com.my/">See More <img src="cid:footerimg" style="display: block;max-width:650px;
//   margin-left: auto;
//   margin-right: auto;">
// <a>
// </a>


        //         ';
        $mail->AltBody = $title;

        // $mail->addEmbeddedImage('android-chrome-192x192.png', 'logo', 'android-chrome-192x192.png');
        $mail->send();
        echo 'Message has been sent';
        // array_push($errors2, "Message has been sent");

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // array_push($errors2, "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");

    }
}

function uploadimage($formname, $folder, $category)
{

    $errors2 = array();

    // echo $folder ;
// echo $category;
    $target_dir = "../assets/img/" . $folder . "/" . $category;
    // echo $target_dir;
    $target_file = $target_dir . basename($formname["name"]);
    // echo $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($formname["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        // array_push($errors, "Wrongasdasdsan");

        // array_push($errors2, "File is an image - " . $check["mime"] . ".");


        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        array_push($errors2, "File is not an image");

        $uploadOk = 0;
    }


    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        array_push($errors2, "File already exists");

        $uploadOk = 0;
    }

    // Check file size
    if ($formname["size"] > 5000000) {
        // echo "Sorry, your file is too large.";
        array_push($errors2, "Your file is too large");

        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "webp"
    ) {
        // array_push($errors2, "only JPG, JPEG, PNG & GIF files are allowed");

        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        array_push($errors2, "File is not uploaded");
        // if everything is ok, try to upload file
    } else {
        // var_dump($errors2);

        if (move_uploaded_file(($formname["tmp_name"]), $target_file)) {
            array_push($errors2, "The file " . htmlspecialchars(basename($formname["name"])) . " has been uploaded.");

            $filename = basename($formname["name"]);
            return $filename;

        } else {
            array_push($errors2, "Error While Uploading Image");
            // echo "Error While Uploading PDF";


        }
    }
}


function uploadpdf($formname, $folder, $category)
{

    $errors2 = array();

    // echo $folder ;
// echo $category;
    $target_dir = "../assets/pdf/" . $folder . "/" . $category ;
    // echo $target_dir;
    $target_file = $target_dir ."/". basename($formname["name"]);
    // echo $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));





    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        array_push($errors2, "File already exists");
        // debug_to_console("exist");

        $uploadOk = 0;
    }

    // Check file size
    if ($formname["size"] > 5000000) {
        // echo "Sorry, your file is too large.";
        array_push($errors2, "Your file is too large");
        // debug_to_console("too large");

        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "pdf"
    ) {
        // array_push($errors2, "only JPG, JPEG, PNG & GIF files are allowed");
        // debug_to_console("not pdf");

        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        array_push($errors2, "File is not uploaded");
        // if everything is ok, try to upload file
        // debug_to_console("error upload");
    } else {
        // var_dump($errors2);
        debug_to_console( $target_file);

        if (move_uploaded_file(($formname["tmp_name"]), $target_file)) {
            array_push($errors2, "The file " . htmlspecialchars(basename($formname["name"])) . " has been uploaded.");

            $filename = basename($formname["name"]);
            return $filename;

        } else {
            // array_push($errors2, "Error While Uploading Image");
            // echo "Error While Uploading PDF";


        }
    }
}

function sendpushnotification($db, $pushtitle, $pushcontent)
{


    $notifications = [];

    $query = "SELECT * FROM pushsub";

    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_assoc($result)) {

        $endpoint = $row['endpoint'];
        $p256dh = $row['p256dh'];
        $auth = $row['auth'];

        $sub = [
            'subscription' => Subscription::create([
                'endpoint' => $endpoint,
                // Firefox 43+,
                'publicKey' => $p256dh,
                // base 64 encoded, should be 88 chars
                'authToken' => $auth, // base 64 encoded, should be 24 chars
            ])
        ];
        array_push($notifications, $sub);
        // var_dump($notifications);

    }
    $push = new WebPush([
        "VAPID" => [
            "subject" => "mailto: <izmeera2000@gmail.com>",
            "publicKey" => $_ENV['VAPID_PUBLIC_KEY'],
            "privateKey" => $_ENV['VAPID_PRIVATE_KEY']
        ]
    ]);
    foreach ($notifications as $notification) {

        $push->queueNotification($notification['subscription'], json_encode([
            "title" => $pushtitle,
            "body" => $pushcontent,
            "icon" => "../assets/img/android-chrome-192x192.png",
            "image" => "../assets/img/sign.jpg"
        ]));
    }

    foreach ($push->flush() as $report) {
        $endpoint = $report->getRequest()->getUri()->__toString();

        if ($report->isSuccess()) {
            echo "<br>[v] Message sent successfully for subscription {$endpoint}.";
            // array_push($errors2, "Message sent successfully for subscription");

        } else {
            echo "<br>[x] Message failed to sent for subscription {$endpoint}: {$report->getReason()}";
            // array_push($errors2, "{$endpoint}: {$report->getReason()}");

        }
    }
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $passbd = mysqli_real_escape_string($db, $_POST['passbd']);
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    if ($passbd != $_ENV['PASSBD']) {
        array_push($errors, "Password BD is wrong");
    }


    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}



//email subscribe
if (isset($_POST['subscribe'])) {

    $email = $_POST['emailsubscribe'];

    $user_check_query = "SELECT * FROM emailsub WHERE emailsub_email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    // $title = "Welcome To KL The Guide";
    // $content = "Welcome to KL The Guide";
    if ($user) { // if user exists

        // if ($user['emailsub_email'] === $email) {
        // }

    } else {
        $query = "INSERT INTO emailsub (emailsub_name, emailsub_email) 
        VALUES('', '$email')";
        mysqli_query($db, $query);
        $query2 = "SELECT * FROM welcomeemail";

        $result2 = mysqli_query($db, $query2);
        while ($row2 = mysqli_fetch_assoc($result2)) {

            $title = $row2['title'];
            $content = $row2['content'];

        }
        sendmail2($email, $content, $title);

    }



}

//email send
if (isset($_POST['sendmail'])) {

    $emailcontent = $_POST['emailcontent'];
    $emailtitle = $_POST['emailtitle'];

    $query = "SELECT * FROM emailsub  ";
    $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_assoc($result)) {



        sendmail3($row['emailsub_email'], $emailcontent, $emailtitle);

    }




}

//pushnotification
if (isset($_POST['sendpushnotification'])) {


    $pushtitle = $_POST['pushtitle'];
    $pushcontent = $_POST['pushcontent'];

    $notifications = [];

    $query = "SELECT * FROM pushsub";

    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_assoc($result)) {

        $endpoint = $row['endpoint'];
        $p256dh = $row['p256dh'];
        $auth = $row['auth'];

        $sub = [
            'subscription' => Subscription::create([
                'endpoint' => $endpoint,
                // Firefox 43+,
                'publicKey' => $p256dh,
                // base 64 encoded, should be 88 chars
                'authToken' => $auth, // base 64 encoded, should be 24 chars
            ])
        ];
        array_push($notifications, $sub);
        // var_dump($notifications);

    }

    $defaultOptions = [
        "TTL" => 0,
        // defaults to 4 weeks
        "urgency" => "normal",
        // protocol defaults to "normal". (very-low, low, normal, or high)
        "topic" => "newEvent",
        // not defined by default. Max. 32 characters from the URL or filename-safe Base64 characters sets
        "batchSize" => 200, // defaults to 1000
    ];
    $push = new WebPush([
        "VAPID" => [
            "subject" => "mailto: <izmeera2000@gmail.com>",
            "publicKey" => $_ENV['VAPID_PUBLIC_KEY'],
            "privateKey" => $_ENV['VAPID_PRIVATE_KEY']
        ]   
    ], $defaultOptions);
    $push->setDefaultOptions($defaultOptions);

    foreach ($notifications as $notification) {

        $push->queueNotification($notification['subscription'], json_encode([
            "title" => $pushtitle,
            "body" => $pushcontent,
            "icon" => "../assets/img/android-chrome-192x192.png",
            "image" => "../assets/img/sign.jpg",
            "badge" => "../assets/img/android-chrome-192x192.png",
            "data" => ["url" => "ebook.php#ebook"],
        ]));
    }

    foreach ($push->flush() as $report) {
        $endpoint = $report->getRequest()->getUri()->__toString();

        if ($report->isSuccess()) {
            // echo "<br>[v] Message sent successfully for subscription {$endpoint}.";
            array_push($errors2, "Message sent successfully for subscription");

        } else {
            // echo $report->getReason();
            // echo $endpoint;

            $query = "DELETE FROM pushsub WHERE endpoint='$endpoint'";
            mysqli_query($db, $query);

            // array_push($errors2, "{$endpoint}: {$report->getReason()}");


        }
    }

}
//post user sub data to db
if (isset($_POST['sub'])) {

    $p256dh = json_decode($_POST["sub"])->keys->p256dh;
    $auth = json_decode($_POST["sub"])->keys->auth;
    $endpoint = json_decode($_POST["sub"])->endpoint;
    var_dump(json_decode($_POST["sub"], true));


    $query = "INSERT INTO pushsub (endpoint, p256dh, auth) 
    VALUES('$endpoint', '$p256dh', '$auth')";
    mysqli_query($db, $query);


}


include 'pagefunctions/sub.php';

include 'pagefunctions/edit-index.php';
include 'pagefunctions/edit-pageviews.php';
include 'pagefunctions/edit-blog.php';
include 'pagefunctions/edit-ebook.php';


include 'pagefunctions/edit-explorekv_ss.php';
include 'pagefunctions/edit-explorekv_eco.php';
include 'pagefunctions/edit-explorekv_agro.php';
include 'pagefunctions/edit-explorekv_gh.php';
include 'pagefunctions/edit-explorekv_eo.php';
include 'pagefunctions/edit-explorekv_pwor.php';
include 'pagefunctions/edit-explorekv_sports.php';
include 'pagefunctions/edit-explorekv_no.php';
include 'pagefunctions/edit-explorekv_kv4k.php';
include 'pagefunctions/edit-explorekv_ig.php';
include 'pagefunctions/edit-explorekv_beauty.php';
include 'pagefunctions/edit-medical_tourism.php';
include 'pagefunctions/edit-shopkv.php';
include 'pagefunctions/edit-spakv.php';


include 'pagefunctions/edit-beyondkl-es.php';
include 'pagefunctions/edit-beyondkl-h.php';
include 'pagefunctions/edit-beyondkl-hs.php';
include 'pagefunctions/edit-beyondkl-w.php';
include 'pagefunctions/edit-beyondkl-i.php';

include 'pagefunctions/edit-accomodation.php';


include 'pagefunctions/edit-pts.php';

include 'pagefunctions/edit-spa.php';

include 'pagefunctions/edit-mt.php';

?>