<?php

namespace App\View\Components\Carta;

use Illuminate\View\Component;

class Categoria extends Component
{
    public $titulo;
    public $imagen;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $imagen, $link)
    {
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carta.categoria');
    }
}
