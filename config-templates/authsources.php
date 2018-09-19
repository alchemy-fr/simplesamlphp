<?php
$config = array(
	'azure-sp' => array(
		'saml:SP',
		'entityID' => 'azure-sp',
		'privatekey' => 'saml.pem',
		'certificate' => 'saml.crt',
		'idp' => 'https://sts.windows.net/b6d71031-4e51-4951-affa-dda02674f57f/',
		'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
		'simplesaml.nameidattribute' => 'eduPersonTargetedID',
	)
);