# point-in-polygon

Now you too can define polygons of various shapes and sizes! This class allows you to make polygon coordinate arrays, as well as determine whether a single point is within the polygon.

###Use

    class regular_triangle extends polygon {
      var $sides = 3;
      var $radius = 1;
    }

    $triangle = new regular_triangle();
    var_dump( $triangle->generate_vertices() );
    var_dump( $triangle->point_in_polygon( array(2,3) ) );
