<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['https://sts.windows.net/b6d71031-4e51-4951-affa-dda02674f57f/'] = array (
	'entityid' => 'https://sts.windows.net/b6d71031-4e51-4951-affa-dda02674f57f/',
	'contacts' =>
		array (
		),
	'metadata-set' => 'saml20-idp-remote',
	'SingleSignOnService' =>
		array (
			0 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
					'Location' => 'https://login.microsoftonline.com/b6d71031-4e51-4951-affa-dda02674f57f/saml2',
				),
			1 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
					'Location' => 'https://login.microsoftonline.com/b6d71031-4e51-4951-affa-dda02674f57f/saml2',
				),
		),
	'SingleLogoutService' =>
		array (
			0 =>
				array (
					'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
					'Location' => 'https://login.microsoftonline.com/b6d71031-4e51-4951-affa-dda02674f57f/saml2',
				),
		),
	'ArtifactResolutionService' =>
		array (
		),
	'keys' =>
		array (
			0 =>
				array (
					'encryption' => false,
					'signing' => true,
					'type' => 'X509Certificate',
					'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQOlWTNH1F+45DOydR7t8avjANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0xODAxMjMxNDIwMDlaFw0yMTAxMjMxNDIwMDlaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0XzB6X54/Nn6J/t1nfxMp80zLgdgRUDnU2fkPjpr68NIAcoNOH41rv7peABaGo0IhoZqTTOfiZkdOLa4Aua6qLlCKq4Ct/WqyJplGxY3d9PVqqJoc16vlzbvETXw0OlGBdAji1EoX4vk3VCHqPAnikd984vIsReHitnE2zwSv7xS2pJ3UO2dhe33ByB+yfSu0umxxnqc3E5pmsNUanUPE/c1k3cEwCGtDMvF/hKirk2FPwYYxp8ANJH7tAws/TqAv1DHjG/MS+vA6ur1T9+VyLAP1R2W1HDWYFuJbdkxEkHLGUvKpfuBGCf/2ApPI28T11STK5Gd1zWXeHTIuHFuWQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQC/GaPz1uoE85rDSauTBGbqPgm2DbQUVR9xhmCX3FIoH9lZNf5LNjd3maVrtfEFhvIOV1SpPsrpDgJiEKk0BMQQf+OSe7lARWzAy/O20SXKeFR5zE2qCpbRFpyxQQs1qZ5ykPsu7N/gM9hVA0OY+pdap9I3ueD2/0q2IXRAA8aGPVD89AJuzakcWoF/aLJ5C19f8AUqlpBm4EauMnmnJRcCf1LMxpZ3qFkMDRdnOzLuo8yNkQq4HH22bVThSf92CxmS3TQygclSpqsoAbuVcfnrXhIotlFKygdYeWaVIs3S8tS0LV0YxNOX6Mt8q7ZfGQksNq6mYuflLS/3xCX50KZM',
				),
		),
);