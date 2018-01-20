<?php
/*
Title: Extra options
Taxonomy: destination
Capability: manage_options
*/

//Let's create a text box field
 piklist('field', [
     'type'     => 'file',
     'field'    => 'destination_images',
     'label'    => __('Images'),
 ]);
