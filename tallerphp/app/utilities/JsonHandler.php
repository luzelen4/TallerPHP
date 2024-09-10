<?php

namespace App\Utilities;

class JsonHandler
{
    public function saveData($filePath, $data)
    {
        $jsonData = json_encode($data);
        file_put_contents($filePath, $jsonData);
    }
}
