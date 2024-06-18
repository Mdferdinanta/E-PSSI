<?php

namespace App\Livewire;

use App\Models\Talent;
use App\Models\Onwatch;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Onwatcher extends Component
{
    public Talent $talent;
    public bool $isBookmarked;

    public function mount(Talent $talent)
    {
        $this->talent = $talent;
        $this->isBookmarked = Onwatch::where('talent_id', $talent->id)
                                     ->where('user_id', Auth::id())
                                     ->exists();
    }

    public function addOnwatch()
    {
        // dd($this->talent->id);
        if ($this->isBookmarked) {
            Onwatch::where('talent_id', $this->talent->id)
                   ->where('user_id', Auth::id())
                   ->delete();
            $this->isBookmarked = false;
        } else {
            Onwatch::create([
                'talent_id' => $this->talent->id,
                'user_id' => Auth::id(),
            ]);
            $this->isBookmarked = true;
        }
    }

    public function render()
    {
        return view('livewire.onwatcher');
    }
}
