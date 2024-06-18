<div class="absolute top-2 left-2">
    <button wire:click="addOnwatch" type="submit">
        @if ($isBookmarked)
            <i class="ri-heart-fill ri-xl dark:text-white"></i>
        @else
            <i class="ri-heart-line ri-xl dark:text-white"></i>
        @endif
    </button>
</div>
