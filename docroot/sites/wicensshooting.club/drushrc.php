<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'hN9YkEbK2s';
$options['db_name'] = 'wicensshootingcl';
$options['db_user'] = 'wicensshootingcl';
$options['profile_installed'] = true;
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '9.0.6',
      'description' => 'This platform is running Drupal 9.0.6',
    ),
  ),
  'profiles' => 
  array (
    'thunder' => 
    array (
      'name' => 'Thunder',
      'info' => 
      array (
        'name' => 'Thunder',
        'type' => 'profile',
        'description' => 'The Drupal based CMS for professional publishing.',
        'project' => 'thunder',
        'core_version_requirement' => '^9',
        'version' => '6.0.2',
        'distribution' => 
        array (
          'name' => 'Thunder',
          'install' => 
          array (
            'theme' => 'thunder_admin',
            'finish_url' => '/?tour=1',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'config_selector:config_selector',
          1 => 'drupal:media',
          2 => 'drupal:node',
          3 => 'drupal:views',
          4 => 'update_helper:update_helper',
        ),
        'install' => 
        array (
          0 => 'drupal:block',
          1 => 'drupal:breakpoint',
          2 => 'drupal:ckeditor',
          3 => 'drupal:contextual',
          4 => 'drupal:menu_link_content',
          5 => 'drupal:datetime',
          6 => 'drupal:editor',
          7 => 'drupal:image',
          8 => 'drupal:inline_form_errors',
          9 => 'drupal:menu_ui',
          10 => 'drupal:language',
          11 => 'drupal:options',
          12 => 'drupal:path',
          13 => 'drupal:page_cache',
          14 => 'drupal:taxonomy',
          15 => 'drupal:dblog',
          16 => 'drupal:dynamic_page_cache',
          17 => 'drupal:toolbar',
          18 => 'drupal:field_ui',
          19 => 'drupal:file',
          20 => 'drupal:responsive_image',
          21 => 'drupal:views_ui',
          22 => 'access_unpublished:access_unpublished',
          23 => 'admin_toolbar:admin_toolbar_tools',
          24 => 'admin_toolbar:admin_toolbar_links_access_filter',
          25 => 'autosave_form:autosave_form',
          26 => 'autofill:autofill',
          27 => 'blazy:blazy',
          28 => 'content_lock:content_lock',
          29 => 'ctools:ctools',
          30 => 'diff:diff',
          31 => 'dropzonejs:dropzonejs_eb_widget',
          32 => 'empty_fields:empty_fields',
          33 => 'entity_browser:entity_browser_entity_form',
          34 => 'field_group:field_group',
          35 => 'focal_point:focal_point',
          36 => 'length_indicator:length_indicator',
          37 => 'linkit:linkit',
          38 => 'media_entity_instagram:media_entity_instagram',
          39 => 'media_entity_pinterest:media_entity_pinterest',
          40 => 'media_entity_slideshow:media_entity_slideshow',
          41 => 'media_entity_twitter:media_entity_twitter',
          42 => 'media_expire:media_expire',
          43 => 'metatag:metatag',
          44 => 'metatag:metatag_open_graph',
          45 => 'metatag:metatag_facebook',
          46 => 'metatag:metatag_twitter_cards',
          47 => 'paragraphs:paragraphs',
          48 => 'paragraphs_features:paragraphs_features',
          49 => 'pathauto:pathauto',
          50 => 'redirect:redirect',
          51 => 'scheduler:scheduler',
          52 => 'scheduler:scheduler_content_moderation_integration',
          53 => 'shariff:shariff',
          54 => 'select2:select2',
          55 => 'simple_sitemap:simple_sitemap',
          56 => 'slick:slick',
          57 => 'responsive_preview:responsive_preview',
          58 => 'update_helper_checklist:update_helper_checklist',
          59 => 'thunder:thunder_article',
          60 => 'thunder:thunder_media',
          61 => 'thunder:thunder_paragraphs',
          62 => 'thunder:thunder_taxonomy',
          63 => 'thunder:thunder_workflow',
        ),
        'themes' => 
        array (
          0 => 'seven',
          1 => 'thunder_base',
          2 => 'thunder_admin',
        ),
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/thunder.info.yml',
      'path' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder',
      'version' => '9.0.6',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'action' => 
    array (
      'name' => 'Actions',
      'type' => 'module',
      'description' => 'Allows configuration of tasks to be executed in response to events.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.action.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/action/action.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'aggregator' => 
    array (
      'name' => 'Aggregator',
      'type' => 'module',
      'description' => 'Gathers and displays syndicated content (RSS, RDF, and Atom feeds) from external sources.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'aggregator.admin_settings',
      'dependencies' => 
      array (
        0 => 'drupal:file',
        1 => 'drupal:options',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/aggregator/aggregator.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'automated_cron' => 
    array (
      'name' => 'Automated Cron',
      'type' => 'module',
      'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'system.cron_settings',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/automated_cron/automated_cron.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ban' => 
    array (
      'name' => 'Ban',
      'type' => 'module',
      'description' => 'Allows administrators to ban visits from specific IP addresses.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'ban.admin_page',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/ban/ban.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'basic_auth' => 
    array (
      'name' => 'HTTP Basic Authentication',
      'type' => 'module',
      'description' => 'Supplies an HTTP Basic authentication provider.',
      'package' => 'Web services',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:user',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/basic_auth/basic_auth.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'big_pipe' => 
    array (
      'name' => 'BigPipe',
      'type' => 'module',
      'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/big_pipe/big_pipe.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'block' => 
    array (
      'name' => 'Block',
      'type' => 'module',
      'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'block.admin_display',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block/block.info.yml',
      'status' => 1,
      'schema_version' => 8003,
    ),
    'block_content' => 
    array (
      'name' => 'Custom Block',
      'type' => 'module',
      'description' => 'Allows the creation of custom blocks and block types.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:block',
        1 => 'drupal:text',
        2 => 'drupal:user',
      ),
      'configure' => 'entity.block_content.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block_content/block_content.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'book' => 
    array (
      'name' => 'Book',
      'type' => 'module',
      'description' => 'Allows users to create and organize related content in an outline.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:node',
      ),
      'configure' => 'book.settings',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/book/book.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'breakpoint' => 
    array (
      'name' => 'Breakpoint',
      'type' => 'module',
      'description' => 'Manages breakpoints and breakpoint groups for responsive designs.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/breakpoint/breakpoint.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ckeditor' => 
    array (
      'name' => 'CKEditor',
      'type' => 'module',
      'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:editor',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/ckeditor/ckeditor.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'color' => 
    array (
      'name' => 'Color',
      'type' => 'module',
      'description' => 'Allows users to change the color scheme of compatible themes.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/color/color.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'comment' => 
    array (
      'name' => 'Comment',
      'type' => 'module',
      'description' => 'Allows users to comment on content.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:text',
      ),
      'configure' => 'comment.admin',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/comment/comment.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'config' => 
    array (
      'name' => 'Configuration Manager',
      'type' => 'module',
      'description' => 'Allows administrators to import and export configuration changes.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'config.sync',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/config.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'config_translation' => 
    array (
      'name' => 'Configuration Translation',
      'type' => 'module',
      'description' => 'Allows users to translate configuration text.',
      'package' => 'Multilingual',
      'version' => '9.0.6',
      'configure' => 'config_translation.mapper_list',
      'dependencies' => 
      array (
        0 => 'drupal:locale',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config_translation/config_translation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'contact' => 
    array (
      'name' => 'Contact',
      'type' => 'module',
      'description' => 'Provides site-wide contact forms and forms to contact individual users.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.contact_form.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contact/contact.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'content_moderation' => 
    array (
      'name' => 'Content Moderation',
      'type' => 'module',
      'description' => 'Provides moderation states for content.',
      'version' => '9.0.6',
      'package' => 'Core',
      'configure' => 'entity.workflow.collection',
      'dependencies' => 
      array (
        0 => 'drupal:workflows',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_moderation/content_moderation.info.yml',
      'status' => 1,
      'schema_version' => 8700,
    ),
    'content_translation' => 
    array (
      'name' => 'Content Translation',
      'type' => 'module',
      'description' => 'Allows users to translate content.',
      'dependencies' => 
      array (
        0 => 'drupal:language',
      ),
      'package' => 'Multilingual',
      'version' => '9.0.6',
      'configure' => 'language.content_settings_page',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_translation/content_translation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'contextual' => 
    array (
      'name' => 'Contextual Links',
      'type' => 'module',
      'description' => 'Provides contextual links to directly access tasks related to page elements.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contextual/contextual.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'datetime' => 
    array (
      'name' => 'Datetime',
      'type' => 'module',
      'description' => 'Defines datetime form elements and a datetime field type.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/datetime/datetime.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'datetime_range' => 
    array (
      'name' => 'Datetime Range',
      'type' => 'module',
      'description' => 'Provides the ability to store end dates.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:datetime',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/datetime_range/datetime_range.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'dblog' => 
    array (
      'name' => 'Database Logging',
      'type' => 'module',
      'description' => 'Logs system events in the database.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'system.logging_settings',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/dblog/dblog.info.yml',
      'status' => 1,
      'schema_version' => 8600,
    ),
    'dynamic_page_cache' => 
    array (
      'name' => 'Internal Dynamic Page Cache',
      'type' => 'module',
      'description' => 'Caches pages, including those with dynamic content, for all users.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/dynamic_page_cache/dynamic_page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'editor' => 
    array (
      'name' => 'Text Editor',
      'type' => 'module',
      'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:filter',
        1 => 'drupal:file',
      ),
      'configure' => 'filter.admin_overview',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/editor/editor.info.yml',
      'status' => 1,
      'schema_version' => 8001,
    ),
    'field' => 
    array (
      'name' => 'Field',
      'type' => 'module',
      'description' => 'Field API to add fields to entities like nodes and users.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/field.info.yml',
      'status' => 1,
      'schema_version' => 8500,
    ),
    'field_layout' => 
    array (
      'name' => 'Field Layout',
      'type' => 'module',
      'description' => 'Allows users to configure the display and form display by arranging fields in several columns.',
      'package' => 'Core (Experimental)',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:layout_discovery',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field_layout/field_layout.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field_ui' => 
    array (
      'name' => 'Field UI',
      'type' => 'module',
      'description' => 'Provides a user interface for the Field module.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field_ui/field_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'file' => 
    array (
      'name' => 'File',
      'type' => 'module',
      'description' => 'Defines a field type for files.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/file/file.info.yml',
      'status' => 1,
      'schema_version' => 8700,
    ),
    'filter' => 
    array (
      'name' => 'Filter',
      'type' => 'module',
      'description' => 'Filters content in preparation for display.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'filter.admin_overview',
      'dependencies' => 
      array (
        0 => 'drupal:user',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/filter/filter.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'forum' => 
    array (
      'name' => 'Forum',
      'type' => 'module',
      'description' => 'Provides discussion forums.',
      'dependencies' => 
      array (
        0 => 'drupal:node',
        1 => 'drupal:history',
        2 => 'drupal:taxonomy',
        3 => 'drupal:comment',
        4 => 'drupal:options',
      ),
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'forum.overview',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/forum/forum.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'hal' => 
    array (
      'name' => 'HAL',
      'type' => 'module',
      'description' => 'Serializes entities using Hypertext Application Language.',
      'package' => 'Web services',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:serialization',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/hal/hal.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'help' => 
    array (
      'name' => 'Help',
      'type' => 'module',
      'description' => 'Manages the display of online help.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/help/help.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'help_topics' => 
    array (
      'name' => 'Help Topics',
      'type' => 'module',
      'description' => 'Displays help topics provided by themes and modules.',
      'package' => 'Core (Experimental)',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:help',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/help_topics/help_topics.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'history' => 
    array (
      'name' => 'History',
      'type' => 'module',
      'description' => 'Records which user has read which content.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:node',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/history/history.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'image' => 
    array (
      'name' => 'Image',
      'type' => 'module',
      'description' => 'Defines a field type for image media and provides display configuration tools.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:file',
      ),
      'configure' => 'entity.image_style.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/image/image.info.yml',
      'status' => 1,
      'schema_version' => 8201,
    ),
    'inline_form_errors' => 
    array (
      'type' => 'module',
      'name' => 'Inline Form Errors',
      'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
      'version' => '9.0.6',
      'package' => 'Core',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/inline_form_errors/inline_form_errors.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'jsonapi' => 
    array (
      'name' => 'JSON:API',
      'type' => 'module',
      'description' => 'Exposes entities as a JSON:API-specification-compliant web API.',
      'package' => 'Web services',
      'configure' => 'jsonapi.settings',
      'dependencies' => 
      array (
        0 => 'drupal:serialization',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/jsonapi.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'language' => 
    array (
      'name' => 'Language',
      'type' => 'module',
      'description' => 'Allows users to configure available languages.',
      'package' => 'Multilingual',
      'version' => '9.0.6',
      'configure' => 'entity.configurable_language.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/language/language.info.yml',
      'status' => 1,
      'schema_version' => 8001,
    ),
    'layout_builder' => 
    array (
      'name' => 'Layout Builder',
      'type' => 'module',
      'description' => 'Allows users to add and arrange blocks and content fields directly on the content.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:layout_discovery',
        1 => 'drupal:contextual',
        2 => 'drupal:field_ui',
        3 => 'drupal:block',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/layout_builder.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'layout_discovery' => 
    array (
      'name' => 'Layout Discovery',
      'type' => 'module',
      'description' => 'Provides a way for modules or themes to register layouts.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_discovery/layout_discovery.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'link' => 
    array (
      'name' => 'Link',
      'type' => 'module',
      'description' => 'Provides a simple link field type.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/link/link.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'locale' => 
    array (
      'name' => 'Interface Translation',
      'type' => 'module',
      'description' => 'Translates the built-in user interface.',
      'configure' => 'locale.translate_page',
      'package' => 'Multilingual',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:language',
        1 => 'drupal:file',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/locale/locale.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'media' => 
    array (
      'name' => 'Media',
      'description' => 'Manages the creation, configuration, and display of media items.',
      'type' => 'module',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:file',
        1 => 'drupal:image',
        2 => 'drupal:user',
      ),
      'configure' => 'media.settings',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/media.info.yml',
      'status' => 1,
      'schema_version' => 8700,
    ),
    'media_library' => 
    array (
      'name' => 'Media Library',
      'type' => 'module',
      'description' => 'Enhances the media list with additional features to more easily find and use existing media items.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'media_library.settings',
      'dependencies' => 
      array (
        0 => 'drupal:media',
        1 => 'drupal:views',
        2 => 'drupal:user',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media_library/media_library.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'menu_link_content' => 
    array (
      'name' => 'Custom Menu Links',
      'type' => 'module',
      'description' => 'Allows users to create menu links.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:link',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/menu_link_content/menu_link_content.info.yml',
      'status' => 1,
      'schema_version' => 8601,
    ),
    'menu_ui' => 
    array (
      'name' => 'Menu UI',
      'type' => 'module',
      'description' => 'Allows administrators to customize the site navigation menu.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.menu.collection',
      'dependencies' => 
      array (
        0 => 'drupal:menu_link_content',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/menu_ui/menu_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'migrate' => 
    array (
      'name' => 'Migrate',
      'type' => 'module',
      'description' => 'Handles migrations',
      'package' => 'Migration',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/migrate.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal' => 
    array (
      'name' => 'Migrate Drupal',
      'type' => 'module',
      'description' => 'Contains migrations from older Drupal versions.',
      'package' => 'Migration',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:migrate',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/migrate_drupal.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal_ui' => 
    array (
      'name' => 'Migrate Drupal UI',
      'type' => 'module',
      'description' => 'Provides a user interface for migrating from older Drupal versions.',
      'package' => 'Migration',
      'version' => '9.0.6',
      'configure' => 'migrate_drupal_ui.upgrade',
      'dependencies' => 
      array (
        0 => 'drupal:migrate',
        1 => 'drupal:migrate_drupal',
        2 => 'drupal:dblog',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal_ui/migrate_drupal_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'node' => 
    array (
      'name' => 'Node',
      'type' => 'module',
      'description' => 'Allows content to be submitted to the site and displayed on pages.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.node_type.collection',
      'dependencies' => 
      array (
        0 => 'drupal:text',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/node.info.yml',
      'status' => 1,
      'schema_version' => 8700,
    ),
    'options' => 
    array (
      'name' => 'Options',
      'type' => 'module',
      'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'drupal:text',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/options/options.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'page_cache' => 
    array (
      'name' => 'Internal Page Cache',
      'type' => 'module',
      'description' => 'Caches pages for anonymous users and can be used when external page cache is not available.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/page_cache/page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'path' => 
    array (
      'name' => 'Path',
      'type' => 'module',
      'description' => 'Allows users to rename URLs.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.path_alias.collection',
      'dependencies' => 
      array (
        0 => 'drupal:path_alias',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/path/path.info.yml',
      'status' => 1,
      'schema_version' => 8200,
    ),
    'quickedit' => 
    array (
      'name' => 'Quick Edit',
      'type' => 'module',
      'description' => 'In-place content editing.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:contextual',
        1 => 'drupal:field',
        2 => 'drupal:filter',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/quickedit/quickedit.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'rdf' => 
    array (
      'name' => 'RDF',
      'type' => 'module',
      'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rdf/rdf.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'responsive_image' => 
    array (
      'name' => 'Responsive Image',
      'type' => 'module',
      'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:breakpoint',
        1 => 'drupal:image',
      ),
      'configure' => 'entity.responsive_image_style.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/responsive_image/responsive_image.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'rest' => 
    array (
      'name' => 'RESTful Web Services',
      'type' => 'module',
      'description' => 'Exposes entities and other resources as RESTful web API',
      'package' => 'Web services',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:serialization',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rest/rest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search' => 
    array (
      'name' => 'Search',
      'type' => 'module',
      'description' => 'Allows users to create search pages based on plugins provided by other modules.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.search_page.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/search/search.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'serialization' => 
    array (
      'name' => 'Serialization',
      'type' => 'module',
      'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML.',
      'package' => 'Web services',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/serialization/serialization.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'settings_tray' => 
    array (
      'name' => 'Settings Tray',
      'type' => 'module',
      'description' => 'Allows users to directly edit the configuration of blocks on the current page.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:block',
        1 => 'drupal:toolbar',
        2 => 'drupal:contextual',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/settings_tray/settings_tray.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'shortcut' => 
    array (
      'name' => 'Shortcut',
      'type' => 'module',
      'description' => 'Allows users to manage customizable lists of shortcut links.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.shortcut_set.collection',
      'dependencies' => 
      array (
        0 => 'drupal:link',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/shortcut/shortcut.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'statistics' => 
    array (
      'name' => 'Statistics',
      'type' => 'module',
      'description' => 'Logs content statistics for your site.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'statistics.settings',
      'dependencies' => 
      array (
        0 => 'drupal:node',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/statistics/statistics.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'syslog' => 
    array (
      'name' => 'Syslog',
      'type' => 'module',
      'description' => 'Logs and records system events to syslog.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'system.logging_settings',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/syslog/syslog.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'system' => 
    array (
      'name' => 'System',
      'type' => 'module',
      'description' => 'Handles general site configuration for administrators.',
      'package' => 'Core',
      'version' => '9.0.6',
      'required' => true,
      'configure' => 'system.admin_config_system',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/system.info.yml',
      'status' => 1,
      'schema_version' => '8901',
    ),
    'taxonomy' => 
    array (
      'name' => 'Taxonomy',
      'type' => 'module',
      'description' => 'Enables the categorization of content.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:node',
        1 => 'drupal:text',
      ),
      'configure' => 'entity.taxonomy_vocabulary.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/taxonomy.info.yml',
      'status' => 1,
      'schema_version' => 8702,
    ),
    'telephone' => 
    array (
      'name' => 'Telephone',
      'type' => 'module',
      'description' => 'Defines a field type for telephone numbers.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/telephone/telephone.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'text' => 
    array (
      'name' => 'Text',
      'type' => 'module',
      'description' => 'Defines simple text field types.',
      'package' => 'Field types',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'drupal:filter',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/text/text.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'toolbar' => 
    array (
      'name' => 'Toolbar',
      'type' => 'module',
      'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:breakpoint',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/toolbar/toolbar.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'tour' => 
    array (
      'name' => 'Tour',
      'type' => 'module',
      'description' => 'Displays guided tours of the site interface.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/tour/tour.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'tracker' => 
    array (
      'name' => 'Activity Tracker',
      'type' => 'module',
      'description' => 'Enables tracking of recent content for users.',
      'dependencies' => 
      array (
        0 => 'drupal:node',
        1 => 'drupal:comment',
      ),
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/tracker/tracker.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'update' => 
    array (
      'name' => 'Update Manager',
      'type' => 'module',
      'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
      'version' => '9.0.6',
      'package' => 'Core',
      'configure' => 'update.settings',
      'dependencies' => 
      array (
        0 => 'drupal:file',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/update.info.yml',
      'status' => 1,
      'schema_version' => 8001,
    ),
    'user' => 
    array (
      'name' => 'User',
      'type' => 'module',
      'description' => 'Manages the user registration and login system.',
      'package' => 'Core',
      'version' => '9.0.6',
      'required' => true,
      'configure' => 'user.admin_index',
      'dependencies' => 
      array (
        0 => 'drupal:system',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/user.info.yml',
      'status' => 1,
      'schema_version' => 8100,
    ),
    'views' => 
    array (
      'name' => 'Views',
      'type' => 'module',
      'description' => 'Create customized lists and queries from your database.',
      'package' => 'Core',
      'version' => '9.0.6',
      'dependencies' => 
      array (
        0 => 'drupal:filter',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/views.info.yml',
      'status' => 1,
      'schema_version' => 8500,
    ),
    'views_ui' => 
    array (
      'name' => 'Views UI',
      'type' => 'module',
      'description' => 'Provides a user interface for creating and managing views.',
      'package' => 'Core',
      'version' => '9.0.6',
      'configure' => 'entity.view.collection',
      'dependencies' => 
      array (
        0 => 'drupal:views',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views_ui/views_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'workflows' => 
    array (
      'name' => 'Workflows',
      'type' => 'module',
      'description' => 'Provides an interface to create workflows with transitions between different states (for example publication or user status) provided by other modules.',
      'version' => '9.0.6',
      'package' => 'Core',
      'configure' => 'entity.workflow.collection',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workflows/workflows.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'workspaces' => 
    array (
      'name' => 'Workspaces',
      'type' => 'module',
      'description' => 'Allows users to stage content or preview a full site by using multiple workspaces on a single site.',
      'version' => '9.0.6',
      'package' => 'Core (Experimental)',
      'configure' => 'entity.workspace.collection',
      'dependencies' => 
      array (
        0 => 'drupal:user',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workspaces/workspaces.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_article' => 
    array (
      'name' => 'Thunder Article',
      'description' => 'Provide content related configs and code for thunder.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder',
      'dependencies' => 
      array (
        0 => 'drupal:node',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_article/thunder_article.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'thunder_demo' => 
    array (
      'name' => 'Thunder Demo',
      'type' => 'module',
      'description' => 'Provide demo content.',
      'package' => 'Thunder Optional',
      'core_version_requirement' => '^9',
      'dependencies' => 
      array (
        0 => 'better_normalizers:better_normalizers',
        1 => 'default_content:default_content',
        2 => 'drupal:tour',
        3 => 'drupal:help',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_demo/thunder_demo.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_google_analytics' => 
    array (
      'name' => 'Thunder Google Analytics',
      'description' => 'Install the Google Analytics module for extensive tracking.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder Optional',
      'dependencies' => 
      array (
        0 => 'google_analytics:google_analytics',
      ),
      'configure' => 'google_analytics.admin_settings_form',
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_google_analytics/thunder_google_analytics.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_ivw' => 
    array (
      'name' => 'Thunder IVW',
      'description' => 'Enable your site to track page views for the german Information Community for the Assessment of the Circulation of Media.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder Optional',
      'dependencies' => 
      array (
        0 => 'ivw_integration:ivw_integration',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_ivw/thunder_ivw.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_liveblog' => 
    array (
      'name' => 'Thunder Liveblog',
      'description' => 'Integrates with the Paragraphs module and Thunder for media embedding',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder Optional',
      'dependencies' => 
      array (
        0 => 'liveblog:liveblog',
        1 => 'liveblog:liveblog_pusher',
        2 => 'paragraphs:paragraphs',
        3 => 'select2:select2',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_liveblog/thunder_liveblog.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_media' => 
    array (
      'name' => 'Thunder Media',
      'description' => 'Provides media bundles for thunder.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'dependencies' => 
      array (
        0 => 'drupal:image',
      ),
      'package' => 'Thunder',
      'configure' => 'thunder_media.configuration_form',
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_media/thunder_media.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'thunder_paragraphs' => 
    array (
      'name' => 'Thunder Paragraphs',
      'description' => 'Provide paragaphs functions for Thunder.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder',
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'dependencies' => 
      array (
      ),
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_paragraphs/thunder_paragraphs.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'thunder_password_policy' => 
    array (
      'name' => 'Thunder Password Policy',
      'description' => 'Full integration for more sophisticated password policies.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder Optional',
      'dependencies' => 
      array (
        0 => 'password_policy:password_policy',
        1 => 'password_policy:password_policy_character_types',
        2 => 'password_policy:password_policy_history',
        3 => 'password_policy:password_policy_length',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_password_policy/thunder_password_policy.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_search' => 
    array (
      'name' => 'Thunder Search API',
      'description' => 'Integrates with the Search API module',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder Optional',
      'dependencies' => 
      array (
        0 => 'search_api:search_api_db',
        1 => 'search_api_mark_outdated:search_api_mark_outdated',
        2 => 'select2:select2_facets',
        3 => 'facets:facets',
        4 => 'views_bulk_operations:views_bulk_operations',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_search/thunder_search.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_taxonomy' => 
    array (
      'name' => 'Thunder Taxonomy',
      'description' => 'Provide taxonomy functions for Thunder.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder',
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'dependencies' => 
      array (
      ),
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_taxonomy/thunder_taxonomy.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'thunder_translation' => 
    array (
      'name' => 'Thunder Translation',
      'description' => 'Enable your editors to translate your content in multiple languages.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder Optional',
      'dependencies' => 
      array (
        0 => 'drupal:content_translation',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_translation/thunder_translation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'thunder_workflow' => 
    array (
      'name' => 'Thunder Workflow',
      'description' => 'Get an advanced content creation workflow with scheduling functionality.',
      'type' => 'module',
      'core_version_requirement' => '^9',
      'package' => 'Thunder Optional',
      'dependencies' => 
      array (
        0 => 'drupal:content_moderation',
        1 => 'scheduler:scheduler',
        2 => 'scheduler_content_moderation_integration:scheduler_content_moderation_integration',
        3 => 'config_update:config_update',
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'version' => NULL,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_workflow/thunder_workflow.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'access_unpublished' => 
    array (
      'name' => 'Access Unpublished',
      'type' => 'module',
      'description' => 'Grants access to view unpublished content to anyone who has a unique URL and appropriate permissions.',
      'package' => 'Content',
      'core_version_requirement' => '^8.7.7 || ^9',
      'configure' => 'access_unpublished.settings_form',
      'version' => '8.x-1.0',
      'project' => 'access_unpublished',
      'datestamp' => 1590413021,
      'core_incompatible' => false,
      'mtime' => 1590413021,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/access_unpublished/access_unpublished.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'admin_toolbar' => 
    array (
      'name' => 'Admin Toolbar',
      'description' => 'Provides an improved drop-down menu interface to the site Toolbar.',
      'package' => 'Administration',
      'type' => 'module',
      'core_version_requirement' => '^8.8.0 || ^9.0',
      'dependencies' => 
      array (
        0 => 'drupal:toolbar',
      ),
      'version' => '8.x-2.3',
      'project' => 'admin_toolbar',
      'datestamp' => 1592535601,
      'core_incompatible' => false,
      'mtime' => 1592535601,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'admin_toolbar_links_access_filter' => 
    array (
      'name' => 'Admin Toolbar Links Access Filter',
      'description' => 'Provides a workaround for the common problem that users with \'Use the administration pages and help\' permission see menu links they don\'t have access permission for. Once the issue <a href=\'https://www.drupal.org/node/296693\'>https://www.drupal.org/node/296693</a> be solved, this module will be deprecated.',
      'package' => 'Administration',
      'type' => 'module',
      'core_version_requirement' => '^8.8.0 || ^9.0',
      'dependencies' => 
      array (
        0 => 'admin_toolbar:admin_toolbar',
      ),
      'version' => '8.x-2.3',
      'project' => 'admin_toolbar',
      'datestamp' => 1592535601,
      'core_incompatible' => false,
      'mtime' => 1592535601,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'admin_toolbar_search' => 
    array (
      'name' => 'Admin Toolbar Search',
      'description' => 'Provides search of admin toolbar items.',
      'package' => 'Administration',
      'type' => 'module',
      'core_version_requirement' => '^8.8.0 || ^9.0',
      'dependencies' => 
      array (
        0 => 'admin_toolbar:admin_toolbar',
      ),
      'version' => '8.x-2.3',
      'project' => 'admin_toolbar',
      'datestamp' => 1592535601,
      'core_incompatible' => false,
      'mtime' => 1592535601,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar_search/admin_toolbar_search.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'admin_toolbar_tools' => 
    array (
      'name' => 'Admin Toolbar Extra Tools',
      'description' => 'Adds menu links to the Admin Toolbar.',
      'package' => 'Administration',
      'type' => 'module',
      'core_version_requirement' => '^8.8.0 || ^9.0',
      'dependencies' => 
      array (
        0 => 'admin_toolbar:admin_toolbar',
      ),
      'version' => '8.x-2.3',
      'project' => 'admin_toolbar',
      'datestamp' => 1592535601,
      'core_incompatible' => false,
      'mtime' => 1592535601,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'adsense' => 
    array (
      'name' => 'AdSense',
      'type' => 'module',
      'description' => 'Displays Google AdSense ads on your site to earn revenue.',
      'package' => 'Adsense',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'configure' => 'adsense.main_settings',
      'version' => '8.x-1.2',
      'project' => 'adsense',
      'datestamp' => 1596102850,
      'core_incompatible' => false,
      'mtime' => 1596102850,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/adsense/adsense.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'adsense_adstxt' => 
    array (
      'name' => 'AdSense ads.txt',
      'type' => 'module',
      'description' => 'Generates an ads.txt file suitable for use with Google AdSense.',
      'package' => 'Adsense',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'adsense:adsense',
      ),
      'version' => '8.x-1.2',
      'project' => 'adsense',
      'datestamp' => 1596102850,
      'core_incompatible' => false,
      'mtime' => 1596102850,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/adsense/adstxt/adsense_adstxt.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'adsense_oldcode' => 
    array (
      'name' => 'AdSense pre-2007 code',
      'type' => 'module',
      'description' => 'Generates AdSense ad units using the pre-2007 code (deprecated by Google).',
      'package' => 'Adsense',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'configure' => 'adsense_oldcode.settings',
      'dependencies' => 
      array (
        0 => 'adsense:adsense',
      ),
      'version' => '8.x-1.2',
      'project' => 'adsense',
      'datestamp' => 1596102850,
      'core_incompatible' => false,
      'mtime' => 1596102850,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/adsense/oldcode/adsense_oldcode.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'autofill' => 
    array (
      'name' => 'Autofill',
      'type' => 'module',
      'description' => 'A field can automatically be autofilled while typing into another one.',
      'core_version_requirement' => '^8 || ^9',
      'version' => '8.x-1.0',
      'project' => 'autofill',
      'datestamp' => 1595326092,
      'core_incompatible' => false,
      'mtime' => 1595326092,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/autofill/autofill.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'autosave_form' => 
    array (
      'name' => 'Autosave Form',
      'type' => 'module',
      'description' => 'Adds autosave feature on forms.',
      'package' => 'Content',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'configure' => 'autosave_form.admin_settings',
      'dependencies' => 
      array (
        0 => 'drupal:system (>=8.3)',
      ),
      'version' => '8.x-1.2',
      'project' => 'autosave_form',
      'datestamp' => 1591627226,
      'core_incompatible' => false,
      'mtime' => 1591627226,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/autosave_form/autosave_form.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'better_normalizers' => 
    array (
      'name' => 'Better Normalizers',
      'type' => 'module',
      'description' => 'Improve the normalizers in core.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:hal (>=8.3.x)',
      ),
      'version' => '8.x-1.0-beta4',
      'project' => 'better_normalizers',
      'datestamp' => 1576069087,
      'core_incompatible' => false,
      'mtime' => 1576069087,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/better_normalizers/better_normalizers.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'blazy' => 
    array (
      'name' => 'Blazy',
      'type' => 'module',
      'description' => 'Provides basic Blazy integration for lazy loading and multi-serving images.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Blazy',
      'dependencies' => 
      array (
        0 => 'drupal:filter',
        1 => 'drupal:media',
      ),
      'test_dependencies' => 
      array (
        0 => 'drupal:responsive_image',
        1 => 'drupal:views',
      ),
      'version' => '8.x-2.1',
      'project' => 'blazy',
      'datestamp' => 1589112984,
      'core_incompatible' => false,
      'mtime' => 1589112984,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/blazy/blazy.info.yml',
      'status' => 1,
      'schema_version' => '8205',
    ),
    'blazy_ui' => 
    array (
      'name' => 'Blazy UI',
      'type' => 'module',
      'description' => 'Provides Blazy configuration UI.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Blazy',
      'configure' => 'blazy.settings',
      'dependencies' => 
      array (
        0 => 'blazy:blazy',
      ),
      'version' => '8.x-2.1',
      'project' => 'blazy',
      'datestamp' => 1589112984,
      'core_incompatible' => false,
      'mtime' => 1589112984,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/blazy/blazy_ui/blazy_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'checklistapi' => 
    array (
      'name' => 'Checklist API',
      'type' => 'module',
      'description' => 'Provides an API for creating fillable, persistent checklists.',
      'package' => 'Other',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'configure' => 'checklistapi.report',
      'version' => '8.x-1.11',
      'project' => 'checklistapi',
      'datestamp' => 1586536893,
      'core_incompatible' => false,
      'mtime' => 1586536893,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/checklistapi/checklistapi.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'checklistapiexample' => 
    array (
      'name' => 'Checklist API Example',
      'type' => 'module',
      'description' => 'Provides an example implementation of the Checklist API.',
      'package' => 'Example modules',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:checklistapi',
      ),
      'configure' => 'checklistapi.checklists.example_checklist',
      'version' => '8.x-1.11',
      'project' => 'checklistapi',
      'datestamp' => 1586536893,
      'core_incompatible' => false,
      'mtime' => 1586536893,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/checklistapi/checklistapiexample/checklistapiexample.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'config_selector' => 
    array (
      'name' => 'Configuration selector',
      'type' => 'module',
      'description' => 'A utility module that enables different versions of optional configuration to be selected on module install.',
      'core_version_requirement' => '^8.8 || ^9',
      'version' => '8.x-2.0',
      'project' => 'config_selector',
      'datestamp' => 1574425703,
      'core_incompatible' => false,
      'mtime' => 1574425703,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/config_selector.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'config_update' => 
    array (
      'name' => 'Configuration Update Base',
      'type' => 'module',
      'description' => 'Provides basic revert and update functionality for other modules',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:config',
      ),
      'version' => '8.x-1.7',
      'project' => 'config_update',
      'datestamp' => 1586355588,
      'core_incompatible' => false,
      'mtime' => 1586355588,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_update/config_update.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'config_update_ui' => 
    array (
      'name' => 'Configuration Update Reports',
      'type' => 'module',
      'description' => 'Adds an updates report and revert functionality to configuration management',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'configure' => 'config_update.report',
      'dependencies' => 
      array (
        0 => 'config_update:config_update',
        1 => 'drupal:config',
      ),
      'version' => '8.x-1.7',
      'project' => 'config_update',
      'datestamp' => 1586355588,
      'core_incompatible' => false,
      'mtime' => 1586355588,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_update/config_update_ui/config_update_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'content_lock' => 
    array (
      'name' => 'Content Lock',
      'description' => 'Prevents multiple users from trying to edit a content entity simultaneously to prevent edit conflicts.',
      'type' => 'module',
      'package' => 'Content',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'content_lock.settings',
      'test_dependencies' => 
      array (
        0 => 'prefetch_cache:prefetch_cache',
        1 => 'drupal:content_translation',
        2 => 'conflict:conflict',
      ),
      'version' => '8.x-2.1',
      'project' => 'content_lock',
      'datestamp' => 1591342903,
      'core_incompatible' => false,
      'mtime' => 1591342903,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/content_lock/content_lock.info.yml',
      'status' => 1,
      'schema_version' => '8002',
    ),
    'content_lock_timeout' => 
    array (
      'name' => 'Content Lock Timeout',
      'description' => 'Provides mechanisms for automatically unlocking nodes that have been locked for a certain length of time.',
      'core_version_requirement' => '^8.8 || ^9',
      'type' => 'module',
      'package' => 'Custom',
      'configure' => 'content_lock_timeout.settings',
      'dependencies' => 
      array (
        0 => 'content_lock:content_lock',
      ),
      'version' => '8.x-2.1',
      'project' => 'content_lock',
      'datestamp' => 1591342903,
      'core_incompatible' => false,
      'mtime' => 1591342903,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/content_lock/modules/content_lock_timeout/content_lock_timeout.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'crop' => 
    array (
      'name' => 'Crop API',
      'description' => 'Provides storage and API for image crops.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Media',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'drupal:image',
        1 => 'drupal:user',
      ),
      'version' => '8.x-2.1',
      'project' => 'crop',
      'datestamp' => 1585251788,
      'core_incompatible' => false,
      'mtime' => 1585251788,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/crop/crop.info.yml',
      'status' => 1,
      'schema_version' => '8005',
    ),
    'ctools' => 
    array (
      'name' => 'Chaos Tools',
      'type' => 'module',
      'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
      'package' => 'Chaos tool suite',
      'core_version_requirement' => '^8.7.7 || ^9',
      'version' => '8.x-3.4',
      'project' => 'ctools',
      'datestamp' => 1585763385,
      'core_incompatible' => false,
      'mtime' => 1585763385,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/ctools.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ctools_block' => 
    array (
      'name' => 'Chaos Tools Blocks',
      'type' => 'module',
      'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
      'package' => 'Chaos tool suite (Experimental)',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'ctools:ctools',
      ),
      'version' => '8.x-3.4',
      'project' => 'ctools',
      'datestamp' => 1585763385,
      'core_incompatible' => false,
      'mtime' => 1585763385,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_block/ctools_block.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools_entity_mask' => 
    array (
      'name' => 'Entity Mask',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'type' => 'module',
      'description' => 'Allows an entity type to borrow the fields and display configuration of another entity type.',
      'version' => '8.x-3.4',
      'project' => 'ctools',
      'datestamp' => 1585763385,
      'core_incompatible' => false,
      'mtime' => 1585763385,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_entity_mask/ctools_entity_mask.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools_views' => 
    array (
      'name' => 'Chaos Tools Views',
      'type' => 'module',
      'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
      'package' => 'Chaos tool suite (Experimental)',
      'core_version_requirement' => '^8 || ^9',
      'core' => '8.x',
      'dependencies' => 
      array (
        0 => 'drupal:block',
        1 => 'drupal:views',
      ),
      'version' => '8.x-3.4',
      'project' => 'ctools',
      'datestamp' => 1585763385,
      'core_incompatible' => false,
      'mtime' => 1585763385,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_views/ctools_views.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'default_content' => 
    array (
      'name' => 'Default content',
      'type' => 'module',
      'description' => 'Imports default content when a module is enabled',
      'package' => 'Web services',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:hal',
      ),
      'version' => '8.x-1.0-alpha9',
      'project' => 'default_content',
      'datestamp' => 1588280143,
      'core_incompatible' => false,
      'mtime' => 1588280143,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/default_content/default_content.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'diff' => 
    array (
      'name' => 'Diff',
      'type' => 'module',
      'description' => 'Shows changes between content revisions.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'configure' => 'diff.general_settings',
      'version' => '8.x-1.0',
      'project' => 'diff',
      'datestamp' => 1578322691,
      'core_incompatible' => false,
      'mtime' => 1578322691,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/diff/diff.info.yml',
      'status' => 1,
      'schema_version' => '8009',
    ),
    'dropzonejs' => 
    array (
      'name' => 'dropzonejs',
      'type' => 'module',
      'description' => 'DropzoneJS',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Media',
      'dependencies' => 
      array (
        0 => 'drupal:file',
      ),
      'version' => '8.x-2.3',
      'project' => 'dropzonejs',
      'datestamp' => 1600310563,
      'core_incompatible' => false,
      'mtime' => 1600310563,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/dropzonejs/dropzonejs.info.yml',
      'status' => 1,
      'schema_version' => '8003',
    ),
    'dropzonejs_eb_widget' => 
    array (
      'name' => 'DropzoneJS entity browser widget',
      'type' => 'module',
      'description' => 'DropzoneJS Entity browser widget',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Media',
      'dependencies' => 
      array (
        0 => 'drupal:file',
        1 => 'dropzonejs:dropzonejs',
        2 => 'entity_browser:entity_browser',
      ),
      'version' => '8.x-2.3',
      'project' => 'dropzonejs',
      'datestamp' => 1600310563,
      'core_incompatible' => false,
      'mtime' => 1600310563,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/dropzonejs/modules/eb_widget/dropzonejs_eb_widget.info.yml',
      'status' => 1,
      'schema_version' => '8202',
    ),
    'empty_fields' => 
    array (
      'name' => 'Empty Fields',
      'description' => 'Provides options for displaying empty fields.',
      'type' => 'module',
      'core_version_requirement' => '^8.7.7 || ^9',
      'version' => '8.x-1.0-beta1',
      'project' => 'empty_fields',
      'datestamp' => 1590178665,
      'core_incompatible' => false,
      'mtime' => 1590178665,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/empty_fields/empty_fields.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'entity_browser' => 
    array (
      'name' => 'Entity Browser',
      'description' => 'Provide a generic entity browser/picker/selector.',
      'type' => 'module',
      'package' => 'Media',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'entity.entity_browser.collection',
      'version' => '8.x-2.5',
      'project' => 'entity_browser',
      'datestamp' => 1588015349,
      'core_incompatible' => false,
      'mtime' => 1588015349,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/entity_browser.info.yml',
      'status' => 1,
      'schema_version' => '8201',
    ),
    'entity_browser_entity_form' => 
    array (
      'name' => 'Entity Browser IEF',
      'description' => 'Entity browser inline entity form integration.',
      'type' => 'module',
      'package' => 'Media',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'entity_browser:entity_browser',
        1 => 'inline_entity_form:inline_entity_form',
      ),
      'version' => '8.x-2.5',
      'project' => 'entity_browser',
      'datestamp' => 1588015349,
      'core_incompatible' => false,
      'mtime' => 1588015349,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/modules/entity_form/entity_browser_entity_form.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'entity_browser_example' => 
    array (
      'name' => 'Entity Browser example',
      'description' => 'Entity browser example module.',
      'type' => 'module',
      'package' => 'Media',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'entity_browser:entity_browser',
        1 => 'drupal:views',
        2 => 'drupal:field',
        3 => 'drupal:file',
        4 => 'drupal:node',
        5 => 'drupal:image',
      ),
      'version' => '8.x-2.5',
      'project' => 'entity_browser',
      'datestamp' => 1588015349,
      'core_incompatible' => false,
      'mtime' => 1588015349,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/modules/example/entity_browser_example.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'entity_reference_revisions' => 
    array (
      'name' => 'Entity Reference Revisions',
      'type' => 'module',
      'description' => 'Adds a Entity Reference field type with revision support.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'Field types',
      'version' => '8.x-1.8',
      'project' => 'entity_reference_revisions',
      'datestamp' => 1583961849,
      'core_incompatible' => false,
      'mtime' => 1583961849,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_reference_revisions/entity_reference_revisions.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'facets' => 
    array (
      'name' => 'Facets',
      'type' => 'module',
      'description' => 'Faceted search interfaces that can be used on Search API searchers.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Search',
      'configure' => 'entity.facets_facet.collection',
      'test_dependencies' => 
      array (
        0 => 'search_api:search_api',
        1 => 'drupal:views',
      ),
      'version' => '8.x-1.5',
      'project' => 'facets',
      'datestamp' => 1595015394,
      'core_incompatible' => false,
      'mtime' => 1595015394,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/facets.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'facets_range_widget' => 
    array (
      'name' => 'Facets Range Widget',
      'type' => 'module',
      'description' => 'Provides a range widget and solid slider.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Search',
      'dependencies' => 
      array (
        0 => 'facets:facets',
      ),
      'test_dependencies' => 
      array (
        0 => 'search_api:search_api',
        1 => 'facets:facets',
        2 => 'drupal:views',
      ),
      'version' => '8.x-1.5',
      'project' => 'facets',
      'datestamp' => 1595015394,
      'core_incompatible' => false,
      'mtime' => 1595015394,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/modules/facets_range_widget/facets_range_widget.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'facets_rest' => 
    array (
      'name' => 'Rest Facets',
      'type' => 'module',
      'description' => 'Adds facets to rest views based on a Search API index.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Search',
      'dependencies' => 
      array (
        0 => 'facets:facets',
        1 => 'drupal:rest',
      ),
      'test_dependencies' => 
      array (
        0 => 'search_api:search_api',
        1 => 'facets:facets',
        2 => 'drupal:views',
        3 => 'drupal:rest',
      ),
      'version' => '8.x-1.5',
      'project' => 'facets',
      'datestamp' => 1595015394,
      'core_incompatible' => false,
      'mtime' => 1595015394,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/modules/facets_rest/facets_rest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'facets_summary' => 
    array (
      'name' => 'Facets summary (Experimental)',
      'type' => 'module',
      'description' => 'Exposes a Facets block summary showing the current search.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Search',
      'configure' => 'entity.facets_facet.collection',
      'dependencies' => 
      array (
        0 => 'facets:facets',
      ),
      'test_dependencies' => 
      array (
        0 => 'search_api:search_api',
        1 => 'drupal:views',
      ),
      'version' => '8.x-1.5',
      'project' => 'facets',
      'datestamp' => 1595015394,
      'core_incompatible' => false,
      'mtime' => 1595015394,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/modules/facets_summary/facets_summary.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field_group_migrate' => 
    array (
      'name' => 'Field Group Migrate',
      'type' => 'module',
      'description' => 'Provides the ability to migrate field groups from D6/D7 to D8.',
      'package' => 'Migration',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'field_group:field_group',
      ),
      'version' => '8.x-3.1',
      'project' => 'field_group',
      'datestamp' => 1591772570,
      'core_incompatible' => false,
      'mtime' => 1591772570,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/field_group/contrib/field_group_migrate/field_group_migrate.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field_group' => 
    array (
      'name' => 'Field Group',
      'type' => 'module',
      'description' => 'Provides the ability to group your fields on both form and display.',
      'package' => 'Fields',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'version' => '8.x-3.1',
      'project' => 'field_group',
      'datestamp' => 1591772570,
      'core_incompatible' => false,
      'mtime' => 1591772570,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/field_group/field_group.info.yml',
      'status' => 1,
      'schema_version' => '8302',
    ),
    'focal_point' => 
    array (
      'name' => 'Focal Point',
      'type' => 'module',
      'description' => 'Allows users to specify the focal point of an image for use during cropping.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Media',
      'test_dependencies' => 
      array (
        0 => 'crop:crop',
      ),
      'dependencies' => 
      array (
        0 => 'drupal:image',
        1 => 'crop:crop',
      ),
      'version' => '8.x-1.5',
      'project' => 'focal_point',
      'datestamp' => 1598663906,
      'core_incompatible' => false,
      'mtime' => 1598663906,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/focal_point/focal_point.info.yml',
      'status' => 1,
      'schema_version' => '8004',
    ),
    'google_analytics' => 
    array (
      'name' => 'Google Analytics',
      'type' => 'module',
      'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
      'package' => 'Statistics',
      'core_version_requirement' => '^8.8.6 || ^9',
      'configure' => 'google_analytics.admin_settings_form',
      'version' => '8.x-2.5',
      'project' => 'google_analytics',
      'datestamp' => 1591298498,
      'core_incompatible' => false,
      'mtime' => 1591298498,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/google_analytics/google_analytics.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'inline_entity_form' => 
    array (
      'name' => 'Inline Entity Form',
      'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
      'type' => 'module',
      'package' => 'Fields',
      'core_version_requirement' => '^8.7.7 || ^9',
      'version' => '8.x-1.0-rc7',
      'project' => 'inline_entity_form',
      'datestamp' => 1595545225,
      'core_incompatible' => false,
      'mtime' => 1595545225,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/inline_entity_form/inline_entity_form.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ivw_integration' => 
    array (
      'name' => 'IVW Tracking',
      'type' => 'module',
      'description' => 'IVW (SZM 2) tracking',
      'package' => 'Tracking',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'token:token',
      ),
      'version' => '8.x-2.2',
      'project' => 'ivw_integration',
      'datestamp' => 1597671012,
      'core_incompatible' => false,
      'mtime' => 1597671012,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ivw_integration/ivw_integration.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'length_indicator' => 
    array (
      'name' => 'Length Indicator',
      'description' => 'Adds an optional length indicator to fields',
      'type' => 'module',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:field',
      ),
      'package' => 'Fields',
      'version' => '8.x-1.1',
      'project' => 'length_indicator',
      'datestamp' => 1578569892,
      'core_incompatible' => false,
      'mtime' => 1578569892,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/length_indicator/length_indicator.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'linkit' => 
    array (
      'name' => 'Linkit',
      'type' => 'module',
      'description' => 'Provides an easy interface for internal and external linking with wysiwyg editors.',
      'package' => 'User interface',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'entity.linkit_profile.collection',
      'test_dependencies' => 
      array (
        0 => 'imce:imce',
      ),
      'version' => '6.0.0-beta1',
      'project' => 'linkit',
      'datestamp' => 1591971463,
      'core_incompatible' => false,
      'mtime' => 1591971463,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/linkit/linkit.info.yml',
      'status' => 1,
      'schema_version' => '8503',
    ),
    'liveblog' => 
    array (
      'name' => 'Liveblog',
      'description' => 'Liveblogging module for Drupal.',
      'type' => 'module',
      'core_version_requirement' => '^8.7.7 || ^9',
      'configure' => 'liveblog.admin.settings',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'drupal:hal',
        2 => 'drupal:language',
        3 => 'drupal:link',
        4 => 'drupal:menu_ui',
        5 => 'drupal:node',
        6 => 'drupal:options',
        7 => 'drupal:path',
        8 => 'drupal:rest',
        9 => 'drupal:serialization',
        10 => 'drupal:taxonomy',
        11 => 'drupal:text',
        12 => 'drupal:user',
        13 => 'simple_gmap:simple_gmap',
        14 => 'drupal:views',
      ),
      'version' => '8.x-1.3-alpha15',
      'project' => 'liveblog',
      'datestamp' => 1591953702,
      'core_incompatible' => false,
      'mtime' => 1591953702,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/liveblog/liveblog.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'liveblog_pusher' => 
    array (
      'name' => 'Liveblog Pusher',
      'description' => 'Provides a liveblog notification channel via Pusher.com.',
      'type' => 'module',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'liveblog:liveblog',
      ),
      'version' => '8.x-1.3-alpha15',
      'project' => 'liveblog',
      'datestamp' => 1591953702,
      'core_incompatible' => false,
      'mtime' => 1591953702,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/liveblog/modules/liveblog_pusher/liveblog_pusher.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'media_entity_instagram' => 
    array (
      'name' => 'Media Entity Instagram',
      'description' => 'Media Entity Instagram provider.',
      'type' => 'module',
      'package' => 'Media',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:media',
      ),
      'version' => '8.x-2.1',
      'project' => 'media_entity_instagram',
      'datestamp' => 1591181709,
      'core_incompatible' => false,
      'mtime' => 1591181709,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_instagram/media_entity_instagram.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'media_entity_pinterest' => 
    array (
      'name' => 'Media entity Pinterest',
      'description' => 'Media entity Pinterest provider.',
      'type' => 'module',
      'package' => 'Media',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:media',
      ),
      'version' => '8.x-2.5',
      'project' => 'media_entity_pinterest',
      'datestamp' => 1591412342,
      'core_incompatible' => false,
      'mtime' => 1591412342,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_pinterest/media_entity_pinterest.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'media_entity_slideshow' => 
    array (
      'name' => 'Media entity slideshow',
      'description' => 'Media entity slideshow provider.',
      'type' => 'module',
      'package' => 'Media',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:media',
      ),
      'version' => '8.x-2.0',
      'project' => 'media_entity_slideshow',
      'datestamp' => 1585559774,
      'core_incompatible' => false,
      'mtime' => 1585559774,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_slideshow/media_entity_slideshow.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'media_entity_twitter' => 
    array (
      'name' => 'Media Entity Twitter',
      'description' => 'Media Entity Twitter provider.',
      'type' => 'module',
      'package' => 'Media',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:media',
      ),
      'version' => '8.x-2.4',
      'project' => 'media_entity_twitter',
      'datestamp' => 1585646749,
      'core_incompatible' => false,
      'mtime' => 1585646749,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_twitter/media_entity_twitter.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'media_expire' => 
    array (
      'name' => 'Media Expire',
      'description' => 'Expires media assets.',
      'type' => 'module',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:media',
      ),
      'package' => 'Media',
      'version' => '8.x-2.3',
      'project' => 'media_expire',
      'datestamp' => 1578908892,
      'core_incompatible' => false,
      'mtime' => 1578908892,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_expire/media_expire.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'metatag' => 
    array (
      'name' => 'Metatag',
      'type' => 'module',
      'description' => 'Manage meta tags for all entities.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'configure' => 'entity.metatag_defaults.collection',
      'dependencies' => 
      array (
        0 => 'drupal:field',
        1 => 'token:token',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag.info.yml',
      'status' => 1,
      'schema_version' => '8108',
    ),
    'metatag_app_links' => 
    array (
      'name' => 'Metatag: App Links',
      'type' => 'module',
      'description' => 'Provides support for applinks.org meta tags.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_app_links/metatag_app_links.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_dc' => 
    array (
      'name' => 'Metatag: Dublin Core',
      'type' => 'module',
      'description' => 'Provides the fifteen <a href="https://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="https://dublincore.org/">Dublin Core Metadata Institute</a>.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_dc/metatag_dc.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_dc_advanced' => 
    array (
      'name' => 'Metatag: Dublin Core Advanced',
      'type' => 'module',
      'description' => 'Provides forty additional meta tags from the <a href="https://dublincore.org/">Dublin Core Metadata Institute</a>.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
        1 => 'metatag:metatag_dc',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_dc_advanced/metatag_dc_advanced.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_facebook' => 
    array (
      'name' => 'Metatag: Facebook',
      'type' => 'module',
      'description' => 'A set of meta tags specially for controlling advanced functionality with Facebook.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_facebook/metatag_facebook.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'metatag_favicons' => 
    array (
      'name' => 'Metatag: Favicons',
      'type' => 'module',
      'description' => 'Provides support for many different favicons.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_favicons/metatag_favicons.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_google_cse' => 
    array (
      'name' => 'Metatag: Google Custom Search Engine (CSE)',
      'type' => 'module',
      'description' => 'Provides support for meta tags used for Google Custom Search Engine.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_google_cse/metatag_google_cse.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_google_plus' => 
    array (
      'name' => 'Metatag: Google Plus',
      'type' => 'module',
      'description' => 'Provides support for Google\'s Plus meta tags.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_google_plus/metatag_google_plus.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_hreflang' => 
    array (
      'name' => 'Metatag: Hreflang',
      'type' => 'module',
      'description' => 'Provides support for the hreflang meta tag with some extra logic to simplify it.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_hreflang/metatag_hreflang.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_mobile' => 
    array (
      'name' => 'Metatag: Mobile & UI Adjustments',
      'type' => 'module',
      'description' => 'Provides support for meta tags used to control the mobile browser experience.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_mobile/metatag_mobile.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_open_graph' => 
    array (
      'name' => 'Metatag: Open Graph',
      'type' => 'module',
      'description' => 'Provides support for Open Graph Protocol meta tags.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_open_graph/metatag_open_graph.info.yml',
      'status' => 1,
      'schema_version' => '8102',
    ),
    'metatag_open_graph_products' => 
    array (
      'name' => 'Metatag: Open Graph Products',
      'type' => 'module',
      'description' => 'Provides additional Open Graph Protocol meta tags for describing products.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
        1 => 'metatag:metatag_open_graph',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_open_graph_products/metatag_open_graph_products.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_page_manager' => 
    array (
      'name' => 'Metatag: Page Manager',
      'type' => 'module',
      'description' => 'Provides metatag support for Page Manager variants.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'page_manager:page_manager',
        1 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_page_manager/metatag_page_manager.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_pinterest' => 
    array (
      'name' => 'Metatag: Pinterest',
      'type' => 'module',
      'description' => 'Provides support for Pinterest\'s custom meta tags.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_pinterest/metatag_pinterest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_twitter_cards' => 
    array (
      'name' => 'Metatag: Twitter Cards',
      'type' => 'module',
      'description' => 'Provides support for Twitter\'s Card meta tags.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'metatag_verification' => 
    array (
      'name' => 'Metatag: Verification',
      'type' => 'module',
      'description' => 'Verifies ownership of a site for search engines and other services.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_verification/metatag_verification.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_views' => 
    array (
      'name' => 'Metatag: Views',
      'type' => 'module',
      'description' => 'Provides views integration for metatags.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
        1 => 'drupal:views',
      ),
      'version' => '8.x-1.14',
      'project' => 'metatag',
      'datestamp' => 1597183854,
      'core_incompatible' => false,
      'mtime' => 1597183854,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_views/metatag_views.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'paragraphs_demo' => 
    array (
      'description' => 'Provides multilingual demo Paragraphs types.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'paragraphs:paragraphs',
        1 => 'drupal:field',
        2 => 'drupal:image',
        3 => 'drupal:field_ui',
        4 => 'drupal:block',
        5 => 'drupal:language',
        6 => 'drupal:content_translation',
        7 => 'drupal:node',
        8 => 'search_api:search_api_db',
        9 => 'search_api:search_api',
        10 => 'drupal:views',
        11 => 'drupal:taxonomy',
        12 => 'paragraphs:paragraphs_library',
        13 => 'drupal:entity_browser',
        14 => 'drupal:content_moderation',
      ),
      'hidden' => false,
      'name' => 'Paragraphs Demo',
      'package' => 'Paragraphs',
      'type' => 'module',
      'version' => '8.x-1.12',
      'project' => 'paragraphs',
      'datestamp' => 1590061337,
      'core_incompatible' => false,
      'mtime' => 1590061337,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/modules/paragraphs_demo/paragraphs_demo.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'paragraphs_library' => 
    array (
      'name' => 'Paragraphs Library',
      'type' => 'module',
      'description' => 'Provides a library for reusing paragraphs.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'Paragraphs',
      'configure' => 'paragraphs_library_item.settings',
      'dependencies' => 
      array (
        0 => 'paragraphs:paragraphs',
        1 => 'drupal:views',
        2 => 'entity_usage:entity_usage',
      ),
      'test_dependencies' => 
      array (
        0 => 'entity_browser:entity_browser',
      ),
      'version' => '8.x-1.12',
      'project' => 'paragraphs',
      'datestamp' => 1590061337,
      'core_incompatible' => false,
      'mtime' => 1590061337,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/modules/paragraphs_library/paragraphs_library.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'paragraphs_type_permissions' => 
    array (
      'name' => 'Paragraphs Type Permissions',
      'type' => 'module',
      'description' => 'Allows users to configure permissions for individual Paragraphs types.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'Paragraphs',
      'dependencies' => 
      array (
        0 => 'paragraphs:paragraphs',
      ),
      'version' => '8.x-1.12',
      'project' => 'paragraphs',
      'datestamp' => 1590061337,
      'core_incompatible' => false,
      'mtime' => 1590061337,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/modules/paragraphs_type_permissions/paragraphs_type_permissions.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'paragraphs' => 
    array (
      'name' => 'Paragraphs',
      'type' => 'module',
      'description' => 'Enables the creation of paragraphs entities.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Paragraphs',
      'configure' => 'entity.paragraphs_type.collection',
      'dependencies' => 
      array (
        0 => 'entity_reference_revisions:entity_reference_revisions',
        1 => 'drupal:file',
      ),
      'test_dependencies' => 
      array (
        0 => 'diff:diff',
        1 => 'replicate:replicate',
        2 => 'inline_entity_form:inline_entity_form',
        3 => 'field_group:field_group',
        4 => 'block_field:block_field',
      ),
      'version' => '8.x-1.12',
      'project' => 'paragraphs',
      'datestamp' => 1590061337,
      'core_incompatible' => false,
      'mtime' => 1590061337,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/paragraphs.info.yml',
      'status' => 1,
      'schema_version' => '8022',
    ),
    'paragraphs_features' => 
    array (
      'name' => 'Paragraphs Features',
      'type' => 'module',
      'description' => 'Provides additional paragraphs widgets.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'package' => 'Paragraphs',
      'configure' => 'paragraphs_features.settings_form',
      'dependencies' => 
      array (
        0 => 'paragraphs:paragraphs (>= 8.x-1.10)',
        1 => 'drupal:field',
      ),
      'version' => '8.x-1.11',
      'project' => 'paragraphs_features',
      'datestamp' => 1600331590,
      'core_incompatible' => false,
      'mtime' => 1600331590,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs_features/paragraphs_features.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'password_policy' => 
    array (
      'name' => 'Password Policy',
      'description' => 'Sets up constraints and expiration of passwords.',
      'package' => 'Security',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'ctools:ctools (>=8.x-3.1)',
        1 => 'drupal:datetime',
      ),
      'configure' => 'entity.password_policy.collection',
      'version' => '8.x-3.0-beta1',
      'project' => 'password_policy',
      'datestamp' => 1586446453,
      'core_incompatible' => false,
      'mtime' => 1586446453,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'password_policy_character_types' => 
    array (
      'name' => 'Password Character Types Policy',
      'description' => 'Minimum number of different character types the password must contain.',
      'package' => 'Security',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'password_policy:password_policy',
      ),
      'version' => '8.x-3.0-beta1',
      'project' => 'password_policy',
      'datestamp' => 1586446453,
      'core_incompatible' => false,
      'mtime' => 1586446453,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_character_types/password_policy_character_types.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'password_policy_characters' => 
    array (
      'name' => 'Password Characters of Type Policy',
      'description' => 'Minimum characters of a particular type the password must contain.',
      'package' => 'Security',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'password_policy:password_policy',
      ),
      'version' => '8.x-3.0-beta1',
      'project' => 'password_policy',
      'datestamp' => 1586446453,
      'core_incompatible' => false,
      'mtime' => 1586446453,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_characters/password_policy_characters.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'password_policy_consecutive' => 
    array (
      'name' => 'Password Consecutive Characters Policy',
      'description' => 'Sets up a consecutive characters constraint for passwords.',
      'package' => 'Security',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'password_policy:password_policy',
      ),
      'version' => '8.x-3.0-beta1',
      'project' => 'password_policy',
      'datestamp' => 1586446453,
      'core_incompatible' => false,
      'mtime' => 1586446453,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_consecutive/password_policy_consecutive.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'password_policy_history' => 
    array (
      'name' => 'Password Policy History',
      'description' => 'Sets up a password constraint to limit repeated use of the same password.',
      'package' => 'Security',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'password_policy:password_policy',
      ),
      'version' => '8.x-3.0-beta1',
      'project' => 'password_policy',
      'datestamp' => 1586446453,
      'core_incompatible' => false,
      'mtime' => 1586446453,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_history/password_policy_history.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'password_policy_length' => 
    array (
      'name' => 'Password Character Length Policy',
      'description' => 'Sets up a character length constraint for passwords.',
      'package' => 'Security',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'password_policy:password_policy',
      ),
      'version' => '8.x-3.0-beta1',
      'project' => 'password_policy',
      'datestamp' => 1586446453,
      'core_incompatible' => false,
      'mtime' => 1586446453,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_length/password_policy_length.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'password_policy_username' => 
    array (
      'name' => 'Password Username Policy',
      'description' => 'Restrict users from having their username in their password.',
      'package' => 'Security',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'password_policy:password_policy',
      ),
      'version' => '8.x-3.0-beta1',
      'project' => 'password_policy',
      'datestamp' => 1586446453,
      'core_incompatible' => false,
      'mtime' => 1586446453,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_username/password_policy_username.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'pathauto' => 
    array (
      'name' => 'Pathauto',
      'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
      'core_version_requirement' => '^8.8 || ^9',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'ctools:ctools',
        1 => 'drupal:path',
        2 => 'token:token',
      ),
      'configure' => 'entity.pathauto_pattern.collection',
      'recommends' => 
      array (
        0 => 'redirect:redirect',
      ),
      'version' => '8.x-1.8',
      'project' => 'pathauto',
      'datestamp' => 1588103048,
      'core_incompatible' => false,
      'mtime' => 1588103048,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/pathauto/pathauto.info.yml',
      'status' => 1,
      'schema_version' => '8107',
    ),
    'redirect_404' => 
    array (
      'name' => 'Redirect 404',
      'type' => 'module',
      'description' => 'Logs 404 errors and allows users to create redirects for often requested but missing pages.',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'redirect_404.fix_404',
      'dependencies' => 
      array (
        0 => 'redirect:redirect',
        1 => 'drupal:views',
      ),
      'version' => '8.x-1.6',
      'project' => 'redirect',
      'datestamp' => 1589312206,
      'core_incompatible' => false,
      'mtime' => 1589312206,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/redirect/modules/redirect_404/redirect_404.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'redirect_domain' => 
    array (
      'name' => 'Redirect Domain',
      'type' => 'module',
      'description' => 'Allows users to redirect between domains.',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'redirect_domain.domain_list',
      'dependencies' => 
      array (
        0 => 'redirect:redirect',
      ),
      'version' => '8.x-1.6',
      'project' => 'redirect',
      'datestamp' => 1589312206,
      'core_incompatible' => false,
      'mtime' => 1589312206,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/redirect/modules/redirect_domain/redirect_domain.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'redirect' => 
    array (
      'name' => 'Redirect',
      'type' => 'module',
      'description' => 'Allows users to redirect from old URLs to new URLs.',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'redirect.settings',
      'dependencies' => 
      array (
        0 => 'drupal:path_alias',
        1 => 'drupal:link',
        2 => 'drupal:views',
      ),
      'version' => '8.x-1.6',
      'project' => 'redirect',
      'datestamp' => 1589312206,
      'core_incompatible' => false,
      'mtime' => 1589312206,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/redirect/redirect.info.yml',
      'status' => 1,
      'schema_version' => '8108',
    ),
    'responsive_preview' => 
    array (
      'type' => 'module',
      'name' => 'Responsive Preview',
      'description' => 'Provides a component that previews a page in various device dimensions.',
      'package' => 'User interface',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'entity.responsive_preview_device.collection',
      'version' => '8.x-1.0',
      'project' => 'responsive_preview',
      'datestamp' => 1590478597,
      'core_incompatible' => false,
      'mtime' => 1590478597,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/responsive_preview/responsive_preview.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'scheduler' => 
    array (
      'name' => 'Scheduler',
      'type' => 'module',
      'description' => 'Publish and unpublish content automatically on specified dates and times.',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'configure' => 'scheduler.admin_form',
      'dependencies' => 
      array (
        0 => 'drupal:system (>= 8.5)',
        1 => 'drupal:datetime',
        2 => 'drupal:field',
        3 => 'drupal:node',
        4 => 'drupal:views',
      ),
      'test_dependencies' => 
      array (
        0 => 'rules:rules',
        1 => 'devel:devel_generate',
      ),
      'libraries' => 
      array (
        0 => 'scheduler/admin',
        1 => 'vertical-tabs',
        2 => 'default-time',
      ),
      'version' => '8.x-1.3',
      'project' => 'scheduler',
      'datestamp' => 1591431340,
      'core_incompatible' => false,
      'mtime' => 1591431340,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler/scheduler.info.yml',
      'status' => 1,
      'schema_version' => '8101',
    ),
    'scheduler_rules_integration' => 
    array (
      'name' => 'Scheduler Rules Integration',
      'type' => 'module',
      'description' => 'Scheduler sub-module providing conditions, actions and events for use with the Rules module.',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'rules:rules',
        1 => 'scheduler:scheduler',
      ),
      'version' => '8.x-1.3',
      'project' => 'scheduler',
      'datestamp' => 1591431340,
      'core_incompatible' => false,
      'mtime' => 1591431340,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler/scheduler_rules_integration/scheduler_rules_integration.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'scheduler_content_moderation_integration' => 
    array (
      'name' => 'Scheduler Content Moderation Integration',
      'type' => 'module',
      'description' => 'Scheduler sub-module providing content moderation functionality for publishing/unpublishing.',
      'core_version_requirement' => '^8.7.7 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:options',
        1 => 'drupal:content_moderation',
        2 => 'scheduler:scheduler',
      ),
      'version' => '8.x-1.3',
      'project' => 'scheduler_content_moderation_integration',
      'datestamp' => 1591179042,
      'core_incompatible' => false,
      'mtime' => 1591179042,
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler_content_moderation_integration/scheduler_content_moderation_integration.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'search_api_db' => 
    array (
      'type' => 'module',
      'name' => 'Database Search',
      'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
      'package' => 'Search',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'search_api:search_api',
      ),
      'version' => '8.x-1.17',
      'project' => 'search_api',
      'datestamp' => 1591128372,
      'core_incompatible' => false,
      'mtime' => 1591128372,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api/modules/search_api_db/search_api_db.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api_db_defaults' => 
    array (
      'type' => 'module',
      'name' => 'Database Search Defaults',
      'description' => 'Enable this module for a best-practice default setup of Search API with the Database backend. After installation it is recommended to uninstall this module again for performance reasons. The provided configuration will not be removed.',
      'package' => 'Search',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:comment',
        1 => 'drupal:field',
        2 => 'drupal:image',
        3 => 'drupal:node',
        4 => 'drupal:text',
        5 => 'drupal:user',
        6 => 'drupal:views',
        7 => 'search_api:search_api_db',
      ),
      'version' => '8.x-1.17',
      'project' => 'search_api',
      'datestamp' => 1591128372,
      'core_incompatible' => false,
      'mtime' => 1591128372,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api/modules/search_api_db/search_api_db_defaults/search_api_db_defaults.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api' => 
    array (
      'type' => 'module',
      'name' => 'Search API',
      'description' => 'Provides a generic framework for modules offering search capabilities.',
      'package' => 'Search',
      'core_version_requirement' => '^8.8 || ^9',
      'configure' => 'search_api.overview',
      'version' => '8.x-1.17',
      'project' => 'search_api',
      'datestamp' => 1591128372,
      'core_incompatible' => false,
      'mtime' => 1591128372,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api/search_api.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'search_api_mark_outdated' => 
    array (
      'name' => 'Search API Mark Outdated',
      'type' => 'module',
      'description' => 'Visually mark outdated content on search_api views.',
      'package' => 'search_api',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'search_api:search_api',
      ),
      'version' => '1.0.0-beta1',
      'project' => 'search_api_mark_outdated',
      'datestamp' => 1597242907,
      'core_incompatible' => false,
      'mtime' => 1597242907,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api_mark_outdated/search_api_mark_outdated.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'select2_facets' => 
    array (
      'name' => 'Select2 Facets',
      'type' => 'module',
      'description' => 'Provides a Select2 Facet widget.',
      'package' => 'Search',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'facets:facets (>=8.x-1.5)',
        1 => 'select2:select2',
      ),
      'version' => '8.x-1.9',
      'project' => 'select2',
      'datestamp' => 1597661474,
      'core_incompatible' => false,
      'mtime' => 1597661474,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/modules/select2_facets/select2_facets.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'select2_publish' => 
    array (
      'name' => 'Select2 Publish',
      'type' => 'module',
      'description' => 'Indicates the status of referenced entities.',
      'package' => 'User interface',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'select2:select2',
        1 => 'form_options_attributes:form_options_attributes',
      ),
      'version' => '8.x-1.9',
      'project' => 'select2',
      'datestamp' => 1597661474,
      'core_incompatible' => false,
      'mtime' => 1597661474,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/modules/select2_publish/select2_publish.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'select2' => 
    array (
      'name' => 'Select2',
      'type' => 'module',
      'description' => 'Makes entity reference fields more user-friendly using <a href="https://github.com/select2/select2">Select2</a>.',
      'package' => 'User interface',
      'core_version_requirement' => '^8.8 || ^9',
      'version' => '8.x-1.9',
      'project' => 'select2',
      'datestamp' => 1597661474,
      'core_incompatible' => false,
      'mtime' => 1597661474,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/select2.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'shariff' => 
    array (
      'name' => 'Shariff Sharing Buttons',
      'description' => 'Shariff enables website users to share their favorite content without compromising their privacy. This module integrates this plugin in Drupal.',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'type' => 'module',
      'version' => '8.x-1.7',
      'project' => 'shariff',
      'datestamp' => 1600424776,
      'core_incompatible' => false,
      'mtime' => 1600424776,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/shariff/shariff.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'simple_gmap' => 
    array (
      'name' => 'Simple Google Maps',
      'type' => 'module',
      'description' => 'Provides a Google Maps link/map formatter for simple Text fields.',
      'package' => 'Field types',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'field',
        1 => 'text',
      ),
      'test_dependencies' => 
      array (
        0 => 'address',
      ),
      'version' => '8.x-2.0',
      'project' => 'simple_gmap',
      'datestamp' => 1579517590,
      'core_incompatible' => false,
      'mtime' => 1579517590,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_gmap/simple_gmap.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'simple_sitemap_engines' => 
    array (
      'name' => 'Simple XML Sitemap (Search engines)',
      'type' => 'module',
      'description' => 'Submits sitemaps to search engines.',
      'configure' => 'simple_sitemap_engines.settings',
      'package' => 'SEO',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'simple_sitemap:simple_sitemap',
      ),
      'version' => '8.x-3.7',
      'project' => 'simple_sitemap',
      'datestamp' => 1592298876,
      'core_incompatible' => false,
      'mtime' => 1592298876,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_sitemap/modules/simple_sitemap_engines/simple_sitemap_engines.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'simple_sitemap_views' => 
    array (
      'name' => 'Simple XML Sitemap (Views)',
      'type' => 'module',
      'description' => 'Provides integration of the Simple XML Sitemap module with the Views module.',
      'configure' => 'simple_sitemap.settings_views',
      'package' => 'SEO',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'simple_sitemap:simple_sitemap',
        1 => 'drupal:views',
      ),
      'version' => '8.x-3.7',
      'project' => 'simple_sitemap',
      'datestamp' => 1592298876,
      'core_incompatible' => false,
      'mtime' => 1592298876,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_sitemap/modules/simple_sitemap_views/simple_sitemap_views.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'simple_sitemap' => 
    array (
      'name' => 'Simple XML Sitemap',
      'type' => 'module',
      'description' => 'Generates standard conform hreflang XML sitemaps of the site content and provides a framework for developing other sitemap types.',
      'configure' => 'simple_sitemap.sitemaps',
      'package' => 'SEO',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'version' => '8.x-3.7',
      'project' => 'simple_sitemap',
      'datestamp' => 1592298876,
      'core_incompatible' => false,
      'mtime' => 1592298876,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_sitemap/simple_sitemap.info.yml',
      'status' => 1,
      'schema_version' => '8302',
    ),
    'slick' => 
    array (
      'name' => 'Slick',
      'type' => 'module',
      'description' => 'Slick carousel, the last carousel you\'ll ever need.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Slick',
      'dependencies' => 
      array (
        0 => 'blazy:blazy (>= 2.x)',
      ),
      'version' => '8.x-2.2',
      'project' => 'slick',
      'datestamp' => 1588861106,
      'core_incompatible' => false,
      'mtime' => 1588861106,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/slick/slick.info.yml',
      'status' => 1,
      'schema_version' => '8205',
    ),
    'slick_ui' => 
    array (
      'name' => 'Slick UI',
      'type' => 'module',
      'description' => 'Provides Slick carousel configuration UI.',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Slick',
      'configure' => 'entity.slick.collection',
      'dependencies' => 
      array (
        0 => 'slick:slick (>= 2.x)',
      ),
      'version' => '8.x-2.2',
      'project' => 'slick',
      'datestamp' => 1588861106,
      'core_incompatible' => false,
      'mtime' => 1588861106,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/slick/slick_ui/slick_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'token' => 
    array (
      'type' => 'module',
      'name' => 'Token',
      'description' => 'Provides a user interface for the Token API and some missing core tokens.',
      'core_version_requirement' => '^8.8 || ^9',
      'version' => '8.x-1.7',
      'project' => 'token',
      'datestamp' => 1587893591,
      'core_incompatible' => false,
      'mtime' => 1587893591,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/token/token.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'update_helper_checklist' => 
    array (
      'name' => 'Update Helper Checklist',
      'description' => 'Provide integration of Update Helper module with checklist.',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'update_helper:update_helper',
        1 => 'checklistapi:checklistapi',
      ),
      'package' => 'Configuration',
      'version' => '2.0.0',
      'project' => 'update_helper',
      'datestamp' => 1591777962,
      'core_incompatible' => false,
      'mtime' => 1591777962,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/update_helper/modules/update_helper_checklist/update_helper_checklist.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'update_helper' => 
    array (
      'name' => 'Update Helper',
      'description' => 'Helper tool for generation and applying of configuration updates.',
      'type' => 'module',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'config_update:config_update',
      ),
      'package' => 'Configuration',
      'version' => '2.0.0',
      'project' => 'update_helper',
      'datestamp' => 1591777962,
      'core_incompatible' => false,
      'mtime' => 1591777962,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/update_helper/update_helper.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'actions_permissions' => 
    array (
      'type' => 'module',
      'name' => 'Actions Permissions',
      'description' => 'Adds access permissions on all actions allowing admins to restrict access on a per-role basis.',
      'package' => 'Views Bulk Operations',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:views_bulk_operations',
      ),
      'version' => '8.x-3.9',
      'project' => 'views_bulk_operations',
      'datestamp' => 1597319023,
      'core_incompatible' => false,
      'mtime' => 1597319023,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/views_bulk_operations/modules/actions_permissions/actions_permissions.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'views_bulk_operations_example' => 
    array (
      'type' => 'module',
      'name' => 'Views Bulk Operations example',
      'description' => 'Defines an example action with all possible options.',
      'package' => 'Examples',
      'core_version_requirement' => '^8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:views_bulk_operations',
      ),
      'version' => '8.x-3.9',
      'project' => 'views_bulk_operations',
      'datestamp' => 1597319023,
      'core_incompatible' => false,
      'mtime' => 1597319023,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/views_bulk_operations/modules/views_bulk_operations_example/views_bulk_operations_example.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'views_bulk_operations' => 
    array (
      'type' => 'module',
      'name' => 'Views Bulk Operations',
      'description' => 'Adds an ability to perform bulk operations on selected entities from view results.',
      'package' => 'Views',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'drupal:views',
      ),
      'version' => '8.x-3.9',
      'project' => 'views_bulk_operations',
      'datestamp' => 1597319023,
      'core_incompatible' => false,
      'mtime' => 1597319023,
      'php' => '7.3.0',
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/views_bulk_operations/views_bulk_operations.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg' => 
    array (
      'name' => 'Advanced CSS/JS Aggregation',
      'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'type' => 'module',
      'configure' => 'advagg.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_bundler' => 
    array (
      'name' => 'AdvAgg Bundler',
      'description' => 'Customize the number of aggregates to be created.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_bundler.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_bundler/advagg_bundler.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_cdn' => 
    array (
      'name' => 'AdvAgg CDN',
      'description' => 'Use a shared CDN for JavaScript and/or CSS libraries, Google Libraries API currently.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_cdn.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_cdn/advagg_cdn.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_css_minify' => 
    array (
      'name' => 'AdvAgg Minify CSS',
      'description' => 'Minify CSS.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_css_minify.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_css_minify/advagg_css_minify.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_ext_minify' => 
    array (
      'name' => 'AdvAgg External Minification',
      'description' => 'Minify Javascript and/or CSS with a command line minifier.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_ext_minify.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_ext_minify/advagg_ext_minify.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_js_minify' => 
    array (
      'name' => 'AdvAgg Minify JavaScript',
      'description' => 'Minify JavaScript with a 3rd party minifier; JSMin+, JSMin c ext, JShrink, and JSqueeze currently.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_js_minify.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_js_minify/advagg_js_minify.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_mod' => 
    array (
      'name' => 'AdvAgg Modifier',
      'description' => 'Allows one to alter the CSS and JS array.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_mod.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_mod/advagg_mod.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_old_ie_compatibility' => 
    array (
      'name' => 'AdvAgg Old Internet Explorer Compatibility Enhancer',
      'description' => 'Provides some enhanced compatibility with outdated Internet Explorer versions.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_old_ie_compatibility.settings',
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_old_ie_compatibility/advagg_old_ie_compatibility.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_validator' => 
    array (
      'name' => 'AdvAgg CSS/JS Validator',
      'description' => 'Validate the CSS and JS files used in Aggregation for syntax errors.',
      'package' => 'Advanced CSS/JS Aggregation',
      'core_version_requirement' => '^8.8 || ^9',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'advagg:advagg',
      ),
      'version' => '8.x-4.1',
      'project' => 'advagg',
      'datestamp' => 1591377167,
      'core_incompatible' => false,
      'mtime' => 1591377167,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/advagg/advagg_validator/advagg_validator.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'cdn' => 
    array (
      'name' => 'CDN',
      'description' => 'Serves files (CSS, JS, images …) from a CDN.',
      'type' => 'module',
      'package' => 'Web services',
      'core_version_requirement' => '^8.8 || ^9',
      'version' => '8.x-3.5',
      'project' => 'cdn',
      'datestamp' => 1585778367,
      'core_incompatible' => false,
      'mtime' => 1585778367,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/cdn/cdn.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'cdn_ui' => 
    array (
      'name' => 'CDN UI',
      'description' => 'Administrative interface for CDN.',
      'type' => 'module',
      'core_version_requirement' => '^8.8 || ^9',
      'package' => 'Web services',
      'configure' => 'cdn_ui.settings',
      'dependencies' => 
      array (
        0 => 'cdn:cdn',
      ),
      'version' => '8.x-3.5',
      'project' => 'cdn',
      'datestamp' => 1585778367,
      'core_incompatible' => false,
      'mtime' => 1585778367,
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/cdn/cdn_ui/cdn_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'readonlymode' => 
    array (
      'name' => 'Read Only Mode',
      'description' => 'This module will lock your site for any form postings.',
      'package' => 'Administration',
      'type' => 'module',
      'configure' => 'system.site_maintenance_mode',
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'readonlymode',
      'datestamp' => 1541690884,
      'core_incompatible' => true,
      'mtime' => 1541690884,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/readonlymode/readonlymode.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'robotstxt' => 
    array (
      'name' => 'RobotsTxt',
      'type' => 'module',
      'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
      'package' => 'Other',
      'core' => '8.x',
      'core_version_requirement' => '^8 || ^9',
      'configure' => 'robotstxt.admin_settings_form',
      'version' => '8.x-1.4',
      'project' => 'robotstxt',
      'datestamp' => 1585290536,
      'core_incompatible' => false,
      'mtime' => 1585290536,
      'dependencies' => 
      array (
      ),
      'php' => '7.3.0',
      'filename' => '/data/all/054/o_contrib_eight/robotstxt/robotstxt.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'name' => 'Bartik',
      'type' => 'theme',
      'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
      'package' => 'Core',
      'version' => '9.0.6',
      'libraries' => 
      array (
        0 => 'bartik/classy.base',
        1 => 'bartik/classy.messages',
        2 => 'core/normalize',
        3 => 'bartik/global-styling',
      ),
      'libraries-extend' => 
      array (
        'core/drupal.dialog' => 
        array (
          0 => 'bartik/classy.dialog',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'bartik/classy.dropbutton',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'bartik/classy.progress',
        ),
        'file/drupal.file' => 
        array (
          0 => 'bartik/classy.file',
        ),
        'filter/drupal.filter.admin' => 
        array (
          0 => 'bartik/filter',
        ),
        'filter/drupal.filter' => 
        array (
          0 => 'bartik/filter',
        ),
        'media/media_embed_ckeditor_theme' => 
        array (
          0 => 'bartik/classy.media_embed_ckeditor_theme',
        ),
        'media_library/view' => 
        array (
          0 => 'bartik/classy.media_library',
        ),
        'media_library/widget' => 
        array (
          0 => 'bartik/classy.media_library',
        ),
        'user/drupal.user' => 
        array (
          0 => 'bartik/user',
        ),
      ),
      'ckeditor_stylesheets' => 
      array (
        0 => 'css/base/elements.css',
        1 => 'css/components/captions.css',
        2 => 'css/components/table.css',
        3 => 'css/components/text-formatted.css',
        4 => 'css/classy/components/media-embed-error.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'highlighted' => 'Highlighted',
        'featured_top' => 'Featured top',
        'breadcrumb' => 'Breadcrumb',
        'content' => 'Content',
        'sidebar_first' => 'Sidebar first',
        'sidebar_second' => 'Sidebar second',
        'featured_bottom_first' => 'Featured bottom first',
        'featured_bottom_second' => 'Featured bottom second',
        'featured_bottom_third' => 'Featured bottom third',
        'footer_first' => 'Footer first',
        'footer_second' => 'Footer second',
        'footer_third' => 'Footer third',
        'footer_fourth' => 'Footer fourth',
        'footer_fifth' => 'Footer fifth',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/bartik/screenshot.png',
      'php' => '7.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/bartik/bartik.info.yml',
      'status' => 1,
    ),
    'claro' => 
    array (
      'name' => 'Claro',
      'type' => 'theme',
      'description' => 'A clean, accessible, and powerful Drupal administration theme.',
      'alt text' => 'Screenshot of Claro, Drupal administration theme.',
      'package' => 'Core',
      'version' => '9.0.6',
      'experimental' => true,
      'libraries' => 
      array (
        0 => 'core/drupal.message',
        1 => 'core/normalize',
        2 => 'claro/global-styling',
      ),
      'libraries-override' => 
      array (
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/ajax-progress.module.css' => 'css/components/ajax-progress.module.css',
              'css/components/autocomplete-loading.module.css' => 'css/components/autocomplete-loading.module.css',
              'css/components/system-status-counter.css' => 'css/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
              'css/components/tabledrag.module.css' => 'css/components/tabledrag.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => false,
            ),
          ),
        ),
        'core/drupal.dialog.off_canvas' => 
        array (
          'css' => 
          array (
            'base' => 
            array (
              'misc/dialog/off-canvas.theme.css' => 'css/base/off-canvas.theme.css',
            ),
          ),
        ),
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/components/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.tabledrag' => 
        array (
          'js' => 
          array (
            'misc/tabledrag.js' => 'js/tabledrag.js',
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => false,
            ),
          ),
          'js' => 
          array (
            'misc/vertical-tabs.js' => 'js/vertical-tabs.js',
          ),
        ),
        'core/jquery.ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'assets/vendor/jquery.ui/themes/base/theme.css' => false,
            ),
          ),
        ),
        'core/jquery.ui.dialog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
            ),
          ),
        ),
        'user/drupal.user' => 'claro/form.password-confirm',
        'field_ui/drupal.field_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui.admin.css' => 'css/theme/field-ui.admin.css',
            ),
          ),
        ),
        'views_ui/admin.styling' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/views_ui.admin.theme.css' => 'css/theme/views_ui.admin.theme.css',
            ),
          ),
        ),
      ),
      'libraries-extend' => 
      array (
        'ckeditor/drupal.ckeditor' => 
        array (
          0 => 'claro/ckeditor-editor',
        ),
        'core/ckeditor' => 
        array (
          0 => 'claro/ckeditor-dialog',
        ),
        'core/drupal.collapse' => 
        array (
          0 => 'claro/details-focus',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'claro/claro.drupal.dialog',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'claro/dropbutton',
        ),
        'core/drupal.checkbox' => 
        array (
          0 => 'claro/checkbox',
        ),
        'core/drupal.message' => 
        array (
          0 => 'claro/messages',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'claro/progress',
        ),
        'core/drupal.vertical-tabs' => 
        array (
          0 => 'claro/vertical-tabs',
        ),
        'core/jquery.ui' => 
        array (
          0 => 'claro/claro.jquery.ui',
        ),
        'file/drupal.file' => 
        array (
          0 => 'claro/file',
        ),
        'filter/drupal.filter.admin' => 
        array (
          0 => 'claro/filter',
        ),
        'filter/drupal.filter' => 
        array (
          0 => 'claro/filter',
        ),
        'system/admin' => 
        array (
          0 => 'claro/system.admin',
        ),
        'core/drupal.autocomplete' => 
        array (
          0 => 'claro/autocomplete',
        ),
        'tour/tour-styling' => 
        array (
          0 => 'claro/tour-styling',
        ),
        'shortcut/drupal.shortcut' => 
        array (
          0 => 'claro/drupal.shortcut',
        ),
        'core/drupal.ajax' => 
        array (
          0 => 'claro/ajax',
        ),
        'views/views.module' => 
        array (
          0 => 'claro/views',
        ),
        'media/media_embed_ckeditor_theme' => 
        array (
          0 => 'claro/classy.media_embed_ckeditor_theme',
        ),
        'media_library/ui' => 
        array (
          0 => 'claro/media_library.ui',
        ),
        'media_library/view' => 
        array (
          0 => 'claro/media_library.theme',
        ),
        'media_library/widget' => 
        array (
          0 => 'claro/media_library.theme',
        ),
      ),
      'quickedit_stylesheets' => 
      array (
        0 => 'css/components/quickedit.css',
      ),
      'ckeditor_stylesheets' => 
      array (
        0 => 'css/base/elements.css',
        1 => 'css/base/typography.css',
        2 => 'css/theme/ckeditor-frame.css',
        3 => 'css/classy/components/media-embed-error.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'pre_content' => 'Pre-content',
        'breadcrumb' => 'Breadcrumb',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'sidebar_first' => 'First sidebar',
      ),
      'regions_hidden' => 
      array (
        0 => 'sidebar_first',
        1 => 'page_top',
        2 => 'page_bottom',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/claro/screenshot.png',
      'php' => '7.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/claro/claro.info.yml',
      'status' => 0,
    ),
    'classy' => 
    array (
      'name' => 'Classy',
      'type' => 'theme',
      'base theme' => 'stable',
      'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
      'package' => 'Core',
      'version' => '9.0.6',
      'hidden' => true,
      'libraries' => 
      array (
        0 => 'classy/base',
        1 => 'classy/messages',
        2 => 'core/normalize',
      ),
      'libraries-extend' => 
      array (
        'user/drupal.user' => 
        array (
          0 => 'classy/user',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'classy/dropbutton',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'classy/dialog',
        ),
        'file/drupal.file' => 
        array (
          0 => 'classy/file',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'classy/progress',
        ),
        'media/media_embed_ckeditor_theme' => 
        array (
          0 => 'classy/media_embed_ckeditor_theme',
        ),
        'media_library/view' => 
        array (
          0 => 'classy/media_library',
        ),
        'media_library/widget' => 
        array (
          0 => 'classy/media_library',
        ),
      ),
      'ckeditor_stylesheets' => 
      array (
        0 => 'css/components/media-embed-error.css',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/classy/screenshot.png',
      'php' => '7.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'stable',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/classy/classy.info.yml',
      'status' => 0,
    ),
    'seven' => 
    array (
      'name' => 'Seven',
      'type' => 'theme',
      'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
      'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
      'package' => 'Core',
      'version' => '9.0.6',
      'libraries' => 
      array (
        0 => 'seven/classy.messages',
        1 => 'core/normalize',
        2 => 'seven/global-styling',
      ),
      'libraries-override' => 
      array (
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/system-status-counter.css' => 'css/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => false,
            ),
          ),
        ),
        'core/jquery.ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'assets/vendor/jquery.ui/themes/base/theme.css' => false,
            ),
          ),
        ),
        'core/jquery.ui.dialog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
            ),
          ),
        ),
      ),
      'libraries-extend' => 
      array (
        'core/ckeditor' => 
        array (
          0 => 'seven/ckeditor-dialog',
        ),
        'core/drupal.dialog' => 
        array (
          0 => 'seven/seven.drupal.dialog',
        ),
        'core/drupal.dropbutton' => 
        array (
          0 => 'seven/classy.dropbutton',
        ),
        'core/drupal.progress' => 
        array (
          0 => 'seven/classy.progress',
        ),
        'core/drupal.vertical-tabs' => 
        array (
          0 => 'seven/vertical-tabs',
        ),
        'core/jquery.ui' => 
        array (
          0 => 'seven/seven.jquery.ui',
        ),
        'file/drupal.file' => 
        array (
          0 => 'seven/classy.file',
        ),
        'filter/drupal.filter.admin' => 
        array (
          0 => 'seven/filter',
        ),
        'filter/drupal.filter' => 
        array (
          0 => 'seven/filter',
        ),
        'media/media_embed_ckeditor_theme' => 
        array (
          0 => 'seven/classy.media_embed_ckeditor_theme',
        ),
        'media_library/view' => 
        array (
          0 => 'seven/media_library',
        ),
        'media_library/widget' => 
        array (
          0 => 'seven/media_library',
        ),
        'tour/tour-styling' => 
        array (
          0 => 'seven/tour-styling',
        ),
        'user/drupal.user' => 
        array (
          0 => 'seven/user',
        ),
      ),
      'quickedit_stylesheets' => 
      array (
        0 => 'css/components/quickedit.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'pre_content' => 'Pre-content',
        'breadcrumb' => 'Breadcrumb',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'sidebar_first' => 'First sidebar',
      ),
      'regions_hidden' => 
      array (
        0 => 'sidebar_first',
        1 => 'page_top',
        2 => 'page_bottom',
      ),
      'ckeditor_stylesheets' => 
      array (
        0 => 'css/classy/components/media-embed-error.css',
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/seven/screenshot.png',
      'php' => '7.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/seven/seven.info.yml',
      'status' => 1,
    ),
    'stable' => 
    array (
      'name' => 'Stable',
      'type' => 'theme',
      'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
      'package' => 'Core',
      'version' => '9.0.6',
      'hidden' => true,
      'libraries-override' => 
      array (
        'block/drupal.block.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/block.admin.css' => 'css/block/block.admin.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.language' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
            ),
          ),
        ),
        'color/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/color.admin.css' => 'css/color/color.admin.css',
            ),
          ),
        ),
        'config_translation/drupal.config_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
            ),
          ),
        ),
        'content_translation/drupal.content_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
            ),
          ),
        ),
        'content_moderation/content_moderation' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/content_moderation.module.css' => 'css/content_moderation/content_moderation.module.css',
            ),
            'theme' => 
            array (
              'css/content_moderation.theme.css' => 'css/content_moderation/content_moderation.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-links' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.module.css' => 'css/contextual/contextual.module.css',
            ),
            'theme' => 
            array (
              'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
              'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
            ),
          ),
        ),
        'core/drupal.dialog.off_canvas' => 
        array (
          'css' => 
          array (
            'base' => 
            array (
              'misc/dialog/off-canvas.reset.css' => 'css/core/dialog/off-canvas.reset.css',
              'misc/dialog/off-canvas.base.css' => 'css/core/dialog/off-canvas.base.css',
              'misc/dialog/off-canvas.css' => 'css/core/dialog/off-canvas.css',
              'misc/dialog/off-canvas.theme.css' => 'css/core/dialog/off-canvas.theme.css',
            ),
            'component' => 
            array (
              'misc/dialog/off-canvas.motion.css' => 'css/core/dialog/off-canvas.motion.css',
              'misc/dialog/off-canvas.button.css' => 'css/core/dialog/off-canvas.button.css',
              'misc/dialog/off-canvas.form.css' => 'css/core/dialog/off-canvas.form.css',
              'misc/dialog/off-canvas.table.css' => 'css/core/dialog/off-canvas.table.css',
              'misc/dialog/off-canvas.details.css' => 'css/core/dialog/off-canvas.details.css',
              'misc/dialog/off-canvas.tabledrag.css' => 'css/core/dialog/off-canvas.tabledrag.css',
              'misc/dialog/off-canvas.dropbutton.css' => 'css/core/dialog/off-canvas.dropbutton.css',
              'misc/dialog/off-canvas.layout.css' => 'css/core/dialog/off-canvas.layout.css',
            ),
          ),
        ),
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
            ),
          ),
        ),
        'core/normalize' => 'stable/normalize',
        'dblog/drupal.dblog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/dblog.module.css' => 'css/dblog/dblog.module.css',
            ),
          ),
        ),
        'field_ui/drupal.field_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
            ),
          ),
        ),
        'file/drupal.file' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/file.admin.css' => 'css/file/file.admin.css',
            ),
          ),
        ),
        'filter/drupal.filter.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => 'css/filter/filter.admin.css',
            ),
          ),
        ),
        'filter/drupal.filter' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/filter.admin.css' => 'css/filter/filter.admin.css',
            ),
          ),
        ),
        'filter/caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/filter/filter.caption.css',
            ),
          ),
        ),
        'image/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/image.admin.css' => 'css/image/image.admin.css',
            ),
          ),
        ),
        'image/quickedit.inPlaceEditor.image' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/editors/image.css' => 'css/image/editors/image.css',
            ),
            'theme' => 
            array (
              'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
            ),
          ),
        ),
        'language/drupal.language.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/language.admin.css' => 'css/language/language.admin.css',
            ),
          ),
        ),
        'layout_builder/drupal.layout_builder' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/layout-builder.css' => 'css/layout_builder/layout-builder.css',
            ),
          ),
        ),
        'locale/drupal.locale.admin' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/locale.admin.css' => 'css/locale/locale.admin.css',
            ),
          ),
        ),
        'media/filter.caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/media/filter.caption.css',
            ),
          ),
        ),
        'media/oembed.formatter' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.formatter.css' => 'css/media/oembed.formatter.css',
            ),
          ),
        ),
        'media/oembed.frame' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.frame.css' => 'css/media/oembed.frame.css',
            ),
          ),
        ),
        'menu_ui/drupal.menu_ui.adminforms' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
            ),
          ),
        ),
        'migrate_drupal_ui/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/upgrade-analysis-report-tables.css' => 'css/migrate_drupal_ui/components/upgrade-analysis-report-tables.css',
            ),
          ),
        ),
        'node/drupal.node' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.preview' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.preview.css' => 'css/node/node.preview.css',
            ),
          ),
        ),
        'node/form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.admin.css' => 'css/node/node.admin.css',
            ),
          ),
        ),
        'quickedit/quickedit' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
            ),
            'theme' => 
            array (
              'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
              'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
            ),
          ),
        ),
        'settings_tray/drupal.settings_tray' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/settings_tray.module.css' => 'css/settings_tray/settings_tray.module.css',
              'css/settings_tray.motion.css' => 'css/settings_tray/settings_tray.motion.css',
              'css/settings_tray.toolbar.css' => 'css/settings_tray/settings_tray.toolbar.css',
            ),
            'theme' => 
            array (
              'css/settings_tray.theme.css' => 'css/settings_tray/settings_tray.theme.css',
            ),
          ),
        ),
        'shortcut/drupal.shortcut' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
              'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
            ),
          ),
        ),
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
              'css/components/align.module.css' => 'css/system/components/align.module.css',
              'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
              'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
              'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
              'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
              'css/components/details.module.css' => 'css/system/components/details.module.css',
              'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
              'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
              'css/components/js.module.css' => 'css/system/components/js.module.css',
              'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
              'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
              'css/components/progress.module.css' => 'css/system/components/progress.module.css',
              'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
              'css/components/resize.module.css' => 'css/system/components/resize.module.css',
              'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
              'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
              'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
              'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
              'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => 'css/system/system.admin.css',
            ),
          ),
        ),
        'system/maintenance' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.maintenance.css' => 'css/system/system.maintenance.css',
            ),
          ),
        ),
        'system/diff' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/system.diff.css' => 'css/system/system.diff.css',
            ),
          ),
        ),
        'taxonomy/drupal.taxonomy' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
            ),
            'theme' => 
            array (
              'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
              'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar.menu' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
            ),
          ),
        ),
        'tour/tour-styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/tour.module.css' => 'css/tour/tour.module.css',
            ),
          ),
        ),
        'update/drupal.update.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
            ),
          ),
        ),
        'user/drupal.user' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/user.module.css' => 'css/user/user.module.css',
            ),
          ),
        ),
        'user/drupal.user.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.admin.css' => 'css/user/user.admin.css',
            ),
          ),
        ),
        'user/drupal.user.icons' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
            ),
          ),
        ),
        'views/views.module' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views.module.css' => 'css/views/views.module.css',
            ),
          ),
        ),
        'views_ui/admin.styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
            ),
            'theme' => 
            array (
              'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
              'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
            ),
          ),
        ),
      ),
      'libraries-extend' => 
      array (
        'core/drupal.ajax' => 
        array (
          0 => 'stable/drupal.ajax',
        ),
        'user/drupal.user' => 
        array (
          0 => 'stable/drupal.user',
        ),
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stable/screenshot.png',
      'php' => '7.3.0',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/stable/stable.info.yml',
      'status' => 0,
    ),
    'stable9' => 
    array (
      'name' => 'Stable 9',
      'type' => 'theme',
      'description' => 'A base theme using Drupal 9.0.0\'s core markup and CSS.',
      'package' => 'Core',
      'version' => '9.0.6',
      'hidden' => true,
      'libraries-override' => 
      array (
        'block/drupal.block.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/block.admin.css' => 'css/block/block.admin.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.plugins.language' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
            ),
          ),
        ),
        'ckeditor/drupal.ckeditor.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
            ),
          ),
        ),
        'color/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/color.admin.css' => 'css/color/color.admin.css',
            ),
          ),
        ),
        'config_translation/drupal.config_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
            ),
          ),
        ),
        'content_translation/drupal.content_translation.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
            ),
          ),
        ),
        'content_moderation/content_moderation' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/content_moderation.module.css' => 'css/content_moderation/content_moderation.module.css',
            ),
            'theme' => 
            array (
              'css/content_moderation.theme.css' => 'css/content_moderation/content_moderation.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-links' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.module.css' => 'css/contextual/contextual.module.css',
            ),
            'theme' => 
            array (
              'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
              'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
            ),
          ),
        ),
        'contextual/drupal.contextual-toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
            ),
          ),
        ),
        'core/drupal.dialog.off_canvas' => 
        array (
          'css' => 
          array (
            'base' => 
            array (
              'misc/dialog/off-canvas.reset.css' => 'css/core/dialog/off-canvas.reset.css',
              'misc/dialog/off-canvas.base.css' => 'css/core/dialog/off-canvas.base.css',
              'misc/dialog/off-canvas.css' => 'css/core/dialog/off-canvas.css',
              'misc/dialog/off-canvas.theme.css' => 'css/core/dialog/off-canvas.theme.css',
            ),
            'component' => 
            array (
              'misc/dialog/off-canvas.motion.css' => 'css/core/dialog/off-canvas.motion.css',
              'misc/dialog/off-canvas.button.css' => 'css/core/dialog/off-canvas.button.css',
              'misc/dialog/off-canvas.form.css' => 'css/core/dialog/off-canvas.form.css',
              'misc/dialog/off-canvas.table.css' => 'css/core/dialog/off-canvas.table.css',
              'misc/dialog/off-canvas.details.css' => 'css/core/dialog/off-canvas.details.css',
              'misc/dialog/off-canvas.tabledrag.css' => 'css/core/dialog/off-canvas.tabledrag.css',
              'misc/dialog/off-canvas.dropbutton.css' => 'css/core/dialog/off-canvas.dropbutton.css',
              'misc/dialog/off-canvas.layout.css' => 'css/core/dialog/off-canvas.layout.css',
            ),
          ),
        ),
        'core/drupal.dropbutton' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
            ),
          ),
        ),
        'core/normalize' => 'stable/normalize',
        'dblog/drupal.dblog' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/dblog.module.css' => 'css/dblog/dblog.module.css',
            ),
          ),
        ),
        'field_ui/drupal.field_ui' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
            ),
          ),
        ),
        'filter/caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/filter/filter.caption.css',
            ),
          ),
        ),
        'image/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/image.admin.css' => 'css/image/image.admin.css',
            ),
          ),
        ),
        'image/quickedit.inPlaceEditor.image' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/editors/image.css' => 'css/image/editors/image.css',
            ),
            'theme' => 
            array (
              'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
            ),
          ),
        ),
        'language/drupal.language.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/language.admin.css' => 'css/language/language.admin.css',
            ),
          ),
        ),
        'layout_discovery/onecol' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/onecol/onecol.css' => 'layouts/layout_discovery/onecol/onecol.css',
            ),
          ),
        ),
        'layout_discovery/twocol_bricks' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/twocol_bricks/twocol_bricks.css' => 'layouts/layout_discovery/twocol_bricks/twocol_bricks.css',
            ),
          ),
        ),
        'layout_discovery/twocol' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/twocol/twocol.css' => 'layouts/layout_discovery/twocol/twocol.css',
            ),
          ),
        ),
        'layout_discovery/threecol_25_50_25' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/threecol_25_50_25/threecol_25_50_25.css' => 'layouts/layout_discovery/threecol_25_50_25/threecol_25_50_25.css',
            ),
          ),
        ),
        'layout_discovery/threecol_33_34_33' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/threecol_33_34_33/threecol_33_34_33.css' => 'layouts/layout_discovery/threecol_33_34_33/threecol_33_34_33.css',
            ),
          ),
        ),
        'layout_builder/drupal.layout_builder' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/layout-builder.css' => 'css/layout_builder/layout-builder.css',
            ),
          ),
        ),
        'layout_builder/twocol_section' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/twocol_section/twocol_section.css' => 'layouts/layout_builder/twocol_section/twocol_section.css',
            ),
          ),
        ),
        'layout_builder/threecol_section' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/threecol_section/threecol_section.css' => 'layouts/layout_builder/threecol_section/threecol_section.css',
            ),
          ),
        ),
        'layout_builder/fourcol_section' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'layouts/fourcol_section/fourcol_section.css' => 'layouts/layout_builder/fourcol_section/fourcol_section.css',
            ),
          ),
        ),
        'locale/drupal.locale.admin' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/locale.admin.css' => 'css/locale/locale.admin.css',
            ),
          ),
        ),
        'media/filter.caption' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/filter.caption.css' => 'css/media/filter.caption.css',
            ),
          ),
        ),
        'media/oembed.formatter' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.formatter.css' => 'css/media/oembed.formatter.css',
            ),
          ),
        ),
        'media/oembed.frame' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/oembed.frame.css' => 'css/media/oembed.frame.css',
            ),
          ),
        ),
        'menu_ui/drupal.menu_ui.adminforms' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
            ),
          ),
        ),
        'migrate_drupal_ui/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/upgrade-analysis-report-tables.css' => 'css/migrate_drupal_ui/components/upgrade-analysis-report-tables.css',
            ),
          ),
        ),
        'node/drupal.node' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.preview' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.preview.css' => 'css/node/node.preview.css',
            ),
          ),
        ),
        'node/form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => 'css/node/node.module.css',
            ),
          ),
        ),
        'node/drupal.node.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/node.admin.css' => 'css/node/node.admin.css',
            ),
          ),
        ),
        'quickedit/quickedit' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
            ),
            'theme' => 
            array (
              'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
              'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
            ),
          ),
        ),
        'settings_tray/drupal.settings_tray' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/settings_tray.module.css' => 'css/settings_tray/settings_tray.module.css',
              'css/settings_tray.motion.css' => 'css/settings_tray/settings_tray.motion.css',
              'css/settings_tray.toolbar.css' => 'css/settings_tray/settings_tray.toolbar.css',
            ),
            'theme' => 
            array (
              'css/settings_tray.theme.css' => 'css/settings_tray/settings_tray.theme.css',
            ),
          ),
        ),
        'shortcut/drupal.shortcut' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
              'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
            ),
          ),
        ),
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
              'css/components/align.module.css' => 'css/system/components/align.module.css',
              'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
              'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
              'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
              'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
              'css/components/details.module.css' => 'css/system/components/details.module.css',
              'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
              'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
              'css/components/js.module.css' => 'css/system/components/js.module.css',
              'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
              'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
              'css/components/progress.module.css' => 'css/system/components/progress.module.css',
              'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
              'css/components/resize.module.css' => 'css/system/components/resize.module.css',
              'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
              'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
              'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
              'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
              'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
            ),
          ),
        ),
        'system/admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.admin.css' => 'css/system/system.admin.css',
            ),
          ),
        ),
        'system/maintenance' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/system.maintenance.css' => 'css/system/system.maintenance.css',
            ),
          ),
        ),
        'system/diff' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/system.diff.css' => 'css/system/system.diff.css',
            ),
          ),
        ),
        'taxonomy/drupal.taxonomy' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
            ),
            'theme' => 
            array (
              'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
              'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
            ),
          ),
        ),
        'toolbar/toolbar.menu' => 
        array (
          'css' => 
          array (
            'state' => 
            array (
              'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
            ),
          ),
        ),
        'tour/tour-styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/tour.module.css' => 'css/tour/tour.module.css',
            ),
          ),
        ),
        'update/drupal.update.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
            ),
          ),
        ),
        'user/drupal.user' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/user.module.css' => 'css/user/user.module.css',
            ),
          ),
        ),
        'user/drupal.user.admin' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.admin.css' => 'css/user/user.admin.css',
            ),
          ),
        ),
        'user/drupal.user.icons' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
            ),
          ),
        ),
        'views/views.module' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views.module.css' => 'css/views/views.module.css',
            ),
          ),
        ),
        'views_ui/admin.styling' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
            ),
            'theme' => 
            array (
              'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
              'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
            ),
          ),
        ),
      ),
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stable9/screenshot.png',
      'php' => '7.3.0',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/stable9/stable9.info.yml',
      'status' => 0,
    ),
    'stark' => 
    array (
      'name' => 'Stark',
      'type' => 'theme',
      'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
      'package' => 'Core',
      'version' => '9.0.6',
      'core_version_requirement' => '9.0.6',
      'core_incompatible' => false,
      'mtime' => 1600255309,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stark/screenshot.png',
      'php' => '7.3.0',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/stark/stark.info.yml',
      'status' => 0,
    ),
    'thunder_base' => 
    array (
      'name' => 'Thunder Base',
      'type' => 'theme',
      'core_version_requirement' => '^9',
      'base theme' => 'bartik',
      'libraries' => 
      array (
        0 => 'thunder_base/global-styling',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'highlighted' => 'Highlighted',
        'featured_top' => 'Featured top',
        'breadcrumb' => 'Breadcrumb',
        'content' => 'Content',
        'sidebar_first' => 'Sidebar first',
        'sidebar_second' => 'Sidebar second',
        'featured_bottom_first' => 'Featured bottom first',
        'featured_bottom_second' => 'Featured bottom second',
        'featured_bottom_third' => 'Featured bottom third',
        'footer_first' => 'Footer first',
        'footer_second' => 'Footer second',
        'footer_third' => 'Footer third',
        'footer_fourth' => 'Footer fourth',
        'footer_fifth' => 'Footer fifth',
      ),
      'libraries-override' => 
      array (
        'bartik/global-styling' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/colors.css' => 'css/colors.css',
            ),
          ),
        ),
      ),
      'libraries-extend' => 
      array (
        'tour/tour-styling' => 
        array (
          0 => 'seven/tour-styling',
        ),
      ),
      'core_incompatible' => false,
      'mtime' => 1599134955,
      'engine' => 'twig',
      'description' => '',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'profiles/contrib/thunder/themes/thunder_base/screenshot.png',
      'version' => NULL,
      'php' => '7.3.0',
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'bartik',
      ),
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/themes/thunder_base/thunder_base.info.yml',
      'status' => 1,
    ),
    'thunder_admin' => 
    array (
      'name' => 'Thunder Admin',
      'type' => 'theme',
      'core_version_requirement' => '^9',
      'base theme' => 'seven',
      'description' => 'Administration theme for the Thunder Distribution that extends and modifies Sevens styles for authoring UX and integrated look and feel of the contributed modules used in the distribution.',
      'libraries-override' => 
      array (
        'seven/global-styling' => 'thunder_admin/global-styling',
        'seven/install-page' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/theme/install-page.css' => 'css/theme/install-page.css',
            ),
          ),
        ),
        'seven/maintenance-page' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/theme/maintenance-page.css' => 'css/theme/maintenance-page.css',
            ),
          ),
        ),
        'seven/media-form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/components/media.css' => 'css/components/media.css',
            ),
          ),
        ),
        'seven/seven.drupal.dialog' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/components/dialog.css' => 'css/components/dialog.css',
            ),
          ),
        ),
        'seven/ckeditor-dialog' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/theme/ckeditor-dialog.css' => 'css/theme/ckeditor-dialog.css',
            ),
          ),
        ),
        'seven/seven.jquery.ui' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/jquery.ui/theme.css' => 'css/components/jquery.ui/theme.css',
            ),
          ),
        ),
        'seven/tour-styling' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/components/tour.theme.css' => 'css/components/tour.theme.css',
            ),
          ),
        ),
        'seven/vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/vertical-tabs.css' => 'css/components/vertical-tabs.css',
            ),
          ),
        ),
        'system/base' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'css/components/system-status-counter.css' => 'css/components/system-status-counter.css',
              'css/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
              'css/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
            ),
          ),
        ),
        'core/drupal.vertical-tabs' => 
        array (
          'css' => 
          array (
            'component' => 
            array (
              'misc/vertical-tabs.css' => false,
            ),
          ),
        ),
        'node/drupal.node' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => false,
            ),
          ),
        ),
        'node/form' => 
        array (
          'css' => 
          array (
            'layout' => 
            array (
              'css/node.module.css' => false,
            ),
          ),
        ),
        'toolbar/toolbar' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/toolbar.theme.css' => 'css/components/toolbar.theme.css',
              'css/toolbar.icons.theme.css' => 'css/components/toolbar.icons.theme.css',
            ),
          ),
        ),
        'admin_toolbar/toolbar.tree' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/admin.toolbar.css' => 'css/components/admin.toolbar.css',
            ),
          ),
        ),
        'paragraphs/drupal.paragraphs.widget' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/paragraphs.widget.css' => false,
            ),
          ),
        ),
        'thunder_media/entity_browser_view' => 
        array (
          'css' => 
          array (
            'theme' => 
            array (
              'css/media_entity_browser.view.css' => 'css/components/media_entity_browser.view.css',
            ),
          ),
        ),
      ),
      'libraries-extend' => 
      array (
        'core/ckeditor' => 
        array (
          0 => 'thunder_admin/ckeditor.sticky-toolbar',
        ),
        'core/drupal.tabledrag' => 
        array (
          0 => 'thunder_admin/tabledrag.tabindex',
        ),
        'paragraphs/drupal.paragraphs.admin' => 
        array (
          0 => 'thunder_admin/paragraphs.widget',
        ),
        'paragraphs/drupal.paragraphs.widget' => 
        array (
          0 => 'thunder_admin/paragraphs.widget',
        ),
        'dropzonejs/widget' => 
        array (
          0 => 'thunder_admin/dropzonejs.widget',
        ),
        'entity_browser/tabs' => 
        array (
          0 => 'thunder_admin/entity_browser.tabs',
        ),
        'seven/drupal.nav-tabs' => 
        array (
          0 => 'thunder_admin/drupal.nav-tabs',
        ),
        'toolbar/toolbar' => 
        array (
          0 => 'thunder_admin/toolbar',
        ),
        'toolbar/toolbar.menu' => 
        array (
          0 => 'thunder_admin/toolbar.menu',
        ),
      ),
      'quickedit_stylesheets' => 
      array (
        0 => 'css/components/quickedit.css',
      ),
      'regions' => 
      array (
        'header' => 'Header',
        'pre_content' => 'Pre-content',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'content' => 'Content',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'sidebar_first' => 'First sidebar',
      ),
      'regions_hidden' => 
      array (
        0 => 'sidebar_first',
        1 => 'page_top',
        2 => 'page_bottom',
      ),
      'version' => '4.0.0-beta2',
      'project' => 'thunder_admin',
      'datestamp' => 1598528939,
      'core_incompatible' => false,
      'mtime' => 1598528939,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'themes/contrib/thunder_admin/screenshot.png',
      'php' => '7.3.0',
      'libraries' => 
      array (
      ),
      'libraries_extend' => 
      array (
      ),
      'libraries_override' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 'seven',
      ),
      'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/themes/contrib/thunder_admin/thunder_admin.info.yml',
      'status' => 1,
    ),
  ),
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
