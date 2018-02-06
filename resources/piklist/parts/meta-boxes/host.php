<?php
/*
 * Title: Host information
 * Post type: hosting
**/

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_address',
  'label'   => 'Address',
  'columns' => 12
]);


piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_phone',
  'label'   => 'Phone',
  'columns' => 6
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_email',
  'label'   => 'Email',
  'columns' => 6
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_website',
  'label'   => 'Website',
  'columns' => 12
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_facebook',
  'label'   => 'Facebook',
  'columns' => 12
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_instagram',
  'label'   => 'Instagram',
  'columns' => 12
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_twitter',
  'label'   => 'Twitter',
  'columns' => 12
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_youtube',
  'label'   => 'Youtube',
  'columns' => 12
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_google_plus',
  'label'   => 'Google+',
  'columns' => 12
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'dsc_host_pinterest',
  'label'   => 'Pinterest',
  'columns' => 12
]);

piklist('field', [
  'type'    => 'select',
  'field'   => 'dsc_host_type',
  'label'   => 'Property type',
  'choices' => [
    'hotel'       => 'Hotel',
    'posada'      => 'Posada',
    'apartamento' => 'Apartamento',
    'resort'      => 'Resort',
    'motel'       => 'Motel',
    'hostal'      => 'Hostal'
  ]
]);

piklist('field', [
  'type'    => 'select',
  'field'   => 'dsc_host_star_rating',
  'label'   => 'Star rating',
  'choices' => [
    '1' => '1 Star',
    '2' => '2 Stars',
    '3' => '3 Stars',
    '4' => '4 Stars',
    '5' => '5 Stars',
  ]
]);

piklist('field', [
    'type'     => 'file',
    'field'    => 'dsc_host_images',
    'label'    => __('Images'),
]);
