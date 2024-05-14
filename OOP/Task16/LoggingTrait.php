<?php

trait LoggingTrait
{
    public function logAction(string $action): void
    {
        echo "User " . $this->username . " performed action: " . $action . PHP_EOL;
    }
}