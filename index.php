<?php 

require 'inc/header.php';
require 'controller.php';

?>

	<div class="main">
		<img id="img" src="unboard.svg" width="250px" height="250px">
		<h1 id="h1">The shorter the Better!</h1>
		<p class="descript">A shortened link is easier for your readers to click, copy, and share in their own post, which can help your content gain organic exposure on social networks. Build your brand!</p>

		<form class="form-inline" action="result.php" method="GET"> 
			  <div class="form-group mx-sm-3 mb-2">
			    <input type="text" class="form-control group-form" id="url" name="url" placeholder="URL" required>
			  </div>
			  <button type="submit" class="btn btn-outline-primary mb-2" name="submit">Shorten</button>
		</form>

	</div>
	
</body>
</html>

