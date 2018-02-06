<?php

namespace App;

use Sober\Controller\Controller;

class Hosts extends Controller
{
  public static function facilities($id)
  {
    return wp_get_post_terms( $id, 'facility' );
  }

}
