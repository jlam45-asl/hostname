<?php
$host = gethostname();
$pattern = '/(..*)\...*/i';
$replacement = '$1';
$host = preg_replace($pattern, $replacement, $host);

print "This is $host";
?>
