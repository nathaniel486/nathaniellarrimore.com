<?php
        $email;$comment;$captcha;
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }if(isset($_POST['comment'])){
          $comment=$_POST['comment'];
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
            header( 'Location: contact.php' ) ;
			echo "<h2>Please check the 'I'm not a robot' box</h2>";
			exit;
        }
		include '../keys/recaptchaSecretKey.php';
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
            header( 'Location: recaptcha-fail.php' ) ;
        } else {
          echo 'Thank you for trying to contact me.  However I have not yet set up the email service on my server.  Try emailing me directly at nel5754@rit.edu.  Have a nice day :).';
		}
?>