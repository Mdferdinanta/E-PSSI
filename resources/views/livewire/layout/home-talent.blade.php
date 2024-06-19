<div class="h-full bg-gray-200 border rounded-xl dark:border-gray-700 dark:bg-gray-900">
    <div class="p-2 text-2xl font-semibold text-center">
        <a href="/talents"><h3>Talents</h3></a>
    </div>
    @foreach ($talents as $talent)
        <div class="flex justify-between shadow-xl dark:even:bg-gray-700 dark:bg-gray-800">
            <div onclick="location.href='/talents'" class="flex cursor-pointer justify-center w-1/3 shrink-0">
                <img class="h-32" src="{{ Storage::url($talent->photo) }}" alt="talents">
            </div>
            <div class="w-full p-4 m-auto text-lg">
                <p class="font-semibold">{{ $talent->talent_name }}</p>
                <p class="font-semibold text-blue-400">{{ $talent->age }} yo</p>
                <div class="mt-2 text-sm"><livewire:onwatcher :talent="$talent" /></div>
            </div>
            <div class="w-1/2 p-4 m-auto space-y-4 text-xl font-semibold text-center">
                <p>{{ $talent->rating }}</p>
                <p class="text-2xl text-prim-3">{{ $talent->position }}</p>
            </div>
        </div>
    @endforeach
    <div class="p-2">
        {{ $talents->links() }}
    </div>
</div>
