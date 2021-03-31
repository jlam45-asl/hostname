<?php
$host = gethostname();
$pattern = '/([A-Za-z0-9-_]*)\...*/i';
$replacement = '$1';
$host = preg_replace($pattern, $replacement, $host);

echo "<h2>This is $host</h2>";
?>
