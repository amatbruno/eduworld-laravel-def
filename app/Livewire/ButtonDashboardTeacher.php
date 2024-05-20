<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonDashboardTeacher extends Component
{
    public $routeManageStudents = '/students'; //Prop for route students
    public $routeManageGrades = '/grades'; //Prop for route grades
    public $routeManageTasks = '/tasks'; //Prop for route tasks

    public function render()
    {
        return view('livewire.button-dashboard-teacher');
    }
}
