<?php


/**
 * 
 */
class Welcome
{
	
	public function __construct()
	{
		
		$urlinput = $_GET["url"];

		$urlvalue = stripcslashes($urlinput);

			if ($urlinput === '') {
				header("Location: index.php");
				exit;
			} 
			
	}

}


?>