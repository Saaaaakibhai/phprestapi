<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authoraization,X-Requested-With');

//initializing our api
include_once('../core/initialize.php');

//initializing post
$post = new Post($db);

