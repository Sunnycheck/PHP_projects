<?php
require_once 'SiteUsers.php';
require_once 'LoggingTrait.php';
require_once 'FollowersTrait.php';

class Users extends SiteUsers
{
    use LoggingTrait;
    use FollowersTrait;


    private $posts = [];


//    public function __construct($username)
//    {
//        $this->username = $username;
//    }
//
//    public function getUsername()
//    {
//        return $this->username;
//    }

    public function createPost(string $content): void
    {
        $this->posts[] = $content;
        $this->logAction("created a post");
    }

    public function likePost($post): void
    {
        // Code to like a post
        $this->logAction("liked a post");
    }

}