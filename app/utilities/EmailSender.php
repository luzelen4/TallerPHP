<?php

namespace App\Utilities;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender
{
    public function sendMail($to, $subject)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->setFrom('your_email@example.com', 'Mailer');
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body    = 'This is a sample email body';
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
