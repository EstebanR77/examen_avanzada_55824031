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
        
    {
        $regitro = new Dishe();
        $regitro ->set('nombre', $request['idInput']);
        $regitro ->set('description', $request['descriptionInput']);
        $regitro >set('price', $request['priceInput']);
    
        
    }


}