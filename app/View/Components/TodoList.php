<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TodoList extends Component
{
    /**
     * Create a new component instance.
     */
    public $todos;
    public function __construct($todos)
    {
        $this->todos = $todos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.todo-list');
    }
}
