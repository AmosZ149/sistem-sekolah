<?php

namespace App\Core;
require_once '../app/core/Controller.php';


class Controller
{
    public function view(string $view, array $data = [])
    {
        extract($data);

        $view = str_replace(
            '.', 
            '/',
            $view
        );
    
        require_once "../app/views/{$view}.php";
    }
}

?>

