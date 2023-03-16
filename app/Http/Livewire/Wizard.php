<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Admin\Property;

class Wizard extends Component
{
    public $currentStep = 1;
    public $name, $price, $detail, $status = 1;
    public $successMsg = '';

    public function render()
    {
        return view('livewire.wizard');
    }
}
