<?php

namespace App;

use Sober\Controller\Controller;

class Destinations extends Controller
{

  public function destinations()
  {
    $destinations = get_terms( 'destination', [ 'hide_empty' => false] );
    return $destinations;
  }

}
