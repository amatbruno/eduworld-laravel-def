<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonDashboardStudent extends Component
{

    public $routeManageTasks = '/mytasks';
    public $routeManageTraining = '/games';

    public function render()
    {
        return view('livewire.button-dashboard-student');
    }
}
