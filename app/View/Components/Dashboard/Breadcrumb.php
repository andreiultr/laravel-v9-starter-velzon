<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        private string $title,
        private string $page,
        private string $active,
        private string $route
    ) {
        $this->title = $title;
        $this->page = $page;
        $this->active = $active;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.breadcrumb', [
            'title' => $this->title,
            'page' => $this->page,
            'active' => $this->active,
            'route' => $this->route,
        ]);
    }
}
