<?php

//назва властивості - не у StudlyCaps. Назва файлу з класом та назва класу - різні.
class myQuestionnaire

{
    //назва властивості - не у camelCase
    public string $Firstname;
    public string $Lastname;
    public string $region;
    public string $district;
    public string $city;
    public string $phone;
    public string $email;

    //Занадто багато аргументів для методу, важко підримувати
    public function __construct(
        string $Firstname,
        string $lastname,
        string $region,
        string $district,
        string $city,
        string $phone,
        string $email
    )
    {

    }
}
//непотрібен закриваючий тег
?>