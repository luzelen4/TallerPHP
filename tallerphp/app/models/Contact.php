<?php

namespace App\Models;

class Contact
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email
        ];
    }
}
