<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Registro extends Component
{
    public $titulo;
    public $rolId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo = null, $rolId)
    {
        $this->titulo = $titulo;
        $this->rolId = $rolId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.registro');
    }
}
