<?php

namespace IMAGA\Theme\WooCommerce;

// Source: https://stackoverflow.com/a/47368816
add_filter('woocommerce_general_settings', __NAMESPACE__ . '\\woocommerce_settings_fields');
function woocommerce_settings_fields($settings) {
    $key = 0;

    foreach( $settings as $values ):
        $new_settings[$key] = $values;
        $key++;



        if($values['id'] == 'woocommerce_store_postcode'):

            // Add phonenumber
            $new_settings[$key] = array(
                'title'    => __('Phone Number'),
                'desc'     => __('Optional phone number of your business office'),
                'id'       => 'woocommerce_store_phone', // <= The field ID (important)
                'default'  => '',
                'type'     => 'text',
                'desc_tip' => true, // or false
            );
            $key++;

            // Add contact emailaddress
            $new_settings[$key] = array(
                'title'    => __('E-mail'),
                'desc'     => __('Optional E-mailaddress of your business office'),
                'id'       => 'woocommerce_store_email', // <= The field ID (important)
                'default'  => '',
                'type'     => 'text',
                'desc_tip' => true, // or false
            );
            $key++;
        endif;

        // Add a openingstimes section after address
        if( $values['id'] == 'store_address' and $values['type'] == 'sectionend' ):

          // open section
          $new_settings[$key] = array(
              'title'    => __('Openingstijden'),
              'type'     => 'title',
              'desc'     => __('Openingstijden van de winkel'),
              'id'       => 'store_shoppinghours', // <= The field ID (important)
          );
          $key++;

          // Add monday
          $new_settings[$key] = array(
              'title'    => __('Maandag'),
              'desc'     => __('Voer in als "13.00 - 17.00".'),
              'id'       => 'woocommerce_store_shoppinghours_monday', // <= The field ID (important)
              'default'  => '13.00 - 17.00',
              'type'     => 'text',
              'desc_tip' => true, // or false
          );
          $key++;

          // Add tuesday til friday
          $new_settings[$key] = array(
              'title'    => __('Di t/m vr'),
              'desc'     => __('Voer in als "9.00 - 12.30 / 13.30 - 17.00".'),
              'id'       => 'woocommerce_store_shoppinghours_tue_vr', // <= The field ID (important)
              'default'  => '9.00 - 12.30 / 13.30 - 17.00',
              'type'     => 'text',
              'desc_tip' => true, // or false
          );
          $key++;

          // Add caturday
          $new_settings[$key] = array(
              'title'    => __('Zaterdag'),
              'desc'     => __('Voer in als "9.00 - 16.00".'),
              'id'       => 'woocommerce_store_shoppinghours_saturday', // <= The field ID (important)
              'default'  => '9.00 - 16.00',
              'type'     => 'text',
              'desc_tip' => true, // or false
          );
          $key++;

          // Close section
          $new_settings[$key] = array(
              'type'     => 'sectionend',
              'id'       => 'store_shoppinghours', // <= The field ID (important)
          );
          $key++;
        endif;

    endforeach;
    return $new_settings;
}
