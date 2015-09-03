<?php


$hostname="root";
$pwd="";
$host="localhost";

$conn=  mysql_connect($host, $hostname,$pwd);
        if(!$conn)
        {
            die(mysql_error());
        }
        
 $selectdb=  mysql_select_db("digantara",$conn)or die(mysql_error());
 

		


 
?>