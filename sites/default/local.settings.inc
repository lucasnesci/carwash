<?php

include_once __DIR__ . '/dev.settings.inc';

$databases['default']['default'] = array (
      'database' => 'carwash_vm',
      'username' => 'drupal',
      'password' => 'drupal',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
);

$db_url = 'mysql://root:root@localhost/carwash_vm';
$db_prefix = '';

/*
$conf['cache_backends'][] = 'sites/all/modules/contrib/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['memcache_key_prefix'] = 'unique_key';

$conf['cache_prefix'] = 'backend';
$conf['memcache_key_prefix'] = 'backend';
*/
