<x-app-layout>
    <div class="panel grid grid-cols-1 xl:grid-cols-2 gap-4 mb-5">
        @livewire('account-tree')
        @livewire('account-data')
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
        <x-tab />
        <x-vertical-tab />
        <x-accordion />
        <x-modal />
        <x-card-sm />
        <x-card-md />
        <x-card-lg />
        <x-card-xl />
        <div class="panel flex flex-wrap justify-evenly">
            <button class="btn btn-primary">button</button>
            <button class="btn btn-primary rounded-full">button</button>
            <button class="btn btn-outline-primary">button</button>
            <button class="btn btn-outline-primary rounded-full">button</button>
            <button class="btn btn-primary w-full mt-5">button</button>
            <button class="btn btn-outline-primary w-full mt-5">button</button>
        </div>
        <div class="panel">
            <x-dropdown />
        </div>
        <x-info-box />
        <x-info-box-2 />
        <x-info-box-3 />
        <div class="panel grid grid-cols-3">
            <div>
                <span
                    class="animate-spin border-4 border-success border-l-transparent rounded-full w-10 h-10 inline-block align-middle m-auto mb-10"></span>
            </div>
            <div>
                <span
                    class="animate-spin border-4 border-transparent border-l-black rounded-full w-10 h-10 inline-block align-middle m-auto mb-10 dark:border-l-dark"></span>
            </div>
            <div class="w-4 h-4">
                <span class="animate-ping inline-flex h-full w-full rounded-full bg-info"></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                    class="w-5 h-5 animate-[spin_2s_linear_infinite] inline-block align-middle ltr:mr-2 rtl:ml-2">
                    <line x1="12" y1="2" x2="12" y2="6"></line>
                    <line x1="12" y1="18" x2="12" y2="22"></line>
                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                    <line x1="2" y1="12" x2="6" y2="12"></line>
                    <line x1="18" y1="12" x2="22" y2="12"></line>
                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>