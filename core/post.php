<?php
class Post{
    //db stuff
    private $conn;
    private $table = 'posts';
    //post properties 
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $create_at;

    //constructor with db connection
    public function __construct($db){
        $this->conn = $db;
    }
    // getting posts from our database
    public function read(){
        
    }

}