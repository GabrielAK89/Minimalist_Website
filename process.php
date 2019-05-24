<?php
if (isset($_POST('submit'))) {
    $to = "gabrielak89@gmail.com";
    $subject = $_POST('subject');
    $email = $_POST('email');
    $txt = $_POST('message');
    $headers = "From: " . $mail . "/r/n";
    "CC: gabrielacatrinei89@gmail.com";

    mail($to, $subject, $message, $headers);

    header("Location: contact.html");
}
?>

.