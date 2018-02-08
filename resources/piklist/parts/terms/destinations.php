<?php
/*
Title: Extra options
Taxonomy: destination
Capability: manage_options
*/

piklist('field', array(
  'type' => 'editor',
  'field' => 'dsc_destination_editor',
  'label' => 'Content',
  'options' => [
    'wpautop'           => true,
    'media_buttons'     => true,
    'shortcode_buttons' => true,
    'teeny'             => true,    
    'quicktags'         => true,
    'drag_drop_upload'  => true,
    'tinymce' => [
      'resize' => false,
      'wp_autoresize_on' => true
    ]
  ]
));

//Let's create a text box field
piklist('field', [
  'type'     => 'file',
  'field'    => 'destination_images',
  'label'    => __('Images'),
]);
