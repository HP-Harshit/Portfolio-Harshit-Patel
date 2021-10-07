<!-- <form id = “contact-form” method=”post” action=”contact-form-handler.php”> -->

<?php
$name = $_POST[‘text’};
$visitor_number = $_POST[‘mobile’};
$visitor_mail = $_POST[‘mail’};
$message = $_POST[‘msg’};

$email_from = ‘hnypatel0721@gmail.com’;

$email_subject = “New Form Submission”;

$email_body = “User Name: $name.\n”
		“User Number: $visitor_number.\n”
		“User E-mail: $visitor_mail.\n”
		“User Message: $message.\n”;

$to = harshitpatel274@gmail.com;

$headers = “From: $email_from \r\n”;

$headers = “Reply-To: $visitor_mail \r\n”;

mail($to. $email_subject, $email_body, $headers);

header(“Location: index.html);

?>
