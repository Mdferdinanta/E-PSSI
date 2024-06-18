<div class="gap-4">

    <div
        class="flex w-full gap-8 px-8 py-4 mx-auto bg-gray-100 shadow-md md:px-8 sm:max-w-7xl dark:bg-gray-800 sm:rounded-lg">
        <h3 class="m-4 text-2xl font-medium dark:text-white">Filters</h3>
        <form wire:submit.prevent="applyFilters" role="search" class="p-2 w-80">
            <input wire:model.live.debounce.500ms="search" type="search" placeholder="Search" aria-label="Search"
                class="w-full border-gray-300 rounded-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-0 dark:focus:border-0 focus:ring-prim-5 dark:focus:ring-prim-4">
        </form>
        <form wire:submit.prevent="applyFilters">
            <div class="flex gap-4">
                <div>
                    <label for="position"
                        class="block text-sm font-medium text-gray-700 dark:text-white">Position</label>
                    <select id="position" wire:model.live.debounce.500ms="position"
                        class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:outline-none focus:ring-prim-4 focus:border-prim-4 sm:text-sm">
                        <option value="">All</option>
                        <option value="CF">CF</option>
                        <option value="RWF">RWF</option>
                        <option value="LWF">LWF</option>
                        <option value="AM">AM</option>
                        <option value="CM">CM</option>
                        <option value="DM">DM</option>
                        <option value="RM">RM</option>
                        <option value="LM">LM</option>
                        <option value="LB">LB</option>
                        <option value="RB">RB</option>
                        <option value="CB">CB</option>
                        <option value="GK">GK</option>
                    </select>
                </div>
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700 dark:text-white">Gender</label>
                    <select id="gender" wire:model.live.debounce.500ms="gender"
                        class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:outline-none focus:ring-prim-4 focus:border-prim-4 sm:text-sm">
                        <option value="">All</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 dark:text-white">Status</label>
                    <select id="status" wire:model.live.debounce.500ms="status"
                        class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:outline-none focus:ring-prim-4 focus:border-prim-4 sm:text-sm">
                        <option value="">All</option>
                        <option value="Free Agent">Free Agent</option>
                        <option value="On Contract">On Contract</option>
                    </select>
                </div>
                <div>
                    <label for="sortBy" class="block text-sm font-medium text-gray-700 dark:text-white">Sort
                        By</label>
                    <select id="sortBy" wire:model.live.debounce.500ms="sortBy"
                        class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:outline-none focus:ring-prim-4 focus:border-prim-4 sm:text-sm">
                        <option value="age_asc">Age (Ascending)</option>
                        <option value="age_desc">Age (Descending)</option>
                        <option value="rating_asc">Rating (Ascending)</option>
                        <option value="rating_desc">Rating (Descending)</option>
                    </select>
                </div>
            </div>
            {{-- <x-primary-button class="mt-4">
                {{ __('Apply Filters') }}
            </x-primary-button> --}}
        </form>
    </div>

    <div class="mt-4 shrink-0">
        <div class="grid gap-2 md:gap-2 md:justify-between lg:grid-cols-5">

            @foreach ($talents as $talent)
                <div class="flex w-auto bg-gray-100 dark:text-white sm:p-2 sm:flex-col dark:bg-gray-700 rounded-xl">
                    <div class="sm:mx-auto">
                        <a href="/talents/{{ $talent->id }}">
                            <img class="h-32 sm:h-40" src="{{ Storage::url($talent->photo) }}"
                                alt="{{ $talent->talent_name }}">
                        </a>
                    </div>
                    <div class="p-2">
                        <p class="text-xl font-semibold text-prim-5 dark:text-prim-3 sm:text-center">
                            {{ $talent->talent_name }}</p>
                        <div class="flex flex-col justify-between sm:items-center sm:flex-row">
                            <p class="text-lg font-semibold">{{ $talent->rating }} | {{ $talent->position }}</p>
                            <p class="text-base font-semibold text-blue-600 dark:text-blue-400">{{ $talent->age }} yo
                            </p>
                        </div>
                        <div class="flex">
                            <div
                                class="flex justify-between w-full text-sm text-center border-t border-gray-300 sm:space-x-2">
                                @if ($talent->position === 'GK')
                                    <div class="mt-1">
                                        <p>DIV</p>
                                        <p>{{ $talent->attributes->diving }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>HAN</p>
                                        <p>{{ $talent->attributes->handling }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>KIC</p>
                                        <p>{{ $talent->attributes->kicking }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>REF</p>
                                        <p>{{ $talent->attributes->reflexes }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>SPE</p>
                                        <p>{{ $talent->attributes->speed }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>POS</p>
                                        <p>{{ $talent->attributes->positioning }}</p>
                                    </div>
                                @else
                                    <div class="mt-1">
                                        <p>PAC</p>
                                        <p>{{ $talent->attributes->pace }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>SHO</p>
                                        <p>{{ $talent->attributes->shoot }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>PAS</p>
                                        <p>{{ $talent->attributes->pass }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>DRI</p>
                                        <p>{{ $talent->attributes->dribble }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>DEF</p>
                                        <p>{{ $talent->attributes->defence }}</p>
                                    </div>
                                    <div class="mt-1">
                                        <p>PHY</p>
                                        <p>{{ $talent->attributes->physical }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{ $talents->links() }}
</div>
