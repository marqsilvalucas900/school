<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $userName;
    public $userImage;

    
    public function __construct($userName, $userImage)
    {
        $this->userName = $userName;
        $this->userImage = $userImage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dropdown2');
    }
}
