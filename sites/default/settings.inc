<?php

/**
 * Some distributions of Linux (most notably Debian) ship their PHP
 * installations with garbage collection (gc) disabled. Since Drupal depends on
 * PHP's garbage collection for clearing sessions, ensure that garbage
 * collection occurs by using the most common settings.
 */

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);

/**
 * Set session lifetime (in seconds), i.e. the time from the user's last visit
 * to the active session may be deleted by the session garbage collector. When
 * a session is deleted, authenticated users are logged out, and the contents
 * of the user's $_SESSION variable is discarded.
 */
ini_set('session.gc_maxlifetime', 2592000);

/**
 * Set session cookie lifetime (in seconds), i.e. the time from the session is
 * created to the cookie expires, i.e. when the browser is expected to discard
 * the cookie. The value 0 means "until the browser is closed".
 */
ini_set('session.cookie_lifetime', 2592000);

/**
 * Set PHP timezone to Buenos Aires
 */
//ini_set('date.timezone', 'America/Buenos_Aires');

//$conf['l10n_update_download_store'] = 'sites/all/translations';

/**
 * Never run cron upon a user request.
 */
$conf['cron_safe_threshold'] = 0;

//error reporting
$conf['error_level'] = 0;

// Only check locally. Do not download updates. See l10n_update.module constants.
//$conf['l10n_update_check_mode'] = 2;

/**
 * Derive proxy_server/proxy_port from https?_proxy env vars.
 * NOTE: We must use env vars because curl relies on them. Do not define $conf['proxy_server'] separately.
 */
$_proxy = getenv('http_proxy');
if (!$_proxy) {
  $_proxy = getenv('https_proxy');
}
if ($_proxy) {
  $_proxy = parse_url($_proxy);
  $conf['proxy_server'] = $_proxy['host'];
  if (isset($_proxy['port'])) {
    $conf['proxy_port'] = $_proxy['port'];
  }
} else {
  unset($conf['proxy_server'], $conf['proxy_port']);
}
$update_free_access = FALSE;
$drupal_hash_salt = 'drPK3eDHeOaLfYqpSG9fw2btPciqcoxfw98jiP_hiV8';
