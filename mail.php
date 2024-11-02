<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Composer autoload file path

ob_start(); // Start output buffering

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'princesingh2632002@gmail.com'; // Your Gmail email
        $mail->Password = 'lusk iqtu teyo tnwa'; // Your Gmail password or App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('princesingh2632002@gmail.com', 'Mailer');
        $mail->addAddress('princesingh2632002@gmail.com'); // Recipient email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'For Enquiry';
        $mail->Body = '
            <html>
            <head><title>New Enquiry Details</title></head>
            <body>
            <table border=1 style="border-collapse:collapse; width:100%;">
                <tr><th style="text-align: center; padding: 8px; background-color: rgb(3, 71, 128); color: white;">Name</th><th style="text-align: center; padding: 8px; background-color:rgb(241, 127, 127); color: white;">' . $name . '</th></tr>
                <tr><th style="text-align: center; padding: 8px; background-color: rgb(3, 71, 128); color: white;">Email</th><th style="text-align: center; padding: 8px; background-color:rgb(241, 127, 127); color: white;">' . $email . '</th></tr>
                <tr><th style="text-align: center; padding: 8px; background-color: rgb(3, 71, 128); color: white;">Phone</th><th style="text-align: center; padding: 8px; background-color:rgb(241, 127, 127); color: white;">' . $phone . '</th></tr>
                <tr><th style="text-align: center; padding: 8px; background-color: rgb(3, 71, 128); color: white;">Address</th><th style="text-align: center; padding: 8px; background-color:rgb(241, 127, 127); color: white;">' . $address . '</th></tr>
                <tr><th style="text-align: center; padding: 8px; background-color: rgb(3, 71, 128); color: white;">Message</th><th style="text-align: center; padding: 8px; background-color:rgb(241, 127, 127); color: white;">' . $message . '</th></tr>
            </table>
            </body>
            </html>
        ';

        // Enable debugging
        $mail->SMTPDebug = 2; // 0 = off (for production use), 1 = client messages, 2 = client and server messages

        // Send email
        if ($mail->send()) {
            ob_end_clean(); // Clean the buffer
            echo "
            <html>
            <head>
                <style>
                    .modal { display: block; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.8); }
                    .modal-content { background-color: white; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%; max-width: 500px; text-align: center; border-radius: 10px; }
                    .ok-button { padding: 10px 20px; font-size: 16px; color: white; background-color: #4CAF50; border: none; border-radius: 5px; cursor: pointer; }
                    .ok-button:hover { background-color: #45a049; }
                    .emoji { font-size: 2em; vertical-align: middle; }
                    h2, p { color: white; }
                </style>
            </head>
            <body>
                <div id='myModal' class='modal'>
                    <div class='modal-content'>
                        <i class='emoji'>&#x2705;</i>
                        <h2>Congratulations, " . $name . "</h2>
                        <p>Your information has been successfully submitted.</p>
                        <button class='ok-button' onclick='redirectToIndex()'>Close</button>
                    </div>
                </div>
                <script>
                    function redirectToIndex() { window.location.href = 'index.php'; }
                </script>
            </body>
            </html>
            ";
        } else {
            echo "Mailer Error: {$mail->ErrorInfo}";
        }
    } catch (Exception $e) {
        // Error handling
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>