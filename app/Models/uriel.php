<?php

namespace App\Models;

class uriel{

    public $nombre;
    Public $apellidop;
    Public $apellidom;
    public $edad;
    public $nacimiento;
    public $lugardenacimiento;
    public $papa;
    Public $mama;
    Public $hermano;
    Public $primaria;
    public $secundaria;
    Public $prepa;
    Public $universidad;
    


    Public Function mostrarinformacion(){
        echo $this -> nombre;
        echo $this -> apellidop;
        echo $this-> apellidom;
        echo $this -> edad;
        echo $this -> nacimiento;
        echo $this -> lugardenacimiento;
        echo $this -> papa;
        echo $this -> mama;
        echo $this -> hermano;
        echo $this-> primaria;
        echo $this -> secundaria;
        echo $this-> prepa;
        echo $this -> universidad;

    }
    
    
    
}