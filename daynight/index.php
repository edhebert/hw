<?php
/*
 * Ed Hebert
 * ehebert@fas.harvard.edu
 * Day / Night
 * change background at time of day
 */
 ?>
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datetime with PHP</title>
	<link href='css/site.css' rel='stylesheet' type='text/css'>
</head>
<?php 
	// if the hour is between 6:00A and 8:00 PM make bg blue
	if ((date("G") > 6) || (date("G") < 19))
		$background = "day";
	else
		$background = "night";
?>

<body class="<?php echo $background ?>">
	
</body>
</html>