<?php
/**
 * @file Drupal's 9 settings.php file
 *
 * This file was automatically generated by Aegir 7.x-3.x
 * on Mon, 15 Mar 2021 16:35:25 +0000.
 *
 * If it is still managed by Aegir, changes to this file may be
 * lost. If it is not managed by aegir, you should remove this header
 * to avoid further confusion.
 */

/**
 * Detecting subdirectory mode
 */
if (isset($_SERVER['SITE_SUBDIR']) && isset($_SERVER['RAW_HOST'])) {
  $base_url = 'http://' . $_SERVER['RAW_HOST'] . '/' . $_SERVER['SITE_SUBDIR'];
  ini_set('session.cookie_path', '/' . $_SERVER['SITE_SUBDIR'] . '/');
}


  $databases['default']['default'] = array(
    'driver' => "mysql",
    'database' => "warringtontrotar",
    'username' => "warringtontrotar",
    'password' => "6MUNGLRHEW",
    'host' => "localhost",
    'port' => "3306",
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_general_ci',
   );
  $db_url['default'] = "mysql://warringtontrotar:6MUNGLRHEW@localhost:3306/warringtontrotar";


  /**
  * PHP settings: (managed in BOA via site and platform level INI files)
  *
  * To see what PHP settings are possible, including whether they can
  * be set at runtime (ie., when ini_set() occurs), read the PHP
  * documentation at http://www.php.net/manual/en/ini.php#ini.list
  * and take a look at the .htaccess file to see which non-runtime
  * settings are used there. Settings defined here should not be
  * duplicated there so as to avoid conflict issues.
  */
  //ini_set('session.gc_probability', 1);
  //ini_set('session.gc_divisor', 100);
  //ini_set('session.gc_maxlifetime', 200000);
  //ini_set('session.cookie_lifetime', 2000000);

  /**
  * Set the umask so that new directories created by Drupal have the correct permissions
  */
  umask(0002);

  $settings['file_public_path'] = 'sites/warrington-t.rotaryclubs.us/files';
  $settings['file_private_path'] = 'sites/warrington-t.rotaryclubs.us/private/files';
  $settings['file_temp_path'] = 'sites/warrington-t.rotaryclubs.us/private/temp';
  $config['system.file']['path']['temporary'] = 'sites/warrington-t.rotaryclubs.us/private/temp';
  $settings['config_sync_directory'] = 'sites/warrington-t.rotaryclubs.us/private/config/sync';
  $settings['hash_salt'] = '8xCs7eXp3_sjiwgRkBHam_jZnpWxwVwquM-2FlM0KOcTi53XYgR3Cs01DbL-7sXY5ECByyoaFg';
  $settings['aegir_api'] = 3;
  $settings['allow_authorize_operations'] = FALSE;

  /**
   * Useless currently, because it is not used in Drupal 8 anyway.
   * Instead, Drupal 8 is trying to set the clean URLs mode on the fly,
   * depending on the request, so we should force this by redirecting
   * non-clean to clean URLs on the web server level - Nginx example:
   *
   *   rewrite ^/index.php/(.*)$ $scheme://$host/$1 permanent;
   *
   */
  $settings['clean_url'] = 1;


  /**
   * Load services definition file.
   */
  $settings['container_yamls'][] = __DIR__ . '/services.yml';

  /**
   * Trusted Host Settings support.
   */
  $settings['trusted_host_patterns'] = array(
    '^warrington-t\.rotaryclubs\.us$',
    '^www\.warrington-t\.rotaryclubs\.us$',
    '^localhost$',
    '^localhost\.*',
    '\.local$',
  );

  /**
   * Set the Syslog identity to the site name so it's not always "drupal".
   */
  $config['syslog.settings']['identity'] = 'warrington-t.rotaryclubs.us';

  /**
   * If external request was HTTPS but internal request is HTTP, set $_SERVER['HTTPS'] so Drupal detects the right scheme.
   */
  if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && isset($_SERVER['REQUEST_SCHEME'])) {
    if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' && $_SERVER["REQUEST_SCHEME"] == 'http') {
      $_SERVER['HTTPS'] = 'on';
    }
  }

# Extra configuration from modules:

  # Additional host wide configuration settings. Useful for safely specifying configuration settings.
  if (is_readable('/data/disk/o800026880/config/includes/global.inc')) {
    include('/data/disk/o800026880/config/includes/global.inc');
  }

  # Additional platform wide configuration settings.
    if (is_readable('/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/sites/all/platform.settings.php')) {
    include('/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/sites/all/platform.settings.php');
  }

  # Additional platform wide configuration settings.
  if (is_readable('/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/sites/all/settings.php')) {
    include_once('/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/sites/all/settings.php');
  }

  # Additional site configuration settings.
  if (is_readable('/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/sites/warrington-t.rotaryclubs.us/local.settings.php')) {
    include('/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/sites/warrington-t.rotaryclubs.us/local.settings.php');
  }