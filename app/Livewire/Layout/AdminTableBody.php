<?php

namespace App\Livewire\Layout;

use App\Models\User;
use App\Models\Coach;
use App\Models\Talent;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTableBody extends Component
{
    public function render()
    {
        // Retrieve all coaches
        $coaches = Coach::all();

        // Extract user IDs from the coaches
        $userIds = $coaches->pluck('user_id')->toArray();

        // Retrieve users with the extracted IDs
        $users = User::whereIn('id', $userIds)->get();

        // Retrieve all talents associated with the coaches
        $coachIds = $coaches->pluck('id')->toArray();
        $talents = Talent::whereIn('coach_id', $coachIds)->get();

        // Map users to their respective talents
        $usersWithTalents = $users->map(function($user) use ($coaches, $talents) {
            $userCoach = $coaches->firstWhere('user_id', $user->id);
            $userTalents = $talents->where('coach_id', $userCoach->id)->pluck('talent_name');
            $user->talents = $userTalents;
            return $user;
        });

        return view('livewire.layout.admin-table-body', [
            'users' => $usersWithTalents,
        ]);
    }
}
