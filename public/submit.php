<?php

// Cargar las clases automáticamente usando el autoloader de Composer
require '../vendor/autoload.php';

use App\Controllers\ContactController;

// Verificar si los datos fueron enviados por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos enviados desde el formulario
    $postData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'amount' => $_POST['amount'],
        'weight' => $_POST['weight'],
        'height' => $_POST['height']
    ];

    // Instanciar el controlador y manejar el formulario
    $contactController = new ContactController();
    $result = $contactController->handleFormSubmission($postData);

    // Mostrar los resultados (por ejemplo, el valor convertido y el IMC)
    echo "<h1>Resultados</h1>";
    echo "<p>Valor convertido (USD a EUR): {$result['convertedValue']}</p>";
    echo "<p>Tu IMC es: {$result['bmi']}</p>";
} else {
    echo "Método no permitido.";
}
