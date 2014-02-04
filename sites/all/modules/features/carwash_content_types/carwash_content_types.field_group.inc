<?php
/**
 * @file
 * carwash_content_types.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function carwash_content_types_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_personal_information_disp|node|client|default';
  $field_group->group_name = 'group_personal_information_disp';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'client';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Personal information',
    'weight' => '3',
    'children' => array(
      0 => 'field_company',
      1 => 'field_dni',
      2 => 'field_address',
      3 => 'field_cellphone',
      4 => 'field_telephone',
      5 => 'field_email',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-personal-information-disp field-group-fieldset',
      ),
    ),
  );
  $export['group_personal_information_disp|node|client|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_personal_information|node|client|form';
  $field_group->group_name = 'group_personal_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'client';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Personal information',
    'weight' => '4',
    'children' => array(
      0 => 'field_company',
      1 => 'field_dni',
      2 => 'field_address',
      3 => 'field_cellphone',
      4 => 'field_telephone',
      5 => 'field_email',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-personal-information field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_personal_information|node|client|form'] = $field_group;

  return $export;
}
