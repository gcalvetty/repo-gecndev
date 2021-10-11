<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GecnPaghome extends Component
{
    public $nombre = "Guillermo";
    public $apellido = "Calvetty";
    public $saludos= ["Hola"];
    public $exclamacion = false;
   
    public function mount($nombre)
    {
        $this->nombre = $nombre;
    }

    // ---- Se actualiza
    // ---- Lo que se asigne aqui
    public function updated(){
        //$this->nombre = strtoupper($this->nombre).'<';
        $this->exclamacion = !$this->exclamacion;
    }

    // ---- Se actualiza 
    // ---- Cada vez que el valor de APELLIDO cambia 
    // ---- Se utiliza este HooK
    public function updatedApellido($apellido){
        $this->apellido = '>'.strtoupper($apellido);
    }


    public function reiniciarNombre($nombre = "GECNDev")
    {
        $this->nombre = $nombre;
    }

    public function render()
    {
        return view('livewire.gecn-paghome');
    }
}
