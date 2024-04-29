<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonDashboardAdmin extends Component
{

    public $routeAdminPanel = '/admin'; //Prop for route admin panel

    public function render()
    {
        return view('livewire.button-dashboard-admin');
    }
}
