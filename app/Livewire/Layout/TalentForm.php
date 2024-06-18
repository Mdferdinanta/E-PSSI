<?php

namespace App\Livewire\Layout;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\TalentFormVal;

class TalentForm extends Component
{
    use WithFileUploads;
    public TalentFormVal $form;
    public $talents;

    public function saveTalent()
    {
        $this->form->store();
        $this->redirectRoute('talents');
    }
    public function render()
    {
        return view('livewire.layout.talent-form');
    }
}
