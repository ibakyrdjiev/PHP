<?php
echo "<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='UTF-8'>
    <title>Problem07</title>
</head>
<body>";
$current = new DateTime();
$newYear = new DateTime("2014/12/31");
$diff = $current->diff($newYear);
printf("Before New Year we have: <br/ > %d weeks, <br/ > %s days,<br/ > "  .
    "%d hours,<br/ > %d minutes,<br/ > and %d seconds <br />
    ",
    floor($diff->format('%a') / 7),
    $diff->format('%a') % 7,
    $diff->format('%h'),
    $diff->format('%i'),
    $diff->format('%s'));
echo "
</body>
</html>";
?>

