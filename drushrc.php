<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'huang';
$options['db_port'] = '3306';
$options['db_passwd'] = 'fbatrnzgm6';
$options['db_name'] = 'forestethicshu_0';
$options['db_user'] = 'forestethicshu_0';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.10',
      'description' => 'This platform is running Drupal 7.10',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => '/var/aegir/platforms/drupal-7.10/profiles/standard/standard.profile',
      'project' => 'drupal',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'files' => 
        array (
          0 => 'standard.profile',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.10',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aaa_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/update/tests/aaa_update_test.module',
      'name' => 'aaa_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AAA Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'actions_loop_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/actions_loop_test.module',
      'name' => 'actions_loop_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions loop test',
        'description' => 'Support module for action loop testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'aggregator_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/aggregator/tests/aggregator_test.module',
      'name' => 'aggregator_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator module tests',
        'description' => 'Support module for aggregator related testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'ajax_forms_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/ajax_forms_test.module',
      'name' => 'ajax_forms_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX form test mock module',
        'description' => 'Test for AJAX form calls.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'ajax_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/ajax_test.module',
      'name' => 'ajax_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Test',
        'description' => 'Support module for AJAX framework tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'batch_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/batch_test.module',
      'name' => 'batch_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Batch API test',
        'description' => 'Support module for Batch API tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'bbb_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/update/tests/bbb_update_test.module',
      'name' => 'bbb_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BBB Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'block_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/block/tests/block_test.module',
      'name' => 'block_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test',
        'description' => 'Provides test blocks.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'ccc_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/update/tests/ccc_update_test.module',
      'name' => 'ccc_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCC Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'common_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/common_test.module',
      'name' => 'common_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test',
        'description' => 'Support module for Common tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'common_test.css',
          ),
          'print' => 
          array (
            0 => 'common_test.print.css',
          ),
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'common_test_cron_helper' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/common_test_cron_helper.module',
      'name' => 'common_test_cron_helper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test Cron Helper',
        'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.10',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'database_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/database_test.module',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Test',
        'description' => 'Support module for Database layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'drupal_system_listing_compatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
      'name' => 'drupal_system_listing_compatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing compatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'drupal_system_listing_incompatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
      'name' => 'drupal_system_listing_incompatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing incompatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'entity_cache_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/entity_cache_test.module',
      'name' => 'entity_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test',
        'description' => 'Support module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_cache_test_dependency',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'entity_cache_test_dependency' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/entity_cache_test_dependency.module',
      'name' => 'entity_cache_test_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test dependency',
        'description' => 'Support dependency module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'entity_crud_hook_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/entity_crud_hook_test.module',
      'name' => 'entity_crud_hook_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD Hooks Test',
        'description' => 'Support module for CRUD hook tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'error_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/error_test.module',
      'name' => 'error_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Error test',
        'description' => 'Support module for error and exception testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'field_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/tests/field_test.module',
      'name' => 'field_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field API Test',
        'description' => 'Support module for the Field API tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'files' => 
        array (
          0 => 'field_test.entity.inc',
        ),
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'file_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/file/tests/file_module_test.module',
      'name' => 'file_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Provides hooks for testing File module functionality.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'file_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/file_test.module',
      'name' => 'file_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Support module for file handling tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'filter_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/filter_test.module',
      'name' => 'filter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter test module',
        'description' => 'Tests filter hooks and functions.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'form_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/form_test.module',
      'name' => 'form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FormAPI Test',
        'description' => 'Support module for Form API tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'image_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/image/tests/image_module_test.module',
      'name' => 'image_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Provides hook implementations for testing Image module functionality.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_module_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'image_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/image_test.module',
      'name' => 'image_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Support module for image toolkit tests.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'list_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/modules/list/tests/list_test.module',
      'name' => 'list_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List test',
        'description' => 'Support module for the List module tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'locale_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/locale/tests/locale_test.module',
      'name' => 'locale_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale Test',
        'description' => 'Support module for the locale layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'menu_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/menu_test.module',
      'name' => 'menu_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook menu tests',
        'description' => 'Support module for menu hook testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/module_test.module',
      'name' => 'module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module test',
        'description' => 'Support module for module system testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7012',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'node_access_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/node/tests/node_access_test.module',
      'name' => 'node_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module access tests',
        'description' => 'Support module for node permission testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'node_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/node/tests/node_test.module',
      'name' => 'node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module tests',
        'description' => 'Support module for node related testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'node_test_exception' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/node/tests/node_test_exception.module',
      'name' => 'node_test_exception',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module exception tests',
        'description' => 'Support module for node related exception testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.10',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'openid_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/openid/tests/openid_test.module',
      'name' => 'openid_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID dummy provider',
        'description' => 'OpenID provider used for testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile.test',
        ),
        'configure' => 'admin/config/people/profile',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'rdf_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/rdf/tests/rdf_test.module',
      'name' => 'rdf_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF module tests',
        'description' => 'Support module for RDF module testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'requirements1_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/requirements1_test.module',
      'name' => 'requirements1_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 1 Test',
        'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'requirements2_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/requirements2_test.module',
      'name' => 'requirements2_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 2 Test',
        'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
        'dependencies' => 
        array (
          0 => 'requirements1_test',
          1 => 'comment',
        ),
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'revisioning' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10',
      'name' => 'revisioning',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'search_embedded_form' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/search/tests/search_embedded_form.module',
      'name' => 'search_embedded_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search embedded form',
        'description' => 'Support module for search module testing of embedded forms.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'search_extra_type' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/search/tests/search_extra_type.module',
      'name' => 'search_extra_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test search type',
        'description' => 'Support module for search module testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'session_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/session_test.module',
      'name' => 'session_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session test',
        'description' => 'Support module for session data testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/password.test',
          22 => 'tests/path.test',
          23 => 'tests/registry.test',
          24 => 'tests/schema.test',
          25 => 'tests/session.test',
          26 => 'tests/tablesort.test',
          27 => 'tests/theme.test',
          28 => 'tests/unicode.test',
          29 => 'tests/update.test',
          30 => 'tests/xmlrpc.test',
          31 => 'tests/upgrade/upgrade.test',
          32 => 'tests/upgrade/upgrade.comment.test',
          33 => 'tests/upgrade/upgrade.filter.test',
          34 => 'tests/upgrade/upgrade.forum.test',
          35 => 'tests/upgrade/upgrade.locale.test',
          36 => 'tests/upgrade/upgrade.menu.test',
          37 => 'tests/upgrade/upgrade.node.test',
          38 => 'tests/upgrade/upgrade.taxonomy.test',
          39 => 'tests/upgrade/upgrade.translatable.test',
          40 => 'tests/upgrade/upgrade.upload.test',
          41 => 'tests/upgrade/upgrade.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'standard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/profiles/standard/standard.profile',
      'name' => 'standard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'files' => 
        array (
          0 => 'standard.profile',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7071',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/system_dependencies_test.module',
      'name' => 'system_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System dependency test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => '_missing_dependency',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_core_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
      'name' => 'system_incompatible_core_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_core_version_test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_core_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/system_incompatible_core_version_test.module',
      'name' => 'system_incompatible_core_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '5.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_module_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
      'name' => 'system_incompatible_module_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_module_version_test (>2.0)',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_incompatible_module_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/system_incompatible_module_version_test.module',
      'name' => 'system_incompatible_module_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'system_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/system_test.module',
      'name' => 'system_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System test',
        'description' => 'Support module for system testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'taxonomy_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/taxonomy_test.module',
      'name' => 'taxonomy_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy test module',
        'description' => '"Tests functions and hooks not used in core".',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'theme_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/theme_test.module',
      'name' => 'theme_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme test',
        'description' => 'Support module for theme system testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'translation_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/translation/tests/translation_test.module',
      'name' => 'translation_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Translation Test',
        'description' => 'Support module for the content translation tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'trigger_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/trigger/tests/trigger_test.module',
      'name' => 'trigger_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger Test',
        'description' => 'Support module for Trigger tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.10',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_script_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/update_script_test.module',
      'name' => 'update_script_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update script test',
        'description' => 'Support module for update script testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/update/tests/update_test.module',
      'name' => 'update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_1' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/update_test_1.module',
      'name' => 'update_test_1',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_2' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/update_test_2.module',
      'name' => 'update_test_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/update_test_3.module',
      'name' => 'update_test_3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'url_alter_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/url_alter_test.module',
      'name' => 'url_alter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Url_alter tests',
        'description' => 'A support modules for url_alter hook testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.10',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7017',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'user_form_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/user/tests/user_form_test.module',
      'name' => 'user_form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User module form tests',
        'description' => 'Support module for user form testing.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'xmlrpc_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/modules/simpletest/tests/xmlrpc_test.module',
      'name' => 'xmlrpc_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML-RPC Test',
        'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
        'package' => 'Testing',
        'version' => '7.10',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
  ),
  'themes' => 
  array (
    'block_test_theme' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/themes/tests/block_test_theme/block_test_theme.info',
      'name' => 'block_test_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test theme',
        'description' => 'Theme for testing the block system',
        'core' => '7.x',
        'hidden' => true,
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
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.10',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'test_theme' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/themes/tests/test_theme/test_theme.info',
      'name' => 'test_theme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test theme',
        'description' => 'Theme for testing the theme system',
        'core' => '7.x',
        'hidden' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'system.base.css',
          ),
        ),
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_basetheme' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/themes/tests/update_test_basetheme/update_test_basetheme.info',
      'name' => 'update_test_basetheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test base theme',
        'description' => 'Test theme which acts as a base theme for other test subthemes.',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
    'update_test_subtheme' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.10/themes/tests/update_test_subtheme/update_test_subtheme.info',
      'name' => 'update_test_subtheme',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test subtheme',
        'description' => 'Test theme which uses update_test_basetheme as the base theme.',
        'core' => '7.x',
        'base theme' => 'update_test_basetheme',
        'hidden' => true,
        'version' => '7.10',
        'project' => 'drupal',
        'datestamp' => '1323125439',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.10',
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '127.0.0.1',
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
