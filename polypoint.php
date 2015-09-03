<?php

class polygon {

  public $sides = 3;
  public $radius = 1;

  /*
   * generate_vertices:
   * http://stackoverflow.com/questions/3436453/calculate-coordinates-of-a-regular-polygons-vertices
   *
   */

  function generate_vertices($sides=null, $radius=null){
    $verts = array();

    if(!$sides) $sides = $this->sides;
    if(!$radius) $radius = $this->radius;

    for ($i=0; $i<$sides; $i++) {
      $verts[] = array(
        $radius * cos(2 * M_PI * $i / $sides),
        $radius * sin(2 * M_PI * $i / $sides),
      );
    }

    return $verts;
  }

  /*
   *  point_in_polygon:
   *  https://github.com/substack/point-in-polygon
   *
   */

  function point_in_polygon($point, $polygon=null){

    if(!$polygon) $polygon = $this->generate_vertices();
    $x = $point[0];
    $y = $point[1];
    $inside = false;

    for($i=0, $j=count($polygon)-1; $i<count($polygon); $j=$i++){
      $xi = $polygon[$i][0];
      $yi = $polygon[$i][1];

      $xj = $polygon[$j][0];
      $yj = $polygon[$j][1];

      $intersect = (($yi > $y) != ($yj > $y)) && ($x < ($xj - $xi) * ($y - $yi) / ($yj - $yi) + $xi);
      if($intersect) $inside = !$inside;
    }

    return $inside;
  }
}

class regular_triangle extends polygon {
  var $sides = 3;
  var $radius = 1;
}

class regular_octagon extends polygon {
  var $sides = 8;
  var $radius = 22.3;
}
