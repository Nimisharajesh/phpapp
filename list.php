<?php
/**
 * Returns the list of cars.
 */
require 'connect.php';
    
$stocks = [];
$sql = "SELECT  * FROM stock_data";

if($result = mysqli_query($con,$sql))
{
  $cr = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $stocks[$cr]['id']    = $row['id'];
    $stocks[$cr]['name'] = $row['Name'];
    $cr++;
  }
    
  echo json_encode(['data'=>$stocks]);
}
else
{
  http_response_code(404);
}
