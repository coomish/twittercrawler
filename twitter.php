<?php

require __DIR__ . '/vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'x');
define('CONSUMER_SECRET', 'x');
define('ACCESS_TOKEN', 'x-x');
define('ACCESS_TOKEN_SECRET', 'x');

$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);


  $query = array(
    "screen_name" => "ksriservices",
    "count" => 10,
  );

  $results = $toa->get('statuses/user_timeline', $query);



  foreach ($results as $result) {
    print_r($result->text .  ' Time:' .  $result->created_at . '<br/>');
  }





?>
