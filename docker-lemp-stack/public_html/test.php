<?php

include('./database/db.php');

?>
<h1>Hello TEST :: PHP DOCKER</h1>

<table border="1">
  <tr>
    <th>ID</th>
    <th>CATEGORY</th>
    <th>NAME</th>
    <th>PRICE</th>
  </tr>
  <?php

  $sql = 'SELECT * FROM product';
  $result = $conn->query($sql);

  while ($row = $result->fetch_array()) {
  ?>
  <tr>
    <td><?=$row['id']?></td>
    <td><?=$row['category']?></td>
    <td><?=$row['name']?></td>
    <td><?=$row['price']?></td>
  </tr>
  <?php
  } // while
  ?>
</table>