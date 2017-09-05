<?php
function sendEmail($mail,$sujet,$mess)
{
	//$boundary = "-----=".md5(rand());

	$header = "From: \"Developont\"<stef.pachot1@gmail.com>\n";
	$header .= "Reply-to: \"Stephane\" <stef.pachot@gmail.com>\n";
	$header .= "MIME-Version: 1.0\n";
	$header .= "Content-Type: text/rfc822 [RFC822];\n";

	$message = "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
	$message .= "Content-Transfer-Encoding: 8bit\n";
	$message .= "$mess";

	mail($mail,$sujet,$message,$header);
}
?>
