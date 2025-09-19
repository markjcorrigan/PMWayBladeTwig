<?php

require_once 'Database.php';

$db = new Database();
echo $db->isConnected() ? "DB Connected" . PHP_EOL : "DB Not Connected" . PHP_EOL;

if( !$db->isConnected() ){
	echo $db->getError();
	die("Unable to connect to DB");
}

//NB This page simply tests the Database object
/*
$db->query("SELECT * FROM test");
var_dump( $db->resultset() );
echo "Rows: " . $db->rowCount();
var_dump( $db->single() );  */

/*$db->query("SELECT * FROM test where id = :id");
$db->bind(':id', 2);
var_dump( $db->single() ); */

/*$db->query("SELECT * FROM test where id = :id");
$db->bind(':id', 2);
var_dump( $db->single() );*/

///////////////////////////////////////
$db->query("SELECT * FROM test");
var_dump( $db->resultset() );
echo "Rows: " . $db->rowCount();
var_dump( $db->single(14) );  