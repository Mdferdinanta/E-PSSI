<x-app-layout>

    <div class="container flex gap-4 py-4 mx-auto sm:max-w-full sm:px-4">

        <div
            class="w-full px-8 py-4 mx-auto overflow-hidden bg-white shadow-md md:px-8 sm:max-w-full dark:bg-gray-800 sm:rounded-lg">
            <livewire:layout.talent-details />
        </div>

        <div class="w-1/3 bg-gray-800 rounded-lg">
            <div class="relative m-4 bg-gray-700 rounded-md">
                <div class="absolute top-3 left-2">
                    <livewire:onwatcher :talent="$talent" />
                </div>
                <div class="flex justify-center">
                    <img class="h-56" src="{{ Storage::url($talent->photo) }}" alt="{{ $talent->talent_name }}">
                </div>
                <div class="p-4 dark:text-white">
                    <p class="text-2xl font-semibold text-prim-3 sm:text-center">{{ $talent->talent_name }}</p>
                    <div class="flex flex-col justify-between sm:items-center sm:flex-row">
                        <p class="text-lg font-semibold">{{ $talent->rating }} | {{ $talent->position }}</p>
                        <p class="text-base font-semibold text-blue-400">{{ $talent->age }} yo</p>
                    </div>
                    <div class="flex my-1">
                        <div class="flex justify-between w-full text-sm text-center border-t sm:space-x-2">
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
                    <div class="my-2 space-y-1 border-t">
                        <div class="flex justify-between">
                            <p>Weight: </p>
                            <p>{{ $talent->weight }} Kg</p>
                        </div>
                        <div class="flex justify-between">
                            <p>height: </p>
                            <p>{{ $talent->height }} cm</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Gender: </p>
                            <p>{{ $talent->gender }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Address: </p>
                            <p>{{ $talent->address }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Preferred Foot: </p>
                            <p>{{ $talent->foot }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Status: </p>
                            <p>{{ $talent->status }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Coach: </p><a class="hover:text-blue-400" href="{{ route('chat', $user) }}"
                                wire:navigate>
                                <p>{{ $user->name }}</p>
                            </a>
                        </div>
                        <div class="flex justify-between">
                            <p>Video: </p><a href="">
                                <p class="text-blue-400">{{ $talent->video }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
