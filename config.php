<?php

/**
 * Configuration for database connection
 *
 */

$host       = "aa16glunvbqnu58.ctogpmoawefq.us-east-1.rds.amazonaws.com";
$username   = "JPalatucci";
$password   = "PolySly87";
$dbname     = "testDB";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
