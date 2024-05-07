<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonDashboardStudent extends Component
{

    public $routeManageStudents = '/'; //Prop for route students
    public $routeManageGrades = '/'; //Prop for route grades
    public $routeManageTraining = '/games'; //Prop for route training zone

    public function render()
    {
        return view('livewire.button-dashboard-student');
    }
}
