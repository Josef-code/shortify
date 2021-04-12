<?php

include 'inc/header.php';
require 'controller.php';

	$check = new Welcome();

?>

<div class="container resultcontainer">
	<div class="card">
	  <div class="card-header">
	    <h5>Result:</h5>
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">
			<div class="alert alert-success" role="alert">
			  URL successfully shorten!
			</div>
		</h5>
	    <p class="card-text">Congratulations! Your long URL has been successfully shorten and you can start sharing the links to grow your brand. Remember to tell your friends about shortify.</p>
	    <a href="index.php" class="btn btn-primary">Go back to homepage</a>
	  </div>
	</div>
</div>


















<!-- // $cURLConnection = curl_init();

// curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.shrtco.de/v2/shorten?url=google.com');
// curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

// $linkList = curl_exec($cURLConnection);

// $responseList = json_decode($linkList, true);

// echo $responseList["result"]["short_link2"];

// // var_dump(json_decode($linkList, true));

// curl_close($cURLConnection); -->