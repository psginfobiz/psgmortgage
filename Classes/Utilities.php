<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Utilities
{
    public function sendEmail($data): string
    {
        $msg = '';

        $subject = "New Contact Form Submission Received";
        $prospectEmail = $data['Email'];

        $emailBody = "";
        foreach ($data as $key => $value) {
            $emailBody = $emailBody."".$key.": ".$value."\n";
        }

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->Username = 'team@psgpropertymanagement.com';
        $mail->Password = 'tj_E1&b>HpR4';

        $mail->setFrom('team@psgpropertymanagement.com', 'PSG Mortgages');
        $mail->addAddress('anoop@psginfobiz.com', 'DEV Account');
        if ($mail->addReplyTo($prospectEmail)) {
            $mail->Subject = $subject;
            $mail->isHTML(false);
            $mail->Body = $emailBody;
            if (!$mail->send()) {
                $msg = 'Sorry, something went wrong. Please try again later.';
            } else {
                $msg = 'Message sent! Thanks for contacting us.';
            }
        } else {
            $msg = 'Share it with us!';
        }

        return $msg;

    }

}
