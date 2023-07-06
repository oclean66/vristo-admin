<x-app-layout>
    <h1 class="text-4xl font-semibold font-sans"> {{ __('My network') }} </h1>
    <div class="w-full bg-[#ebedf2] dark:bg-[#253b5c] mt-3 mb-4 h-1"></div>
    
    <div class="panel grid grid-cols-1 xl:grid-cols-2 gap-4 mb-5">
        <livewire:account-tree />
        <livewire:account-data />
    </div>
</x-app-layout>
