<?php
$dbhost='';//host
$dbuser='';//username
$dbpass='';//password
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
    die('Could not connect!');
}
$username="Google";
$score=233;
$insertdata="INSERT INTO fruit_score".
            "(username, score, date, time)".
            "VALUES".
            "('$username','$score',NOW(),NOW())";
mysql_select_db('demonist');
$retval=mysql_query($insertdata);
if(!$retval){
    die('Could not insert data!');
}
echo "Success!";
mysql_close($conn);