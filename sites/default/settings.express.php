<?php

/**
 * @file
 *
 * Place configuration specific to the Express profile in this file.
 */

if (isset($_ENV['PANTHEON_ENVIRONMENT'])) {
  # Decode Pantheon Settings
  $ps = json_decode($_SERVER['PRESSFLOW_SETTINGS'], TRUE);

  # Provide universal absolute path to the SAML library installation.
  # Used in Shibboleth authentication.
  $conf['simplesamlphp_auth_installdir'] = '/srv/bindings/'. $ps['conf']['pantheon_binding'] .'/code/private/simplesamlphp';
}

