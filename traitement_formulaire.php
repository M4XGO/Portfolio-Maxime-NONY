<?php

if (issset($_POST['submit'])){
	$nom = $_POST['nom'];
	$emailFrom = $_POST['email'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];

	$mailTo = "maxime.nony.18@gmail.com";
	$headers = "From : ".$emailFrom;
	$txt = "Vous avez reçu un e-mail de ".$nom.".\n\n".$message;

	mail($mailTo, $objet, $txt, $headers);
	headers("Location: contact.html?mailsend")
}