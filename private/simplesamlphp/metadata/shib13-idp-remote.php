<?php
/**
 * SAML 1.1 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

/*
$metadata['theproviderid-of-the-idp'] = array(
	'SingleSignOnService'  => 'https://idp.example.org/shibboleth-idp/SSO',
	'certFingerprint'      => 'c7279a9f28f11380509e072441e3dc55fb9ab864',
);
*/

$metadata['colorado.edu'] = array(
  'SingleSignOnService'  => 'https://fedauth-test.colorado.edu/idp/shibboleth',
  'certFingerprint'      => '968A6B8B735711F3A61852D6C6E26C341F9D3668',
);
