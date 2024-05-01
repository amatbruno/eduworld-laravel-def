<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonDashboardTeacher extends Component
{

    public $routeManageStudents = '/students'; //Prop for route students
    public $routeManageGrades = '/'; //Prop for route grades

    public function render()
    {
        return view('livewire.button-dashboard-teacher');
    }
}
