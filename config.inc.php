<?php

/*
 * rcguard configuration file
 */

// Number of failed logins before reCAPTCHA is shown
$rcmail_config['failed_attempts'] = 3;

// Release IP after how many minutes (after last failed attempt)
$rcmail_config['expire_time'] = 10;

// Use HTTPS for reCAPTCHA
$rcmail_config['recaptcha_https'] = true;

// Keys can be obtained from http://recaptcha.net/whyrecaptcha.html

// Public key for reCAPTCHA
$rcmail_config['recaptcha_publickey'] = '';

// Private key for reCAPTCHA
$rcmail_config['recaptcha_privatekey'] = '';

// Log events
$rcmail_config['recaptcha_log'] = false;

// Event is not logged when set to NULL
// Parameter expansion:
// %r - Remote IP
// %u - Username
$rcmail_config['recaptcha_log_success'] = 'Verification succeeded for %u. [%r]';
$rcmail_config['recaptcha_log_failure'] = 'Error: Verification failed for %u. [%r]';

?>
