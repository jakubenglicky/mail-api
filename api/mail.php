<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$smtpMailer = new \Nette\Mail\SmtpMailer([
	'host' => \getenv('SMTP_HOST'),
	'username' => \getenv('SMTP_USER'),
	'password' => \getenv('SMTP_PASSWORD'),
	'secure' => 'ssl',
]);

$msg = new \Nette\Mail\Message();
$msg->addTo('jakubenglicky@gmail.com');
$msg->setSubject('Ahoj');
$msg->setBody('ahoj');

$smtpMailer->send($msg);


