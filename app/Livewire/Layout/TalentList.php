<?php

namespace App\Livewire\Layout;

use App\Models\Talent;
use Livewire\Component;
use App\Models\Outfieldkey;
use Livewire\WithPagination;
use App\Models\Goalkeeperkey;

// class TalentList extends Component
// {
//     use WithPagination;

//     public $search = '';

//     public function render()
//     {
//         $talents = [];

//         // if(strlen($this->search) >= 1) {
//         //     $results = Talent::where('talent_name', 'like', '%' .$this->search. '%')->limit(5)->get();
//         // }

//         if ($this->search != null) {
//             $talents = Talent::where('talent_name','like','%'.$this->search.'%')->paginate(10);
//         } else {
//             $talents = Talent::paginate(10);
//         }


//         // Fetch the respective attributes for each talent
//         $talents->getCollection()->transform(function ($talent) {
//             if ($talent->position === 'GK') {
//                 $attributes = Goalkeeperkey::where('talent_id', $talent->id)->first();
//             } else {
//                 $attributes = Outfieldkey::where('talent_id', $talent->id)->first();
//             }
//             $talent->attributes = $attributes;
//             return $talent;
//         });

//         return view('livewire.layout.talent-list', [
//             'talents' => $talents,
//         ]);
//     }
// }

class TalentList extends Component
{
    use WithPagination;

    public $search = '';
    public $position = '';
    public $gender = '';
    public $status = '';
    public $sortBy = 'age_asc';

    // This method will be called whenever any of the filters or sorting options are updated
    public function updating($name, $value)
    {
        $this->resetPage();
    }

    // This method will be called when the form is submitted
    public function applyFilters()
    {
        $this->resetPage(); // Reset to the first page of results
    }

    public function render()
    {
        $query = Talent::query();

        if ($this->search) {
            $query->where('talent_name', 'like', '%' . $this->search . '%');
        }

        if ($this->position) {
            $query->where('position', $this->position);
        }

        if ($this->gender) {
            $query->where('gender', $this->gender);
        }

        if ($this->status) {
            $query->where('status', $this->status);
        }

        switch ($this->sortBy) {
            case 'age_asc':
                $query->orderBy('age', 'asc');
                break;
            case 'age_desc':
                $query->orderBy('age', 'desc');
                break;
            case 'rating_asc':
                $query->orderBy('rating', 'asc');
                break;
            case 'rating_desc':
                $query->orderBy('rating', 'desc');
                break;
        }

        $talents = $query->paginate(10);

        // Fetch the respective attributes for each talent
        $talents->getCollection()->transform(function ($talent) {
            if ($talent->position === 'GK') {
                $attributes = Goalkeeperkey::where('talent_id', $talent->id)->first();
            } else {
                $attributes = Outfieldkey::where('talent_id', $talent->id)->first();
            }
            $talent->attributes = $attributes;
            return $talent;
        });

        return view('livewire.layout.talent-list', [
            'talents' => $talents,
        ]);
    }
}