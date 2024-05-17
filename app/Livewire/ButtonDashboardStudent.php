<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonDashboardStudent extends Component
{

    public $routeManageGrades = '/'; //Prop for route students
    public $routeManageTasks = '/'; //Prop for route grades
    public $routeManageTraining = '/games'; //Prop for route training zone

    public function render()
    {
        return view('livewire.button-dashboard-student');
    }
}
