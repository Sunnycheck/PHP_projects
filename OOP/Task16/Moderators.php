<?php

require_once "Validator.php";
require_once "LoggingTrait.php";

class Moderators extends SiteUsers
{
    use Validator;
    use LoggingTrait;

    private function loggedIn(): void
    {

        $this->logAction("logged in");
    }
}