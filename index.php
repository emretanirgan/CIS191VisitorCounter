<html>
<head>
<title>CIS 191 Proj 3</title>
<head>
<body>
	<h1> Welcome to the Visitor Counter! </h1>
	<?php
	echo 'Number of visitors: ' . "\n";
	$output = exec("python getvisitors.py");
	echo $output;
	exec("python updatevisitors.py");
	?>
	<br/>
	<?php
	echo 'You visited on this time and date: ' . "\n";
	print date('D, d M Y H:i:s ');
	?>
	<br/>
	<?php
	echo 'OS and web browser information:' . "\n";
	echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";


	
	?>
	<?php
	
include('ip2locationlite.class.php');
 
//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('1948bd16a9392eb1da90aeda234d88479a2c37a1f67e2dae19f1746119a5976a');
 
//Get errors and locations
$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
$errors = $ipLite->getError();
 
//Getting the result
echo "<p>\n";
echo "<strong>Location Info</strong><br />\n";
if (!empty($locations) && is_array($locations)) {
  foreach ($locations as $field => $val) {
    echo $field . ' : ' . $val . "<br />\n";
  }
}
echo "</p>\n";
	?>












</body>
</html>
