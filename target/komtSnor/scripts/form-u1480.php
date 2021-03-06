<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.3.1.295
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Docent-formulier verzenden',
	'heading' => 'Nieuw formulier verzenden',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Ingeschakeld',
		'checkbox_unchecked' => 'Uitgeschakeld',
		'submitted_from' => 'Formulier verzonden op website: %s',
		'submitted_by' => 'IP-adres van bezoeker: %s',
		'too_many_submissions' => 'Te veel recente inzendingen van dit IP',
		'failed_to_send_email' => 'Verzenden van e-mail is mislukt',
		'invalid_reCAPTCHA_private_key' => 'Ongeldige reCAPTCHA-privécode.',
		'invalid_field_type' => 'Onbekend veldtype %s.',
		'unknown_method' => 'Onbekende serveraanvraagmethode'
	),
	'email' => array(
		'from' => 'stanrost@msn.com',
		'to' => 'stanrost@msn.com'
	),
	'fields' => array(
		'custom_U1481' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Voornaam',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Voornaam is vereist.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Achternaam',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Achternaam is vereist.',
				'format' => 'Veld Achternaam bevat een ongeldig e-mailadres.'
			)
		),
		'custom_U1493' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'HU Email',
			'required' => true,
			'errors' => array(
				'required' => 'Veld HU Email is vereist.'
			)
		),
		'custom_U1497' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Wachtwoord',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Wachtwoord is vereist.'
			)
		),
		'custom_U1486' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Herhaling wachtwoord',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Herhaling wachtwoord is vereist.'
			)
		),
		'custom_U1501' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Docentnummer',
			'required' => true,
			'errors' => array(
				'required' => 'Veld Docentnummer is vereist.'
			)
		)
	)
);

process_form($form);
?>
