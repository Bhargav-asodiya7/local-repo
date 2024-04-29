<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title> Thank You</title>
<style>
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
</style>

<link rel="stylesheet" href="css/thank-you.css">

</head>
<body>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = strip_tags(trim($_POST["name"]));
				$fname = str_replace(array("\r","\n"),array(" "," "),$fname);
				
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = $_POST['phone'];
        $message = trim($_POST["message"]);

        if ( empty($fname)  OR empty($phone) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        $recipient = "bhargavasodiya1@gmail.com";

        $subject = "New contact from $fname";

        $email_content = "Name: $fname\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Subject: $subject\n";
        $email_content .= "Message: $message\n";

        $email_headers = 'From: '.$email.''       . "\r\n" .
                     'Reply-To: '.$email.'' . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
        	
        	    echo '<div class="thanks-msg">

            <div class="main-content">
            <p class="main-content__body" data-lead-id="main-content-body">Thanks, We will contact you soon!</p>
            </div>
            
            </div> ';
            
            header( "refresh:4;url=index.php" );

        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            
            echo '<div class="thanks-msg">

            <div class="main-content">
            <p class="main-content__body" data-lead-id="main-content-body">Oops! Something went wrong and we could not send your message.</p>
            </div>
            
            </div> ';
            
            header( "refresh:4;url=contact-us.php" );
            
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
