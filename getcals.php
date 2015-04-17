<?php
$date = new DateTime();
$ts = $date->getTimestamp();
$workdir = '/var/www/izzl.org/caltest/work';
function getfile($url,$tempname,$finalname) {
	exec("wget ${url} -O /tmp/${tempname}-${finalname}",$output,$retval);
	if($retval == 0) {
		
$thisworkdir = "{$workdir}/{$ts}';
mkdir($thisworkdir);
system('wget);
$cal = file_get_contents('/var/www/izzl.org/caltest/cal.ics');
echo $cal;
?>
