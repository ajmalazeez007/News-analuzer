<?php
  
  require __DIR__ . '/vendor/autoload.php';

  $textapi = new AYLIEN\TextAPI("53bb43a0", "e848b0a45859147204cf42a5711947ca");

  $matter = $_POST['matter'];
$hashtags = $textapi->Hashtags(array('text' => $matter));
echo implode(', ', $hashtags->hashtags);

?>