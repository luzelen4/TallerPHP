<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Models\Calculator;
use App\Utilities\EmailSender;
use App\Utilities\JsonHandler;

class ContactController
{
    protected $calculator;

    public function __construct()
    {
        $this->calculator = new Calculator();
    }

    public function handleFormSubmission($postData)
    {
        $contact = new Contact($postData['name'], $postData['email']);

        // Realiza operaciones matemáticas como conversión de divisas o IMC
        $convertedValue = $this->calculator->convertCurrency($postData['amount'], 'USD', 'EUR');
        $bmi = $this->calculator->calculateBMI($postData['weight'], $postData['height']);

        // Enviar un correo
        $emailSender = new EmailSender();
        $emailSender->sendMail($contact->getEmail(), "Thank you for your submission");

        // Guardar datos en JSON
        $jsonHandler = new JsonHandler();
        $jsonHandler->saveData('contacts.json', $contact->toArray());

        return [
            'convertedValue' => $convertedValue,
            'bmi' => $bmi
        ];
    }
}
