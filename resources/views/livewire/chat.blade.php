<div>
    <div class="container flex justify-center gap-4 py-4 mx-auto sm:max-w-full sm:px-4">
        <div class="relative w-3/5 p-4 rounded-lg dark:bg-gray-700">
            <div class="px-4 py-3 font-semibold tracking-widest rounded-md dark:text-white dark:bg-gray-900">
                <h1>{{ $user->name }}</h1>
            </div>
            <div wire:poll class="p-4 overflow-y-auto h-96">
                {{-- Incoming Chat --}}
                @foreach ($messages as $message)
                    <div class="flex gap-2.5 @if ($message->from_user_id == auth()->id()) justify-end @else justify-start @endif">
                        <div class="flex flex-col gap-1 w-fit max-w-[320px]">
                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <span
                                    class="text-sm font-semibold text-gray-900 dark:text-white">{{ $message->fromUser->name }}</span>
                                <span
                                    class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $message->created_at->diffForHumans() }}</span>
                            </div>
                            <div
                                class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-b-xl @if ($message->from_user_id == auth()->id()) rounded-tl-xl @else rounded-tr-xl @endif dark:bg-gray-600">
                                <p class="text-sm font-normal text-gray-900 dark:text-white">{{ $message->message }}</p>
                            </div>
                            {{-- <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="p-2 rounded-md">
                <form wire:submit="sendMessage">
                    <textarea name="" placeholder="Write message..." class="w-full rounded-md h-fit" wire:model="message"></textarea>
                    <x-primary-button class="">
                        {{ __('Send') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
