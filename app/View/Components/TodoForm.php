<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TodoForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $todo;
    public $action;
    public function __construct($todo = null, $action = 'create')
    {
        $this->todo = $todo;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.todo-form');
    }
}
