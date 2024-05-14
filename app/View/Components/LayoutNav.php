<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutNav extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menus = [
            [
                "label" => "Dashboard",
                "icon" => "ei-bell",
                "link" => route('dashboard')
            ],
            [
                "label" => "Product",
                "icon" => "ei-bell",
                "link" => route('dashboard')
            ]
        ];
        return view('components.layout-nav',compact('menus'));
    }
}
