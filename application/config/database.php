<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

if (in_array($_SERVER['HTTP_HOST'], array('127.0.0.1', 'localhost'))) {
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_sohel';
} else {
    $hostname = '104.251.216.93';
    $username = 'root';
    $password = 'HYG$#12123awewe';
    $database = 'db_voreralo';
}

$db['default'] = array(
    'dsn' => '',
    'hostname' => $hostname,
    'username' => $username,
    'password' => $password,
    'database' => $database,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
