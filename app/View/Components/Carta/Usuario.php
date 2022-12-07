<?php

namespace App\View\Components\Carta;

use Illuminate\View\Component;

class Usuario extends Component
{
    public $titulo;
    public $imagen;
    public $link;
    public $modificable;
    public $linkEditar;
    public $linkEliminar;
    public $isAdmin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $imagen, $link = "", $modificable = false, $linkEditar = "", $linkEliminar = "", $isAdmin = false)
    {
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->link = $link;
        $this->modificable = $modificable;
        $this->linkEditar = $linkEditar;
        $this->linkEliminar = $linkEliminar;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carta.usuario');
    }
}
