<?php
// phpcs:ignoreFile

$databases['default']['default'] = [
  'database' => '',
  'username' => '',
  'password' => '',
  'prefix' => '',
  'host' => '',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];
$settings['hash_salt'] = '';
$config['simple_sitemap.settings']['base_url'] = '';
$config['stage_file_proxy.settings']['origin'] = '';  // Fill with Dev url.

$settings['config_sync_directory'] = '../config';
$settings['container_yamls'][] = __DIR__.'/local.services.yml';

$config['mailsystem.settings']['defaults']['sender'] = 'php_mail';
$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

$settings['skip_permissions_hardening'] = TRUE;
$settings['config_exclude_modules'] = [
  'devel',
//  'devel_generate',
  'stage_file_proxy',
  'webprofiler',
];
