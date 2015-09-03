<?php require_once('polypoint.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Point In Polygon</title>
</head>
<body>

  <h1>Point in Polygon</h1>

  <h3>Test 1: Triangle</h3>

  <?php $triangle = new regular_triangle(); ?>

  <p>
    Class dump:
    <?php echo '<pre>'.print_r($triangle, true).'</pre>'; ?>
  </p>
  <p>
    Polygon Coordinates:
    <?php echo '<pre>'.print_r($triangle->generate_vertices(), true).'</pre>'; ?>
  </p>
  <p>
    Coordinate [2,3] in polygon:
    <?php echo '<pre>'.var_dump($triangle->point_in_polygon( array(2,3) ) ).'</pre>'; ?>
  </p>

  <hr />

  <h3>Test 2: Octagon</h3>

  <?php $octagon = new regular_octagon(); ?>

  <p>
    Class dump:
    <?php echo '<pre>'.print_r($octagon, true).'</pre>'; ?>
  </p>
  <p>
    Polygon Coordinates:
    <?php echo '<pre>'.print_r($octagon->generate_vertices(), true).'</pre>'; ?>
  </p>
  <p>
    Coordinate [2,3] in polygon:
    <?php echo '<pre>'.var_dump($octagon->point_in_polygon( array(2,3) ) ).'</pre>'; ?>
  </p>

</body>
</html>