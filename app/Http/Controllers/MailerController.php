<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\SMTP;
use phpmailer\phpmailer\Exception;

//NB below is required for PMWay.co.za
require '/home/pmwaypjv/vendor/phpmailer/phpmailer/src/Exception.php';
require '/home/pmwaypjv/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/home/pmwaypjv/vendor/phpmailer/phpmailer/src/SMTP.php';
//require '/home/pmwaypjv/vendor/vendor/autoload.php';

//require 'G:/xampp/htdocs/projectsway.hopto.org/vendor/phpmailer/phpmailer/src/Exception.php';
//require 'G:/xampp/htdocs/projectsway.hopto.org/vendor/phpmailer/phpmailer/src/PHPMailer.php';
//require 'G:/xampp/htdocs/projectsway.hopto.org/vendor/phpmailer/phpmailer/src/SMTP.php';

// echo (class_exists("phpmailer\phpmailer\phpmailer.php")) ? "Yes" : "No";



class MailerController extends Controller {

    // =============== [ Email ] ===================
    public function email() {
        return view("email");
    }


    // ========== [ Compose Email ] ================
   public function composeEmail(Request $request) {
    
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions     // Passing `true` enables exceptions

        try {

            // Email server settings
          
            $mail->isSMTP();
			$mail->SMTPKeepAlive = true;
            $mail->Host = 'mail.pmway.co.za';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'mark@pmway.co.za';   //  sender username
            $mail->Password = 'ibmhal13971';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('mark@pmway.co.za', 'Mark Corrigan');

          $mail->addAddress($request->emailRecipient);
            $mail->addCC($request->emailCc);
            $mail->addBCC($request->emailBcc);
 
          //  $mail->addReplyTo('mark@pmway.co.za', 'Mark Corrigan');
 
            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }
 
 
            $mail->isHTML(true);    // Set email content format to HTML
 
            $mail->Subject = $request->emailSubject;
            $mail->Body    = $request->emailBody;
 
           // $mail->AltBody = plain text version of email body;
              $mail->SMTPDebug = 3;
              sleep(8);
 
            if( ! $mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("success", "Email has been sent.");
            }
 
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}