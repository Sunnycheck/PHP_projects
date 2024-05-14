<?php

trait FollowersTrait
{
    protected $followers = [];

    public function followUser(Users $user): void
    {
        $this->followers[$user->getUsername()] = $user;
        $user->addFollower($this);
    }

    public function getFollowersCount(): int
    {
        return count($this->followers);
    }

    protected function addFollower(Users $user): void
    {
        $this->followers[$user->getUsername()] = $user;
    }
}