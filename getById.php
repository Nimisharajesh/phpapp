<?php
require 'connect.php';

// Get the posted data.
$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
  // Extract the data.
  $request = json_decode($postdata);
	// print_r($request);
  // Validate.
  if(trim($request->id) == '')
  {
    return;
  }
    
  // Sanitize.
  $id   = mysqli_real_escape_string($con, trim($request->id));

  // Get by id.
  $sql = "SELECT * FROM `stock_data` WHERE `id` ='{$id}' LIMIT 1";

  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  
  $json = json_encode($row);
  echo $json;
}
// exit;