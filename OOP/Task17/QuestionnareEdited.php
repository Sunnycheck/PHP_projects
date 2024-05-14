<?php

require_once 'Contact.php';
require_once 'City.php';
require_once 'Name.php';

class Questionnaire
{
    public function __construct(Name $name, City $city, Contact $contact)
    {
        // ...
    }
}
