<?php

namespace App\Livewire;

use Livewire\Component;

class SelectArea extends Component
{
    public string $label;

    public int $selectedProvince = 0;
    public int $selectedCity = 0;

    public function updatedSelectedProvince($code)
    {
        $this->selectedProvince = $code ?? 0;
    }

    public function updatedSelectedCity($code)
    {
        $this->selectedCity = $code ?? 0;
    }

    public function render()
    {
        return view('livewire.select-area');
    }
}
