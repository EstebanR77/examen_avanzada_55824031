<?php
namespace app\controllers;

use app\models\drivers\ConexDB;
use app\models\entities\registro;
class ControllerRegistro
{
    
    private $conex;

    public function __construct()
    {
        $this->conex = new ConexDB();
    }

     public function registar($request)
    {
        try {
            $category = new registro();
            $category->set('name', $request['nameInput']);

            if ($category->save()) {
                return "registro correctamente echo.";
            } else {
                return "Error al registrar .";
            }
        } catch (\Exception $e) {
            return "Error al registrar : " . $e->getMessage();
        }
    }

}