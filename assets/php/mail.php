<?php

$to 		= 'arpitsinghgautam777@gmail.com';

//All form values
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$name."\nEmail: ".$email."\nSubject: ".$subject."\n\nMessage: ".$msg;

$headers	= 'FROM: "'.$email.'"';
$send		= mail($to, $name, $output, $headers);

if ($send) {
    echo "Email sent successfully";
} else {
    echo "Failed to send email";
}
