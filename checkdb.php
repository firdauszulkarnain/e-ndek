<?php

$test = mysql_connect('sql203.epizy.com' , 'epiz_29996495' , 'sql203.epizy.com');
if (! $test ) {

die ( ‘MySQL Error: ‘ . mysql_error());

}

echo ‘Database connection is working properly!’ ; mysql_close( $testConnection );