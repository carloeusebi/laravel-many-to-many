<?php

namespace App\View\Components\Admin\Projects;

use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Project $project,
        public Collection $types,
        public Collection $technologies,
        public string $method,
        public string $action,
        public array $projectTechnologyIds = [],
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.projects.form');
    }
}
