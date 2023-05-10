<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class UpdateAdditionalUserInformation extends Component
{
    public $penyakit;

    public function render()
    {
        return view('livewire.profile.update-additional-user-information');
    }
}
