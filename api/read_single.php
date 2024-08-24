<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initializing our api
include_once('../core/initialize.php');

//initializing post
$post = new Post($db);

//blog post query 
$result = $post->read();

//get the row count
$num = $result->rowCount();

$post-> id = isset($_GET['id']) ? $GET['id'] :die();
$post-> read_single();

$post_arr = array(
    'id' => $post->id,
    'title' => $post->title,
    'body' => $post->body,
    'author' => $post->author,
    'category_id' => $post->category_id,
    'category_name' => $post->category_name,
);

// make a json
print_r(json_encode($post_arr));