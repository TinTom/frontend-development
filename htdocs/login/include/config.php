<?php

$htmlroot = "/login";
$emailFrom = "login@mail.local";

$smtpBackend = 'smtp';
$smtpParams = array (
		'host' => 'mail.local',
		'port' => 25,
		'auth' => false,
		'username' => 'testbox',
		'password' => 'testpass'
	);

$imapLogin = array (
		'hostname' => '{mail.local/novalidate-cert}INBOX',
		'username' => 'testbox',
		'password' => 'testpass'
	);
?>
