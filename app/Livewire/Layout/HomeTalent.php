<?php

namespace App\Livewire\Layout;

use App\Models\Talent;
use Livewire\Component;

class HomeTalent extends Component
{
    public function render()
    {
        $talents = Talent::paginate(4);

        return view('livewire.layout.home-talent', [
            'talents' => $talents,
        ]);
    }
}
