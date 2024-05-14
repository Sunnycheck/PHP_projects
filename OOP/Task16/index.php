<?php
require_once "Users.php";
require_once "SiteUsers.php";
require_once "Moderators.php";

try {
    $user0 = new Users("James Hypes", "fds@f.v", "12345");
    $user1 = new Users("Jane Collins", "fds@f.v", "12345");

    $user1->createPost("Hello, everyone! #FirstPost");
    $user0->likePost("Nice");
    $user0->followUser($user1);
    echo $user0->getFollowersCount() . PHP_EOL;
    $mod = new Moderators("Lambert Jonass", "Moder@fds.fsd", "Moderators");
    $mod->logAction("log in");

} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}


