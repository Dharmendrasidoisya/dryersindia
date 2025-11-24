<?php
session_start();

$mykaptch = $_POST['capcode'];
$mycaptca = $_POST['captcha'];

if(isset($mycaptca) && $mycaptca !="" && $mykaptch == $mycaptca){

    $curl = $_POST['curl'];

    $mydomain = "www.dryersindia.com";
    // $mydomain = "localhost";

    // Extract the domain from the referring URL
    $referer_domain = parse_url($curl, PHP_URL_HOST);

    // Check if the referring domain matches your domain
    if ($referer_domain === $mydomain) {

        if (empty($_POST["pname"])) {
            header("location:".$curl."");
            exit; // Exit function if condition is met
        }
        if (empty($_POST["name"])) {
            header("location:".$curl."");
            exit; // Exit function if condition is met
        }else {
            $name = $_POST["name"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                header('location:contact.php');
                exit; // Exit function if condition is met
            }
        }
        // Validate email
        if (empty($_POST["email"])) {
            header("location:".$curl."");
            exit; // Exit function if condition is met
        }else{
            $email = $_POST["email"];
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('location:contact.php');
                exit; // Exit function if condition is met
            }
        }
        // Validate message
        if (empty($_POST["message"])) {
            header("location:".$curl."");
            exit; // Exit function if condition is met
        }else{
            $message = $_POST["message"];
            // Check if message contains URL, email, or special characters
            if (preg_match("/\b(?:https?|ftp):\/\/|www\.|[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}\b|\W/", $message)) {
                header('location:contact.php');
                exit; // Exit function if condition is met
            }
        }
        // If all conditions pass, redirect to success page or perform additional actions
        // Exit function if all conditions pass
    } else {
        header('location:contact.php');
        exit; // Exit function if condition is met
    }
}
else
{ ?>
<script>
	alert("Please Enter Captcha Code");
//alert("<?php echo $_POST['captcha'] ?>");
    window.location.href ="/contact.php";
</script>
<?php exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/SMTP.php';

$pname = $_POST['pname'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$cname = $_POST['cname'];
$address = $_POST['address'];
$esname = $_POST['esname'];

/* recipients */
$to  = $_POST['recipient'];

$subject = "Enquiry From Industrial Fabricators";

/* message */
$messageb .= "<font face=arial size=3><b>Enquiry From Industrial Fabricators</b><br>";
$messageb .= "==================================================";
$messageb .= "<br><font face=arial size=2> Name : ".$_POST['name']."<br>";
$messageb .= "<br><font face=arial size=2> Email : ".$_POST['email']."<br>";
$messageb .= "<br><font face=arial size=2> Phone No : ".$_POST['phone']."<br>";
$messageb .= "<br><font face=arial size=2> Location : ".$_POST['address']."<br>";
$messageb .= "<br><font face=arial size=2>Message : ".$_POST['message']."<br>";

$from = $_POST['name'];
/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
/* additional headers */
$headers .= "From: $name<$email>\r\n";

$form_fields = array_keys($_POST);
for ($i = 3; $i < sizeof($form_fields)-1; $i++)
{
    $field = "";
    $value = "";
    $thisField = $form_fields[$i];
    $field = $thisField;
    $thisValue = $_POST[$thisField];
    $value = $thisValue;
    $message1 .= $field ." = ". $value."<br />";
}


//Create a new PHPMailer instance
$mail = new PHPMailer(true);

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'TLS';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Set the subject line
$mail->Subject = 'Enquiry From Industrial Fabricators';

$mail->Username = 'mail.indiantradebird@gmail.com';
$mail->Password = 'bvyobyztypxrdhsb';
//$mail->SetFrom('rutvik@indiantradebird.com', 'Enquiry From Industrial Fabricators');
$mail->SetFrom('response@dryersindia.com', 'Enquiry From Industrial Fabricators');

$mail->Body = $messageb;
$mail->AddAddress('response@dryersindia.com'); // send address
$mail->AddAddress('rutvik@indiantradebird.com'); // send address
$mail->AddReplyTo($email);
$mail->addBcc("jitendra@goadsindia.co.in");
$mail->IsHTML(true);
if(!$mail->Send()) {
    // return false;
    header('location:contact.php');
} else {
    header('location:thankyou.html');
    // return true;
}

?>