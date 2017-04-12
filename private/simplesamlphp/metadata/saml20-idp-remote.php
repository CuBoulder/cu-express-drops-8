<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

/**
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
$metadata['https://fedauth-test.colorado.edu/idp/shibboleth'] = array(
  'name' => array(
    'en' => 'Web Express Service on Pantheon',
  ),
  'description'          => 'Used to login users of the Web Express service for sites hosted on Pantheon.',

  'SingleSignOnService'  => 'https://fedauth-test.colorado.edu/idp/profile/SAML2/Redirect/SSO',
  'SingleLogoutService'  => 'https://fedauth-test.colorado.edu/idp/profile/SAML2/Redirect/SLO',
  'certFingerprint'      => '968A6B8B735711F3A61852D6C6E26C341F9D3668'
);

