<html>
<body>

<strong>
<?php

# SUPRESS WARNINGS
error_reporting(E_ERROR | E_PARSE);

$ip = $_SERVER['REMOTE_ADDR'];
$request_uri=$_SERVER['REQUEST_URI'];
$n= $_REQUEST['n'];

function calc($n) {
    echo $n*$n;
}

function main($ip, $n, $request_uri) {
        return calc($n);
}

main($ip, $n, $request_uri );

?>

</strong>
</body>
</html>