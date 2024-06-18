<?php

namespace App\Livewire\Layout;

use App\Models\Talent;
use App\Models\Onwatch;
use Livewire\Component;
use App\Models\Outfieldkey;
use Livewire\WithPagination;
use App\Models\Goalkeeperkey;
use Illuminate\Support\Facades\Auth;

class TalentDetails extends Component
{
    use WithPagination;

    public $search = '';
    public $bookmarkedTalents;

    public function mount()
    {
        $this->fetchBookmarkedTalents();
    }

    public function fetchBookmarkedTalents()
    {
        $this->bookmarkedTalents = Onwatch::where('user_id', Auth::id())
                                           ->with('talent')
                                           ->get()
                                           ->pluck('talent');
    }

    public function render()
    {
        $talents = [];

        // if(strlen($this->search) >= 1) {
        //     $results = Talent::where('talent_name', 'like', '%' .$this->search. '%')->limit(5)->get();
        // }

        if ($this->search != null) {
            $talents = Talent::where('talent_name','like','%'.$this->search.'%')->paginate(10);
        } else {
            $talents = $this->bookmarkedTalents;
        }


        // Fetch the respective attributes for each talent
        $talents->transform(function ($talent) {
            if ($talent->position === 'GK') {
                $attributes = Goalkeeperkey::where('talent_id', $talent->id)->first();
            } else {
                $attributes = Outfieldkey::where('talent_id', $talent->id)->first();
            }
            $talent->attributes = $attributes;
            return $talent;
        });

        // dd($this->bookmarkedTalents);
        return view('livewire.layout.talent-details', [
            'talents' => $talents,
        ]);
    }
}
