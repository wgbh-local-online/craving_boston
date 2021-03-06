<?php

/**
 * @file
 * Filled installation of Recipe 7.x-1.3, for test purposes.
 *
 * This file was generated by the dump-database-d7.sh tool, from an
 * installation of Drupal 7:
 */

db_insert('node')->fields(array(
  'nid',
  'vid',
  'type',
  'language',
  'title',
  'uid',
  'status',
  'created',
  'changed',
  'comment',
  'promote',
  'sticky',
  'tnid',
  'translate',
))
->values(array(
  'nid' => '1',
  'vid' => '1',
  'type' => 'recipe',
  'language' => 'und',
  'title' => 'Salt water',
  'uid' => '1',
  'status' => '1',
  'created' => '1372914408',
  'changed' => '1372914408',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
  'tnid' => '0',
  'translate' => '0',
))
->execute();

db_insert('node_comment_statistics')->fields(array(
  'nid',
  'cid',
  'last_comment_timestamp',
  'last_comment_name',
  'last_comment_uid',
  'comment_count',
))
->values(array(
  'nid' => '1',
  'cid' => '0',
  'last_comment_timestamp' => '1372914408',
  'last_comment_name' => NULL,
  'last_comment_uid' => '1',
  'comment_count' => '0',
))
->execute();

db_insert('node_revision')->fields(array(
  'nid',
  'vid',
  'uid',
  'title',
  'log',
  'timestamp',
  'status',
  'comment',
  'promote',
  'sticky',
))
->values(array(
  'nid' => '1',
  'vid' => '1',
  'uid' => '1',
  'title' => 'Salt water',
  'log' => '',
  'timestamp' => '1372914408',
  'status' => '1',
  'comment' => '2',
  'promote' => '1',
  'sticky' => '0',
))
->execute();

db_insert('node_type')->fields(array(
  'type',
  'name',
  'base',
  'module',
  'description',
  'help',
  'has_title',
  'title_label',
  'custom',
  'modified',
  'locked',
  'disabled',
  'orig_type',
))
->values(array(
  'type' => 'recipe',
  'name' => 'Recipe',
  'base' => 'recipe',
  'module' => 'recipe',
  'description' => 'Share your favorite recipes with your fellow cooks.',
  'help' => '',
  'has_title' => '1',
  'title_label' => 'Title',
  'custom' => '0',
  'modified' => '0',
  'locked' => '1',
  'disabled' => '0',
  'orig_type' => 'recipe',
))
->execute();

db_create_table('recipe', array(
  'fields' => array(
    'nid' => array(
      'type' => 'serial',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
    'source' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => 255,
    ),
    'yield' => array(
      'type' => 'int',
      'unsigned' => FALSE,
      'not null' => TRUE,
    ),
    'yield_unit' => array(
      'type' => 'varchar',
      'length' => 64,
      'not null' => TRUE,
      'default' => '',
    ),
    'description' => array(
      'type' => 'text',
    ),
    'instructions' => array(
      'type' => 'text',
    ),
    'notes' => array(
      'type' => 'text',
    ),
    'preptime' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'default' => 0,
    ),
    'cooktime' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'default' => 0,
    ),
  ),
  'primary key' => array(
    'nid',
  ),
  'module' => 'recipe',
  'name' => 'recipe',
));
db_insert('recipe')->fields(array(
  'nid',
  'source',
  'yield',
  'yield_unit',
  'description',
  'instructions',
  'notes',
  'preptime',
  'cooktime',
))
->values(array(
  'nid' => '1',
  'source' => 'John Doe',
  'yield' => '1',
  'yield_unit' => 'Servings',
  'description' => 'Basic salt water.',
  'instructions' => "Combine water and salt in a glass.\r\n\r\nStir.",
  'notes' => 'Do not consume!',
  'preptime' => '1',
  'cooktime' => '2',
))
->execute();

db_create_table('recipe_ingredient', array(
  'fields' => array(
    'id' => array(
      'type' => 'serial',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
    'name' => array(
      'type' => 'varchar',
      'length' => 255,
    ),
    'link' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
  ),
  'primary key' => array(
    'id',
  ),
  'module' => 'recipe',
  'name' => 'recipe_ingredient',
));
db_insert('recipe_ingredient')->fields(array(
  'id',
  'name',
  'link',
))
->values(array(
  'id' => '1',
  'name' => 'water',
  'link' => '0',
))
->values(array(
  'id' => '2',
  'name' => 'salt',
  'link' => '0',
))
->execute();

db_create_table('recipe_node_ingredient', array(
  'fields' => array(
    'id' => array(
      'type' => 'serial',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
    'nid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
    'unit_key' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => TRUE,
      'default' => '',
    ),
    'quantity' => array(
      'type' => 'float',
      'not null' => FALSE,
    ),
    'ingredient_id' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
    'weight' => array(
      'type' => 'int',
      'not null' => TRUE,
      'default' => 0,
    ),
    'note' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => TRUE,
      'default' => '',
    ),
  ),
  'primary key' => array(
    'id',
  ),
  'module' => 'recipe',
  'name' => 'recipe_node_ingredient',
));
db_insert('recipe_node_ingredient')->fields(array(
  'id',
  'nid',
  'unit_key',
  'quantity',
  'ingredient_id',
  'weight',
  'note',
))
->values(array(
  'id' => '1',
  'nid' => '1',
  'unit_key' => 'cup',
  'quantity' => '2',
  'ingredient_id' => '1',
  'weight' => '0',
  'note' => 'cold',
))
->values(array(
  'id' => '2',
  'nid' => '1',
  'unit_key' => 'tablespoon',
  'quantity' => '1',
  'ingredient_id' => '2',
  'weight' => '1',
  'note' => '',
))
->execute();

db_insert('system')->fields(array(
  'filename',
  'name',
  'type',
  'owner',
  'status',
  'bootstrap',
  'schema_version',
  'weight',
  'info',
))
->values(array(
  'filename' => 'sites/default/modules/recipe/recipe.module',
  'name' => 'recipe',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7004',
  'weight' => '0',
  'info' => 'a:11:{s:4:"name";s:6:"Recipe";s:11:"description";s:28:"Collect and display recipes.";s:7:"package";s:6:"Recipe";s:4:"core";s:3:"7.x";s:7:"version";s:7:"7.x-1.3";s:7:"project";s:6:"recipe";s:9:"datestamp";s:10:"1335415286";s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:5:"files";a:0:{}s:9:"bootstrap";i:0;}',
))
->execute();

db_insert('variable')->fields(array(
  'name',
  'value',
))
->values(array(
  'name' => 'recipe_add_more_count',
  'value' => 's:1:"5";',
))
->values(array(
  'name' => 'recipe_default_unit',
  'value' => 's:0:"";',
))
->values(array(
  'name' => 'recipe_fraction_display',
  'value' => 's:16:"{%d }%d&frasl;%d";',
))
->values(array(
  'name' => 'recipe_help',
  'value' => 's:26:"Test submission guideline.";',
))
->values(array(
  'name' => 'recipe_ingredient_name_normalize',
  'value' => 's:1:"0";',
))
->values(array(
  'name' => 'recipe_preferred_system_of_measure',
  'value' => 's:1:"0";',
))
->values(array(
  'name' => 'recipe_preferred_system_of_measure_limit',
  'value' => 'i:0;',
))
->values(array(
  'name' => 'recipe_recent_box_enable',
  'value' => 'i:1;',
))
->values(array(
  'name' => 'recipe_recent_box_title',
  'value' => 's:14:"Latest recipes";',
))
->values(array(
  'name' => 'recipe_recent_display',
  'value' => 's:1:"5";',
))
->values(array(
  'name' => 'recipe_summary_location',
  'value' => 's:1:"0";',
))
->values(array(
  'name' => 'recipe_summary_title',
  'value' => 's:7:"Summary";',
))
->values(array(
  'name' => 'recipe_unit_display',
  'value' => 's:1:"0";',
))
->execute();
