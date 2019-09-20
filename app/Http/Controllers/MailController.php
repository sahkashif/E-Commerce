<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribed_user;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function mailVerification()
    {
        
        $mail = new PHPMailer(true);
        $email=request('emailField');
        if(DB::table('subscribed_users')->where('email', $email)->exists())
        {
            echo 'already subscribed';
            return view('home');
        }
        else
        {
            try {
                //Server settings
                #$mail->SMTPDebug = 2;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host       = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = '7dec731fef27a2';                  // SMTP username
                $mail->Password   = 'edc0784e58939a';                               // SMTP password
                $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('info@example.com', 'Mailer');
                $mail->addAddress($email,'saif');     // Add a recipient
               # $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');

                // Attachments
               # $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
               # $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Verify your email';
                $base_url="http://127.0.0.1:8000/subscribed/".$email."/";
                $mail->Body    = "
                    <p>Thanks for subscribing. Please click below link to verify your email.</p><br><p>Link-".$base_url."</p>
                ";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
                }
                catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
               return view('home');
        }
        
    }
}
