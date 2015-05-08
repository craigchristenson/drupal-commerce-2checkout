<?php

/**
 * @file
 * Documents hooks provided by the Commerce 2Checkout module.
 */


/**
 * Allows modules to alter the data array used to create the request form.
 *
 * @param &$data
 *   The data array used to create the request form elements.
 * @param $order
 *   The full order object the request form is being generated for.
 *
 * @see commerce_2checkout_purchase_parameters()
 */
function hook_commerce_2checkout_order_form_data_alter(&$data, $order) {
  unset($data['currency_code']);
}
