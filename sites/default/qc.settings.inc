<?php

/**
* Environment used during installation to enable/disable modules, etc
*/
$conf['app_environment'] = 'qc';
define('DEVELOPMENT_MODE', TRUE);

//override error reporting
$conf['error_level'] = 0;

$databases['default']['default'] = array (
  'database' => 'db_virgin_qc',
  'username' => 'adminuser',
  'password' => 'NcvCN39H',
  'host' => 'localhost',
  'port' => '',
  'driver' => 'mysql',
  'prefix' => '',
);

$db_url = 'mysql://adminuser:NcvCN39H@localhost/db_virgin_qc';
$db_prefix = '';

// Urbanairship configuration.
$conf['urbanairship_app_key'] = '75knmX4DR4agNuX9OC7EMA';
$conf['urbanairship_app_master_secret'] = '3YqiXvghQqC7JMBZ1In0XA';
$conf['urbanairship_push_url'] = 'https://go.urbanairship.com/api/push/';

//$conf['proxy_server'] = 'proxy.corp.globant.com';
//$conf['proxy_port'] = '3128';

/*
//Varnish version
$conf['varnish_version'] = 3;
//Tell Drupal it's behind a proxy
$conf['reverse_proxy'] = TRUE;
//Tell Drupal what addresses the proxy server(s) use
$conf['reverse_proxy_addresses'] = array('127.0.0.1');
//Bypass Drupal bootstrap for anonymous users so that Drupal sets max-age &gt; 0
$conf['page_cache_invoke_hooks'] = FALSE;
// Add Varnish as the page cache handler.
$conf['cache_backends'] = array('sites/all/modules/contrib/varnish/varnish.cache.inc');
// Set IP and PORT of Varnish
$conf['varnish_control_terminal'] = '127.0.0.1:6082';
$conf['cache_class_cache_page'] = 'VarnishCache';

$conf['cache'] = 1;
$conf['cache_lifetime'] = 0;
$conf['page_cache_maximum_age'] = 21600;
$conf['reverse_proxy_header'] = 'HTTP_X_FORWARDED_FOR';
$conf['omit_vary_cookie'] = TRUE;
*/
