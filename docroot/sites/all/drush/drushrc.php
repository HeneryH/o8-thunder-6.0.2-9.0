<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'thunder',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'ctools_wizard_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/tests/modules/ctools_wizard_test/ctools_wizard_test.info.yml',
        'basename' => 'ctools_wizard_test.info.yml',
        'name' => 'Chaos Wizard Test',
        'info' => 
        array (
          'name' => 'Chaos Wizard Test',
          'type' => 'module',
          'description' => 'Provides testing for ctools wizard',
          'package' => 'Testing',
          'core_version_requirement' => '^8 || ^9',
          'core' => '8.x',
          'version' => '8.x-3.4',
          'project' => 'ctools',
          'datestamp' => 1585763385,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'ctools_block_display_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/tests/modules/ctools_block_display_test/ctools_block_display_test.info.yml',
        'basename' => 'ctools_block_display_test.info.yml',
        'name' => 'Block Display Variant Test',
        'info' => 
        array (
          'name' => 'Block Display Variant Test',
          'type' => 'module',
          'description' => 'Testing infrastructure for CTools block display variants.',
          'package' => 'Testing',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
          ),
          'version' => '8.x-3.4',
          'project' => 'ctools',
          'datestamp' => 1585763385,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'entity_mask_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_entity_mask/tests/modules/entity_mask_test/entity_mask_test.info.yml',
        'basename' => 'entity_mask_test.info.yml',
        'name' => 'Entity Mask test',
        'info' => 
        array (
          'name' => 'Entity Mask test',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
            1 => 'ctools_entity_mask:ctools_entity_mask',
            2 => 'drupal:image',
            3 => 'drupal:text',
          ),
          'version' => '8.x-3.4',
          'project' => 'ctools',
          'datestamp' => 1585763385,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'ctools_entity_mask' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_entity_mask/ctools_entity_mask.info.yml',
        'basename' => 'ctools_entity_mask.info.yml',
        'name' => 'Entity Mask',
        'info' => 
        array (
          'name' => 'Entity Mask',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'type' => 'module',
          'description' => 'Allows an entity type to borrow the fields and display configuration of another entity type.',
          'version' => '8.x-3.4',
          'project' => 'ctools',
          'datestamp' => 1585763385,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'ctools_views_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_views/tests/modules/ctools_views_test_views/ctools_views_test_views.info.yml',
        'basename' => 'ctools_views_test_views.info.yml',
        'name' => 'CTools Views test views',
        'info' => 
        array (
          'name' => 'CTools Views test views',
          'type' => 'module',
          'description' => 'Provides default views for CTools Views tests.',
          'package' => 'Testing',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:block',
            2 => 'entity_test:entity_test',
            3 => 'ctools_views:ctools_views',
            4 => 'drupal:text',
            5 => 'drupal:user',
            6 => 'drupal:node',
            7 => 'drupal:taxonomy',
          ),
          'version' => '8.x-3.4',
          'project' => 'ctools',
          'datestamp' => 1585763385,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'ctools_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_views/ctools_views.info.yml',
        'basename' => 'ctools_views.info.yml',
        'name' => 'Chaos Tools Views',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'ctools_block_field_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_block/tests/modules/ctools_block_field_test/ctools_block_field_test.info.yml',
        'basename' => 'ctools_block_field_test.info.yml',
        'name' => 'Chaos Tools blocks test',
        'info' => 
        array (
          'name' => 'Chaos Tools blocks test',
          'type' => 'module',
          'description' => 'Support module for Chaos tools blocks tests.',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:menu_ui',
            2 => 'drupal:node',
            3 => 'drupal:path',
            4 => 'drupal:text',
            5 => 'drupal:user',
          ),
          'features' => true,
          'version' => '8.x-3.4',
          'project' => 'ctools',
          'datestamp' => 1585763385,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'ctools_block' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/modules/ctools_block/ctools_block.info.yml',
        'basename' => 'ctools_block.info.yml',
        'name' => 'Chaos Tools Blocks',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ctools/ctools.info.yml',
        'basename' => 'ctools.info.yml',
        'name' => 'Chaos Tools',
        'info' => 
        array (
          'name' => 'Chaos Tools',
          'type' => 'module',
          'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
          'package' => 'Chaos tool suite',
          'core_version_requirement' => '^8.7.7 || ^9',
          'version' => '8.x-3.4',
          'project' => 'ctools',
          'datestamp' => 1585763385,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.4',
      ),
      'paragraphs_demo' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/modules/paragraphs_demo/paragraphs_demo.info.yml',
        'basename' => 'paragraphs_demo.info.yml',
        'name' => 'Paragraphs Demo',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.12',
      ),
      'paragraphs_type_permissions' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/modules/paragraphs_type_permissions/paragraphs_type_permissions.info.yml',
        'basename' => 'paragraphs_type_permissions.info.yml',
        'name' => 'Paragraphs Type Permissions',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.12',
      ),
      'paragraphs_library' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/modules/paragraphs_library/paragraphs_library.info.yml',
        'basename' => 'paragraphs_library.info.yml',
        'name' => 'Paragraphs Library',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.12',
      ),
      'paragraphs' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs/paragraphs.info.yml',
        'basename' => 'paragraphs.info.yml',
        'name' => 'Paragraphs',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.12',
      ),
      'config_update_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_update/config_update_ui/config_update_ui.info.yml',
        'basename' => 'config_update_ui.info.yml',
        'name' => 'Configuration Update Reports',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.7',
      ),
      'config_update' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_update/config_update.info.yml',
        'basename' => 'config_update.info.yml',
        'name' => 'Configuration Update Base',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.7',
      ),
      'autofill' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/autofill/autofill.info.yml',
        'basename' => 'autofill.info.yml',
        'name' => 'Autofill',
        'info' => 
        array (
          'name' => 'Autofill',
          'type' => 'module',
          'description' => 'A field can automatically be autofilled while typing into another one.',
          'core_version_requirement' => '^8 || ^9',
          'version' => '8.x-1.0',
          'project' => 'autofill',
          'datestamp' => 1595326092,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0',
      ),
      'shariff' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/shariff/shariff.info.yml',
        'basename' => 'shariff.info.yml',
        'name' => 'Shariff Sharing Buttons',
        'info' => 
        array (
          'name' => 'Shariff Sharing Buttons',
          'description' => 'Shariff enables website users to share their favorite content without compromising their privacy. This module integrates this plugin in Drupal.',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'type' => 'module',
          'version' => '8.x-1.7',
          'project' => 'shariff',
          'datestamp' => 1600424776,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.7',
      ),
      'update_helper_checklist_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/update_helper/modules/update_helper_checklist/tests/modules/update_helper_checklist_test/update_helper_checklist_test.info.yml',
        'basename' => 'update_helper_checklist_test.info.yml',
        'name' => 'Update Helper Checklist Test',
        'info' => 
        array (
          'name' => 'Update Helper Checklist Test',
          'description' => 'Helper module to test Update Helper Checklist.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '2.0.0',
          'project' => 'update_helper',
          'datestamp' => 1591777962,
        ),
        'schema_version' => 9000,
        'version' => '2.0.0',
      ),
      'update_helper_checklist' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/update_helper/modules/update_helper_checklist/update_helper_checklist.info.yml',
        'basename' => 'update_helper_checklist.info.yml',
        'name' => 'Update Helper Checklist',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '2.0.0',
      ),
      'update_helper' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/update_helper/update_helper.info.yml',
        'basename' => 'update_helper.info.yml',
        'name' => 'Update Helper',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '2.0.0',
      ),
      'liveblog_pusher' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/liveblog/modules/liveblog_pusher/liveblog_pusher.info.yml',
        'basename' => 'liveblog_pusher.info.yml',
        'name' => 'Liveblog Pusher',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.3-alpha15',
      ),
      'liveblog' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/liveblog/liveblog.info.yml',
        'basename' => 'liveblog.info.yml',
        'name' => 'Liveblog',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.3-alpha15',
      ),
      'media_expire' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_expire/media_expire.info.yml',
        'basename' => 'media_expire.info.yml',
        'name' => 'Media Expire',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'scheduler_content_moderation_integration' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler_content_moderation_integration/scheduler_content_moderation_integration.info.yml',
        'basename' => 'scheduler_content_moderation_integration.info.yml',
        'name' => 'Scheduler Content Moderation Integration',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.3',
      ),
      'scheduler_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler/tests/modules/scheduler_access_test/scheduler_access_test.info.yml',
        'basename' => 'scheduler_access_test.info.yml',
        'name' => 'Scheduler Node Access Test',
        'info' => 
        array (
          'name' => 'Scheduler Node Access Test',
          'type' => 'module',
          'description' => 'Support module for Scheduler restricted node access testing.',
          'package' => 'Testing',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'scheduler:scheduler',
          ),
          'version' => '8.x-1.3',
          'project' => 'scheduler',
          'datestamp' => 1591431340,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.3',
      ),
      'scheduler_api_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler/tests/modules/scheduler_api_test/scheduler_api_test.info.yml',
        'basename' => 'scheduler_api_test.info.yml',
        'name' => 'Scheduler API Test',
        'info' => 
        array (
          'name' => 'Scheduler API Test',
          'type' => 'module',
          'description' => 'Support module for Scheduler API-related testing.',
          'package' => 'Testing',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'scheduler:scheduler',
          ),
          'version' => '8.x-1.3',
          'project' => 'scheduler',
          'datestamp' => 1591431340,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.3',
      ),
      'scheduler_rules_integration' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler/scheduler_rules_integration/scheduler_rules_integration.info.yml',
        'basename' => 'scheduler_rules_integration.info.yml',
        'name' => 'Scheduler Rules Integration',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.3',
      ),
      'scheduler' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/scheduler/scheduler.info.yml',
        'basename' => 'scheduler.info.yml',
        'name' => 'Scheduler',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.3',
      ),
      'dropzonejs_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/dropzonejs/tests/modules/dropzonejs_test/dropzonejs_test.info.yml',
        'basename' => 'dropzonejs_test.info.yml',
        'name' => 'DropzoneJS Test',
        'info' => 
        array (
          'name' => 'DropzoneJS Test',
          'type' => 'module',
          'description' => 'Support module for DropzoneJS tests.',
          'core_version_requirement' => '^8.8 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'dropzonejs:dropzonejs',
            2 => 'dropzonejs:dropzonejs_eb_widget',
          ),
          'version' => '8.x-2.3',
          'project' => 'dropzonejs',
          'datestamp' => 1600310563,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'dropzonejs_eb_widget' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/dropzonejs/modules/eb_widget/dropzonejs_eb_widget.info.yml',
        'basename' => 'dropzonejs_eb_widget.info.yml',
        'name' => 'DropzoneJS entity browser widget',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'dropzonejs' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/dropzonejs/dropzonejs.info.yml',
        'basename' => 'dropzonejs.info.yml',
        'name' => 'dropzonejs',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'adsense_adstxt' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/adsense/adstxt/adsense_adstxt.info.yml',
        'basename' => 'adsense_adstxt.info.yml',
        'name' => 'AdSense ads.txt',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.2',
      ),
      'adsense_oldcode' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/adsense/oldcode/adsense_oldcode.info.yml',
        'basename' => 'adsense_oldcode.info.yml',
        'name' => 'AdSense pre-2007 code',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.2',
      ),
      'adsense' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/adsense/adsense.info.yml',
        'basename' => 'adsense.info.yml',
        'name' => 'AdSense',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.2',
      ),
      'password_policy_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/tests/modules/password_policy_test/password_policy_test.info.yml',
        'basename' => 'password_policy_test.info.yml',
        'name' => 'Password Policy test',
        'info' => 
        array (
          'name' => 'Password Policy test',
          'type' => 'module',
          'description' => 'Test code for the Password Policy module.',
          'package' => 'Testing',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
          'version' => '8.x-3.0-beta1',
          'project' => 'password_policy',
          'datestamp' => 1586446453,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'password_policy_consecutive' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_consecutive/password_policy_consecutive.info.yml',
        'basename' => 'password_policy_consecutive.info.yml',
        'name' => 'Password Consecutive Characters Policy',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'password_policy_history' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_history/password_policy_history.info.yml',
        'basename' => 'password_policy_history.info.yml',
        'name' => 'Password Policy History',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'password_policy_username' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_username/password_policy_username.info.yml',
        'basename' => 'password_policy_username.info.yml',
        'name' => 'Password Username Policy',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'password_policy_length' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_length/password_policy_length.info.yml',
        'basename' => 'password_policy_length.info.yml',
        'name' => 'Password Character Length Policy',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'password_policy_characters' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_characters/password_policy_characters.info.yml',
        'basename' => 'password_policy_characters.info.yml',
        'name' => 'Password Characters of Type Policy',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'password_policy_character_types' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy_character_types/password_policy_character_types.info.yml',
        'basename' => 'password_policy_character_types.info.yml',
        'name' => 'Password Character Types Policy',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'password_policy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/password_policy/password_policy.info.yml',
        'basename' => 'password_policy.info.yml',
        'name' => 'Password Policy',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.0-beta1',
      ),
      'diff' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/diff/diff.info.yml',
        'basename' => 'diff.info.yml',
        'name' => 'Diff',
        'info' => 
        array (
          'name' => 'Diff',
          'type' => 'module',
          'description' => 'Shows changes between content revisions.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'configure' => 'diff.general_settings',
          'version' => '8.x-1.0',
          'project' => 'diff',
          'datestamp' => 1578322691,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0',
      ),
      'media_entity_pinterest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_pinterest/media_entity_pinterest.info.yml',
        'basename' => 'media_entity_pinterest.info.yml',
        'name' => 'Media entity Pinterest',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'media_entity_slideshow_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_slideshow/tests/modules/media_entity_slideshow_test/media_entity_slideshow_test.info.yml',
        'basename' => 'media_entity_slideshow_test.info.yml',
        'name' => 'Media entity slideshow test',
        'info' => 
        array (
          'name' => 'Media entity slideshow test',
          'type' => 'module',
          'description' => 'Provides test bundle for media entity slideshow.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'media_entity_slideshow:media_entity_slideshow',
            1 => 'drupal:media',
            2 => 'drupal:file',
            3 => 'drupal:image',
          ),
          'version' => '8.x-2.0',
          'project' => 'media_entity_slideshow',
          'datestamp' => 1585559774,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'media_entity_slideshow' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_slideshow/media_entity_slideshow.info.yml',
        'basename' => 'media_entity_slideshow.info.yml',
        'name' => 'Media entity slideshow',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'checklistapiexample' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/checklistapi/checklistapiexample/checklistapiexample.info.yml',
        'basename' => 'checklistapiexample.info.yml',
        'name' => 'Checklist API Example',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.11',
      ),
      'checklistapi' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/checklistapi/checklistapi.info.yml',
        'basename' => 'checklistapi.info.yml',
        'name' => 'Checklist API',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.11',
      ),
      'better_normalizers' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/better_normalizers/better_normalizers.info.yml',
        'basename' => 'better_normalizers.info.yml',
        'name' => 'Better Normalizers',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0-beta4',
      ),
      'facets_summary' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/modules/facets_summary/facets_summary.info.yml',
        'basename' => 'facets_summary.info.yml',
        'name' => 'Facets summary (Experimental)',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.5',
      ),
      'facets_rest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/modules/facets_rest/facets_rest.info.yml',
        'basename' => 'facets_rest.info.yml',
        'name' => 'Rest Facets',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.5',
      ),
      'facets_range_widget' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/modules/facets_range_widget/facets_range_widget.info.yml',
        'basename' => 'facets_range_widget.info.yml',
        'name' => 'Facets Range Widget',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.5',
      ),
      'facets' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/facets/facets.info.yml',
        'basename' => 'facets.info.yml',
        'name' => 'Facets',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.5',
      ),
      'default_content' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/default_content/default_content.info.yml',
        'basename' => 'default_content.info.yml',
        'name' => 'Default content',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0-alpha9',
      ),
      'slick_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/slick/slick_ui/slick_ui.info.yml',
        'basename' => 'slick_ui.info.yml',
        'name' => 'Slick UI',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.2',
      ),
      'slick' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/slick/slick.info.yml',
        'basename' => 'slick.info.yml',
        'name' => 'Slick',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.2',
      ),
      'simple_sitemap_engines' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_sitemap/modules/simple_sitemap_engines/simple_sitemap_engines.info.yml',
        'basename' => 'simple_sitemap_engines.info.yml',
        'name' => 'Simple XML Sitemap (Search engines)',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.7',
      ),
      'simple_sitemap_views_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_sitemap/modules/simple_sitemap_views/tests/modules/simple_sitemap_views_test/simple_sitemap_views_test.info.yml',
        'basename' => 'simple_sitemap_views_test.info.yml',
        'name' => 'Simple XML Sitemap (Views) Test',
        'info' => 
        array (
          'name' => 'Simple XML Sitemap (Views) Test',
          'type' => 'module',
          'description' => 'Test module for Simple XML Sitemap (Views).',
          'package' => 'Testing',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'simple_sitemap:simple_sitemap_views',
          ),
          'version' => '8.x-3.7',
          'project' => 'simple_sitemap',
          'datestamp' => 1592298876,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.7',
      ),
      'simple_sitemap_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_sitemap/modules/simple_sitemap_views/simple_sitemap_views.info.yml',
        'basename' => 'simple_sitemap_views.info.yml',
        'name' => 'Simple XML Sitemap (Views)',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.7',
      ),
      'simple_sitemap' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_sitemap/simple_sitemap.info.yml',
        'basename' => 'simple_sitemap.info.yml',
        'name' => 'Simple XML Sitemap',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.7',
      ),
      'pathauto_custom_punctuation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/pathauto/tests/modules/pathauto_custom_punctuation_test/pathauto_custom_punctuation_test.info.yml',
        'basename' => 'pathauto_custom_punctuation_test.info.yml',
        'name' => 'Pathauto custom punctuation testing module',
        'info' => 
        array (
          'name' => 'Pathauto custom punctuation testing module',
          'type' => 'module',
          'core_version_requirement' => '^8.8 || ^9',
          'description' => 'Add some uncommon punctuation to the replacement list.',
          'package' => 'Testing',
          'version' => '8.x-1.8',
          'project' => 'pathauto',
          'datestamp' => 1588103048,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.8',
      ),
      'pathauto_views_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/pathauto/tests/modules/pathauto_views_test/pathauto_views_test.info.yml',
        'basename' => 'pathauto_views_test.info.yml',
        'name' => 'Views Test Config',
        'info' => 
        array (
          'name' => 'Views Test Config',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'core_version_requirement' => '^8.8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '8.x-1.8',
          'project' => 'pathauto',
          'datestamp' => 1588103048,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.8',
      ),
      'pathauto_string_id_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/pathauto/tests/modules/pathauto_string_id_test/pathauto_string_id_test.info.yml',
        'basename' => 'pathauto_string_id_test.info.yml',
        'name' => 'Pathauto testing module',
        'info' => 
        array (
          'name' => 'Pathauto testing module',
          'type' => 'module',
          'core_version_requirement' => '^8.8 || ^9',
          'description' => 'Pathauto for Entity with string ID.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'token:token',
          ),
          'version' => '8.x-1.8',
          'project' => 'pathauto',
          'datestamp' => 1588103048,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.8',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/pathauto/pathauto.info.yml',
        'basename' => 'pathauto.info.yml',
        'name' => 'Pathauto',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.8',
      ),
      'linkit_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/linkit/tests/linkit_test/linkit_test.info.yml',
        'basename' => 'linkit_test.info.yml',
        'name' => 'Linkit test module',
        'info' => 
        array (
          'name' => 'Linkit test module',
          'description' => 'Support module for Linkit testing.',
          'package' => 'Testing',
          'type' => 'module',
          'core_version_requirement' => '^8.8 || ^9',
          'dependencies' => 
          array (
            0 => 'linkit:linkit',
            1 => 'drupal:field',
            2 => 'drupal:text',
          ),
          'version' => '6.0.0-beta1',
          'project' => 'linkit',
          'datestamp' => 1591971463,
        ),
        'schema_version' => 9000,
        'version' => '6.0.0-beta1',
      ),
      'linkit' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/linkit/linkit.info.yml',
        'basename' => 'linkit.info.yml',
        'name' => 'Linkit',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '6.0.0-beta1',
      ),
      'autosave_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/autosave_form/tests/modules/autosave_form_test/autosave_form_test.info.yml',
        'basename' => 'autosave_form_test.info.yml',
        'name' => 'Autosave Form Test Module',
        'info' => 
        array (
          'name' => 'Autosave Form Test Module',
          'type' => 'module',
          'package' => 'Testing',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'version' => '8.x-1.2',
          'project' => 'autosave_form',
          'datestamp' => 1591627226,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.2',
      ),
      'autosave_form' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/autosave_form/autosave_form.info.yml',
        'basename' => 'autosave_form.info.yml',
        'name' => 'Autosave Form',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.2',
      ),
      'views_bulk_operations_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/views_bulk_operations/tests/views_bulk_operations_test/views_bulk_operations_test.info.yml',
        'basename' => 'views_bulk_operations_test.info.yml',
        'name' => 'Views Bulk Operations test',
        'info' => 
        array (
          'name' => 'Views Bulk Operations test',
          'type' => 'module',
          'description' => 'Support module for testing Views Bulk Operations.',
          'package' => 'Testing',
          'core_version_requirement' => '^8.8 || ^9',
          'dependencies' => 
          array (
            0 => 'drupal:views_bulk_operations',
            1 => 'drupal:node',
          ),
          'version' => '8.x-3.9',
          'project' => 'views_bulk_operations',
          'datestamp' => 1597319023,
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.9',
      ),
      'views_bulk_operations_example' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/views_bulk_operations/modules/views_bulk_operations_example/views_bulk_operations_example.info.yml',
        'basename' => 'views_bulk_operations_example.info.yml',
        'name' => 'Views Bulk Operations example',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.9',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/views_bulk_operations/modules/actions_permissions/actions_permissions.info.yml',
        'basename' => 'actions_permissions.info.yml',
        'name' => 'Actions Permissions',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.9',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/views_bulk_operations/views_bulk_operations.info.yml',
        'basename' => 'views_bulk_operations.info.yml',
        'name' => 'Views Bulk Operations',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.9',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/token/token.info.yml',
        'basename' => 'token.info.yml',
        'name' => 'Token',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core_version_requirement' => '^8.8 || ^9',
          'version' => '8.x-1.7',
          'project' => 'token',
          'datestamp' => 1587893591,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.7',
      ),
      'responsive_preview' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/responsive_preview/responsive_preview.info.yml',
        'basename' => 'responsive_preview.info.yml',
        'name' => 'Responsive Preview',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0',
      ),
      'media_entity_instagram' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_instagram/media_entity_instagram.info.yml',
        'basename' => 'media_entity_instagram.info.yml',
        'name' => 'Media Entity Instagram',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'entity_browser_entity_embed_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/tests/modules/entity_browser_entity_embed_test/entity_browser_entity_embed_test.info.yml',
        'basename' => 'entity_browser_entity_embed_test.info.yml',
        'name' => 'Test IEF',
        'info' => 
        array (
          'name' => 'Test IEF',
          'type' => 'module',
          'description' => 'Test Entity Embed Integration',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:ckeditor',
            2 => 'drupal:node',
            3 => 'drupal:views',
            4 => 'drupal:file',
            5 => 'drupal:text',
            6 => 'drupal:path',
            7 => 'drupal:editor',
            8 => 'embed:embed',
            9 => 'entity_embed:entity_embed',
            10 => 'entity_browser:entity_browser',
            11 => 'entity_browser_test:entity_browser_test',
          ),
          'version' => '8.x-2.5',
          'project' => 'entity_browser',
          'datestamp' => 1588015349,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/tests/modules/entity_browser_test/entity_browser_test.info.yml',
        'basename' => 'entity_browser_test.info.yml',
        'name' => 'Entity browser test',
        'info' => 
        array (
          'name' => 'Entity browser test',
          'type' => 'module',
          'description' => 'Support module for the Entity browser module tests.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'drupal:file',
            2 => 'drupal:user',
            3 => 'drupal:node',
            4 => 'drupal:views',
          ),
          'version' => '8.x-2.5',
          'project' => 'entity_browser',
          'datestamp' => 1588015349,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_test_configuration' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/tests/modules/entity_browser_test_configuration/entity_browser_test_configuration.info.yml',
        'basename' => 'entity_browser_test_configuration.info.yml',
        'name' => 'Entity browser test configuration',
        'info' => 
        array (
          'name' => 'Entity browser test configuration',
          'type' => 'module',
          'description' => 'Test Configuration Forms.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'drupal:node',
            2 => 'drupal:path',
            3 => 'drupal:views',
            4 => 'drupal:user',
          ),
          'version' => '8.x-2.5',
          'project' => 'entity_browser',
          'datestamp' => 1588015349,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_test_paragraphs' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/tests/modules/entity_browser_test_paragraphs/entity_browser_test_paragraphs.info.yml',
        'basename' => 'entity_browser_test_paragraphs.info.yml',
        'name' => 'Entity browser test paragraphs',
        'info' => 
        array (
          'name' => 'Entity browser test paragraphs',
          'type' => 'module',
          'description' => 'Test Paragraphs Integration.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions:entity_reference_revisions',
            1 => 'entity_browser:entity_browser',
            2 => 'drupal:menu_ui',
            3 => 'drupal:node',
            4 => 'paragraphs:paragraphs',
            5 => 'drupal:path',
            6 => 'drupal:views',
            7 => 'drupal:user',
          ),
          'version' => '8.x-2.5',
          'project' => 'entity_browser',
          'datestamp' => 1588015349,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_test_entityqueue' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/tests/modules/entity_browser_test_entityqueue/entity_browser_test_entityqueue.info.yml',
        'basename' => 'entity_browser_test_entityqueue.info.yml',
        'name' => 'Entity browser entityqueue integration test',
        'info' => 
        array (
          'name' => 'Entity browser entityqueue integration test',
          'type' => 'module',
          'description' => 'Support module for Entity browser entityqueue integration test.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'entityqueue:entityqueue',
            3 => 'entity_browser:entity_browser',
            4 => 'entity_browser_test:entity_browser_test',
          ),
          'version' => '8.x-2.5',
          'project' => 'entity_browser',
          'datestamp' => 1588015349,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_ief_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/tests/modules/entity_browser_ief_test/entity_browser_ief_test.info.yml',
        'basename' => 'entity_browser_ief_test.info.yml',
        'name' => 'Test IEF',
        'info' => 
        array (
          'name' => 'Test IEF',
          'type' => 'module',
          'description' => 'Test Inline Entity Form Integration',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'entity_browser:entity_browser',
            2 => 'entity_browser_entity_form:entity_browser_entity_form',
            3 => 'entity_browser_test:entity_browser_test',
            4 => 'drupal:media',
            5 => 'inline_entity_form:inline_entity_form',
            6 => 'drupal:views',
          ),
          'version' => '8.x-2.5',
          'project' => 'entity_browser',
          'datestamp' => 1588015349,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_entity_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/modules/entity_form/tests/modules/entity_browser_entity_form_test/entity_browser_entity_form_test.info.yml',
        'basename' => 'entity_browser_entity_form_test.info.yml',
        'name' => 'Entity browser entity form test',
        'info' => 
        array (
          'name' => 'Entity browser entity form test',
          'type' => 'module',
          'description' => 'Support module for the Entity browser entity form module tests.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_browser_entity_form:entity_browser_entity_form',
            1 => 'entity_browser_test:entity_browser_test',
            2 => 'drupal:views',
          ),
          'version' => '8.x-2.5',
          'project' => 'entity_browser',
          'datestamp' => 1588015349,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_entity_form' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/modules/entity_form/entity_browser_entity_form.info.yml',
        'basename' => 'entity_browser_entity_form.info.yml',
        'name' => 'Entity Browser IEF',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser_example' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/modules/example/entity_browser_example.info.yml',
        'basename' => 'entity_browser_example.info.yml',
        'name' => 'Entity Browser example',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'entity_browser' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_browser/entity_browser.info.yml',
        'basename' => 'entity_browser.info.yml',
        'name' => 'Entity Browser',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'paragraphs_features_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs_features/tests/modules/paragraphs_features_test/paragraphs_features_test.info.yml',
        'basename' => 'paragraphs_features_test.info.yml',
        'name' => 'Paragraphs Features Test',
        'info' => 
        array (
          'name' => 'Paragraphs Features Test',
          'type' => 'module',
          'description' => 'Provides Test scaffolds for Paragraphs Features module.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Paragraphs',
          'dependencies' => 
          array (
            0 => 'drupal:ckeditor',
            1 => 'paragraphs_features:paragraphs_features',
          ),
          'version' => '8.x-1.11',
          'project' => 'paragraphs_features',
          'datestamp' => 1600331590,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.11',
      ),
      'paragraphs_features' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/paragraphs_features/paragraphs_features.info.yml',
        'basename' => 'paragraphs_features.info.yml',
        'name' => 'Paragraphs Features',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.11',
      ),
      'metatag_google_cse' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_google_cse/metatag_google_cse.info.yml',
        'basename' => 'metatag_google_cse.info.yml',
        'name' => 'Metatag: Google Custom Search Engine (CSE)',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_open_graph_products' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_open_graph_products/metatag_open_graph_products.info.yml',
        'basename' => 'metatag_open_graph_products.info.yml',
        'name' => 'Metatag: Open Graph Products',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_test_custom_route' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/tests/modules/metatag_test_custom_route/metatag_test_custom_route.info.yml',
        'basename' => 'metatag_test_custom_route.info.yml',
        'name' => 'Metatag: Test Custom Route',
        'info' => 
        array (
          'name' => 'Metatag: Test Custom Route',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom route that only inherits the global configuration.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.14',
          'project' => 'metatag',
          'datestamp' => 1597183854,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_test_integration' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/tests/modules/metatag_test_integration/metatag_test_integration.info.yml',
        'basename' => 'metatag_test_integration.info.yml',
        'name' => 'Metatag: Test Integration',
        'info' => 
        array (
          'name' => 'Metatag: Test Integration',
          'type' => 'module',
          'description' => 'Support module for integration with metatag module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.14',
          'project' => 'metatag',
          'datestamp' => 1597183854,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_test_tag' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/tests/modules/metatag_test_tag/metatag_test_tag.info.yml',
        'basename' => 'metatag_test_tag.info.yml',
        'name' => 'Metatag Tests: Tag',
        'info' => 
        array (
          'name' => 'Metatag Tests: Tag',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom meta tag.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.14',
          'project' => 'metatag',
          'datestamp' => 1597183854,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_views/metatag_views.info.yml',
        'basename' => 'metatag_views.info.yml',
        'name' => 'Metatag: Views',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_google_plus' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_google_plus/metatag_google_plus.info.yml',
        'basename' => 'metatag_google_plus.info.yml',
        'name' => 'Metatag: Google Plus',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_open_graph' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_open_graph/metatag_open_graph.info.yml',
        'basename' => 'metatag_open_graph.info.yml',
        'name' => 'Metatag: Open Graph',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_verification' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_verification/metatag_verification.info.yml',
        'basename' => 'metatag_verification.info.yml',
        'name' => 'Metatag: Verification',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_favicons' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_favicons/metatag_favicons.info.yml',
        'basename' => 'metatag_favicons.info.yml',
        'name' => 'Metatag: Favicons',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_page_manager' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_page_manager/metatag_page_manager.info.yml',
        'basename' => 'metatag_page_manager.info.yml',
        'name' => 'Metatag: Page Manager',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_hreflang' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_hreflang/metatag_hreflang.info.yml',
        'basename' => 'metatag_hreflang.info.yml',
        'name' => 'Metatag: Hreflang',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_dc/metatag_dc.info.yml',
        'basename' => 'metatag_dc.info.yml',
        'name' => 'Metatag: Dublin Core',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_mobile' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_mobile/metatag_mobile.info.yml',
        'basename' => 'metatag_mobile.info.yml',
        'name' => 'Metatag: Mobile & UI Adjustments',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_pinterest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_pinterest/metatag_pinterest.info.yml',
        'basename' => 'metatag_pinterest.info.yml',
        'name' => 'Metatag: Pinterest',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
        'basename' => 'metatag_twitter_cards.info.yml',
        'name' => 'Metatag: Twitter Cards',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_facebook' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_facebook/metatag_facebook.info.yml',
        'basename' => 'metatag_facebook.info.yml',
        'name' => 'Metatag: Facebook',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_dc_advanced' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_dc_advanced/metatag_dc_advanced.info.yml',
        'basename' => 'metatag_dc_advanced.info.yml',
        'name' => 'Metatag: Dublin Core Advanced',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag_app_links' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag_app_links/metatag_app_links.info.yml',
        'basename' => 'metatag_app_links.info.yml',
        'name' => 'Metatag: App Links',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'metatag' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/metatag/metatag.info.yml',
        'basename' => 'metatag.info.yml',
        'name' => 'Metatag',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.14',
      ),
      'config_selector_test_one' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/tests/modules/config_selector_test_one/config_selector_test_one.info.yml',
        'basename' => 'config_selector_test_one.info.yml',
        'name' => 'Configuration Selector Test one',
        'info' => 
        array (
          'name' => 'Configuration Selector Test one',
          'core_version_requirement' => '^8.8 || ^9',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'config_selector_test_four' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/tests/modules/config_selector_test_four/config_selector_test_four.info.yml',
        'basename' => 'config_selector_test_four.info.yml',
        'name' => 'Configuration Selector Test four',
        'info' => 
        array (
          'name' => 'Configuration Selector Test four',
          'core_version_requirement' => '^8.8 || ^9',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'config_selector_test_two' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/tests/modules/config_selector_test_two/config_selector_test_two.info.yml',
        'basename' => 'config_selector_test_two.info.yml',
        'name' => 'Configuration Selector Test two',
        'info' => 
        array (
          'name' => 'Configuration Selector Test two',
          'core_version_requirement' => '^8.8 || ^9',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'config_selector_test_provides_multiple' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/tests/modules/config_selector_test_provides_multiple/config_selector_test_provides_multiple.info.yml',
        'basename' => 'config_selector_test_provides_multiple.info.yml',
        'name' => 'Configuration Selector test module that provides multiple configurations for the same feature',
        'info' => 
        array (
          'name' => 'Configuration Selector test module that provides multiple configurations for the same feature',
          'core_version_requirement' => '^8.8 || ^9',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'config_selector_ui_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/tests/modules/config_selector_ui_test/config_selector_ui_test.info.yml',
        'basename' => 'config_selector_ui_test.info.yml',
        'name' => 'Configuration Selector UI Test',
        'info' => 
        array (
          'name' => 'Configuration Selector UI Test',
          'core_version_requirement' => '^8.8 || ^9',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'config_selector:config_selector',
          ),
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'config_selector_test_depends_on_test_two' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/tests/modules/config_selector_test_depends_on_test_two/config_selector_test_depends_on_test_two.info.yml',
        'basename' => 'config_selector_test_depends_on_test_two.info.yml',
        'name' => 'Provides config that depends on Test two',
        'info' => 
        array (
          'name' => 'Provides config that depends on Test two',
          'core_version_requirement' => '^8.8 || ^9',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'config_selector:config_selector_test_two',
          ),
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'config_selector_test_three' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/tests/modules/config_selector_test_three/config_selector_test_three.info.yml',
        'basename' => 'config_selector_test_three.info.yml',
        'name' => 'Configuration Selector Test three',
        'info' => 
        array (
          'name' => 'Configuration Selector Test three',
          'core_version_requirement' => '^8.8 || ^9',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'config_selector' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/config_selector/config_selector.info.yml',
        'basename' => 'config_selector.info.yml',
        'name' => 'Configuration selector',
        'info' => 
        array (
          'name' => 'Configuration selector',
          'type' => 'module',
          'description' => 'A utility module that enables different versions of optional configuration to be selected on module install.',
          'core_version_requirement' => '^8.8 || ^9',
          'version' => '8.x-2.0',
          'project' => 'config_selector',
          'datestamp' => 1574425703,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'empty_fields' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/empty_fields/empty_fields.info.yml',
        'basename' => 'empty_fields.info.yml',
        'name' => 'Empty Fields',
        'info' => 
        array (
          'name' => 'Empty Fields',
          'description' => 'Provides options for displaying empty fields.',
          'type' => 'module',
          'core_version_requirement' => '^8.7.7 || ^9',
          'version' => '8.x-1.0-beta1',
          'project' => 'empty_fields',
          'datestamp' => 1590178665,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0-beta1',
      ),
      'select2_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/tests/modules/select2_form_test/select2_form_test.info.yml',
        'basename' => 'select2_form_test.info.yml',
        'name' => 'Select2 form test',
        'info' => 
        array (
          'name' => 'Select2 form test',
          'type' => 'module',
          'description' => 'Support module for select2 form tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'select2:select2',
          ),
          'version' => '8.x-1.9',
          'project' => 'select2',
          'datestamp' => 1597661474,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.9',
      ),
      'select2_facets_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/modules/select2_facets/tests/modules/select2_facets_test/select2_facets_test.info.yml',
        'basename' => 'select2_facets_test.info.yml',
        'name' => 'Select2 facets test',
        'info' => 
        array (
          'name' => 'Select2 facets test',
          'type' => 'module',
          'description' => 'Support module for select2 facets tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'facets:facets',
            1 => 'search_api:search_api_db',
            2 => 'drupal:entity_test',
            3 => 'select2:select2_facets',
            4 => 'drupal:views',
            5 => 'drupal:block',
          ),
          'version' => '8.x-1.9',
          'project' => 'select2',
          'datestamp' => 1597661474,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.9',
      ),
      'select2_facets' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/modules/select2_facets/select2_facets.info.yml',
        'basename' => 'select2_facets.info.yml',
        'name' => 'Select2 Facets',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.9',
      ),
      'select2_publish' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/modules/select2_publish/select2_publish.info.yml',
        'basename' => 'select2_publish.info.yml',
        'name' => 'Select2 Publish',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.9',
      ),
      'select2' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/select2/select2.info.yml',
        'basename' => 'select2.info.yml',
        'name' => 'Select2',
        'info' => 
        array (
          'name' => 'Select2',
          'type' => 'module',
          'description' => 'Makes entity reference fields more user-friendly using <a href="https://github.com/select2/select2">Select2</a>.',
          'package' => 'User interface',
          'core_version_requirement' => '^8.8 || ^9',
          'version' => '8.x-1.9',
          'project' => 'select2',
          'datestamp' => 1597661474,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.9',
      ),
      'ivw_integration_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ivw_integration/tests/modules/ivw_integration_test/ivw_integration_test.info.yml',
        'basename' => 'ivw_integration_test.info.yml',
        'name' => 'IVW integration test',
        'info' => 
        array (
          'name' => 'IVW integration test',
          'type' => 'module',
          'description' => 'Support module for IVW integration tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'ivw_integration:ivw_integration',
            1 => 'drupal:field',
            2 => 'drupal:node',
            3 => 'drupal:block',
            4 => 'drupal:taxonomy',
          ),
          'version' => '8.x-2.2',
          'project' => 'ivw_integration',
          'datestamp' => 1597671012,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.2',
      ),
      'ivw_integration' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/ivw_integration/ivw_integration.info.yml',
        'basename' => 'ivw_integration.info.yml',
        'name' => 'IVW Tracking',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.2',
      ),
      'length_indicator' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/length_indicator/length_indicator.info.yml',
        'basename' => 'length_indicator.info.yml',
        'name' => 'Length Indicator',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.1',
      ),
      'stress_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_gmap/tests/module/simple_gmap_stress_test/stress_test.info.yml',
        'basename' => 'stress_test.info.yml',
        'name' => 'simple_gmap_stress_test',
        'info' => 
        array (
          'name' => 'simple_gmap_stress_test',
          'type' => 'module',
          'description' => 'Provides a stress_test content entity.',
          'package' => 'Custom',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'simple_gmap',
          ),
          'version' => '8.x-2.0',
          'project' => 'simple_gmap',
          'datestamp' => 1579517590,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'simple_gmap_stress_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_gmap/tests/module/simple_gmap_stress_test/simple_gmap_stress_test.info.yml',
        'basename' => 'simple_gmap_stress_test.info.yml',
        'name' => 'simple_gmap_stress_test',
        'info' => 
        array (
          'name' => 'simple_gmap_stress_test',
          'type' => 'module',
          'description' => 'Provides a stress_test content entity.',
          'package' => 'Custom',
          'core' => '8.x',
          'core_version_requirement' => '^8 || ^9',
          'dependencies' => 
          array (
            0 => 'simple_gmap',
          ),
          'version' => '8.x-2.0',
          'project' => 'simple_gmap',
          'datestamp' => 1579517590,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'simple_gmap' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/simple_gmap/simple_gmap.info.yml',
        'basename' => 'simple_gmap.info.yml',
        'name' => 'Simple Google Maps',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.0',
      ),
      'field_group_migrate' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/field_group/contrib/field_group_migrate/field_group_migrate.info.yml',
        'basename' => 'field_group_migrate.info.yml',
        'name' => 'Field Group Migrate',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.1',
      ),
      'field_group' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/field_group/field_group.info.yml',
        'basename' => 'field_group.info.yml',
        'name' => 'Field Group',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-3.1',
      ),
      'entity_composite_relationship_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_reference_revisions/tests/modules/entity_composite_relationship_test/entity_composite_relationship_test.info.yml',
        'basename' => 'entity_composite_relationship_test.info.yml',
        'name' => 'ERR Composite relationship test',
        'info' => 
        array (
          'name' => 'ERR Composite relationship test',
          'type' => 'module',
          'description' => 'Entity with parent type and ID.',
          'package' => 'Testing',
          'core_version_requirement' => '^8.7.7 || ^9',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions:entity_reference_revisions',
            1 => 'drupal:entity_test',
          ),
          'version' => '8.x-1.8',
          'project' => 'entity_reference_revisions',
          'datestamp' => 1583961849,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.8',
      ),
      'entity_reference_revisions' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/entity_reference_revisions/entity_reference_revisions.info.yml',
        'basename' => 'entity_reference_revisions.info.yml',
        'name' => 'Entity Reference Revisions',
        'info' => 
        array (
          'name' => 'Entity Reference Revisions',
          'type' => 'module',
          'description' => 'Adds a Entity Reference field type with revision support.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Field types',
          'version' => '8.x-1.8',
          'project' => 'entity_reference_revisions',
          'datestamp' => 1583961849,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.8',
      ),
      'access_unpublished' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/access_unpublished/access_unpublished.info.yml',
        'basename' => 'access_unpublished.info.yml',
        'name' => 'Access Unpublished',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0',
      ),
      'crop' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/crop/crop.info.yml',
        'basename' => 'crop.info.yml',
        'name' => 'Crop API',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'search_api_mark_outdated_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api_mark_outdated/tests/search_api_mark_outdated_test/search_api_mark_outdated_test.info.yml',
        'basename' => 'search_api_mark_outdated_test.info.yml',
        'name' => 'Search API Mark Outdated Test',
        'info' => 
        array (
          'name' => 'Search API Mark Outdated Test',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'search_api:search_api',
            1 => 'search_api:search_api_test_db',
            2 => 'search_api_mark_outdated:search_api_mark_outdated',
            3 => 'drupal:views',
          ),
          'version' => '1.0.0-beta1',
          'project' => 'search_api_mark_outdated',
          'datestamp' => 1597242907,
        ),
        'schema_version' => 9000,
        'version' => '1.0.0-beta1',
      ),
      'search_api_mark_outdated' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api_mark_outdated/search_api_mark_outdated.info.yml',
        'basename' => 'search_api_mark_outdated.info.yml',
        'name' => 'Search API Mark Outdated',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '1.0.0-beta1',
      ),
      'media_entity_twitter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/media_entity_twitter/media_entity_twitter.info.yml',
        'basename' => 'media_entity_twitter.info.yml',
        'name' => 'Media Entity Twitter',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.4',
      ),
      'admin_toolbar_links_access_filter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.info.yml',
        'basename' => 'admin_toolbar_links_access_filter.info.yml',
        'name' => 'Admin Toolbar Links Access Filter',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'admin_toolbar_tools' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
        'basename' => 'admin_toolbar_tools.info.yml',
        'name' => 'Admin Toolbar Extra Tools',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'admin_toolbar_search' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar_search/admin_toolbar_search.info.yml',
        'basename' => 'admin_toolbar_search.info.yml',
        'name' => 'Admin Toolbar Search',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'admin_toolbar' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/admin_toolbar/admin_toolbar.info.yml',
        'basename' => 'admin_toolbar.info.yml',
        'name' => 'Admin Toolbar',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.3',
      ),
      'inline_entity_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/inline_entity_form/tests/modules/inline_entity_form_test/inline_entity_form_test.info.yml',
        'basename' => 'inline_entity_form_test.info.yml',
        'name' => 'IEF test',
        'info' => 
        array (
          'name' => 'IEF test',
          'type' => 'module',
          'description' => 'Support module for the Inline entity form module tests.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'inline_entity_form:inline_entity_form',
            1 => 'drupal:node',
            2 => 'drupal:file',
            3 => 'drupal:image',
          ),
          'version' => '8.x-1.0-rc7',
          'project' => 'inline_entity_form',
          'datestamp' => 1595545225,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0-rc7',
      ),
      'inline_entity_form_translation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/inline_entity_form/tests/modules/inline_entity_form_translation_test/inline_entity_form_translation_test.info.yml',
        'basename' => 'inline_entity_form_translation_test.info.yml',
        'name' => 'IEF translation test',
        'info' => 
        array (
          'name' => 'IEF translation test',
          'type' => 'module',
          'description' => 'Support module for the Inline entity form module tests.',
          'core_version_requirement' => '^8.7.7 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'inline_entity_form_test:inline_entity_form_test',
            1 => 'drupal:language',
            2 => 'drupal:content_translation',
          ),
          'version' => '8.x-1.0-rc7',
          'project' => 'inline_entity_form',
          'datestamp' => 1595545225,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0-rc7',
      ),
      'inline_entity_form' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/inline_entity_form/inline_entity_form.info.yml',
        'basename' => 'inline_entity_form.info.yml',
        'name' => 'Inline Entity Form',
        'info' => 
        array (
          'name' => 'Inline Entity Form',
          'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
          'type' => 'module',
          'package' => 'Fields',
          'core_version_requirement' => '^8.7.7 || ^9',
          'version' => '8.x-1.0-rc7',
          'project' => 'inline_entity_form',
          'datestamp' => 1595545225,
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.0-rc7',
      ),
      'redirect_404' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/redirect/modules/redirect_404/redirect_404.info.yml',
        'basename' => 'redirect_404.info.yml',
        'name' => 'Redirect 404',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.6',
      ),
      'redirect_domain' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/redirect/modules/redirect_domain/redirect_domain.info.yml',
        'basename' => 'redirect_domain.info.yml',
        'name' => 'Redirect Domain',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.6',
      ),
      'redirect' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/redirect/redirect.info.yml',
        'basename' => 'redirect.info.yml',
        'name' => 'Redirect',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.6',
      ),
      'blazy_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/blazy/blazy_ui/blazy_ui.info.yml',
        'basename' => 'blazy_ui.info.yml',
        'name' => 'Blazy UI',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'blazy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/blazy/blazy.info.yml',
        'basename' => 'blazy.info.yml',
        'name' => 'Blazy',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'search_api_db_defaults' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api/modules/search_api_db/search_api_db_defaults/search_api_db_defaults.info.yml',
        'basename' => 'search_api_db_defaults.info.yml',
        'name' => 'Database Search Defaults',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.17',
      ),
      'search_api_db' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api/modules/search_api_db/search_api_db.info.yml',
        'basename' => 'search_api_db.info.yml',
        'name' => 'Database Search',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.17',
      ),
      'search_api' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/search_api/search_api.info.yml',
        'basename' => 'search_api.info.yml',
        'name' => 'Search API',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.17',
      ),
      'content_lock_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/content_lock/tests/modules/content_lock_test/content_lock_test.info.yml',
        'basename' => 'content_lock_test.info.yml',
        'name' => 'Content lock test',
        'info' => 
        array (
          'name' => 'Content lock test',
          'type' => 'module',
          'description' => 'Provides test classes.',
          'core_version_requirement' => '^8.8 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'content_lock:content_lock',
            1 => 'entity_test:entity_test',
          ),
          'version' => '8.x-2.1',
          'project' => 'content_lock',
          'datestamp' => 1591342903,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'prefetch_cache_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/content_lock/tests/modules/prefetch_cache_test/prefetch_cache_test.info.yml',
        'basename' => 'prefetch_cache_test.info.yml',
        'name' => 'Prefetch cache test',
        'info' => 
        array (
          'name' => 'Prefetch cache test',
          'type' => 'module',
          'description' => 'Provides test classes.',
          'core_version_requirement' => '^8.8 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'prefetch_cache:prefetch_cache',
          ),
          'version' => '8.x-2.1',
          'project' => 'content_lock',
          'datestamp' => 1591342903,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'content_lock_timeout_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/content_lock/modules/content_lock_timeout/tests/modules/content_lock_timeout_test/content_lock_timeout_test.info.yml',
        'basename' => 'content_lock_timeout_test.info.yml',
        'name' => 'Content lock timeout test',
        'info' => 
        array (
          'name' => 'Content lock timeout test',
          'type' => 'module',
          'description' => 'Provides test classes.',
          'core_version_requirement' => '^8.8 || ^9',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'content_lock:content_lock_timeout',
          ),
          'version' => '8.x-2.1',
          'project' => 'content_lock',
          'datestamp' => 1591342903,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'content_lock_timeout' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/content_lock/modules/content_lock_timeout/content_lock_timeout.info.yml',
        'basename' => 'content_lock_timeout.info.yml',
        'name' => 'Content Lock Timeout',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'content_lock' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/content_lock/content_lock.info.yml',
        'basename' => 'content_lock.info.yml',
        'name' => 'Content Lock',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.1',
      ),
      'focal_point' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/focal_point/focal_point.info.yml',
        'basename' => 'focal_point.info.yml',
        'name' => 'Focal Point',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.5',
      ),
      'google_analytics_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/google_analytics/tests/modules/google_analytics_test/google_analytics_test.info.yml',
        'basename' => 'google_analytics_test.info.yml',
        'name' => 'Google Analytics test',
        'info' => 
        array (
          'name' => 'Google Analytics test',
          'type' => 'module',
          'description' => 'Support module for Google Analytics testing.',
          'package' => 'Testing',
          'version' => '8.x-2.5',
          'project' => 'google_analytics',
          'datestamp' => 1591298498,
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'google_analytics' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/modules/contrib/google_analytics/google_analytics.info.yml',
        'basename' => 'google_analytics.info.yml',
        'name' => 'Google Analytics',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '8.x-2.5',
      ),
      'action' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/action/action.info.yml',
        'basename' => 'action.info.yml',
        'name' => 'Actions',
        'info' => 
        array (
          'name' => 'Actions',
          'type' => 'module',
          'description' => 'Allows configuration of tasks to be executed in response to events.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.action.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'aggregator_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/aggregator/tests/modules/aggregator_test_views/aggregator_test_views.info.yml',
        'basename' => 'aggregator_test_views.info.yml',
        'name' => 'Aggregator test views',
        'info' => 
        array (
          'name' => 'Aggregator test views',
          'type' => 'module',
          'description' => 'Provides default views for views aggregator tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:aggregator',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'aggregator_display_configurable_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/aggregator/tests/modules/aggregator_display_configurable_test/aggregator_display_configurable_test.info.yml',
        'basename' => 'aggregator_display_configurable_test.info.yml',
        'name' => 'Aggregator configurable display module tests',
        'info' => 
        array (
          'name' => 'Aggregator configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for aggregator \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/aggregator/tests/modules/aggregator_test/aggregator_test.info.yml',
        'basename' => 'aggregator_test.info.yml',
        'name' => 'Aggregator module tests',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'type' => 'module',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/aggregator/aggregator.info.yml',
        'basename' => 'aggregator.info.yml',
        'name' => 'Aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'type' => 'module',
          'description' => 'Gathers and displays syndicated content (RSS, RDF, and Atom feeds) from external sources.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'aggregator.admin_settings',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:options',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_ui_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field_ui/tests/modules/field_ui_test/field_ui_test.info.yml',
        'basename' => 'field_ui_test.info.yml',
        'name' => 'Field UI test',
        'info' => 
        array (
          'name' => 'Field UI test',
          'type' => 'module',
          'description' => 'Support module for Field UI tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field_ui/field_ui.info.yml',
        'basename' => 'field_ui.info.yml',
        'name' => 'Field UI',
        'info' => 
        array (
          'name' => 'Field UI',
          'type' => 'module',
          'description' => 'Provides a user interface for the Field module.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'telephone' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/telephone/telephone.info.yml',
        'basename' => 'telephone.info.yml',
        'name' => 'Telephone',
        'info' => 
        array (
          'name' => 'Telephone',
          'type' => 'module',
          'description' => 'Defines a field type for telephone numbers.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'ban' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/ban/ban.info.yml',
        'basename' => 'ban.info.yml',
        'name' => 'Ban',
        'info' => 
        array (
          'name' => 'Ban',
          'type' => 'module',
          'description' => 'Allows administrators to ban visits from specific IP addresses.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'ban.admin_page',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'contextual_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contextual/tests/modules/contextual_test/contextual_test.info.yml',
        'basename' => 'contextual_test.info.yml',
        'name' => 'Contextual Test',
        'info' => 
        array (
          'name' => 'Contextual Test',
          'type' => 'module',
          'description' => 'Provides test contextual links.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contextual',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'contextual' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contextual/contextual.info.yml',
        'basename' => 'contextual.info.yml',
        'name' => 'Contextual Links',
        'info' => 
        array (
          'name' => 'Contextual Links',
          'type' => 'module',
          'description' => 'Provides contextual links to directly access tasks related to page elements.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_discovery_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/tests/modules/field_discovery_test/field_discovery_test.info.yml',
        'basename' => 'field_discovery_test.info.yml',
        'name' => 'Migrate drupal field discovery tet',
        'info' => 
        array (
          'name' => 'Migrate drupal field discovery tet',
          'type' => 'module',
          'description' => 'Module containing a test class exposing protected field discovery methods',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_field_plugin_manager_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/tests/modules/migrate_field_plugin_manager_test/migrate_field_plugin_manager_test.info.yml',
        'basename' => 'migrate_field_plugin_manager_test.info.yml',
        'name' => 'Migrate field plugin manager test',
        'info' => 
        array (
          'name' => 'Migrate field plugin manager test',
          'type' => 'module',
          'description' => 'Example module demonstrating the field plugin manager in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_overwrite_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/tests/modules/migrate_overwrite_test/migrate_overwrite_test.info.yml',
        'basename' => 'migrate_overwrite_test.info.yml',
        'name' => 'Migrate property overwrite test',
        'info' => 
        array (
          'name' => 'Migrate property overwrite test',
          'type' => 'module',
          'description' => 'Example module demonstrating property overwrite support in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_state_finished_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/tests/modules/migrate_state_finished_test/migrate_state_finished_test.info.yml',
        'basename' => 'migrate_state_finished_test.info.yml',
        'name' => 'Migrate state active test',
        'info' => 
        array (
          'name' => 'Migrate state active test',
          'type' => 'module',
          'description' => 'Tests the \'active\' migrate state',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_state_not_finished_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/tests/modules/migrate_state_not_finished_test/migrate_state_not_finished_test.info.yml',
        'basename' => 'migrate_state_not_finished_test.info.yml',
        'name' => 'Migrate state incomplete test',
        'info' => 
        array (
          'name' => 'Migrate state incomplete test',
          'type' => 'module',
          'description' => 'Tests the \'incomplete\' migrate state',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_state_no_upgrade_path' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/tests/modules/migrate_state_no_upgrade_path/migrate_state_no_upgrade_path.info.yml',
        'basename' => 'migrate_state_no_upgrade_path.info.yml',
        'name' => 'Migrate state no migration and no migrate_drupal.yml file test',
        'info' => 
        array (
          'name' => 'Migrate state no migration and no migrate_drupal.yml file test',
          'type' => 'module',
          'description' => 'Does not have a migration or migrate_drupal.yml file.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_drupal' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal/migrate_drupal.info.yml',
        'basename' => 'migrate_drupal.info.yml',
        'name' => 'Migrate Drupal',
        'info' => 
        array (
          'name' => 'Migrate Drupal',
          'type' => 'module',
          'description' => 'Contains migrations from older Drupal versions.',
          'package' => 'Migration',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/tests/modules/layout_builder_test/layout_builder_test.info.yml',
        'basename' => 'layout_builder_test.info.yml',
        'name' => 'Layout Builder test',
        'info' => 
        array (
          'name' => 'Layout Builder test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder_views_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/tests/modules/layout_builder_views_test/layout_builder_views_test.info.yml',
        'basename' => 'layout_builder_views_test.info.yml',
        'name' => 'Layout Builder Views Test',
        'info' => 
        array (
          'name' => 'Layout Builder Views Test',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder_form_block_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/tests/modules/layout_builder_form_block_test/layout_builder_form_block_test.info.yml',
        'basename' => 'layout_builder_form_block_test.info.yml',
        'name' => 'Layout Builder form block test',
        'info' => 
        array (
          'name' => 'Layout Builder form block test',
          'type' => 'module',
          'description' => 'Support module for testing layout building using blocks with forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder_overrides_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/tests/modules/layout_builder_overrides_test/layout_builder_overrides_test.info.yml',
        'basename' => 'layout_builder_overrides_test.info.yml',
        'name' => 'Layout Builder overrides test',
        'info' => 
        array (
          'name' => 'Layout Builder overrides test',
          'type' => 'module',
          'description' => 'Support module for testing overriding layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder_theme_suggestions_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/tests/modules/layout_builder_theme_suggestions_test/layout_builder_theme_suggestions_test.info.yml',
        'basename' => 'layout_builder_theme_suggestions_test.info.yml',
        'name' => 'Layout Builder Field Block Theme Suggestions Test',
        'info' => 
        array (
          'name' => 'Layout Builder Field Block Theme Suggestions Test',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder_defaults_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/tests/modules/layout_builder_defaults_test/layout_builder_defaults_test.info.yml',
        'basename' => 'layout_builder_defaults_test.info.yml',
        'name' => 'Layout Builder defaults test',
        'info' => 
        array (
          'name' => 'Layout Builder defaults test',
          'type' => 'module',
          'description' => 'Support module for testing layout building defaults.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder_fieldblock_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/tests/modules/layout_builder_fieldblock_test/layout_builder_fieldblock_test.info.yml',
        'basename' => 'layout_builder_fieldblock_test.info.yml',
        'name' => 'Layout Builder test',
        'info' => 
        array (
          'name' => 'Layout Builder test',
          'type' => 'module',
          'description' => 'Support module for testing layout building.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_builder' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_builder/layout_builder.info.yml',
        'basename' => 'layout_builder.info.yml',
        'name' => 'Layout Builder',
        'info' => 
        array (
          'name' => 'Layout Builder',
          'type' => 'module',
          'description' => 'Allows users to add and arrange blocks and content fields directly on the content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
            1 => 'drupal:contextual',
            2 => 'drupal:field_ui',
            3 => 'drupal:block',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'settings_tray_test_css' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/settings_tray/tests/modules/settings_tray_test_css/settings_tray_test_css.info.yml',
        'basename' => 'settings_tray_test_css.info.yml',
        'name' => 'CSS Test fix',
        'info' => 
        array (
          'name' => 'CSS Test fix',
          'type' => 'module',
          'description' => 'Provides CSS fixes for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'settings_tray_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/settings_tray/tests/modules/settings_tray_test/settings_tray_test.info.yml',
        'basename' => 'settings_tray_test.info.yml',
        'name' => 'Settings Tray Test',
        'info' => 
        array (
          'name' => 'Settings Tray Test',
          'type' => 'module',
          'description' => 'Provides Settings Tray test functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'settings_tray_override_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/settings_tray/tests/modules/settings_tray_override_test/settings_tray_override_test.info.yml',
        'basename' => 'settings_tray_override_test.info.yml',
        'name' => 'Configuration override test for Settings Tray',
        'info' => 
        array (
          'name' => 'Configuration override test for Settings Tray',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:settings_tray',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'settings_tray' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/settings_tray/settings_tray.info.yml',
        'basename' => 'settings_tray.info.yml',
        'name' => 'Settings Tray',
        'info' => 
        array (
          'name' => 'Settings Tray',
          'type' => 'module',
          'description' => 'Allows users to directly edit the configuration of blocks on the current page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:toolbar',
            2 => 'drupal:contextual',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'automated_cron' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/automated_cron/automated_cron.info.yml',
        'basename' => 'automated_cron.info.yml',
        'name' => 'Automated Cron',
        'info' => 
        array (
          'name' => 'Automated Cron',
          'type' => 'module',
          'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'system.cron_settings',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'workflow_type_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workflows/tests/modules/workflow_type_test/workflow_type_test.info.yml',
        'basename' => 'workflow_type_test.info.yml',
        'name' => 'Workflow Type Test',
        'info' => 
        array (
          'name' => 'Workflow Type Test',
          'type' => 'module',
          'description' => 'Provides a workflow type plugin for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'workflow_third_party_settings_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workflows/tests/modules/workflow_third_party_settings_test/workflow_third_party_settings_test.info.yml',
        'basename' => 'workflow_third_party_settings_test.info.yml',
        'name' => 'Workflow Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Workflow Third Party Settings Test',
          'type' => 'module',
          'description' => 'Allows third party settings on workflows to be tested.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'workflows' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workflows/workflows.info.yml',
        'basename' => 'workflows.info.yml',
        'name' => 'Workflows',
        'info' => 
        array (
          'name' => 'Workflows',
          'type' => 'module',
          'description' => 'Provides an interface to create workflows with transitions between different states (for example publication or user status) provided by other modules.',
          'version' => 'VERSION',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'help_topics_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/help_topics/tests/themes/help_topics_test_theme/help_topics_test_theme.info.yml',
        'basename' => 'help_topics_test_theme.info.yml',
        'name' => 'Test Help Topics',
        'info' => 
        array (
          'name' => 'Test Help Topics',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'A theme to test help topics.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'help_topics_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/help_topics/tests/modules/help_topics_test/help_topics_test.info.yml',
        'basename' => 'help_topics_test.info.yml',
        'name' => 'ABC Help Test',
        'info' => 
        array (
          'name' => 'ABC Help Test',
          'type' => 'module',
          'description' => 'Support module for help testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:help_topics',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'help_topics' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/help_topics/help_topics.info.yml',
        'basename' => 'help_topics.info.yml',
        'name' => 'Help Topics',
        'info' => 
        array (
          'name' => 'Help Topics',
          'type' => 'module',
          'description' => 'Displays help topics provided by themes and modules.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:help',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'dynamic_page_cache_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/dynamic_page_cache/tests/dynamic_page_cache_test/dynamic_page_cache_test.info.yml',
        'basename' => 'dynamic_page_cache_test.info.yml',
        'name' => 'Test Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Test Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Provides test routes/responses for Dynamic Page Cache.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'dynamic_page_cache' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/dynamic_page_cache/dynamic_page_cache.info.yml',
        'basename' => 'dynamic_page_cache.info.yml',
        'name' => 'Internal Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Internal Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Caches pages, including those with dynamic content, for all users.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_depending_on_stable' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_stable/test_theme_depending_on_stable.info.yml',
        'basename' => 'test_theme_depending_on_stable.info.yml',
        'name' => 'Test theme depending on Stable',
        'info' => 
        array (
          'type' => 'theme',
          'base theme' => 'stable',
          'name' => 'Test theme depending on Stable',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_libraries_override_with_drupal_settings' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_libraries_override_with_drupal_settings/test_theme_libraries_override_with_drupal_settings.info.yml',
        'basename' => 'test_theme_libraries_override_with_drupal_settings.info.yml',
        'name' => 'Test theme libraries-override',
        'info' => 
        array (
          'name' => 'Test theme libraries-override',
          'type' => 'theme',
          'description' => 'Theme with drupalSettings libraries-override',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'libraries-override' => 
          array (
            'core/drupal.ajax' => 
            array (
              'drupalSettings' => 
              array (
                'ajaxPageState' => 
                array (
                ),
              ),
            ),
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_twig_registry_loader_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_twig_registry_loader_subtheme/test_theme_twig_registry_loader_subtheme.info.yml',
        'basename' => 'test_theme_twig_registry_loader_subtheme.info.yml',
        'name' => 'Twig registry loader test subtheme',
        'info' => 
        array (
          'name' => 'Twig registry loader test subtheme',
          'type' => 'theme',
          'base theme' => 'test_theme_twig_registry_loader_theme',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_libraries_extend' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_libraries_extend/test_theme_libraries_extend.info.yml',
        'basename' => 'test_theme_libraries_extend.info.yml',
        'name' => 'Test theme libraries-extend',
        'info' => 
        array (
          'name' => 'Test theme libraries-extend',
          'type' => 'theme',
          'description' => 'Test Theme with libraries-extend',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'libraries-extend' => 
          array (
            'classy/book-navigation' => 
            array (
              0 => 'test_theme_libraries_extend/extend_one',
              1 => 'test_theme_libraries_extend/extend_two',
            ),
            'core/drupal.dialog' => 
            array (
              0 => 'test_theme_libraries_extend/non_existent_library',
            ),
            'test_theme/collapse' => 
            array (
              0 => 
              array (
                'not_a_string' => 
                array (
                  'expected' => 'an exception',
                ),
              ),
            ),
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_nyan_cat_engine' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_nyan_cat_engine/test_theme_nyan_cat_engine.info.yml',
        'basename' => 'test_theme_nyan_cat_engine.info.yml',
        'name' => 'Test theme for Nyan Cat engine',
        'info' => 
        array (
          'name' => 'Test theme for Nyan Cat engine',
          'type' => 'theme',
          'description' => 'Theme for testing the theme system with the Nyan Cat theme engine',
          'version' => 'VERSION',
          'engine' => 'nyan_cat',
          'base theme' => false,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_depending_on_nonexisting_module' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_nonexisting_module/test_theme_depending_on_nonexisting_module.info.yml',
        'basename' => 'test_theme_depending_on_nonexisting_module.info.yml',
        'name' => 'Test Theme Depending on Nonexisting Module',
        'info' => 
        array (
          'name' => 'Test Theme Depending on Nonexisting Module',
          'type' => 'theme',
          'base theme' => 'stark',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'test_module_non_existing',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_subsubtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_subsubtheme/test_subsubtheme.info.yml',
        'basename' => 'test_subsubtheme.info.yml',
        'name' => 'Theme test subsubtheme',
        'info' => 
        array (
          'name' => 'Theme test subsubtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_subtheme as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'test_subtheme',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_mixed_module_dependencies' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_mixed_module_dependencies/test_theme_mixed_module_dependencies.info.yml',
        'basename' => 'test_theme_mixed_module_dependencies.info.yml',
        'name' => 'Test Theme with a Module Dependency and Base Theme with a Different Module Dependency',
        'info' => 
        array (
          'name' => 'Test Theme with a Module Dependency and Base Theme with a Different Module Dependency',
          'type' => 'theme',
          'base theme' => 'test_theme_depending_on_modules',
          'dependencies' => 
          array (
            0 => 'help',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'nyan_cat' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/engines/nyan_cat/nyan_cat.info.yml',
        'basename' => 'nyan_cat.info.yml',
        'name' => 'Nyan cat',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Nyan cat',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'experimental_theme_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/experimental_theme_dependency_test/experimental_theme_dependency_test.info.yml',
        'basename' => 'experimental_theme_dependency_test.info.yml',
        'name' => 'Experimental dependency test',
        'info' => 
        array (
          'name' => 'Experimental dependency test',
          'type' => 'theme',
          'description' => 'Experimental dependency test theme.',
          'version' => 'VERSION',
          'base theme' => 'experimental_theme_test',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_invalid_region' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_invalid_region/test_invalid_region.info.yml',
        'basename' => 'test_invalid_region.info.yml',
        'name' => 'Theme test with missing content region',
        'info' => 
        array (
          'name' => 'Theme test with missing content region',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which has a non-existent content region.',
          'version' => 'VERSION',
          'regions' => 
          array (
            0 => 
            array (
              'foo' => 'Foo',
            ),
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_invalid_basetheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_invalid_basetheme/test_invalid_basetheme.info.yml',
        'basename' => 'test_invalid_basetheme.info.yml',
        'name' => 'Theme test with invalid base theme',
        'info' => 
        array (
          'name' => 'Theme test with invalid base theme',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent base theme.',
          'version' => 'VERSION',
          'base theme' => 'not_real_test_basetheme',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_module_required_by_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_modules/test_module_required_by_theme/test_module_required_by_theme.info.yml',
        'basename' => 'test_module_required_by_theme.info.yml',
        'name' => 'Test Module Required by Theme',
        'info' => 
        array (
          'name' => 'Test Module Required by Theme',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_another_module_required_by_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_modules/test_another_module_required_by_theme/test_another_module_required_by_theme.info.yml',
        'basename' => 'test_another_module_required_by_theme.info.yml',
        'name' => 'Test Another Module Required by Theme',
        'info' => 
        array (
          'name' => 'Test Another Module Required by Theme',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_depending_on_modules' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_modules/test_theme_depending_on_modules.info.yml',
        'basename' => 'test_theme_depending_on_modules.info.yml',
        'name' => 'Test Theme Depending on Modules',
        'info' => 
        array (
          'name' => 'Test Theme Depending on Modules',
          'type' => 'theme',
          'base theme' => 'stark',
          'dependencies' => 
          array (
            0 => 'test_module_required_by_theme',
            1 => 'test_another_module_required_by_theme',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_messages' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_messages/test_messages.info.yml',
        'basename' => 'test_messages.info.yml',
        'name' => 'Theme test messages',
        'info' => 
        array (
          'name' => 'Theme test messages',
          'type' => 'theme',
          'description' => 'Test theme which provides another div for messages.',
          'version' => 'VERSION',
          'base theme' => 'classy',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_twig_registry_loader_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_twig_registry_loader_theme/test_theme_twig_registry_loader_theme.info.yml',
        'basename' => 'test_theme_twig_registry_loader_theme.info.yml',
        'name' => 'Twig registry loader test theme',
        'info' => 
        array (
          'name' => 'Twig registry loader test theme',
          'type' => 'theme',
          'base theme' => 'test_theme_twig_registry_loader',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_ckeditor_stylesheets_protocol_relative' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_ckeditor_stylesheets_protocol_relative/test_ckeditor_stylesheets_protocol_relative.info.yml',
        'basename' => 'test_ckeditor_stylesheets_protocol_relative.info.yml',
        'name' => 'Test protocol-relative CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test protocol-relative CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses a protocol-relative CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor_stylesheets' => 
          array (
            0 => '//fonts.googleapis.com/css?family=Open+Sans',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_module_incompatible_constraint' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_constrained_modules/test_module_incompatible_constraint/test_module_incompatible_constraint.info.yml',
        'basename' => 'test_module_incompatible_constraint.info.yml',
        'name' => 'Test Module Theme Depends on with Incompatible Constraint',
        'info' => 
        array (
          'name' => 'Test Module Theme Depends on with Incompatible Constraint',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.x-1.8',
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.8',
      ),
      'test_module_compatible_constraint' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_constrained_modules/test_module_compatible_constraint/test_module_compatible_constraint.info.yml',
        'basename' => 'test_module_compatible_constraint.info.yml',
        'name' => 'Test Module Theme Depends on with Compatible Constraint',
        'info' => 
        array (
          'name' => 'Test Module Theme Depends on with Compatible Constraint',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.x-1.2',
        ),
        'schema_version' => 9000,
        'version' => '8.x-1.2',
      ),
      'test_theme_depending_on_constrained_modules' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_depending_on_constrained_modules/test_theme_depending_on_constrained_modules.info.yml',
        'basename' => 'test_theme_depending_on_constrained_modules.info.yml',
        'name' => 'Test Theme Depending on Version Constrained Modules',
        'info' => 
        array (
          'name' => 'Test Theme Depending on Version Constrained Modules',
          'type' => 'theme',
          'base theme' => 'stark',
          'dependencies' => 
          array (
            0 => 'test_module_compatible_constraint (>=8.x-1.x)',
            1 => 'test_module_incompatible_constraint (>=8.x-2.x)',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_subtheme/test_subtheme.info.yml',
        'basename' => 'test_subtheme.info.yml',
        'name' => 'Theme test subtheme',
        'info' => 
        array (
          'name' => 'Theme test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_basetheme as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'test_basetheme',
          'libraries' => 
          array (
            0 => 'test_subtheme/global-styling',
          ),
          'libraries-override' => 
          array (
            'theme_test/theme_stylesheets_override_and_remove_test' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'css/sub-remove.css' => false,
                ),
              ),
            ),
            'test_basetheme/global-styling' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'base-add.sub-remove.css' => false,
                ),
              ),
            ),
          ),
          'libraries-extend' => 
          array (
            'classy/base' => 
            array (
              0 => 'test_subtheme/global-styling',
            ),
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_subseven' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_subseven/test_subseven.info.yml',
        'basename' => 'test_subseven.info.yml',
        'name' => 'Theme test subseven',
        'info' => 
        array (
          'name' => 'Theme test subseven',
          'type' => 'theme',
          'description' => 'Test theme which uses seven as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'seven',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_ckeditor_stylesheets_relative' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_ckeditor_stylesheets_relative/test_ckeditor_stylesheets_relative.info.yml',
        'basename' => 'test_ckeditor_stylesheets_relative.info.yml',
        'name' => 'Test relative CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test relative CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses a relative CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/yokotsoko.css',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_settings' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_settings/test_theme_settings.info.yml',
        'basename' => 'test_theme_settings.info.yml',
        'name' => 'Theme test theme-settings.php',
        'info' => 
        array (
          'name' => 'Theme test theme-settings.php',
          'type' => 'theme',
          'description' => 'Test theme that extends theme settings options via theme-settings.php file',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'experimental_theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/experimental_theme_test/experimental_theme_test.info.yml',
        'basename' => 'experimental_theme_test.info.yml',
        'name' => 'Experimental test',
        'info' => 
        array (
          'name' => 'Experimental test',
          'type' => 'theme',
          'description' => 'Experimental test theme.',
          'version' => 'VERSION',
          'base theme' => false,
          'experimental' => true,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_having_veery_long_name_which_is_too_long' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_having_veery_long_name_which_is_too_long/test_theme_having_veery_long_name_which_is_too_long.info.yml',
        'basename' => 'test_theme_having_veery_long_name_which_is_too_long.info.yml',
        'name' => 'Test theme with a too long name',
        'info' => 
        array (
          'type' => 'theme',
          'base theme' => 'stable',
          'name' => 'Test theme with a too long name',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_legacy_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_legacy_theme/test_legacy_theme.info.yml',
        'basename' => 'test_legacy_theme.info.yml',
        'name' => 'Test legacy theme',
        'info' => 
        array (
          'name' => 'Test legacy theme',
          'type' => 'theme',
          'description' => 'Test theme to test deprecated functionality.',
          'version' => 'VERSION',
          'package' => 'Testing',
          'base theme' => 'test_theme',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_core_semver' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_core_semver/test_core_semver.info.yml',
        'basename' => 'test_core_semver.info.yml',
        'name' => 'Theme test with semver core version',
        'info' => 
        array (
          'name' => 'Theme test with semver core version',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which has semver core version.',
          'version' => 'VERSION',
          'core_version_requirement' => '^8 || ^9',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_ckeditor_stylesheets_external' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_ckeditor_stylesheets_external/test_ckeditor_stylesheets_external.info.yml',
        'basename' => 'test_ckeditor_stylesheets_external.info.yml',
        'name' => 'Test external CKEditor stylesheets',
        'info' => 
        array (
          'name' => 'Test external CKEditor stylesheets',
          'type' => 'theme',
          'description' => 'A theme that uses an external CKEditor stylesheet.',
          'version' => 'VERSION',
          'base theme' => false,
          'ckeditor_stylesheets' => 
          array (
            0 => 'https://fonts.googleapis.com/css?family=Open+Sans',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_with_a_base_theme_depending_on_modules' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_with_a_base_theme_depending_on_modules/test_theme_with_a_base_theme_depending_on_modules.info.yml',
        'basename' => 'test_theme_with_a_base_theme_depending_on_modules.info.yml',
        'name' => 'Test Theme with a Base Theme Depending on Modules',
        'info' => 
        array (
          'name' => 'Test Theme with a Base Theme Depending on Modules',
          'type' => 'theme',
          'base theme' => 'test_theme_depending_on_modules',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_invalid_basetheme_sub' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_invalid_basetheme_sub/test_invalid_basetheme_sub.info.yml',
        'basename' => 'test_invalid_basetheme_sub.info.yml',
        'name' => 'Theme test with valid base theme but no grandparent base theme',
        'info' => 
        array (
          'name' => 'Theme test with valid base theme but no grandparent base theme',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent base theme in the base chain.',
          'version' => 'VERSION',
          'base theme' => 'test_invalid_basetheme',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_settings_features' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_settings_features/test_theme_settings_features.info.yml',
        'basename' => 'test_theme_settings_features.info.yml',
        'name' => 'Test features',
        'info' => 
        array (
          'name' => 'Test features',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme to test theme settings with limited features.',
          'features' => 
          array (
            0 => 'node_user_picture',
            1 => 'comment_user_picture',
            2 => 'comment_user_verification',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme/test_theme.info.yml',
        'basename' => 'test_theme.info.yml',
        'name' => '<strong>Test theme</strong>',
        'info' => 
        array (
          'name' => '<strong>Test theme</strong>',
          'type' => 'theme',
          'description' => 'Theme for testing the theme system',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'logo' => 'images/logo2.svg',
          'libraries' => 
          array (
            0 => 'test_theme/global-styling',
          ),
          'libraries-override' => 
          array (
            'core/drupal.collapse' => 'test_theme/collapse',
            'core/drupal.progress' => false,
            'classy/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/button.css' => 'css/my-button.css',
                  'css/components/collapse-processed.css' => 'css/my-collapse-processed.css',
                  'css/components/container-inline.css' => '/themes/my_theme/css/my-container-inline.css',
                  'css/components/details.css' => '/themes/my_theme/css/my-details.css',
                ),
              ),
            ),
            'classy/dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/dialog.css' => false,
                ),
              ),
            ),
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/system/components/js.module.css' => false,
                ),
              ),
            ),
            'core/jquery' => 
            array (
              'js' => 
              array (
                'assets/vendor/jquery/jquery.min.js' => 'js/collapse.js',
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/dropbutton/dropbutton.css' => '/themes/my_theme/css/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/core/vertical-tabs.css' => 'public://my_css/vertical-tabs.css',
                ),
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/core.css' => '//my-server/my_theme/css/jquery_ui.css',
                ),
              ),
            ),
            'core/jquery.farbtastic' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/farbtastic/farbtastic.css' => 'http://example.com/my_theme/css/farbtastic.css',
                ),
              ),
            ),
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'left' => 'Left',
            'right' => 'Right',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_invalid_core_semver' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_invalid_core_semver/test_invalid_core_semver.info.yml',
        'basename' => 'test_invalid_core_semver.info.yml',
        'name' => 'Theme test with invalid semver core version',
        'info' => 
        array (
          'name' => 'Theme test with invalid semver core version',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which has an invalid semver core version.',
          'version' => 'VERSION',
          'core_version_requirement' => '^7',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_theme/test_theme_theme.info.yml',
        'basename' => 'test_theme_theme.info.yml',
        'name' => 'Theme test theme.theme file',
        'info' => 
        array (
          'name' => 'Theme test theme.theme file',
          'type' => 'theme',
          'description' => 'Test theme that extends theme settings options via theme.theme file',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_libraries_empty' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_libraries_empty/test_theme_libraries_empty.info.yml',
        'basename' => 'test_theme_libraries_empty.info.yml',
        'name' => 'Test theme libraries empty',
        'info' => 
        array (
          'name' => 'Test theme libraries empty',
          'type' => 'theme',
          'description' => 'Test theme with empty libraries in theme.info.yml',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'libraries' => NULL,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_twig_registry_loader' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_twig_registry_loader/test_theme_twig_registry_loader.info.yml',
        'basename' => 'test_theme_twig_registry_loader.info.yml',
        'name' => 'Twig registry loader test',
        'info' => 
        array (
          'name' => 'Twig registry loader test',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Support module for Twig registry loader testing.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_invalid_engine' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_invalid_engine/test_invalid_engine.info.yml',
        'basename' => 'test_invalid_engine.info.yml',
        'name' => 'Theme test with invalid theme engine',
        'info' => 
        array (
          'name' => 'Theme test with invalid theme engine',
          'type' => 'theme',
          'description' => 'Test theme which has a non-existent theme engine.',
          'version' => 'VERSION',
          'engine' => 'not_real_engine',
          'base theme' => false,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_theme_libraries_override_with_invalid_asset' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_theme_libraries_override_with_invalid_asset/test_theme_libraries_override_with_invalid_asset.info.yml',
        'basename' => 'test_theme_libraries_override_with_invalid_asset.info.yml',
        'name' => 'Test theme libraries-override',
        'info' => 
        array (
          'name' => 'Test theme libraries-override',
          'type' => 'theme',
          'description' => 'Theme with invalid libraries-override asset spec.',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'libraries-override' => 
          array (
            'core/drupal.dialog' => 
            array (
              'css' => false,
            ),
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_wild_west' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_wild_west/test_wild_west.info.yml',
        'basename' => 'test_wild_west.info.yml',
        'name' => 'Test Wild West',
        'info' => 
        array (
          'name' => 'Test Wild West',
          'type' => 'theme',
          'description' => 'A theme that doesn\'t use Stable as its base. It tests the wild west instead.',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_legacy_stylesheets_remove' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/themes/test_legacy_stylesheets_remove/test_legacy_stylesheets_remove.info.yml',
        'basename' => 'test_legacy_stylesheets_remove.info.yml',
        'name' => 'Theme Legacy Test Stylesheets Remove',
        'info' => 
        array (
          'name' => 'Theme Legacy Test Stylesheets Remove',
          'type' => 'theme',
          'description' => 'Test theme using legacy stylesheets-remove.',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'package' => 'Testing',
          'libraries' => 
          array (
          ),
          'stylesheets-remove' => 
          array (
            0 => '@classy/css/components/action-links.css',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'twig_namespace_b' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/twig_theme_test/modules/twig_namespace_b/twig_namespace_b.info.yml',
        'basename' => 'twig_namespace_b.info.yml',
        'name' => 'Twig namespace test: Module A',
        'info' => 
        array (
          'name' => 'Twig namespace test: Module A',
          'type' => 'module',
          'description' => 'Support module for Twig namespace testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'twig_namespace_a' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/twig_theme_test/modules/twig_namespace_a/twig_namespace_a.info.yml',
        'basename' => 'twig_namespace_a.info.yml',
        'name' => 'Twig namespace test: Module A',
        'info' => 
        array (
          'name' => 'Twig namespace test: Module A',
          'type' => 'module',
          'description' => 'Support module for Twig namespace testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'twig_theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/twig_theme_test/twig_theme_test.info.yml',
        'basename' => 'twig_theme_test.info.yml',
        'name' => 'Twig theme test',
        'info' => 
        array (
          'name' => 'Twig theme test',
          'type' => 'module',
          'description' => 'Support module for Twig theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'render_attached_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/render_attached_test/render_attached_test.info.yml',
        'basename' => 'render_attached_test.info.yml',
        'name' => 'Rendering #attached test',
        'info' => 
        array (
          'name' => 'Rendering #attached test',
          'type' => 'module',
          'description' => 'Support module for HtmlResponseAttachmentsTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'plugin_test_extended' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/plugin_test_extended/plugin_test_extended.info.yml',
        'basename' => 'plugin_test_extended.info.yml',
        'name' => 'Plugin Test Extended',
        'info' => 
        array (
          'name' => 'Plugin Test Extended',
          'type' => 'module',
          'description' => 'Test annotations can extend other annotations in a different namespace.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'dialog_renderer_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/dialog_renderer_test/dialog_renderer_test.info.yml',
        'basename' => 'dialog_renderer_test.info.yml',
        'name' => 'Dialog Renderer Test',
        'info' => 
        array (
          'name' => 'Dialog Renderer Test',
          'type' => 'module',
          'description' => 'Support module for Dialog Renderer tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_test_update' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_test_update/entity_test_update.info.yml',
        'basename' => 'entity_test_update.info.yml',
        'name' => 'Entity Update Test',
        'info' => 
        array (
          'name' => 'Entity Update Test',
          'type' => 'module',
          'description' => 'Provides an entity type for testing definition and schema updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_incompatible_php_version_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_incompatible_php_version_test/system_incompatible_php_version_test.info.yml',
        'basename' => 'system_incompatible_php_version_test.info.yml',
        'name' => 'System incompatible PHP version test',
        'info' => 
        array (
          'name' => 'System incompatible PHP version test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'php' => 6502,
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_dependencies_test/system_dependencies_test.info.yml',
        'basename' => 'system_dependencies_test.info.yml',
        'name' => 'System dependency test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:_missing_dependency',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_0' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_0/update_test_0.info.yml',
        'basename' => 'update_test_0.info.yml',
        'name' => 'Update test 0',
        'info' => 
        array (
          'name' => 'Update test 0',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'off_canvas_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/off_canvas_test/off_canvas_test.info.yml',
        'basename' => 'off_canvas_test.info.yml',
        'name' => 'Off-canvas tests',
        'info' => 
        array (
          'name' => 'Off-canvas tests',
          'type' => 'module',
          'description' => 'Provides off-canvas test links.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'trusted_hosts_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/trusted_hosts_test/trusted_hosts_test.info.yml',
        'basename' => 'trusted_hosts_test.info.yml',
        'name' => 'Trusted hosts test module',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Trusted hosts test module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_page_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/test_page_test/test_page_test.info.yml',
        'basename' => 'test_page_test.info.yml',
        'name' => 'Test page',
        'info' => 
        array (
          'name' => 'Test page',
          'type' => 'module',
          'description' => 'Provides a test page for automated tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_last_removed' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_last_removed/update_test_last_removed.info.yml',
        'basename' => 'update_test_last_removed.info.yml',
        'name' => 'Update test with hook_update_last_removed() implementation',
        'info' => 
        array (
          'name' => 'Update test with hook_update_last_removed() implementation',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'token_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/token_test/token_test.info.yml',
        'basename' => 'token_test.info.yml',
        'name' => 'Token test',
        'info' => 
        array (
          'name' => 'Token test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_reference_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_reference_test/entity_reference_test.info.yml',
        'basename' => 'entity_reference_test.info.yml',
        'name' => 'Entity Reference Test',
        'info' => 
        array (
          'name' => 'Entity Reference Test',
          'type' => 'module',
          'description' => 'Support module for the Entity Reference tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:user',
            2 => 'drupal:views',
            3 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'tabledrag_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/tabledrag_test/tabledrag_test.info.yml',
        'basename' => 'tabledrag_test.info.yml',
        'name' => 'TableDrag test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'TableDrag test',
          'description' => 'Draggable table test module.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_incompatible_module_version_dependencies_test/system_incompatible_module_version_dependencies_test.info.yml',
        'basename' => 'system_incompatible_module_version_dependencies_test.info.yml',
        'name' => 'System incompatible module version dependencies test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:system_incompatible_module_version_test (>2.0)',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'error_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/error_test/error_test.info.yml',
        'basename' => 'error_test.info.yml',
        'name' => 'Error test',
        'info' => 
        array (
          'name' => 'Error test',
          'type' => 'module',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'invalid_module_name_over_the_maximum_allowed_character_length' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/invalid_module_name_over_the_maximum_allowed_character_length/invalid_module_name_over_the_maximum_allowed_character_length.info.yml',
        'basename' => 'invalid_module_name_over_the_maximum_allowed_character_length.info.yml',
        'name' => 'Module name length test',
        'info' => 
        array (
          'name' => 'Module name length test',
          'type' => 'module',
          'description' => 'Test module with a name over the maximum allowed characters.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_module_test/system_module_test.info.yml',
        'basename' => 'system_module_test.info.yml',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing System module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'image_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/image_test/image_test.info.yml',
        'basename' => 'image_test.info.yml',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'experimental_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/experimental_module_test/experimental_module_test.info.yml',
        'basename' => 'experimental_module_test.info.yml',
        'name' => 'Experimental Test',
        'info' => 
        array (
          'name' => 'Experimental Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test experimental functionality.',
          'package' => 'Core (Experimental)',
          'version' => '8.y.x-unstable',
        ),
        'schema_version' => 9000,
        'version' => '8.y.x-unstable',
      ),
      'mail_cancel_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/mail_cancel_test/mail_cancel_test.info.yml',
        'basename' => 'mail_cancel_test.info.yml',
        'name' => 'Cancel mail test support',
        'info' => 
        array (
          'name' => 'Cancel mail test support',
          'description' => 'Test that the mail can be cancelled.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_script_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_script_test/update_script_test.info.yml',
        'basename' => 'update_script_test.info.yml',
        'name' => 'Update script test',
        'info' => 
        array (
          'name' => 'Update script test',
          'type' => 'module',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_schema_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_schema_test/entity_schema_test.info.yml',
        'basename' => 'entity_schema_test.info.yml',
        'name' => 'Entity schema test module',
        'info' => 
        array (
          'name' => 'Entity schema test module',
          'type' => 'module',
          'description' => 'Provides entity and field definitions to test entity schema.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'default_format_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/default_format_test/default_format_test.info.yml',
        'basename' => 'default_format_test.info.yml',
        'name' => 'Default format test',
        'info' => 
        array (
          'name' => 'Default format test',
          'type' => 'module',
          'description' => 'Support module for testing default route format.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'ajax_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/ajax_test/ajax_test.info.yml',
        'basename' => 'ajax_test.info.yml',
        'name' => 'AJAX Test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'type' => 'module',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_project_namespace_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_project_namespace_test/system_project_namespace_test.info.yml',
        'basename' => 'system_project_namespace_test.info.yml',
        'name' => 'System project namespace',
        'info' => 
        array (
          'name' => 'System project namespace',
          'type' => 'module',
          'description' => 'Support module for testing project namespace system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'driver_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/driver_test/driver_test.info.yml',
        'basename' => 'driver_test.info.yml',
        'name' => 'Contrib database driver test',
        'info' => 
        array (
          'name' => 'Contrib database driver test',
          'type' => 'module',
          'description' => 'Support database contrib driver testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'service_provider_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/service_provider_test/service_provider_test.info.yml',
        'basename' => 'service_provider_test.info.yml',
        'name' => 'Service Provider test',
        'info' => 
        array (
          'name' => 'Service Provider test',
          'type' => 'module',
          'description' => 'Support module for service provider testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_batch_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/test_batch_test/test_batch_test.info.yml',
        'basename' => 'test_batch_test.info.yml',
        'name' => 'Test install batch test',
        'info' => 
        array (
          'name' => 'Test install batch test',
          'type' => 'module',
          'description' => 'Support module for functional tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'hold_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/hold_test/hold_test.info.yml',
        'basename' => 'hold_test.info.yml',
        'name' => 'Hold test',
        'info' => 
        array (
          'name' => 'Hold test',
          'type' => 'module',
          'description' => 'Support testing with request/response hold.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'module_install_class_loader_test2' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/module_install_class_loader_test2/module_install_class_loader_test2.info.yml',
        'basename' => 'module_install_class_loader_test2.info.yml',
        'name' => 'Module install class loader test2',
        'info' => 
        array (
          'name' => 'Module install class loader test2',
          'description' => 'Support module for tests that the class loader behaves as expected during module install.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:module_install_class_loader_test1',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'module_installer_config_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/module_installer_config_test/module_installer_config_test.info.yml',
        'basename' => 'module_installer_config_test.info.yml',
        'name' => 'Module installer config test',
        'info' => 
        array (
          'name' => 'Module installer config test',
          'description' => 'Support module for tests that require a failed module install.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/theme_test/theme_test.info.yml',
        'basename' => 'theme_test.info.yml',
        'name' => 'Theme test',
        'info' => 
        array (
          'name' => 'Theme test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'theme_region_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/theme_region_test/theme_region_test.info.yml',
        'basename' => 'theme_region_test.info.yml',
        'name' => 'Theme region test',
        'info' => 
        array (
          'name' => 'Theme region test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing regions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'cache_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/cache_test/cache_test.info.yml',
        'basename' => 'cache_test.info.yml',
        'name' => 'Cache test',
        'info' => 
        array (
          'name' => 'Cache test',
          'type' => 'module',
          'description' => 'Support module for cache system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/requirements1_test/requirements1_test.info.yml',
        'basename' => 'requirements1_test.info.yml',
        'name' => 'Requirements 1 Test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'type' => 'module',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_test_operation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_test_operation/entity_test_operation.info.yml',
        'basename' => 'entity_test_operation.info.yml',
        'name' => 'Entity Operation Test',
        'info' => 
        array (
          'name' => 'Entity Operation Test',
          'type' => 'module',
          'description' => 'Provides a test operation to entities.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_reference_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_reference_test_views/entity_reference_test_views.info.yml',
        'basename' => 'entity_reference_test_views.info.yml',
        'name' => 'Entity reference test views',
        'info' => 
        array (
          'name' => 'Entity reference test views',
          'type' => 'module',
          'description' => 'Provides default views for views entity reference tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_postupdate' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_postupdate/update_test_postupdate.info.yml',
        'basename' => 'update_test_postupdate.info.yml',
        'name' => 'Update test after',
        'info' => 
        array (
          'name' => 'Update test after',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_test_extra' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_test_extra/entity_test_extra.info.yml',
        'basename' => 'entity_test_extra.info.yml',
        'name' => 'Entity test extra',
        'info' => 
        array (
          'name' => 'Entity test extra',
          'type' => 'module',
          'description' => 'Provides extra fields for entity test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'twig_extension_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/twig_extension_test/twig_extension_test.info.yml',
        'basename' => 'twig_extension_test.info.yml',
        'name' => 'Twig Extension Test',
        'info' => 
        array (
          'name' => 'Twig Extension Test',
          'type' => 'module',
          'description' => 'Support module for testing Twig extensions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_3' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_3/update_test_3.info.yml',
        'basename' => 'update_test_3.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'js_message_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/js_message_test/js_message_test.info.yml',
        'basename' => 'js_message_test.info.yml',
        'name' => 'JS Message test module',
        'info' => 
        array (
          'name' => 'JS Message test module',
          'type' => 'module',
          'description' => 'Module for the JSMessageTest test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'js_cookie_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/js_cookie_test/js_cookie_test.info.yml',
        'basename' => 'js_cookie_test.info.yml',
        'name' => 'JS Cookie Test',
        'info' => 
        array (
          'name' => 'JS Cookie Test',
          'type' => 'module',
          'description' => 'Module for the jsCookieTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'css_disable_transitions_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/css_disable_transitions_test/css_disable_transitions_test.info.yml',
        'basename' => 'css_disable_transitions_test.info.yml',
        'name' => 'Test disable CSS animations',
        'info' => 
        array (
          'name' => 'Test disable CSS animations',
          'type' => 'module',
          'description' => 'Disables CSS animations for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'link_generation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/link_generation_test/link_generation_test.info.yml',
        'basename' => 'link_generation_test.info.yml',
        'name' => 'Link generation test support',
        'info' => 
        array (
          'name' => 'Link generation test support',
          'type' => 'module',
          'description' => 'Test hooks fired in link generation.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/module_test/module_test.info.yml',
        'basename' => 'module_test.info.yml',
        'name' => 'Module test',
        'info' => 
        array (
          'name' => 'Module test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_no_preexisting' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_no_preexisting/update_test_no_preexisting.info.yml',
        'basename' => 'update_test_no_preexisting.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/layout_test/layout_test.info.yml',
        'basename' => 'layout_test.info.yml',
        'name' => 'Layout test',
        'info' => 
        array (
          'name' => 'Layout test',
          'type' => 'module',
          'description' => 'Support module for testing layouts.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'new_dependency_test_with_service' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/new_dependency_test_with_service/new_dependency_test_with_service.info.yml',
        'basename' => 'new_dependency_test_with_service.info.yml',
        'name' => 'New Dependency test with service',
        'info' => 
        array (
          'name' => 'New Dependency test with service',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_core_semver_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_core_semver_test/system_core_semver_test.info.yml',
        'basename' => 'system_core_semver_test.info.yml',
        'name' => 'System core ^8 version test',
        'info' => 
        array (
          'name' => 'System core ^8 version test',
          'type' => 'module',
          'description' => 'Support module for testing core using semver.',
          'package' => 'Testing',
          'version' => '1.0.0',
          'core_version_requirement' => '^8|^9',
        ),
        'schema_version' => 9000,
        'version' => '1.0.0',
      ),
      'module_install_class_loader_test1' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/module_install_class_loader_test1/module_install_class_loader_test1.info.yml',
        'basename' => 'module_install_class_loader_test1.info.yml',
        'name' => 'Module install class loader test1',
        'info' => 
        array (
          'name' => 'Module install class loader test1',
          'description' => 'Support module for tests that the class loader behaves as expected during module install.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'pager_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/pager_test/pager_test.info.yml',
        'basename' => 'pager_test.info.yml',
        'name' => 'Pager Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Pager Test',
          'description' => 'Support module for pager tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_invalid_hook' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_invalid_hook/update_test_invalid_hook.info.yml',
        'basename' => 'update_test_invalid_hook.info.yml',
        'name' => 'Update test with an invalid hook_update_8000().',
        'info' => 
        array (
          'name' => 'Update test with an invalid hook_update_8000().',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_test_revlog' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_test_revlog/entity_test_revlog.info.yml',
        'basename' => 'entity_test_revlog.info.yml',
        'name' => 'Entity test revision log',
        'info' => 
        array (
          'name' => 'Entity test revision log',
          'type' => 'module',
          'description' => 'Provides two entity types with revision logging capabilities.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'path_encoded_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/path_encoded_test/path_encoded_test.info.yml',
        'basename' => 'path_encoded_test.info.yml',
        'name' => 'Path encoded character test',
        'info' => 
        array (
          'name' => 'Path encoded character test',
          'type' => 'module',
          'description' => 'Support module for testing path aliases on a route with encoded characters in the path.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_core_incompatible_semver_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_core_incompatible_semver_test/system_core_incompatible_semver_test.info.yml',
        'basename' => 'system_core_incompatible_semver_test.info.yml',
        'name' => 'System core incompatible semver test',
        'info' => 
        array (
          'name' => 'System core incompatible semver test',
          'type' => 'module',
          'description' => 'Support module for testing core incompatible semver.',
          'package' => 'Testing',
          'version' => '1.0.0',
          'core_version_requirement' => '^7',
        ),
        'schema_version' => 9000,
        'version' => '1.0.0',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/requirements2_test/requirements2_test.info.yml',
        'basename' => 'requirements2_test.info.yml',
        'name' => 'Requirements 2 Test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'type' => 'module',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'drupal:requirements1_test',
            1 => 'drupal:comment',
          ),
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'plugin_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/plugin_test/plugin_test.info.yml',
        'basename' => 'plugin_test.info.yml',
        'name' => 'Plugin Test Support',
        'info' => 
        array (
          'name' => 'Plugin Test Support',
          'type' => 'module',
          'description' => 'Test that plugins can provide plugins and provide namespace discovery for plugin test implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'delay_cache_tags_invalidation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/delay_cache_tags_invalidation/delay_cache_tags_invalidation.info.yml',
        'basename' => 'delay_cache_tags_invalidation.info.yml',
        'name' => 'Delay Cache Tags Invalidation Test',
        'info' => 
        array (
          'name' => 'Delay Cache Tags Invalidation Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_test_constraints' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_test_constraints/entity_test_constraints.info.yml',
        'basename' => 'entity_test_constraints.info.yml',
        'name' => 'Entity constraints test module',
        'info' => 
        array (
          'name' => 'Entity constraints test module',
          'type' => 'module',
          'description' => 'Tests extending and altering entity constraints.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_test/entity_test.info.yml',
        'basename' => 'entity_test.info.yml',
        'name' => 'Entity CRUD test module',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'type' => 'module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
            2 => 'drupal:system',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.info.yml',
        'basename' => 'drupal_system_listing_compatible_test.info.yml',
        'name' => 'Drupal system listing compatible test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'type' => 'module',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'twig_loader_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/twig_loader_test/twig_loader_test.info.yml',
        'basename' => 'twig_loader_test.info.yml',
        'name' => 'Twig Loader Test',
        'info' => 
        array (
          'name' => 'Twig Loader Test',
          'type' => 'module',
          'description' => 'Support module for testing adding Twig loaders.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_incompatible_core_version_dependencies_test/system_incompatible_core_version_dependencies_test.info.yml',
        'basename' => 'system_incompatible_core_version_dependencies_test.info.yml',
        'name' => 'System incompatible core version dependencies test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:system_core_incompatible_semver_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'deprecation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/deprecation_test/deprecation_test.info.yml',
        'basename' => 'deprecation_test.info.yml',
        'name' => 'Deprecation test',
        'info' => 
        array (
          'name' => 'Deprecation test',
          'type' => 'module',
          'description' => 'Support module for testing deprecation behaviors.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'error_service_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/error_service_test/error_service_test.info.yml',
        'basename' => 'error_service_test.info.yml',
        'name' => 'Error service test',
        'info' => 
        array (
          'name' => 'Error service test',
          'type' => 'module',
          'description' => 'Support module for causing bedlam in container rebuilds.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'early_rendering_controller_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/early_rendering_controller_test/early_rendering_controller_test.info.yml',
        'basename' => 'early_rendering_controller_test.info.yml',
        'name' => 'Early rendering controller test',
        'info' => 
        array (
          'name' => 'Early rendering controller test',
          'type' => 'module',
          'description' => 'Support module for EarlyRenderingControllerTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'csrf_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/csrf_test/csrf_test.info.yml',
        'basename' => 'csrf_test.info.yml',
        'name' => 'CSRF test',
        'info' => 
        array (
          'name' => 'CSRF test',
          'type' => 'module',
          'description' => 'Support testing protecting routes with CSRF token.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'phpunit_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/phpunit_test/phpunit_test.info.yml',
        'basename' => 'phpunit_test.info.yml',
        'name' => 'PHPUnit Test',
        'info' => 
        array (
          'name' => 'PHPUnit Test',
          'type' => 'module',
          'description' => 'Provides dummy classes for use by SimpleTest tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'session_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/session_test/session_test.info.yml',
        'basename' => 'session_test.info.yml',
        'name' => 'Session test',
        'info' => 
        array (
          'name' => 'Session test',
          'type' => 'module',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_crud_hook_test/entity_crud_hook_test.info.yml',
        'basename' => 'entity_crud_hook_test.info.yml',
        'name' => 'Entity CRUD Hooks Test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'type' => 'module',
          'description' => 'Support module for CRUD hook tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_test_third_party' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/entity_test_third_party/entity_test_third_party.info.yml',
        'basename' => 'entity_test_third_party.info.yml',
        'name' => 'Entity test third-party settings module',
        'info' => 
        array (
          'name' => 'Entity test third-party settings module',
          'type' => 'module',
          'description' => 'Provides third-party settings for test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_failing' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_failing/update_test_failing.info.yml',
        'basename' => 'update_test_failing.info.yml',
        'name' => 'Update test failing',
        'info' => 
        array (
          'name' => 'Update test failing',
          'type' => 'module',
          'description' => 'Support module for update testing when an update hook is failing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'module_autoload_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/module_autoload_test/module_autoload_test.info.yml',
        'basename' => 'module_autoload_test.info.yml',
        'name' => 'Module autoload test',
        'info' => 
        array (
          'name' => 'Module autoload test',
          'type' => 'module',
          'description' => 'Support module for module system tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_test/system_test.info.yml',
        'basename' => 'system_test.info.yml',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'configure' => 'system_test.configure',
          'configure_parameters' => 
          array (
            'foo' => 'bar',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'common_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/common_test/common_test.info.yml',
        'basename' => 'common_test.info.yml',
        'name' => 'Common Test',
        'info' => 
        array (
          'name' => 'Common Test',
          'type' => 'module',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/ajax_forms_test/ajax_forms_test.info.yml',
        'basename' => 'ajax_forms_test.info.yml',
        'name' => 'AJAX form test mock module',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'type' => 'module',
          'description' => 'Test for AJAX form calls.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'render_array_non_html_subscriber_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/render_array_non_html_subscriber_test/render_array_non_html_subscriber_test.info.yml',
        'basename' => 'render_array_non_html_subscriber_test.info.yml',
        'name' => 'Array rendering for non-HTML requests subscriber test',
        'info' => 
        array (
          'name' => 'Array rendering for non-HTML requests subscriber test',
          'type' => 'module',
          'description' => 'Support module for RenderArrayNonHtmlSubscriberTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_mail_failure_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_mail_failure_test/system_mail_failure_test.info.yml',
        'basename' => 'system_mail_failure_test.info.yml',
        'name' => 'System mail failure test',
        'info' => 
        array (
          'name' => 'System mail failure test',
          'type' => 'module',
          'description' => 'Provides a malfunctioning mail service for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'conneg_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/conneg_test/conneg_test.info.yml',
        'basename' => 'conneg_test.info.yml',
        'name' => 'Content negotiation test',
        'info' => 
        array (
          'name' => 'Content negotiation test',
          'type' => 'module',
          'description' => 'Support testing content negotiation variations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'js_webassert_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/js_webassert_test/js_webassert_test.info.yml',
        'basename' => 'js_webassert_test.info.yml',
        'name' => 'JS WebAssert test module',
        'info' => 
        array (
          'name' => 'JS WebAssert test module',
          'type' => 'module',
          'description' => 'Module for the JSWebAssert test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'js_deprecation_log_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/js_deprecation_log_test/js_deprecation_log_test.info.yml',
        'basename' => 'js_deprecation_log_test.info.yml',
        'name' => 'JS Deprecation log test',
        'info' => 
        array (
          'name' => 'JS Deprecation log test',
          'description' => 'Stores all JS deprecation calls to allow JS tests to determine if they have been called.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_1' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_1/update_test_1.info.yml',
        'basename' => 'update_test_1.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/system_incompatible_module_version_test/system_incompatible_module_version_test.info.yml',
        'basename' => 'system_incompatible_module_version_test.info.yml',
        'name' => 'System incompatible module version test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'type' => 'module',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '1.0',
        ),
        'schema_version' => 9000,
        'version' => '1.0',
      ),
      'theme_suggestions_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/theme_suggestions_test/theme_suggestions_test.info.yml',
        'basename' => 'theme_suggestions_test.info.yml',
        'name' => 'Theme suggestions test',
        'info' => 
        array (
          'name' => 'Theme suggestions test',
          'type' => 'module',
          'description' => 'Support module for testing theme suggestions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'js_ajax_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/js_ajax_test/js_ajax_test.info.yml',
        'basename' => 'js_ajax_test.info.yml',
        'name' => 'JS Ajax test',
        'info' => 
        array (
          'name' => 'JS Ajax test',
          'description' => 'Provides custom ajax commands used for tests',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'accept_header_routing_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/accept_header_routing_test/accept_header_routing_test.info.yml',
        'basename' => 'accept_header_routing_test.info.yml',
        'name' => 'Accept header based routing test',
        'info' => 
        array (
          'name' => 'Accept header based routing test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_schema' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_schema/update_test_schema.info.yml',
        'basename' => 'update_test_schema.info.yml',
        'name' => 'Update test schema',
        'info' => 
        array (
          'name' => 'Update test schema',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'element_info_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/element_info_test/element_info_test.info.yml',
        'basename' => 'element_info_test.info.yml',
        'name' => 'Element info test',
        'info' => 
        array (
          'name' => 'Element info test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'lazy_route_provider_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/lazy_route_provider_install_test/lazy_route_provider_install_test.info.yml',
        'basename' => 'lazy_route_provider_install_test.info.yml',
        'name' => 'Lazy route provider install test',
        'info' => 
        array (
          'name' => 'Lazy route provider install test',
          'description' => 'Helps test a bug triggered by the url_generator maintaining a stale route provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'new_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/new_dependency_test/new_dependency_test.info.yml',
        'basename' => 'new_dependency_test.info.yml',
        'name' => 'New Dependency test',
        'info' => 
        array (
          'name' => 'New Dependency test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:new_dependency_test_with_service',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'render_placeholder_message_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/render_placeholder_message_test/render_placeholder_message_test.info.yml',
        'basename' => 'render_placeholder_message_test.info.yml',
        'name' => 'Placeholder setting a message test',
        'info' => 
        array (
          'name' => 'Placeholder setting a message test',
          'type' => 'module',
          'description' => 'Support module for PlaceholderMessageTest.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'router_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/router_test_directory/router_test.info.yml',
        'basename' => 'router_test.info.yml',
        'name' => 'Router test',
        'info' => 
        array (
          'name' => 'Router test',
          'type' => 'module',
          'description' => 'Support module for routing testing. In a directory that does not match the module name to test that use case.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'theme_page_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/theme_page_test/theme_page_test.info.yml',
        'basename' => 'theme_page_test.info.yml',
        'name' => 'Theme page test',
        'info' => 
        array (
          'name' => 'Theme page test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'action_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/action_test/action_test.info.yml',
        'basename' => 'action_test.info.yml',
        'name' => 'Action test',
        'info' => 
        array (
          'name' => 'Action test',
          'type' => 'module',
          'description' => 'Support module for action testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_with_7x' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_with_7x/update_test_with_7x.info.yml',
        'basename' => 'update_test_with_7x.info.yml',
        'name' => 'Update test with 7.x updates left in the codebase.',
        'info' => 
        array (
          'name' => 'Update test with 7.x updates left in the codebase.',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'experimental_module_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/experimental_module_dependency_test/experimental_module_dependency_test.info.yml',
        'basename' => 'experimental_module_dependency_test.info.yml',
        'name' => 'Experimental Dependency Test',
        'info' => 
        array (
          'name' => 'Experimental Dependency Test',
          'type' => 'module',
          'description' => 'Module with a dependency in the experimental package.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:experimental_module_test',
          ),
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/common_test_cron_helper/common_test_cron_helper.info.yml',
        'basename' => 'common_test_cron_helper.info.yml',
        'name' => 'Common Test Cron Helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'type' => 'module',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_2' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_2/update_test_2.info.yml',
        'basename' => 'update_test_2.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'experimental_module_requirements_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/experimental_module_requirements_test/experimental_module_requirements_test.info.yml',
        'basename' => 'experimental_module_requirements_test.info.yml',
        'name' => 'Experimental Requirements Test',
        'info' => 
        array (
          'name' => 'Experimental Requirements Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test hook_requirements() with an experimental module.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'batch_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/batch_test/batch_test.info.yml',
        'basename' => 'batch_test.info.yml',
        'name' => 'Batch API test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'type' => 'module',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'database_statement_monitoring_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/database_statement_monitoring_test/database_statement_monitoring_test.info.yml',
        'basename' => 'database_statement_monitoring_test.info.yml',
        'name' => 'Database Statement Monitoring Test',
        'info' => 
        array (
          'name' => 'Database Statement Monitoring Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests that need to monitor executed database statements.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'csrf_race_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/csrf_race_test/csrf_race_test.info.yml',
        'basename' => 'csrf_race_test.info.yml',
        'name' => 'CSRF race test',
        'info' => 
        array (
          'name' => 'CSRF race test',
          'type' => 'module',
          'description' => 'Check that CSRF token is generated once.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'cron_queue_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/cron_queue_test/cron_queue_test.info.yml',
        'basename' => 'cron_queue_test.info.yml',
        'name' => 'Cron Queue test',
        'info' => 
        array (
          'name' => 'Cron Queue test',
          'type' => 'module',
          'description' => 'Support module for the cron queue runner.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_semver_update_n' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/update_test_semver_update_n/update_test_semver_update_n.info.yml',
        'basename' => 'update_test_semver_update_n.info.yml',
        'name' => 'Update test hook_update_n semver',
        'info' => 
        array (
          'name' => 'Update test hook_update_n semver',
          'type' => 'module',
          'description' => 'Support module for update testing with core semver value.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core_version_requirement' => '^9',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'mail_html_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/mail_html_test/mail_html_test.info.yml',
        'basename' => 'mail_html_test.info.yml',
        'name' => 'HTML mail test support',
        'info' => 
        array (
          'name' => 'HTML mail test support',
          'description' => 'Test if HTML in mails works as expected.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'httpkernel_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/httpkernel_test/httpkernel_test.info.yml',
        'basename' => 'httpkernel_test.info.yml',
        'name' => 'HttpKernel test',
        'info' => 
        array (
          'name' => 'HttpKernel test',
          'type' => 'module',
          'description' => 'Support module for httpkernel tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'menu_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/menu_test/menu_test.info.yml',
        'basename' => 'menu_test.info.yml',
        'name' => 'Hook menu tests',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'type' => 'module',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:test_page_test',
            1 => 'drupal:menu_ui',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'database_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/database_test/database_test.info.yml',
        'basename' => 'database_test.info.yml',
        'name' => 'Database Test',
        'info' => 
        array (
          'name' => 'Database Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'paramconverter_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/paramconverter_test/paramconverter_test.info.yml',
        'basename' => 'paramconverter_test.info.yml',
        'name' => 'ParamConverter test',
        'info' => 
        array (
          'name' => 'ParamConverter test',
          'type' => 'module',
          'description' => 'Support module for paramconverter testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'display_variant_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/display_variant_test/display_variant_test.info.yml',
        'basename' => 'display_variant_test.info.yml',
        'name' => 'Display variant tests',
        'info' => 
        array (
          'name' => 'Display variant tests',
          'type' => 'module',
          'description' => 'Support module for testing display variants.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/form_test/form_test.info.yml',
        'basename' => 'form_test.info.yml',
        'name' => 'FormAPI Test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'type' => 'module',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:filter',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'module_required_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/module_required_test/module_required_test.info.yml',
        'basename' => 'module_required_test.info.yml',
        'name' => 'Module required test',
        'info' => 
        array (
          'name' => 'Module required test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node (>=8.x)',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'js_deprecation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/js_deprecation_test/js_deprecation_test.info.yml',
        'basename' => 'js_deprecation_test.info.yml',
        'name' => 'JS Deprecation test',
        'info' => 
        array (
          'name' => 'JS Deprecation test',
          'description' => 'Provides deprecated code that can be used for tests',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'theme_legacy_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/theme_legacy_test/theme_legacy_test.info.yml',
        'basename' => 'theme_legacy_test.info.yml',
        'name' => 'Legacy theme functions test',
        'info' => 
        array (
          'name' => 'Legacy theme functions test',
          'type' => 'module',
          'description' => 'Support module for testing legacy theme functions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'theme_legacy_suggestions_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/theme_legacy_suggestions_test/theme_legacy_suggestions_test.info.yml',
        'basename' => 'theme_legacy_suggestions_test.info.yml',
        'name' => 'Legacy theme functions suggestions test',
        'info' => 
        array (
          'name' => 'Legacy theme functions suggestions test',
          'type' => 'module',
          'description' => 'Support module for testing theme suggestions for legacy theme functions.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'condition_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/condition_test/condition_test.info.yml',
        'basename' => 'condition_test.info.yml',
        'name' => 'Condition Test Support',
        'info' => 
        array (
          'name' => 'Condition Test Support',
          'type' => 'module',
          'description' => 'Test general form component for condition plugins.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'unique_field_constraint_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/unique_field_constraint_test/unique_field_constraint_test.info.yml',
        'basename' => 'unique_field_constraint_test.info.yml',
        'name' => 'UniqueField Constraint Test',
        'info' => 
        array (
          'name' => 'UniqueField Constraint Test',
          'type' => 'module',
          'description' => 'Support module for UniqueField Constraint testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/url_alter_test/url_alter_test.info.yml',
        'basename' => 'url_alter_test.info.yml',
        'name' => 'Url_alter tests',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'type' => 'module',
          'description' => 'A support module to test altering the inbound and outbound path.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'session_exists_cache_context_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/tests/modules/session_exists_cache_context_test/session_exists_cache_context_test.info.yml',
        'basename' => 'session_exists_cache_context_test.info.yml',
        'name' => 'session.exists cache context test',
        'info' => 
        array (
          'name' => 'session.exists cache context test',
          'type' => 'module',
          'description' => 'Support module for session.exists cache context testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/system/system.info.yml',
        'basename' => 'system.info.yml',
        'name' => 'System',
        'info' => 
        array (
          'name' => 'System',
          'type' => 'module',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => 'VERSION',
          'required' => true,
          'configure' => 'system.admin_config_system',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'content_moderation_test_local_task' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_moderation/tests/modules/content_moderation_test_local_task/content_moderation_test_local_task.info.yml',
        'basename' => 'content_moderation_test_local_task.info.yml',
        'name' => 'Content moderation test local task',
        'info' => 
        array (
          'name' => 'Content moderation test local task',
          'type' => 'module',
          'description' => 'Provides a local task for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_moderation',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'content_moderation_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_moderation/tests/modules/content_moderation_test_views/content_moderation_test_views.info.yml',
        'basename' => 'content_moderation_test_views.info.yml',
        'name' => 'Content moderation test views',
        'info' => 
        array (
          'name' => 'Content moderation test views',
          'type' => 'module',
          'description' => 'Provides default views for views Content moderation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_moderation',
            1 => 'drupal:node',
            2 => 'drupal:views',
            3 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'content_moderation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_moderation/content_moderation.info.yml',
        'basename' => 'content_moderation.info.yml',
        'name' => 'Content Moderation',
        'info' => 
        array (
          'name' => 'Content Moderation',
          'type' => 'module',
          'description' => 'Provides moderation states for content.',
          'version' => 'VERSION',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
          'dependencies' => 
          array (
            0 => 'drupal:workflows',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_translation_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config_translation/tests/themes/config_translation_test_theme/config_translation_test_theme.info.yml',
        'basename' => 'config_translation_test_theme.info.yml',
        'name' => 'Configuration Translation Test Theme',
        'info' => 
        array (
          'name' => 'Configuration Translation Test Theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the configuration translation mapper system',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_translation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config_translation/tests/modules/config_translation_test/config_translation_test.info.yml',
        'basename' => 'config_translation_test.info.yml',
        'name' => 'Configuration Translation Test',
        'info' => 
        array (
          'name' => 'Configuration Translation Test',
          'description' => 'Helpers to test the configuration translation system',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_translation',
            1 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_translation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config_translation/config_translation.info.yml',
        'basename' => 'config_translation.info.yml',
        'name' => 'Configuration Translation',
        'info' => 
        array (
          'name' => 'Configuration Translation',
          'type' => 'module',
          'description' => 'Allows users to translate configuration text.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'configure' => 'config_translation.mapper_list',
          'dependencies' => 
          array (
            0 => 'drupal:locale',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/search/tests/modules/search_embedded_form/search_embedded_form.info.yml',
        'basename' => 'search_embedded_form.info.yml',
        'name' => 'Search Embedded Form',
        'info' => 
        array (
          'name' => 'Search Embedded Form',
          'type' => 'module',
          'description' => 'Support module for Search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'search_date_query_alter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/search/tests/modules/search_date_query_alter/search_date_query_alter.info.yml',
        'basename' => 'search_date_query_alter.info.yml',
        'name' => 'Search Date Query Alter',
        'info' => 
        array (
          'name' => 'Search Date Query Alter',
          'type' => 'module',
          'description' => 'Test module that adds date conditions to node searches.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'search_query_alter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/search/tests/modules/search_query_alter/search_query_alter.info.yml',
        'basename' => 'search_query_alter.info.yml',
        'name' => 'Test Search Query Alter',
        'info' => 
        array (
          'name' => 'Test Search Query Alter',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/search/tests/modules/search_extra_type/search_extra_type.info.yml',
        'basename' => 'search_extra_type.info.yml',
        'name' => 'Test Search Type',
        'info' => 
        array (
          'name' => 'Test Search Type',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:test_page_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'search_langcode_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/search/tests/modules/search_langcode_test/search_langcode_test.info.yml',
        'basename' => 'search_langcode_test.info.yml',
        'name' => 'Test search entity langcode',
        'info' => 
        array (
          'name' => 'Test search entity langcode',
          'type' => 'module',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/search/search.info.yml',
        'basename' => 'search.info.yml',
        'name' => 'Search',
        'info' => 
        array (
          'name' => 'Search',
          'type' => 'module',
          'description' => 'Allows users to create search pages based on plugins provided by other modules.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.search_page.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'tour_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/tour/tests/tour_test/tour_test.info.yml',
        'basename' => 'tour_test.info.yml',
        'name' => 'Tour module tests',
        'info' => 
        array (
          'name' => 'Tour module tests',
          'type' => 'module',
          'description' => 'Tests module for tour module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:tour',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'tour' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/tour/tour.info.yml',
        'basename' => 'tour.info.yml',
        'name' => 'Tour',
        'info' => 
        array (
          'name' => 'Tour',
          'type' => 'module',
          'description' => 'Displays guided tours of the site interface.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'datetime_range_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/datetime_range/tests/modules/datetime_range_test/datetime_range_test.info.yml',
        'basename' => 'datetime_range_test.info.yml',
        'name' => 'Datetime range test',
        'info' => 
        array (
          'name' => 'Datetime range test',
          'type' => 'module',
          'description' => 'Provides a testing module for datetime_range.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'datetime_range' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/datetime_range/datetime_range.info.yml',
        'basename' => 'datetime_range.info.yml',
        'name' => 'Datetime Range',
        'info' => 
        array (
          'name' => 'Datetime Range',
          'type' => 'module',
          'description' => 'Provides the ability to store end dates.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:datetime',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/shortcut/shortcut.info.yml',
        'basename' => 'shortcut.info.yml',
        'name' => 'Shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'type' => 'module',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.shortcut_set.collection',
          'dependencies' => 
          array (
            0 => 'drupal:link',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_checkboxes_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/themes/views_test_checkboxes_theme/views_test_checkboxes_theme.info.yml',
        'basename' => 'views_test_checkboxes_theme.info.yml',
        'name' => 'Views test checkboxes theme',
        'info' => 
        array (
          'name' => 'Views test checkboxes theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing Views rendering of checkboxes.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/themes/views_test_theme/views_test_theme.info.yml',
        'basename' => 'views_test_theme.info.yml',
        'name' => 'Views test theme',
        'info' => 
        array (
          'name' => 'Views test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing Views functionality.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_data' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_data/views_test_data.info.yml',
        'basename' => 'views_test_data.info.yml',
        'name' => 'Views Test',
        'info' => 
        array (
          'name' => 'Views Test',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_entity_test/views_entity_test.info.yml',
        'basename' => 'views_entity_test.info.yml',
        'name' => 'Views Entity Test',
        'info' => 
        array (
          'name' => 'Views Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for views tests of entity_test entity type.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'action_bulk_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/action_bulk_test/action_bulk_test.info.yml',
        'basename' => 'action_bulk_test.info.yml',
        'name' => 'Action bulk form test',
        'info' => 
        array (
          'name' => 'Action bulk form test',
          'type' => 'module',
          'description' => 'Support module for action bulk form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_rss' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_rss/views_test_rss.info.yml',
        'basename' => 'views_test_rss.info.yml',
        'name' => 'Views Test RSS',
        'info' => 
        array (
          'name' => 'Views Test RSS',
          'type' => 'module',
          'description' => 'Provides hooks to alter RSS output for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_modal' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_modal/views_test_modal.info.yml',
        'basename' => 'views_test_modal.info.yml',
        'name' => 'Views Test Modal',
        'info' => 
        array (
          'name' => 'Views Test Modal',
          'type' => 'module',
          'description' => 'Provides a test page that renders a View in a modal.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_language/views_test_language.info.yml',
        'basename' => 'views_test_language.info.yml',
        'name' => 'Views Test Language',
        'info' => 
        array (
          'name' => 'Views Test Language',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:language',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user_batch_action_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/user_batch_action_test/user_batch_action_test.info.yml',
        'basename' => 'user_batch_action_test.info.yml',
        'name' => 'User batch action test',
        'info' => 
        array (
          'name' => 'User batch action test',
          'type' => 'module',
          'description' => 'Support module for user batch action testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
            1 => 'drupal:user',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_formatter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_formatter/views_test_formatter.info.yml',
        'basename' => 'views_test_formatter.info.yml',
        'name' => 'Views Test Formatter',
        'info' => 
        array (
          'name' => 'Views Test Formatter',
          'type' => 'module',
          'description' => 'Provides test field formatters.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_config/views_test_config.info.yml',
        'basename' => 'views_test_config.info.yml',
        'name' => 'Views Test Config',
        'info' => 
        array (
          'name' => 'Views Test Config',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_cacheable_metadata_calculation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_cacheable_metadata_calculation/views_test_cacheable_metadata_calculation.info.yml',
        'basename' => 'views_test_cacheable_metadata_calculation.info.yml',
        'name' => 'Views test cacheable metadata calculation',
        'info' => 
        array (
          'name' => 'Views test cacheable metadata calculation',
          'type' => 'module',
          'description' => 'Module to test cacheable metadata calculation in Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_query_access' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_test_query_access/views_test_query_access.info.yml',
        'basename' => 'views_test_query_access.info.yml',
        'name' => 'Views test query access',
        'info' => 
        array (
          'name' => 'Views test query access',
          'type' => 'module',
          'description' => 'Module to test entity query access in Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_config_entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/tests/modules/views_config_entity_test/views_config_entity_test.info.yml',
        'basename' => 'views_config_entity_test.info.yml',
        'name' => 'views_config_entity_test',
        'info' => 
        array (
          'name' => 'views_config_entity_test',
          'description' => 'Adds a Config Entity with views data',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views/views.info.yml',
        'basename' => 'views.info.yml',
        'name' => 'Views',
        'info' => 
        array (
          'name' => 'Views',
          'type' => 'module',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/path/path.info.yml',
        'basename' => 'path.info.yml',
        'name' => 'Path',
        'info' => 
        array (
          'name' => 'Path',
          'type' => 'module',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.path_alias.collection',
          'dependencies' => 
          array (
            0 => 'drupal:path_alias',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'dblog_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/dblog/tests/modules/dblog_test_views/dblog_test_views.info.yml',
        'basename' => 'dblog_test_views.info.yml',
        'name' => 'Dblog test views',
        'info' => 
        array (
          'name' => 'Dblog test views',
          'type' => 'module',
          'description' => 'Provides default views for views dblog tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:dblog',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/dblog/dblog.info.yml',
        'basename' => 'dblog.info.yml',
        'name' => 'Database Logging',
        'info' => 
        array (
          'name' => 'Database Logging',
          'type' => 'module',
          'description' => 'Logs system events in the database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'inline_form_errors' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/inline_form_errors/inline_form_errors.info.yml',
        'basename' => 'inline_form_errors.info.yml',
        'name' => 'Inline Form Errors',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Inline Form Errors',
          'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'datetime_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/datetime/tests/modules/datetime_test/datetime_test.info.yml',
        'basename' => 'datetime_test.info.yml',
        'name' => 'Datetime test',
        'info' => 
        array (
          'name' => 'Datetime test',
          'type' => 'module',
          'description' => 'Provides default views for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'datetime' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/datetime/datetime.info.yml',
        'basename' => 'datetime.info.yml',
        'name' => 'Datetime',
        'info' => 
        array (
          'name' => 'Datetime',
          'type' => 'module',
          'description' => 'Defines datetime form elements and a datetime field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/tests/themes/user_test_theme/user_test_theme.info.yml',
        'basename' => 'user_test_theme.info.yml',
        'name' => 'User Test theme',
        'info' => 
        array (
          'name' => 'User Test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the available fields in user twig template',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/tests/modules/user_test_views/user_test_views.info.yml',
        'basename' => 'user_test_views.info.yml',
        'name' => 'User test views',
        'info' => 
        array (
          'name' => 'User test views',
          'type' => 'module',
          'description' => 'Provides default views for views user tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user_hooks_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/tests/modules/user_hooks_test/user_hooks_test.info.yml',
        'basename' => 'user_hooks_test.info.yml',
        'name' => 'User module hooks tests',
        'info' => 
        array (
          'name' => 'User module hooks tests',
          'type' => 'module',
          'description' => 'Support module for user hooks testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user_custom_phpass_params_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/tests/modules/user_custom_phpass_params_test/user_custom_phpass_params_test.info.yml',
        'basename' => 'user_custom_phpass_params_test.info.yml',
        'name' => 'User custom phpass params test',
        'info' => 
        array (
          'name' => 'User custom phpass params test',
          'type' => 'module',
          'description' => 'Support module for testing custom phpass password algorithm parameters.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/tests/modules/user_form_test/user_form_test.info.yml',
        'basename' => 'user_form_test.info.yml',
        'name' => 'User module form tests',
        'info' => 
        array (
          'name' => 'User module form tests',
          'type' => 'module',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/tests/modules/user_access_test/user_access_test.info.yml',
        'basename' => 'user_access_test.info.yml',
        'name' => 'User access tests',
        'info' => 
        array (
          'name' => 'User access tests',
          'type' => 'module',
          'description' => 'Support module for user access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/user/user.info.yml',
        'basename' => 'user.info.yml',
        'name' => 'User',
        'info' => 
        array (
          'name' => 'User',
          'type' => 'module',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => 'VERSION',
          'required' => true,
          'configure' => 'user.admin_index',
          'dependencies' => 
          array (
            0 => 'drupal:system',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'early_translation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/locale/tests/modules/early_translation_test/early_translation_test.info.yml',
        'basename' => 'early_translation_test.info.yml',
        'name' => 'Early translation test',
        'info' => 
        array (
          'name' => 'Early translation test',
          'type' => 'module',
          'description' => 'Support module for testing early bootstrap getting of annotations with translations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/locale/locale.info.yml',
        'basename' => 'locale.info.yml',
        'name' => 'Interface Translation',
        'info' => 
        array (
          'name' => 'Interface Translation',
          'type' => 'module',
          'description' => 'Translates the built-in user interface.',
          'configure' => 'locale.translate_page',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:language',
            1 => 'drupal:file',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'language_elements_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/language/tests/language_elements_test/language_elements_test.info.yml',
        'basename' => 'language_elements_test.info.yml',
        'name' => 'Language form elements test',
        'info' => 
        array (
          'name' => 'Language form elements test',
          'type' => 'module',
          'description' => 'Support module for the language form elements tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'language_entity_field_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/language/tests/language_entity_field_access_test/language_entity_field_access_test.info.yml',
        'basename' => 'language_entity_field_access_test.info.yml',
        'name' => 'Language entity field access test',
        'info' => 
        array (
          'name' => 'Language entity field access test',
          'type' => 'module',
          'description' => 'Support module for verifying entity field access and the language selector.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:text',
            2 => 'drupal:field',
            3 => 'drupal:filter',
            4 => 'drupal:language',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'language_config_override_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/language/tests/language_config_override_test/language_config_override_test.info.yml',
        'basename' => 'language_config_override_test.info.yml',
        'name' => 'Language config overridetest',
        'info' => 
        array (
          'name' => 'Language config overridetest',
          'type' => 'module',
          'description' => 'Support module for the language config override test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_module' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/language/tests/test_module/test_module.info.yml',
        'basename' => 'test_module.info.yml',
        'name' => 'Test Module',
        'info' => 
        array (
          'name' => 'Test Module',
          'type' => 'module',
          'description' => 'Support module for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'language_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/language/tests/language_test/language_test.info.yml',
        'basename' => 'language_test.info.yml',
        'name' => 'Language test',
        'info' => 
        array (
          'name' => 'Language test',
          'type' => 'module',
          'description' => 'Support module for the language layer tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/language/language.info.yml',
        'basename' => 'language.info.yml',
        'name' => 'Language',
        'info' => 
        array (
          'name' => 'Language',
          'type' => 'module',
          'description' => 'Allows users to configure available languages.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'configure' => 'entity.configurable_language.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'statistics_test_attached' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/statistics/tests/themes/statistics_test_attached/statistics_test_attached.info.yml',
        'basename' => 'statistics_test_attached.info.yml',
        'name' => 'Statistics test attached theme',
        'info' => 
        array (
          'name' => 'Statistics test attached theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing attached library',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'statistics_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/statistics/tests/modules/statistics_test_views/statistics_test_views.info.yml',
        'basename' => 'statistics_test_views.info.yml',
        'name' => 'Statistics test views',
        'info' => 
        array (
          'name' => 'Statistics test views',
          'type' => 'module',
          'description' => 'Provides default views for views statistics tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:statistics',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/statistics/statistics.info.yml',
        'basename' => 'statistics.info.yml',
        'name' => 'Statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'type' => 'module',
          'description' => 'Logs content statistics for your site.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'statistics.settings',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_layout_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_discovery/tests/themes/test_layout_theme/test_layout_theme.info.yml',
        'basename' => 'test_layout_theme.info.yml',
        'name' => 'Test layout theme',
        'info' => 
        array (
          'name' => 'Test layout theme',
          'type' => 'theme',
          'description' => 'Theme for testing a theme-provided layout',
          'version' => 'VERSION',
          'base theme' => 'classy',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'layout_discovery' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/layout_discovery/layout_discovery.info.yml',
        'basename' => 'layout_discovery.info.yml',
        'name' => 'Layout Discovery',
        'info' => 
        array (
          'name' => 'Layout Discovery',
          'type' => 'module',
          'description' => 'Provides a way for modules or themes to register layouts.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_layout_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field_layout/tests/modules/field_layout_test/field_layout_test.info.yml',
        'basename' => 'field_layout_test.info.yml',
        'name' => 'Field Layout test',
        'info' => 
        array (
          'name' => 'Field Layout test',
          'type' => 'module',
          'description' => 'Support module for Field Layout tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_layout' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field_layout/field_layout.info.yml',
        'basename' => 'field_layout.info.yml',
        'name' => 'Field Layout',
        'info' => 
        array (
          'name' => 'Field Layout',
          'type' => 'module',
          'description' => 'Allows users to configure the display and form display by arranging fields in several columns.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:layout_discovery',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_plugins_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/tests/modules/field_plugins_test/field_plugins_test.info.yml',
        'basename' => 'field_plugins_test.info.yml',
        'name' => 'Field Plugins Test',
        'info' => 
        array (
          'name' => 'Field Plugins Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/tests/modules/field_test/field_test.info.yml',
        'basename' => 'field_test.info.yml',
        'name' => 'Field API Test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/tests/modules/field_test_views/field_test_views.info.yml',
        'basename' => 'field_test_views.info.yml',
        'name' => 'Field test views',
        'info' => 
        array (
          'name' => 'Field test views',
          'type' => 'module',
          'description' => 'Provides default views for views field tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_test_config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/tests/modules/field_test_config/field_test_config.info.yml',
        'basename' => 'field_test_config.info.yml',
        'name' => 'Field API configuration tests',
        'info' => 
        array (
          'name' => 'Field API configuration tests',
          'type' => 'module',
          'description' => 'Support module for the Field API configuration tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_test_boolean_access_denied' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/tests/modules/field_test_boolean_access_denied/field_test_boolean_access_denied.info.yml',
        'basename' => 'field_test_boolean_access_denied.info.yml',
        'name' => 'Boolean field Test',
        'info' => 
        array (
          'name' => 'Boolean field Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_timestamp_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/tests/modules/field_timestamp_test/field_timestamp_test.info.yml',
        'basename' => 'field_timestamp_test.info.yml',
        'name' => 'Field Timestamp Test',
        'info' => 
        array (
          'name' => 'Field Timestamp Test',
          'type' => 'module',
          'description' => 'Support module for the Timestamp field item test.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_third_party_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/tests/modules/field_third_party_test/field_third_party_test.info.yml',
        'basename' => 'field_third_party_test.info.yml',
        'name' => 'Field Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Field Third Party Settings Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:entity_test',
            1 => 'drupal:field_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/field/field.info.yml',
        'basename' => 'field.info.yml',
        'name' => 'Field',
        'info' => 
        array (
          'name' => 'Field',
          'type' => 'module',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'workspace_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workspaces/tests/modules/workspace_update_test/workspace_update_test.info.yml',
        'basename' => 'workspace_update_test.info.yml',
        'name' => 'Workspace Update Test',
        'info' => 
        array (
          'name' => 'Workspace Update Test',
          'type' => 'module',
          'description' => 'Provides supporting code for testing workspaces during database updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'workspace_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workspaces/tests/modules/workspace_access_test/workspace_access_test.info.yml',
        'basename' => 'workspace_access_test.info.yml',
        'name' => 'Workspace Access Test',
        'info' => 
        array (
          'name' => 'Workspace Access Test',
          'type' => 'module',
          'description' => 'Provides supporting code for testing access for workspaces.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:workspaces',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'workspaces' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/workspaces/workspaces.info.yml',
        'basename' => 'workspaces.info.yml',
        'name' => 'Workspaces',
        'info' => 
        array (
          'name' => 'Workspaces',
          'type' => 'module',
          'description' => 'Allows users to stage content or preview a full site by using multiple workspaces on a single site.',
          'version' => 'VERSION',
          'package' => 'Core (Experimental)',
          'configure' => 'entity.workspace.collection',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'quickedit_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/quickedit/tests/modules/quickedit_test.info.yml',
        'basename' => 'quickedit_test.info.yml',
        'name' => 'Quick Edit test',
        'info' => 
        array (
          'name' => 'Quick Edit test',
          'type' => 'module',
          'description' => 'Support module for the Quick Edit module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'quickedit' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/quickedit/quickedit.info.yml',
        'basename' => 'quickedit.info.yml',
        'name' => 'Quick Edit',
        'info' => 
        array (
          'name' => 'Quick Edit',
          'type' => 'module',
          'description' => 'In-place content editing.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contextual',
            1 => 'drupal:field',
            2 => 'drupal:filter',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'history' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/history/history.info.yml',
        'basename' => 'history.info.yml',
        'name' => 'History',
        'info' => 
        array (
          'name' => 'History',
          'type' => 'module',
          'description' => 'Records which user has read which content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block_content_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block_content/tests/modules/block_content_test/block_content_test.info.yml',
        'basename' => 'block_content_test.info.yml',
        'name' => 'Custom Block module tests',
        'info' => 
        array (
          'name' => 'Custom Block module tests',
          'type' => 'module',
          'description' => 'Support module for custom block related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block_content_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block_content/tests/modules/block_content_test_views/block_content_test_views.info.yml',
        'basename' => 'block_content_test_views.info.yml',
        'name' => 'Block Content test views',
        'info' => 
        array (
          'name' => 'Block Content test views',
          'type' => 'module',
          'description' => 'Provides default views for views block_content tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block_content',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block_content' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block_content/block_content.info.yml',
        'basename' => 'block_content.info.yml',
        'name' => 'Custom Block',
        'info' => 
        array (
          'name' => 'Custom Block',
          'type' => 'module',
          'description' => 'Allows the creation of custom blocks and block types.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:text',
            2 => 'drupal:user',
          ),
          'configure' => 'entity.block_content.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'rest_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rest/tests/modules/rest_test_views/rest_test_views.info.yml',
        'basename' => 'rest_test_views.info.yml',
        'name' => 'REST test views',
        'info' => 
        array (
          'name' => 'REST test views',
          'type' => 'module',
          'description' => 'Provides default views for views REST tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:rest',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'rest_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rest/tests/modules/rest_test/rest_test.info.yml',
        'basename' => 'rest_test.info.yml',
        'name' => 'REST test',
        'info' => 
        array (
          'name' => 'REST test',
          'type' => 'module',
          'description' => 'Provides test hooks and resources for REST module.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_test_rest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rest/tests/modules/config_test_rest/config_test_rest.info.yml',
        'basename' => 'config_test_rest.info.yml',
        'name' => 'Configuration test REST',
        'info' => 
        array (
          'name' => 'Configuration test REST',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'rest' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rest/rest.info.yml',
        'basename' => 'rest.info.yml',
        'name' => 'RESTful Web Services',
        'info' => 
        array (
          'name' => 'RESTful Web Services',
          'type' => 'module',
          'description' => 'Exposes entities and other resources as RESTful web API',
          'package' => 'Web services',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'menu_link_content' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/menu_link_content/menu_link_content.info.yml',
        'basename' => 'menu_link_content.info.yml',
        'name' => 'Custom Menu Links',
        'info' => 
        array (
          'name' => 'Custom Menu Links',
          'type' => 'module',
          'description' => 'Allows users to create menu links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:link',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'syslog_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/syslog/tests/modules/syslog_test/syslog_test.info.yml',
        'basename' => 'syslog_test.info.yml',
        'name' => 'Syslog test',
        'info' => 
        array (
          'name' => 'Syslog test',
          'type' => 'module',
          'description' => 'Provides a test logger for syslog module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:syslog',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/syslog/syslog.info.yml',
        'basename' => 'syslog.info.yml',
        'name' => 'Syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'type' => 'module',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'responsive_image_test_module' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/responsive_image/tests/modules/responsive_image_test_module/responsive_image_test_module.info.yml',
        'basename' => 'responsive_image_test_module.info.yml',
        'name' => 'Responsive image test theme',
        'info' => 
        array (
          'name' => 'Responsive image test theme',
          'type' => 'module',
          'description' => 'Test theme for responsive image.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'responsive_image' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/responsive_image/responsive_image.info.yml',
        'basename' => 'responsive_image.info.yml',
        'name' => 'Responsive Image',
        'info' => 
        array (
          'name' => 'Responsive Image',
          'type' => 'module',
          'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:breakpoint',
            1 => 'drupal:image',
          ),
          'configure' => 'entity.responsive_image_style.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'page_cache_form_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/page_cache/tests/modules/page_cache_form_test.info.yml',
        'basename' => 'page_cache_form_test.info.yml',
        'name' => 'Page Cache Form Test',
        'info' => 
        array (
          'name' => 'Page Cache Form Test',
          'type' => 'module',
          'description' => 'Support module for the Page Cache module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'page_cache' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/page_cache/page_cache.info.yml',
        'basename' => 'page_cache.info.yml',
        'name' => 'Internal Page Cache',
        'info' => 
        array (
          'name' => 'Internal Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for anonymous users and can be used when external page cache is not available.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block_test_specialchars_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block/tests/modules/block_test/themes/block_test_specialchars_theme/block_test_specialchars_theme.info.yml',
        'basename' => 'block_test_specialchars_theme.info.yml',
        'name' => '<"Cat" & \'Mouse\'>',
        'info' => 
        array (
          'name' => '<"Cat" & \'Mouse\'>',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing special characters in block admin.',
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block/tests/modules/block_test/themes/block_test_theme/block_test_theme.info.yml',
        'basename' => 'block_test_theme.info.yml',
        'name' => 'Block test theme',
        'info' => 
        array (
          'name' => 'Block test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the block system',
          'version' => 'VERSION',
          'regions' => 
          array (
            'sidebar_first' => 'Left sidebar',
            'sidebar_second' => 'Right sidebar',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
            1 => 'sidebar_second',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block/tests/modules/block_test/block_test.info.yml',
        'basename' => 'block_test.info.yml',
        'name' => 'Block test',
        'info' => 
        array (
          'name' => 'Block test',
          'type' => 'module',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block/tests/modules/block_test_views/block_test_views.info.yml',
        'basename' => 'block_test_views.info.yml',
        'name' => 'Block test views',
        'info' => 
        array (
          'name' => 'Block test views',
          'type' => 'module',
          'description' => 'Provides a view and block to test block displays in views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/block/block.info.yml',
        'basename' => 'block.info.yml',
        'name' => 'Block',
        'info' => 
        array (
          'name' => 'Block',
          'type' => 'module',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'block.admin_display',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'hal_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/hal/tests/modules/hal_test/hal_test.info.yml',
        'basename' => 'hal_test.info.yml',
        'name' => 'HAL test module',
        'info' => 
        array (
          'name' => 'HAL test module',
          'type' => 'module',
          'description' => 'Support module for HAL tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'hal' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/hal/hal.info.yml',
        'basename' => 'hal.info.yml',
        'name' => 'HAL',
        'info' => 
        array (
          'name' => 'HAL',
          'type' => 'module',
          'description' => 'Serializes entities using Hypertext Application Language.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:serialization',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'filter_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/filter/tests/filter_test/filter_test.info.yml',
        'basename' => 'filter_test.info.yml',
        'name' => 'Filter test module',
        'info' => 
        array (
          'name' => 'Filter test module',
          'type' => 'module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'filter_test_plugin' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/filter/tests/filter_test_plugin/filter_test_plugin.info.yml',
        'basename' => 'filter_test_plugin.info.yml',
        'name' => 'Filter test plugin',
        'info' => 
        array (
          'name' => 'Filter test plugin',
          'type' => 'module',
          'description' => 'Tests enabling of modules which provide filter plugins.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/filter/filter.info.yml',
        'basename' => 'filter.info.yml',
        'name' => 'Filter',
        'info' => 
        array (
          'name' => 'Filter',
          'type' => 'module',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'editor_private_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/editor/tests/editor_private_test/editor_private_test.info.yml',
        'basename' => 'editor_private_test.info.yml',
        'name' => 'Text Editor Private test',
        'info' => 
        array (
          'name' => 'Text Editor Private test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor Private module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
            1 => 'drupal:ckeditor',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'editor_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/editor/tests/modules/editor_test.info.yml',
        'basename' => 'editor_test.info.yml',
        'name' => 'Text Editor test',
        'info' => 
        array (
          'name' => 'Text Editor test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'editor' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/editor/editor.info.yml',
        'basename' => 'editor.info.yml',
        'name' => 'Text Editor',
        'info' => 
        array (
          'name' => 'Text Editor',
          'type' => 'module',
          'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:filter',
            1 => 'drupal:file',
          ),
          'configure' => 'filter.admin_overview',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'rdf_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rdf/tests/rdf_test/rdf_test.info.yml',
        'basename' => 'rdf_test.info.yml',
        'name' => 'RDF test module',
        'info' => 
        array (
          'name' => 'RDF test module',
          'type' => 'module',
          'description' => 'Test functionality for the RDF module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'rdf_conflicting_namespaces' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rdf/tests/rdf_conflicting_namespaces/rdf_conflicting_namespaces.info.yml',
        'basename' => 'rdf_conflicting_namespaces.info.yml',
        'name' => 'RDF module conflicting namespaces test',
        'info' => 
        array (
          'name' => 'RDF module conflicting namespaces test',
          'type' => 'module',
          'description' => 'Test conflicting namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'rdf_test_namespaces' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rdf/tests/rdf_test_namespaces/rdf_test_namespaces.info.yml',
        'basename' => 'rdf_test_namespaces.info.yml',
        'name' => 'RDF module namespaces test',
        'info' => 
        array (
          'name' => 'RDF module namespaces test',
          'type' => 'module',
          'description' => 'Test namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:rdf',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'rdf' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/rdf/rdf.info.yml',
        'basename' => 'rdf.info.yml',
        'name' => 'RDF',
        'info' => 
        array (
          'name' => 'RDF',
          'type' => 'module',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_entity_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_entity_test/migrate_entity_test.info.yml',
        'basename' => 'migrate_entity_test.info.yml',
        'name' => 'Migrate entity test',
        'info' => 
        array (
          'name' => 'Migrate entity test',
          'type' => 'module',
          'description' => 'Support module for entity destination test.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_events_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_events_test/migrate_events_test.info.yml',
        'basename' => 'migrate_events_test.info.yml',
        'name' => 'Migrate events test',
        'info' => 
        array (
          'name' => 'Migrate events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_high_water_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_high_water_test/migrate_high_water_test.info.yml',
        'basename' => 'migrate_high_water_test.info.yml',
        'name' => 'Migration High Water Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migration High Water Test',
          'description' => 'Provides test fixtures for testing high water marks.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_no_migrate_drupal_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_no_migrate_drupal_test/migrate_no_migrate_drupal_test.info.yml',
        'basename' => 'migrate_no_migrate_drupal_test.info.yml',
        'name' => 'Migrate No Migrate Drupal Test',
        'info' => 
        array (
          'name' => 'Migrate No Migrate Drupal Test',
          'type' => 'module',
          'description' => 'Provides fixture for testing without migrate_drupal.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
            1 => 'drupal:node',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_query_batch_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_query_batch_test/migrate_query_batch_test.info.yml',
        'basename' => 'migrate_query_batch_test.info.yml',
        'name' => 'Migrate query batch Source test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migrate query batch Source test',
          'description' => 'Provides a database table and records for SQL import with batch testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_external_translated_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_external_translated_test/migrate_external_translated_test.info.yml',
        'basename' => 'migrate_external_translated_test.info.yml',
        'name' => 'Migration external translated test',
        'info' => 
        array (
          'name' => 'Migration external translated test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_lookup_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_lookup_test/migrate_lookup_test.info.yml',
        'basename' => 'migrate_lookup_test.info.yml',
        'name' => 'Migration Lookup Test',
        'info' => 
        array (
          'name' => 'Migration Lookup Test',
          'type' => 'module',
          'description' => 'Provides test migrations to test migration lookup service.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_prepare_row_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_prepare_row_test/migrate_prepare_row_test.info.yml',
        'basename' => 'migrate_prepare_row_test.info.yml',
        'name' => 'Migrate module prepareRow tests',
        'info' => 
        array (
          'name' => 'Migrate module prepareRow tests',
          'type' => 'module',
          'description' => 'Support module for source plugin prepareRow testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_stub_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_stub_test/migrate_stub_test.info.yml',
        'basename' => 'migrate_stub_test.info.yml',
        'name' => 'Migration Stub Test',
        'info' => 
        array (
          'name' => 'Migration Stub Test',
          'type' => 'module',
          'description' => 'Provides test migrations to test migration  stub service.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_track_changes_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/tests/modules/migrate_track_changes_test/migrate_track_changes_test.info.yml',
        'basename' => 'migrate_track_changes_test.info.yml',
        'name' => 'Migration Track Changes Test',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Migration Track Changes Test',
          'description' => 'Provides test fixtures for testing track changes marks.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate/migrate.info.yml',
        'basename' => 'migrate.info.yml',
        'name' => 'Migrate',
        'info' => 
        array (
          'name' => 'Migrate',
          'type' => 'module',
          'description' => 'Handles migrations',
          'package' => 'Migration',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_test_classy_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views_ui/tests/themes/views_test_classy_subtheme/views_test_classy_subtheme.info.yml',
        'basename' => 'views_test_classy_subtheme.info.yml',
        'name' => 'Theme test subtheme',
        'info' => 
        array (
          'name' => 'Theme test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses test_basetheme as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_ui_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views_ui/tests/modules/views_ui_test/views_ui_test.info.yml',
        'basename' => 'views_ui_test.info.yml',
        'name' => 'Views UI Test',
        'info' => 
        array (
          'name' => 'Views UI Test',
          'type' => 'module',
          'description' => 'Test module for Views UI.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views_ui',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_ui_test_field' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views_ui/tests/modules/views_ui_test_field/views_ui_test_field.info.yml',
        'basename' => 'views_ui_test_field.info.yml',
        'name' => 'Views test field',
        'info' => 
        array (
          'name' => 'Views test field',
          'type' => 'module',
          'description' => 'Add custom global field for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:views_ui',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/views_ui/views_ui.info.yml',
        'basename' => 'views_ui.info.yml',
        'name' => 'Views UI',
        'info' => 
        array (
          'name' => 'Views UI',
          'type' => 'module',
          'description' => 'Provides a user interface for creating and managing views.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.view.collection',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'ckeditor_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/ckeditor/tests/modules/ckeditor_test.info.yml',
        'basename' => 'ckeditor_test.info.yml',
        'name' => 'CKEditor test',
        'info' => 
        array (
          'name' => 'CKEditor test',
          'type' => 'module',
          'description' => 'Support module for the CKEditor module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'ckeditor' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/ckeditor/ckeditor.info.yml',
        'basename' => 'ckeditor.info.yml',
        'name' => 'CKEditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'type' => 'module',
          'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:editor',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'basic_auth_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/basic_auth/tests/modules/basic_auth_test/basic_auth_test.info.yml',
        'basename' => 'basic_auth_test.info.yml',
        'name' => 'HTTP Basic Authentication test',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication test',
          'type' => 'module',
          'description' => 'Support module for HTTP Basic Authentication testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'basic_auth' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/basic_auth/basic_auth.info.yml',
        'basename' => 'basic_auth.info.yml',
        'name' => 'HTTP Basic Authentication',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'type' => 'module',
          'description' => 'Supplies an HTTP Basic authentication provider.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:user',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_subtheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/tests/themes/update_test_subtheme/update_test_subtheme.info.yml',
        'basename' => 'update_test_subtheme.info.yml',
        'name' => 'Update test subtheme',
        'info' => 
        array (
          'name' => 'Update test subtheme',
          'type' => 'theme',
          'description' => 'Test theme which uses update_test_basetheme as the base theme.',
          'version' => 'VERSION',
          'base theme' => 'update_test_basetheme',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test_basetheme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/tests/themes/update_test_basetheme/update_test_basetheme.info.yml',
        'basename' => 'update_test_basetheme.info.yml',
        'name' => 'Update test base theme',
        'info' => 
        array (
          'name' => 'Update test base theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Test theme which acts as a base theme for other test subthemes.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/tests/modules/bbb_update_test/bbb_update_test.info.yml',
        'basename' => 'bbb_update_test.info.yml',
        'name' => 'BBB Update test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/tests/modules/ccc_update_test/ccc_update_test.info.yml',
        'basename' => 'ccc_update_test.info.yml',
        'name' => 'CCC Update test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/tests/modules/aaa_update_test/aaa_update_test.info.yml',
        'basename' => 'aaa_update_test.info.yml',
        'name' => 'AAA Update test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/tests/modules/update_test/update_test.info.yml',
        'basename' => 'update_test.info.yml',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/update/update.info.yml',
        'basename' => 'update.info.yml',
        'name' => 'Update Manager',
        'info' => 
        array (
          'name' => 'Update Manager',
          'type' => 'module',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => 'VERSION',
          'package' => 'Core',
          'configure' => 'update.settings',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'breakpoint_theme_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/breakpoint/tests/themes/breakpoint_theme_test/breakpoint_theme_test.info.yml',
        'basename' => 'breakpoint_theme_test.info.yml',
        'name' => 'Breakpoint test theme',
        'info' => 
        array (
          'name' => 'Breakpoint test theme',
          'type' => 'theme',
          'description' => 'Test theme for breakpoint.',
          'version' => 'VERSION',
          'base theme' => 'bartik',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'breakpoint_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/breakpoint/tests/modules/breakpoint_module_test/breakpoint_module_test.info.yml',
        'basename' => 'breakpoint_module_test.info.yml',
        'name' => 'Breakpoint test module',
        'info' => 
        array (
          'name' => 'Breakpoint test module',
          'type' => 'module',
          'description' => 'Test module for breakpoint.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'breakpoint' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/breakpoint/breakpoint.info.yml',
        'basename' => 'breakpoint.info.yml',
        'name' => 'Breakpoint',
        'info' => 
        array (
          'name' => 'Breakpoint',
          'type' => 'module',
          'description' => 'Manages breakpoints and breakpoint groups for responsive designs.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'book_breadcrumb_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/book/tests/modules/book_breadcrumb_test/book_breadcrumb_test.info.yml',
        'basename' => 'book_breadcrumb_test.info.yml',
        'name' => 'Book module breadcrumb tests',
        'info' => 
        array (
          'name' => 'Book module breadcrumb tests',
          'type' => 'module',
          'description' => 'Support module for book module breadcrumb testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'book_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/book/tests/modules/book_test/book_test.info.yml',
        'basename' => 'book_test.info.yml',
        'name' => 'Book module tests',
        'info' => 
        array (
          'name' => 'Book module tests',
          'type' => 'module',
          'description' => 'Support module for book module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'book_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/book/tests/modules/book_test_views/book_test_views.info.yml',
        'basename' => 'book_test_views.info.yml',
        'name' => 'Book test views',
        'info' => 
        array (
          'name' => 'Book test views',
          'type' => 'module',
          'description' => 'Provides default views for views book tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:book',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/book/book.info.yml',
        'basename' => 'book.info.yml',
        'name' => 'Book',
        'info' => 
        array (
          'name' => 'Book',
          'type' => 'module',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
          'configure' => 'book.settings',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'content_translation_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_translation/tests/modules/content_translation_test/content_translation_test.info.yml',
        'basename' => 'content_translation_test.info.yml',
        'name' => 'Content translation tests',
        'info' => 
        array (
          'name' => 'Content translation tests',
          'type' => 'module',
          'description' => 'Provides content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_translation',
            1 => 'drupal:language',
            2 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'content_translation_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_translation/tests/modules/content_translation_test_views/content_translation_test_views.info.yml',
        'basename' => 'content_translation_test_views.info.yml',
        'name' => 'Content translation test views',
        'info' => 
        array (
          'name' => 'Content translation test views',
          'type' => 'module',
          'description' => 'Provides default views for views content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:content_translation',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'content_translation' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/content_translation/content_translation.info.yml',
        'basename' => 'content_translation.info.yml',
        'name' => 'Content Translation',
        'info' => 
        array (
          'name' => 'Content Translation',
          'type' => 'module',
          'description' => 'Allows users to translate content.',
          'dependencies' => 
          array (
            0 => 'drupal:language',
          ),
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'configure' => 'language.content_settings_page',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'link_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/link/tests/modules/link_test_views/link_test_views.info.yml',
        'basename' => 'link_test_views.info.yml',
        'name' => 'Link test views',
        'info' => 
        array (
          'name' => 'Link test views',
          'type' => 'module',
          'description' => 'Provides default views for views link tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'drupal:link',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'link' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/link/link.info.yml',
        'basename' => 'link.info.yml',
        'name' => 'Link',
        'info' => 
        array (
          'name' => 'Link',
          'type' => 'module',
          'description' => 'Provides a simple link field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_test_ckeditor' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/tests/modules/media_test_ckeditor/media_test_ckeditor.info.yml',
        'basename' => 'media_test_ckeditor.info.yml',
        'name' => 'Media CKEditor plugin test',
        'info' => 
        array (
          'name' => 'Media CKEditor plugin test',
          'description' => 'Provides functionality to test the Media Embed CKEditor integration.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_test_source' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/tests/modules/media_test_source/media_test_source.info.yml',
        'basename' => 'media_test_source.info.yml',
        'name' => 'Test media source',
        'info' => 
        array (
          'name' => 'Test media source',
          'type' => 'module',
          'description' => 'Provides test media source to test configuration forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/tests/modules/media_test_views/media_test_views.info.yml',
        'basename' => 'media_test_views.info.yml',
        'name' => 'Media test views',
        'info' => 
        array (
          'name' => 'Media test views',
          'type' => 'module',
          'description' => 'Provides default views for views media tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_test_filter' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/tests/modules/media_test_filter/media_test_filter.info.yml',
        'basename' => 'media_test_filter.info.yml',
        'name' => 'Media Filter test',
        'info' => 
        array (
          'name' => 'Media Filter test',
          'description' => 'Provides functionality to test the Media Embed filter.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_test_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/tests/modules/media_test_type/media_test_type.info.yml',
        'basename' => 'media_test_type.info.yml',
        'name' => 'Media test type',
        'info' => 
        array (
          'name' => 'Media test type',
          'type' => 'module',
          'description' => 'Provides test type for a media item.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:media_test_source',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_test_oembed' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/tests/modules/media_test_oembed/media_test_oembed.info.yml',
        'basename' => 'media_test_oembed.info.yml',
        'name' => 'Media oEmbed test',
        'info' => 
        array (
          'name' => 'Media oEmbed test',
          'description' => 'Provides functionality to mimic an oEmbed provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:media',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media/media.info.yml',
        'basename' => 'media.info.yml',
        'name' => 'Media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Manages the creation, configuration, and display of media items.',
          'type' => 'module',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:image',
            2 => 'drupal:user',
          ),
          'configure' => 'media.settings',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'big_pipe_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/big_pipe/tests/themes/big_pipe_test_theme/big_pipe_test_theme.info.yml',
        'basename' => 'big_pipe_test_theme.info.yml',
        'name' => 'BigPipe test theme',
        'info' => 
        array (
          'name' => 'BigPipe test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing BigPipe edge cases.',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'big_pipe_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/big_pipe/tests/modules/big_pipe_test/big_pipe_test.info.yml',
        'basename' => 'big_pipe_test.info.yml',
        'name' => 'BigPipe test',
        'info' => 
        array (
          'name' => 'BigPipe test',
          'type' => 'module',
          'description' => 'Support module for BigPipe testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'big_pipe_regression_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/big_pipe/tests/modules/big_pipe_regression_test/big_pipe_regression_test.info.yml',
        'basename' => 'big_pipe_regression_test.info.yml',
        'name' => 'BigPipe regression test',
        'info' => 
        array (
          'name' => 'BigPipe regression test',
          'type' => 'module',
          'description' => 'Support module for BigPipe regression testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'big_pipe' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/big_pipe/big_pipe.info.yml',
        'basename' => 'big_pipe.info.yml',
        'name' => 'BigPipe',
        'info' => 
        array (
          'name' => 'BigPipe',
          'type' => 'module',
          'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'comment_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/comment/tests/modules/comment_test_views/comment_test_views.info.yml',
        'basename' => 'comment_test_views.info.yml',
        'name' => 'Comment test views',
        'info' => 
        array (
          'name' => 'Comment test views',
          'type' => 'module',
          'description' => 'Provides default views for views comment tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'comment_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/comment/tests/modules/comment_test/comment_test.info.yml',
        'basename' => 'comment_test.info.yml',
        'name' => 'Comment test',
        'info' => 
        array (
          'name' => 'Comment test',
          'type' => 'module',
          'description' => 'Support module for Comment module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'comment_base_field_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/comment/tests/modules/comment_base_field_test/comment_base_field_test.info.yml',
        'basename' => 'comment_base_field_test.info.yml',
        'name' => 'Comment base field test',
        'info' => 
        array (
          'name' => 'Comment base field test',
          'type' => 'module',
          'description' => 'Test comment as a base field',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
            1 => 'drupal:entity_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'comment_empty_title_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/comment/tests/modules/comment_empty_title_test/comment_empty_title_test.info.yml',
        'basename' => 'comment_empty_title_test.info.yml',
        'name' => 'Comment empty titles test',
        'info' => 
        array (
          'name' => 'Comment empty titles test',
          'type' => 'module',
          'description' => 'Support module for testing empty title accessibility with Comment module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:comment',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/comment/comment.info.yml',
        'basename' => 'comment.info.yml',
        'name' => 'Comment',
        'info' => 
        array (
          'name' => 'Comment',
          'type' => 'module',
          'description' => 'Allows users to comment on content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
          'configure' => 'comment.admin',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/text/text.info.yml',
        'basename' => 'text.info.yml',
        'name' => 'Text',
        'info' => 
        array (
          'name' => 'Text',
          'type' => 'module',
          'description' => 'Defines simple text field types.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:filter',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_test/node_test.info.yml',
        'basename' => 'node_test.info.yml',
        'name' => 'Node module tests',
        'info' => 
        array (
          'name' => 'Node module tests',
          'type' => 'module',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_access_test_language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_access_test_language/node_access_test_language.info.yml',
        'basename' => 'node_access_test_language.info.yml',
        'name' => 'Node module access tests language',
        'info' => 
        array (
          'name' => 'Node module access tests language',
          'type' => 'module',
          'description' => 'Support module for language-aware node access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:options',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_test_config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_test_config/node_test_config.info.yml',
        'basename' => 'node_test_config.info.yml',
        'name' => 'Node configuration tests',
        'info' => 
        array (
          'name' => 'Node configuration tests',
          'type' => 'module',
          'description' => 'Support module for node configuration tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_access_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_access_test/node_access_test.info.yml',
        'basename' => 'node_access_test.info.yml',
        'name' => 'Node module access tests',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_access_test_empty' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_access_test_empty/node_access_test_empty.info.yml',
        'basename' => 'node_access_test_empty.info.yml',
        'name' => 'Node module empty access tests',
        'info' => 
        array (
          'name' => 'Node module empty access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides empty grants hook implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_test_exception/node_test_exception.info.yml',
        'basename' => 'node_test_exception.info.yml',
        'name' => 'Node module exception tests',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'type' => 'module',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_display_configurable_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_display_configurable_test/node_display_configurable_test.info.yml',
        'basename' => 'node_display_configurable_test.info.yml',
        'name' => 'Node configurable display module tests',
        'info' => 
        array (
          'name' => 'Node configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for node \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/modules/node_test_views/node_test_views.info.yml',
        'basename' => 'node_test_views.info.yml',
        'name' => 'Node test views',
        'info' => 
        array (
          'name' => 'Node test views',
          'type' => 'module',
          'description' => 'Provides default views for views node tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:views',
            2 => 'drupal:language',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node_access_test_auto_bubbling' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/tests/node_access_test_auto_bubbling/node_access_test_auto_bubbling.info.yml',
        'basename' => 'node_access_test_auto_bubbling.info.yml',
        'name' => 'Node module access automatic cacheability bubbling tests',
        'info' => 
        array (
          'name' => 'Node module access automatic cacheability bubbling tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides a route which does a node access query without explicitly specifying the corresponding cache context.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/node/node.info.yml',
        'basename' => 'node.info.yml',
        'name' => 'Node',
        'info' => 
        array (
          'name' => 'Node',
          'type' => 'module',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.node_type.collection',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'taxonomy_crud' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/tests/modules/taxonomy_crud/taxonomy_crud.info.yml',
        'basename' => 'taxonomy_crud.info.yml',
        'name' => 'Taxonomy CRUD tests',
        'info' => 
        array (
          'name' => 'Taxonomy CRUD tests',
          'type' => 'module',
          'description' => 'Provides 3rd party settings for vocabulary.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/tests/modules/taxonomy_test/taxonomy_test.info.yml',
        'basename' => 'taxonomy_test.info.yml',
        'name' => 'Taxonomy test',
        'info' => 
        array (
          'name' => 'Taxonomy test',
          'type' => 'module',
          'description' => 'Provides test hook implementations for taxonomy tests',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'taxonomy_term_display_configurable_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/tests/modules/taxonomy_term_display_configurable_test/taxonomy_term_display_configurable_test.info.yml',
        'basename' => 'taxonomy_term_display_configurable_test.info.yml',
        'name' => 'Taxonomy term configurable display module tests',
        'info' => 
        array (
          'name' => 'Taxonomy term configurable display module tests',
          'type' => 'module',
          'description' => 'Support module for taxonomy_term \\Drupal\\Core\\Field\\BaseFieldDefinition::setDisplayConfigurable() testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'vocabulary_serialization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/tests/modules/vocabulary_serialization_test/vocabulary_serialization_test.info.yml',
        'basename' => 'vocabulary_serialization_test.info.yml',
        'name' => 'Vocabulary serialization test',
        'info' => 
        array (
          'name' => 'Vocabulary serialization test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'taxonomy_term_stub_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/tests/modules/taxonomy_term_stub_test/taxonomy_term_stub_test.info.yml',
        'basename' => 'taxonomy_term_stub_test.info.yml',
        'name' => 'Taxonomy Migrate stub test',
        'info' => 
        array (
          'name' => 'Taxonomy Migrate stub test',
          'type' => 'module',
          'description' => 'Provides a migration plugin for stub testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'drupal:migrate',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'taxonomy_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/tests/modules/taxonomy_test_views/taxonomy_test_views.info.yml',
        'basename' => 'taxonomy_test_views.info.yml',
        'name' => 'Taxonomy test views',
        'info' => 
        array (
          'name' => 'Taxonomy test views',
          'type' => 'module',
          'description' => 'Provides default views for views taxonomy tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:taxonomy',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/taxonomy/taxonomy.info.yml',
        'basename' => 'taxonomy.info.yml',
        'name' => 'Taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'type' => 'module',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:text',
          ),
          'configure' => 'entity.taxonomy_vocabulary.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'forum_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/forum/tests/modules/forum_test_views/forum_test_views.info.yml',
        'basename' => 'forum_test_views.info.yml',
        'name' => 'Forum test views',
        'info' => 
        array (
          'name' => 'Forum test views',
          'type' => 'module',
          'description' => 'Provides default views for views forum tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:forum',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/forum/forum.info.yml',
        'basename' => 'forum.info.yml',
        'name' => 'Forum',
        'info' => 
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
          'version' => 'VERSION',
          'configure' => 'forum.overview',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'menu_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/menu_ui/menu_ui.info.yml',
        'basename' => 'menu_ui.info.yml',
        'name' => 'Menu UI',
        'info' => 
        array (
          'name' => 'Menu UI',
          'type' => 'module',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.menu.collection',
          'dependencies' => 
          array (
            0 => 'drupal:menu_link_content',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_datatype_boolean_emoji_normalizer' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/serialization/tests/modules/test_datatype_boolean_emoji_normalizer/test_datatype_boolean_emoji_normalizer.info.yml',
        'basename' => 'test_datatype_boolean_emoji_normalizer.info.yml',
        'name' => 'Test @DataType normalizer',
        'info' => 
        array (
          'name' => 'Test @DataType normalizer',
          'type' => 'module',
          'description' => 'Provides test support for @DataType-level normalization.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'field_normalization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/serialization/tests/modules/field_normalization_test/field_normalization_test.info.yml',
        'basename' => 'field_normalization_test.info.yml',
        'name' => 'FieldItem normalization test support',
        'info' => 
        array (
          'name' => 'FieldItem normalization test support',
          'type' => 'module',
          'description' => 'Provides test support for fieldItem normalization test support.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'test_fieldtype_boolean_emoji_normalizer' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/serialization/tests/modules/test_fieldtype_boolean_emoji_normalizer/test_fieldtype_boolean_emoji_normalizer.info.yml',
        'basename' => 'test_fieldtype_boolean_emoji_normalizer.info.yml',
        'name' => 'Test @FieldType normalizer',
        'info' => 
        array (
          'name' => 'Test @FieldType normalizer',
          'type' => 'module',
          'description' => 'Provides test support for @FieldType-level normalization.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'entity_serialization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/serialization/tests/modules/entity_serialization_test/entity_serialization_test.info.yml',
        'basename' => 'entity_serialization_test.info.yml',
        'name' => 'Entity serialization test support',
        'info' => 
        array (
          'name' => 'Entity serialization test support',
          'type' => 'module',
          'description' => 'Provides test support for entity serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'serialization_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/serialization/tests/serialization_test/serialization_test.info.yml',
        'basename' => 'serialization_test.info.yml',
        'name' => 'Serialization test module',
        'info' => 
        array (
          'name' => 'Serialization test module',
          'type' => 'module',
          'description' => 'Support module for serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'serialization' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/serialization/serialization.info.yml',
        'basename' => 'serialization.info.yml',
        'name' => 'Serialization',
        'info' => 
        array (
          'name' => 'Serialization',
          'type' => 'module',
          'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML.',
          'package' => 'Web services',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'color_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/color/tests/modules/color_test/themes/color_test_theme/color_test_theme.info.yml',
        'basename' => 'color_test_theme.info.yml',
        'name' => 'Color test theme',
        'info' => 
        array (
          'name' => 'Color test theme',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'Theme for testing the color module',
          'version' => 'VERSION',
          'libraries' => 
          array (
            0 => 'color_test_theme/base',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'color_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/color/tests/modules/color_test/color_test.info.yml',
        'basename' => 'color_test.info.yml',
        'name' => 'Color test',
        'info' => 
        array (
          'name' => 'Color test',
          'type' => 'module',
          'description' => 'Provides test helpers for color module.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/color/color.info.yml',
        'basename' => 'color.info.yml',
        'name' => 'Color',
        'info' => 
        array (
          'name' => 'Color',
          'type' => 'module',
          'description' => 'Allows users to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_normalizers_kernel' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_normalizers_kernel/jsonapi_test_normalizers_kernel.info.yml',
        'basename' => 'jsonapi_test_normalizers_kernel.info.yml',
        'name' => 'JSON API test: normalizers kernel tests, public aliases for select JSON API normalizers',
        'info' => 
        array (
          'name' => 'JSON API test: normalizers kernel tests, public aliases for select JSON API normalizers',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_field_filter_access' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_field_filter_access/jsonapi_test_field_filter_access.info.yml',
        'basename' => 'jsonapi_test_field_filter_access.info.yml',
        'name' => 'JSON:API filter access',
        'info' => 
        array (
          'name' => 'JSON:API filter access',
          'type' => 'module',
          'description' => 'Provides custom access related code to test JSON:API filter security.',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_resource_type_building' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_resource_type_building/jsonapi_test_resource_type_building.info.yml',
        'basename' => 'jsonapi_test_resource_type_building.info.yml',
        'name' => 'JSON:API test resource type building API',
        'info' => 
        array (
          'name' => 'JSON:API test resource type building API',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_user' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_user/jsonapi_test_user.info.yml',
        'basename' => 'jsonapi_test_user.info.yml',
        'name' => 'JSON:API user tests',
        'info' => 
        array (
          'name' => 'JSON:API user tests',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_field_aliasing' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_field_aliasing/jsonapi_test_field_aliasing.info.yml',
        'basename' => 'jsonapi_test_field_aliasing.info.yml',
        'name' => 'JSON:API test field aliasing',
        'info' => 
        array (
          'name' => 'JSON:API test field aliasing',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_collection_count' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_collection_count/jsonapi_test_collection_count.info.yml',
        'basename' => 'jsonapi_test_collection_count.info.yml',
        'name' => 'JSON API test collection counts',
        'info' => 
        array (
          'name' => 'JSON API test collection counts',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_field_access' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_field_access/jsonapi_test_field_access.info.yml',
        'basename' => 'jsonapi_test_field_access.info.yml',
        'name' => 'JSON API field access',
        'info' => 
        array (
          'name' => 'JSON API field access',
          'type' => 'module',
          'description' => 'Provides a custom field access hook to test JSON API field access security.',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_data_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_data_type/jsonapi_test_data_type.info.yml',
        'basename' => 'jsonapi_test_data_type.info.yml',
        'name' => 'JSON API test format-agnostic @DataType normalizers',
        'info' => 
        array (
          'name' => 'JSON API test format-agnostic @DataType normalizers',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi_test_field_type' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/tests/modules/jsonapi_test_field_type/jsonapi_test_field_type.info.yml',
        'basename' => 'jsonapi_test_field_type.info.yml',
        'name' => 'JSON API test format-agnostic @FieldType normalizers',
        'info' => 
        array (
          'name' => 'JSON API test format-agnostic @FieldType normalizers',
          'type' => 'module',
          'package' => 'Testing',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'jsonapi' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/jsonapi/jsonapi.info.yml',
        'basename' => 'jsonapi.info.yml',
        'name' => 'JSON:API',
        'info' => 
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
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'help_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/help/tests/modules/help_test/help_test.info.yml',
        'basename' => 'help_test.info.yml',
        'name' => 'help_test',
        'info' => 
        array (
          'name' => 'help_test',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:help',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/help/help.info.yml',
        'basename' => 'help.info.yml',
        'name' => 'Help',
        'info' => 
        array (
          'name' => 'Help',
          'type' => 'module',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'file_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/file/tests/file_module_test/file_module_test.info.yml',
        'basename' => 'file_module_test.info.yml',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'file_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/file/tests/file_test/file_test.info.yml',
        'basename' => 'file_test.info.yml',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'file_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/file/tests/modules/file_test_views/file_test_views.info.yml',
        'basename' => 'file_test_views.info.yml',
        'name' => 'File test views',
        'info' => 
        array (
          'name' => 'File test views',
          'type' => 'module',
          'description' => 'Provides default views for views file tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'file' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/file/file.info.yml',
        'basename' => 'file.info.yml',
        'name' => 'File',
        'info' => 
        array (
          'name' => 'File',
          'type' => 'module',
          'description' => 'Defines a field type for files.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migration_provider_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal_ui/tests/modules/migration_provider_test/migration_provider_test.info.yml',
        'basename' => 'migration_provider_test.info.yml',
        'name' => 'Migration provider missing',
        'info' => 
        array (
          'name' => 'Migration provider missing',
          'type' => 'module',
          'description' => 'Add a migration missing a source and destination migration provider and a source plugin missing a migration provider.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'migrate_drupal_ui' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/migrate_drupal_ui/migrate_drupal_ui.info.yml',
        'basename' => 'migrate_drupal_ui.info.yml',
        'name' => 'Migrate Drupal UI',
        'info' => 
        array (
          'name' => 'Migrate Drupal UI',
          'type' => 'module',
          'description' => 'Provides a user interface for migrating from older Drupal versions.',
          'package' => 'Migration',
          'version' => 'VERSION',
          'configure' => 'migrate_drupal_ui.upgrade',
          'dependencies' => 
          array (
            0 => 'drupal:migrate',
            1 => 'drupal:migrate_drupal',
            2 => 'drupal:dblog',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_library_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media_library/tests/modules/media_library_test/media_library_test.info.yml',
        'basename' => 'media_library_test.info.yml',
        'name' => 'Media Library test',
        'info' => 
        array (
          'name' => 'Media Library test',
          'type' => 'module',
          'description' => 'Test module for Media Library.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:media_library',
            2 => 'drupal:media_test_source',
            3 => 'drupal:menu_ui',
            4 => 'drupal:node',
            5 => 'drupal:path',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_library_test_widget' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media_library/tests/modules/media_library_test_widget/media_library_test_widget.info.yml',
        'basename' => 'media_library_test_widget.info.yml',
        'name' => 'Media Library test widget',
        'info' => 
        array (
          'name' => 'Media Library test widget',
          'type' => 'module',
          'description' => 'Test widget that has a nested media library widget',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:media_library',
            2 => 'drupal:media_test_source',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'media_library' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/media_library/media_library.info.yml',
        'basename' => 'media_library.info.yml',
        'name' => 'Media Library',
        'info' => 
        array (
          'name' => 'Media Library',
          'type' => 'module',
          'description' => 'Enhances the media list with additional features to more easily find and use existing media items.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'media_library.settings',
          'dependencies' => 
          array (
            0 => 'drupal:media',
            1 => 'drupal:views',
            2 => 'drupal:user',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'contact_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contact/tests/modules/contact_test_views/contact_test_views.info.yml',
        'basename' => 'contact_test_views.info.yml',
        'name' => 'Contact test views',
        'info' => 
        array (
          'name' => 'Contact test views',
          'type' => 'module',
          'description' => 'Provides default views for views contact tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
            1 => 'drupal:views',
            2 => 'drupal:user',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'contact_storage_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contact/tests/modules/contact_storage_test/contact_storage_test.info.yml',
        'basename' => 'contact_storage_test.info.yml',
        'name' => 'Contact test storage',
        'info' => 
        array (
          'name' => 'Contact test storage',
          'type' => 'module',
          'description' => 'Tests that contact messages can be stored.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
            1 => 'drupal:user',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'contact_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contact/tests/modules/contact_test/contact_test.info.yml',
        'basename' => 'contact_test.info.yml',
        'name' => 'Contact test module',
        'info' => 
        array (
          'name' => 'Contact test module',
          'type' => 'module',
          'description' => 'Contains test contact form.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:contact',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/contact/contact.info.yml',
        'basename' => 'contact.info.yml',
        'name' => 'Contact',
        'info' => 
        array (
          'name' => 'Contact',
          'type' => 'module',
          'description' => 'Provides site-wide contact forms and forms to contact individual users.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'entity.contact_form.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'tracker_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/tracker/tests/modules/tracker_test_views/tracker_test_views.info.yml',
        'basename' => 'tracker_test_views.info.yml',
        'name' => 'Tracker test views',
        'info' => 
        array (
          'name' => 'Tracker test views',
          'type' => 'module',
          'description' => 'Provides default views for views tracker tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:tracker',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/tracker/tracker.info.yml',
        'basename' => 'tracker.info.yml',
        'name' => 'Activity Tracker',
        'info' => 
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
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'options_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/options/tests/options_test/options_test.info.yml',
        'basename' => 'options_test.info.yml',
        'name' => 'Options test',
        'info' => 
        array (
          'name' => 'Options test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'options_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/options/tests/options_test_views/options_test_views.info.yml',
        'basename' => 'options_test_views.info.yml',
        'name' => 'Options test views',
        'info' => 
        array (
          'name' => 'Options test views',
          'type' => 'module',
          'description' => 'Provides default views for views options tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:options',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'options_config_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/options/tests/options_config_install_test/options_config_install_test.info.yml',
        'basename' => 'options_config_install_test.info.yml',
        'name' => 'Options config install test',
        'info' => 
        array (
          'name' => 'Options config install test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:options',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'options' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/options/options.info.yml',
        'basename' => 'options.info.yml',
        'name' => 'Options',
        'info' => 
        array (
          'name' => 'Options',
          'type' => 'module',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'drupal:text',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'toolbar_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/toolbar/tests/modules/toolbar_test/toolbar_test.info.yml',
        'basename' => 'toolbar_test.info.yml',
        'name' => 'Toolbar module API tests',
        'info' => 
        array (
          'name' => 'Toolbar module API tests',
          'type' => 'module',
          'description' => 'Support module for toolbar testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'toolbar_disable_user_toolbar' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/toolbar/tests/modules/toolbar_disable_user_toolbar/toolbar_disable_user_toolbar.info.yml',
        'basename' => 'toolbar_disable_user_toolbar.info.yml',
        'name' => 'Disable user toolbar',
        'info' => 
        array (
          'name' => 'Disable user toolbar',
          'type' => 'module',
          'description' => 'Support module for testing toolbar without user toolbar',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/toolbar/toolbar.info.yml',
        'basename' => 'toolbar.info.yml',
        'name' => 'Toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'type' => 'module',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:breakpoint',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'image_access_test_hidden' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/image/tests/modules/image_access_test_hidden/image_access_test_hidden.info.yml',
        'basename' => 'image_access_test_hidden.info.yml',
        'name' => 'Image access test for hidden fields',
        'info' => 
        array (
          'name' => 'Image access test for hidden fields',
          'type' => 'module',
          'description' => 'Provides an entity field access hook implementation to set an image field as hidden.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'image_test_views' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/image/tests/modules/image_test_views/image_test_views.info.yml',
        'basename' => 'image_test_views.info.yml',
        'name' => 'Image test views',
        'info' => 
        array (
          'name' => 'Image test views',
          'type' => 'module',
          'description' => 'Provides default views for views image tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:views',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'image_module_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/image/tests/modules/image_module_test/image_module_test.info.yml',
        'basename' => 'image_module_test.info.yml',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'image' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/image/image.info.yml',
        'basename' => 'image.info.yml',
        'name' => 'Image',
        'info' => 
        array (
          'name' => 'Image',
          'type' => 'module',
          'description' => 'Defines a field type for image media and provides display configuration tools.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:file',
          ),
          'configure' => 'entity.image_style.collection',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_events_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_events_test/config_events_test.info.yml',
        'basename' => 'config_events_test.info.yml',
        'name' => 'Configuration events test',
        'info' => 
        array (
          'name' => 'Configuration events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_exclude_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_exclude_test/config_exclude_test.info.yml',
        'basename' => 'config_exclude_test.info.yml',
        'name' => 'Configuration Module Exclude Test',
        'info' => 
        array (
          'name' => 'Configuration Module Exclude Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_other_module_config_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_other_module_config_test/config_other_module_config_test.info.yml',
        'basename' => 'config_other_module_config_test.info.yml',
        'name' => 'Config other module config',
        'info' => 
        array (
          'name' => 'Config other module config',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_test_id_mismatch' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_test_id_mismatch/config_test_id_mismatch.info.yml',
        'basename' => 'config_test_id_mismatch.info.yml',
        'name' => 'Configuration test ID mismatch',
        'info' => 
        array (
          'name' => 'Configuration test ID mismatch',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_install_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_install_dependency_test/config_install_dependency_test.info.yml',
        'basename' => 'config_install_dependency_test.info.yml',
        'name' => 'Config install dependency test',
        'info' => 
        array (
          'name' => 'Config install dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_override_integration_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_override_integration_test/config_override_integration_test.info.yml',
        'basename' => 'config_override_integration_test.info.yml',
        'name' => 'Configuration override integration test',
        'info' => 
        array (
          'name' => 'Configuration override integration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:block_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_test_language' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_test_language/config_test_language.info.yml',
        'basename' => 'config_test_language.info.yml',
        'name' => 'Configuration test languages',
        'info' => 
        array (
          'name' => 'Configuration test languages',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_collection_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_collection_install_test/config_collection_install_test.info.yml',
        'basename' => 'config_collection_install_test.info.yml',
        'name' => 'Configuration events test',
        'info' => 
        array (
          'name' => 'Configuration events test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_override_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_override_test/config_override_test.info.yml',
        'basename' => 'config_override_test.info.yml',
        'name' => 'Configuration override test',
        'info' => 
        array (
          'name' => 'Configuration override test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:block',
            1 => 'drupal:block_content',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_install_double_dependency_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_install_double_dependency_test/config_install_double_dependency_test.info.yml',
        'basename' => 'config_install_double_dependency_test.info.yml',
        'name' => 'Config install double dependency test',
        'info' => 
        array (
          'name' => 'Config install double dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_entity_static_cache_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_entity_static_cache_test/config_entity_static_cache_test.info.yml',
        'basename' => 'config_entity_static_cache_test.info.yml',
        'name' => 'Configuration entity static cache test',
        'info' => 
        array (
          'name' => 'Configuration entity static cache test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_collection_clash_install_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_collection_clash_install_test/config_collection_clash_install_test.info.yml',
        'basename' => 'config_collection_clash_install_test.info.yml',
        'name' => 'Config collection clash test module',
        'info' => 
        array (
          'name' => 'Config collection clash test module',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_collection_install_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_test/config_test.info.yml',
        'basename' => 'config_test.info.yml',
        'name' => 'Configuration test',
        'info' => 
        array (
          'name' => 'Configuration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_transformer_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_transformer_test/config_transformer_test.info.yml',
        'basename' => 'config_transformer_test.info.yml',
        'name' => 'Configuration Storage Transformer Test',
        'info' => 
        array (
          'name' => 'Configuration Storage Transformer Test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_import_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_import_test/config_import_test.info.yml',
        'basename' => 'config_import_test.info.yml',
        'name' => 'Configuration import test',
        'info' => 
        array (
          'name' => 'Configuration import test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_integration_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_integration_test/config_integration_test.info.yml',
        'basename' => 'config_integration_test.info.yml',
        'name' => 'ConfigTest integration',
        'info' => 
        array (
          'name' => 'ConfigTest integration',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_install_fail_test' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_install_fail_test/config_install_fail_test.info.yml',
        'basename' => 'config_install_fail_test.info.yml',
        'name' => 'Configuration install fail test',
        'info' => 
        array (
          'name' => 'Configuration install fail test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'drupal:config_test',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config_clash_test_theme' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/tests/config_clash_test_theme/config_clash_test_theme.info.yml',
        'basename' => 'config_clash_test_theme.info.yml',
        'name' => 'Test theme for configuration clash detection',
        'info' => 
        array (
          'name' => 'Test theme for configuration clash detection',
          'type' => 'theme',
          'description' => 'Test theme for configuration clash detection',
          'version' => 'VERSION',
          'base theme' => 'classy',
          'regions' => 
          array (
            'content' => 'Content',
            'left' => 'Left',
            'right' => 'Right',
          ),
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
      'config' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/modules/config/config.info.yml',
        'basename' => 'config.info.yml',
        'name' => 'Configuration Manager',
        'info' => 
        array (
          'name' => 'Configuration Manager',
          'type' => 'module',
          'description' => 'Allows administrators to import and export configuration changes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'configure' => 'config.sync',
        ),
        'schema_version' => 9000,
        'version' => '9.0.6',
      ),
    ),
    'themes' => 
    array (
      'thunder_admin' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/themes/contrib/thunder_admin/thunder_admin.info.yml',
        'basename' => 'thunder_admin.info.yml',
        'name' => 'Thunder Admin',
        'info' => 
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
          ),
          'version' => '4.0.0-beta2',
          'project' => 'thunder_admin',
          'datestamp' => 1598528939,
        ),
        'version' => '4.0.0-beta2',
      ),
      'bartik' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/bartik/bartik.info.yml',
        'basename' => 'bartik.info.yml',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'type' => 'theme',
          'base theme' => false,
          'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
          'package' => 'Core',
          'version' => 'VERSION',
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
        ),
        'version' => '9.0.6',
      ),
      'twig' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/engines/twig/twig.info.yml',
        'basename' => 'twig.info.yml',
        'name' => 'Twig',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Twig',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'version' => '9.0.6',
      ),
      'classy' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/classy/classy.info.yml',
        'basename' => 'classy.info.yml',
        'name' => 'Classy',
        'info' => 
        array (
          'name' => 'Classy',
          'type' => 'theme',
          'base theme' => 'stable',
          'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
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
        ),
        'version' => '9.0.6',
      ),
      'stable9' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/stable9/stable9.info.yml',
        'basename' => 'stable9.info.yml',
        'name' => 'Stable 9',
        'info' => 
        array (
          'name' => 'Stable 9',
          'type' => 'theme',
          'description' => 'A base theme using Drupal 9.0.0\'s core markup and CSS.',
          'package' => 'Core',
          'version' => 'VERSION',
          'base theme' => false,
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
        ),
        'version' => '9.0.6',
      ),
      'claro' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/claro/claro.info.yml',
        'basename' => 'claro.info.yml',
        'name' => 'Claro',
        'info' => 
        array (
          'name' => 'Claro',
          'type' => 'theme',
          'base theme' => false,
          'description' => 'A clean, accessible, and powerful Drupal administration theme.',
          'alt text' => 'Screenshot of Claro, Drupal administration theme.',
          'package' => 'Core',
          'version' => 'VERSION',
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
          ),
        ),
        'version' => '9.0.6',
      ),
      'stark' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/stark/stark.info.yml',
        'basename' => 'stark.info.yml',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'type' => 'theme',
          'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'base theme' => false,
        ),
        'version' => '9.0.6',
      ),
      'stable' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/stable/stable.info.yml',
        'basename' => 'stable.info.yml',
        'name' => 'Stable',
        'info' => 
        array (
          'name' => 'Stable',
          'type' => 'theme',
          'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
          'package' => 'Core',
          'version' => 'VERSION',
          'base theme' => false,
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
        ),
        'version' => '9.0.6',
      ),
      'seven' => 
      array (
        'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/core/themes/seven/seven.info.yml',
        'basename' => 'seven.info.yml',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'type' => 'theme',
          'base theme' => false,
          'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
          'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
          'package' => 'Core',
          'version' => 'VERSION',
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
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/classy/components/media-embed-error.css',
          ),
        ),
        'version' => '9.0.6',
      ),
    ),
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
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'thunder' => 
    array (
      'modules' => 
      array (
        'thunder_liveblog' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_liveblog/thunder_liveblog.info.yml',
          'basename' => 'thunder_liveblog.info.yml',
          'name' => 'Thunder Liveblog',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_ivw' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_ivw/thunder_ivw.info.yml',
          'basename' => 'thunder_ivw.info.yml',
          'name' => 'Thunder IVW',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_password_policy' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_password_policy/thunder_password_policy.info.yml',
          'basename' => 'thunder_password_policy.info.yml',
          'name' => 'Thunder Password Policy',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_demo' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_demo/thunder_demo.info.yml',
          'basename' => 'thunder_demo.info.yml',
          'name' => 'Thunder Demo',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_paragraphs' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_paragraphs/thunder_paragraphs.info.yml',
          'basename' => 'thunder_paragraphs.info.yml',
          'name' => 'Thunder Paragraphs',
          'info' => 
          array (
            'name' => 'Thunder Paragraphs',
            'description' => 'Provide paragaphs functions for Thunder.',
            'type' => 'module',
            'core_version_requirement' => '^9',
            'package' => 'Thunder',
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_google_analytics' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_google_analytics/thunder_google_analytics.info.yml',
          'basename' => 'thunder_google_analytics.info.yml',
          'name' => 'Thunder Google Analytics',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_article' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_article/thunder_article.info.yml',
          'basename' => 'thunder_article.info.yml',
          'name' => 'Thunder Article',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_media' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_media/thunder_media.info.yml',
          'basename' => 'thunder_media.info.yml',
          'name' => 'Thunder Media',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_translation' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_translation/thunder_translation.info.yml',
          'basename' => 'thunder_translation.info.yml',
          'name' => 'Thunder Translation',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_taxonomy' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_taxonomy/thunder_taxonomy.info.yml',
          'basename' => 'thunder_taxonomy.info.yml',
          'name' => 'Thunder Taxonomy',
          'info' => 
          array (
            'name' => 'Thunder Taxonomy',
            'description' => 'Provide taxonomy functions for Thunder.',
            'type' => 'module',
            'core_version_requirement' => '^9',
            'package' => 'Thunder',
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_search' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_search/thunder_search.info.yml',
          'basename' => 'thunder_search.info.yml',
          'name' => 'Thunder Search API',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
        'thunder_workflow' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/modules/thunder_workflow/thunder_workflow.info.yml',
          'basename' => 'thunder_workflow.info.yml',
          'name' => 'Thunder Workflow',
          'info' => 
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
          ),
          'schema_version' => 9000,
          'version' => '9.0.6',
        ),
      ),
      'themes' => 
      array (
        'thunder_base' => 
        array (
          'filename' => '/data/disk/o800026880/distro/054/thunder-6.0.2-9.0/docroot/profiles/contrib/thunder/themes/thunder_base/thunder_base.info.yml',
          'basename' => 'thunder_base.info.yml',
          'name' => 'Thunder Base',
          'info' => 
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
          ),
          'version' => '9.0.6',
        ),
      ),
    ),
  ),
);