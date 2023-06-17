<div class="border-2 rounded-lg p-3 border-gray-800 dark:border-gray-400 min-h-[772px] relative overflow-x-scroll">
    @if ($account)
        {{ $account }}
    @endif

    <div wire:loading>
        <div
            class="screen_loader absolute inset-0 bg-[#fafafa] dark:bg-[#060818] z-[60] grid place-content-center animate__animated rounded-lg min-h-[768px]">
            <span
                class="animate-spin border-4 border-primary border-l-transparent rounded-full w-8 h-8 inline-block align-middle"></span>
        </div>
    </div>

    {{-- <div wire:loading>
        <div class="screen_loader fixed inset-0 bg-black/60 z-[60] grid place-content-center animate__animated">
            <span
                class="animate-spin border-4 border-primary border-l-transparent rounded-full w-16 h-16 inline-block align-middle m-auto mb-10"></span>
        </div>
    </div> --}}
</div>
