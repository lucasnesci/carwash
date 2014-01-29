<?php

/**
 * @file
 * Administration page callbakcs for the carwash_blocks module.
 */

/**
 * Form builder. Configure spots greenlight.
 *
 * @ingroup forms
 * @see system_settings_form()
 */
function carwash_blocks_admin_settings() {
  $form['carwash_profile_phone'] = array(
    '#type' => 'textfield',
    '#title' => t('Telephone'),
    '#description' => t('Current car wash telephone.'),
    '#default_value' => variable_get('carwash_profile_phone', NULL),
    '#size' => 30,
  );
  $form['carwash_profile_cellphone'] = array(
    '#type' => 'textfield',
    '#title' => t('Cellphone'),
    '#description' => t('Current car wash cellphone.'),
    '#default_value' => variable_get('carwash_profile_cellphone', NULL),
    '#size' => 30,
  );
  $form['carwash_profile_address'] = array(
    '#type' => 'textfield',
    '#title' => t('Address'),
    '#description' => t('Current car wash address.'),
    '#default_value' => variable_get('carwash_profile_address', NULL),
    '#size' => 30,
  );
  $form['carwash_profile_latitude'] = array(
    '#type' => 'textfield',
    '#title' => t('Latitude'),
    '#description' => t('Current car wash latitude.'),
    '#default_value' => variable_get('carwash_profile_latitude', NULL),
    '#size' => 30,
  );
  $form['carwash_profile_longitude'] = array(
    '#type' => 'textfield',
    '#title' => t('Longitude'),
    '#description' => t('Current car wash longitude.'),
    '#default_value' => variable_get('carwash_profile_longitude', NULL),
    '#size' => 30,
  );
  $form['carwash_profile_email'] = array(
    '#type' => 'textfield',
    '#title' => t('Email'),
    '#description' => t('Current car wash email.'),
    '#default_value' => variable_get('carwash_profile_email', NULL),
    '#size' => 30,
  );
  $form['carwash_profile_facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#description' => t('Current car wash facebook page.'),
    '#default_value' => variable_get('carwash_profile_facebook', NULL),
    '#size' => 30,
  );
  return system_settings_form($form);
}
