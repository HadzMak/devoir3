<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
$
(

  $('#lstRegion').change
  (
      function()
      {
          GetAllRegion();
      }
  );
<?php
    echo "<table class='table table-hover'>";
    foreach($lesRegion as $region)
    {
        echo "<tr><td>".$region->nomRegion."</td>
        <td>".$region->scoreRegion."</td></tr>";     
    }
    echo "</table>";

  
?>
</body>
</html>