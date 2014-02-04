<?php
/**
 * @file
 * carwash_content_types.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function carwash_content_types_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function carwash_content_types_node_info() {
  $items = array(
    'client' => array(
      'name' => t('Client'),
      'base' => 'node_content',
      'description' => t('Add a new client.'),
      'has_title' => '1',
      'title_label' => t('Patent'),
      'help' => '',
    ),
    'company' => array(
      'name' => t('Company'),
      'base' => 'node_content',
      'description' => t('Add a new company.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'ct_about_us' => array(
      'name' => t('About us'),
      'base' => 'node_content',
      'description' => t('This content type is used to describe the company.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'ct_gallery_image' => array(
      'name' => t('Gallery image'),
      'base' => 'node_content',
      'description' => t('Add an image to the gallery.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'ct_promotion' => array(
      'name' => t('Promotion'),
      'base' => 'node_content',
      'description' => t('This content type is used to create promotions.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'ct_service' => array(
      'name' => t('Service'),
      'base' => 'node_content',
      'description' => t('Add a new service given to a client.'),
      'has_title' => '1',
      'title_label' => t('Service number'),
      'help' => '',
    ),
  );
  return $items;
}
