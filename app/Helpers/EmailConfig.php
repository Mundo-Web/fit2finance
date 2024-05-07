<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static  function config($name): PHPMailer
    {
        
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info.fit2finance@gmail.com';
        $mail->Password = 'nurrvdyuziaxdubv';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = '' . $name . ', Gracias por comunicarte con Fit2finance';
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info.fit2finance@gmail.com', 'Fit2finance');
        return $mail;
    }
}