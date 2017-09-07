<?php
function sendEmail($email,$sujet,$message)
{
	// On assigne et protège nos variables
	$from=htmlspecialchars("From: Accraugaming.fr : ".$email."\r\n");
	$message=stripslashes(htmlspecialchars($message));

	// On met ici notre e-mail
	$destinataire="stephane.pachot@orange.fr";

	$verif = mail($destinataire,$sujet,$message,$from);

	if ($verif)
	{
		echo "<script>alert('L\'envoie du mail à fonctionné')</script>";
	}
	else
	{
		echo "<script>alert('Une ERREUR est survenue pendant l\'envoie du mail')</script>";
	}
}
?>
