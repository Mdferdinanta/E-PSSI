<div>
    <button wire:click="addOnwatch" type="submit">
        @if ($isBookmarked)
            <i class="ri-bookmark-fill ri-xl dark:text-white"></i>
        @else
            <i class="ri-bookmark-line ri-xl dark:text-white"></i>
        @endif
    </button>
</div>
