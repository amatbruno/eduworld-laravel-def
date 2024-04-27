<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonDashboard extends Component
{
    
    public $routeManageStudents = '/'; //Prop for route students
    public $routeManageGrades = '/'; //Prop for route grades

    public function render()
    {
        return view('livewire.button-dashboard');
    }
}
