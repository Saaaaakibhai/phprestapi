<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authoraization,X-Requested-With');

//initializing our api
include_once('../core/initialize.php');

//initializing post
$post = new Post($db);

// get raw posted data
$data = json_decode(file_get_contents("php://input"));

$post->id = $data->id;
$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;

// create post
if ($post->update()) {
    echo json_encode(
        array('message'=>'Post Updated. ')
    );
}else{
    echo json_encode(
        array('message'=> 'Post not Updated')
    ) ;
}
