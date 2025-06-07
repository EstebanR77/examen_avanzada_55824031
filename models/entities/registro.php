<?php

namespace app\models\entities;
use app\models\drivers\ConexDB;

class registro extends Entity
{
  public function all()
    {
        $sql = "SELECT * FROM registro";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
       
        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
           
            }
        }

    }

}