<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Coach;
use App\Models\Talent;
use App\Models\Outfieldkey;
use App\Models\Goalkeeperkey;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class TalentFormVal extends Form
{
    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|integer')]
    public $age;

    #[Validate('required|in:Male,Female')]
    public $gender = '';

    #[Validate('required|integer')]
    public $weight;

    #[Validate('required|integer')]
    public $height;

    #[Validate('required|string|max:255')]
    public $address;

    #[Validate('required|in:CF,RWF,LWF,AM,CM,DM,RM,LM,LB,RB,CB,GK')]
    public $position = '';

    #[Validate('required|in:Both,Left,Right')]
    public $foot = '';

    #[Validate('required|in:Free Agent,On Contract')]
    public $status = '';

    #[Validate('nullable|string|max:255')]
    public $video = '';

    #[Validate('required|file|mimes:png,jpg,jpeg|max:1024')]
    public $photo;

    #[Validate('nullable|integer')]
    public $pace;

    #[Validate('nullable|integer')]
    public $shoot;

    #[Validate('nullable|integer')]
    public $pass;

    #[Validate('nullable|integer')]
    public $dribble;

    #[Validate('nullable|integer')]
    public $defence;

    #[Validate('nullable|integer')]
    public $physical;

    #[Validate('nullable|integer')]
    public $diving;

    #[Validate('nullable|integer')]
    public $handling;

    #[Validate('nullable|integer')]
    public $kicking;

    #[Validate('nullable|integer')]
    public $reflexes;

    #[Validate('nullable|integer')]
    public $speed;

    #[Validate('nullable|integer')]
    public $positioning;

    public $rating;

    public function calculateRating()
    {
        $proficiencies = [
            'GK' => [
                'diving' => 0.22,
                'handling' => 0.22,
                'reflexes' => 0.24,
                'kicking' => 0.08,
                'speed' => 0.02,
                'positioning' => 0.22,
            ],
            'CB' => [
                'pace' => 0.08,
                'shoot' => 0.09,
                'pass' => 0.10,
                'dribble' => 0.08,
                'defence' => 0.40,
                'physical' => 0.25,
            ],
            'RB' => [
                'pace' => 0.12,
                'shoot' => 0.11,
                'pass' => 0.13,
                'dribble' => 0.11,
                'defence' => 0.30,
                'physical' => 0.23,
            ],
            'LB' => [
                'pace' => 0.12,
                'shoot' => 0.11,
                'pass' => 0.13,
                'dribble' => 0.11,
                'defence' => 0.30,
                'physical' => 0.23,
            ],
            'DM' => [
                'pace' => 0.10,
                'shoot' => 0.12,
                'pass' => 0.21,
                'dribble' => 0.12,
                'defence' => 0.25,
                'physical' => 0.20,
            ],
            'CM' => [
                'pace' => 0.12,
                'shoot' => 0.16,
                'pass' => 0.28,
                'dribble' => 0.19,
                'defence' => 0.13,
                'physical' => 0.12,
            ],
            'RM' => [
                'pace' => 0.12,
                'shoot' => 0.14,
                'pass' => 0.28,
                'dribble' => 0.17,
                'defence' => 0.14,
                'physical' => 0.15,
            ],
            'LM' => [
                'pace' => 0.12,
                'shoot' => 0.14,
                'pass' => 0.28,
                'dribble' => 0.17,
                'defence' => 0.14,
                'physical' => 0.15,
            ],
            'AM' => [
                'pace' => 0.14,
                'shoot' => 0.18,
                'pass' => 0.25,
                'dribble' => 0.19,
                'defence' => 0.10,
                'physical' => 0.13,
            ],
            'RWF' => [
                'pace' => 0.20,
                'shoot' => 0.18,
                'pass' => 0.23,
                'dribble' => 0.19,
                'defence' => 0.08,
                'physical' => 0.12,
            ],
            'LWF' => [
                'pace' => 0.20,
                'shoot' => 0.18,
                'pass' => 0.23,
                'dribble' => 0.19,
                'defence' => 0.08,
                'physical' => 0.12,
            ],
            'CF' => [
                'pace' => 0.20,
                'shoot' => 0.25,
                'pass' => 0.20,
                'dribble' => 0.20,
                'defence' => 0.05,
                'physical' => 0.10,
            ],
        ];

        $position = $this->position;
        $rating = 0;

        if (isset($proficiencies[$position])) {
            foreach ($proficiencies[$position] as $attribute => $percentage) {
                if (isset($this->$attribute)) {
                    $rating += $this->$attribute * $percentage;
                }
            }
        }

        $this->rating = round($rating);
    }

    public function store()
    {
        $validated = $this->validate();

        if ($this->photo) {
            $validated['photo'] = $this->photo->store('photos', 'public');
        }

        $validated['talent_name'] = $validated['name'];
        unset($validated['name']); // Remove the 'name' key since we don't have a 'name' column in the database but 'talent_name' instead

        $user = Auth::user(); // Get the current authenticated user
        $coach = Coach::where('user_id', $user->id)->first(); // Find the coach corresponding to the current user
        $validated['coach_id'] = $coach->id; // Add coach_id to the validated data

        $this->calculateRating();
        $validated['rating'] = $this->rating;

        $talent = Talent::create($validated);

        $attributes = [
            'talent_id' => $talent->id,
            'pace' => $this->pace,
            'shoot' => $this->shoot,
            'pass' => $this->pass,
            'dribble' => $this->dribble,
            'defence' => $this->defence,
            'physical' => $this->physical,
            'diving' => $this->diving,
            'handling' => $this->handling,
            'kicking' => $this->kicking,
            'reflexes' => $this->reflexes,
            'speed' => $this->speed,
            'positioning' => $this->positioning,
        ];
        
        if ($talent->position == 'GK') {
            Goalkeeperkey::create(array_filter($attributes, function ($key) {
                return in_array($key, ['talent_id', 'diving', 'handling', 'kicking', 'reflexes', 'speed', 'positioning']);
            }, ARRAY_FILTER_USE_KEY));
        } else {
            Outfieldkey::create(array_filter($attributes, function($key) {
                return in_array($key, ['talent_id', 'pace', 'shoot', 'pass', 'dribble', 'defence', 'physical']);
            }, ARRAY_FILTER_USE_KEY));
        }
    }
}
