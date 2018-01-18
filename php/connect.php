<?php
/**
 * Created by Logan Sotelo.
 * User: Logan Sotelo
 * Date: 1/11/2018
 * Time: 12:31 PM
 */

//	$dbhost = 'localhost';
//	$dbuser = 'losotelo';
//	$dbpwd  = 'losotelo';
//	$dbname = 'listings';  //'<your XAMPP database name>';
//	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
//	if (!$link) {
//        die('Connect Error (' . mysqli_connect_errno() . ') '
//            . mysqli_connect_error());
//    }
//////////////////////////////////////////////////////////
////////////////////// web-4 method /////////////////////
$dbhost = 'localhost';
$dbuser = 'losotelo';
$dbpwd  = 'losotelo';
$dbname = 'losotelo_db';

$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}
?>