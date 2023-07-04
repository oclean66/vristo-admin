<x-app-layout>
    <div class="flex flex-col md:flex-row gap-4">
        <div class="basis-2/3">
            <livewire:authorization.roles />
        </div>
        <div class="basis-1/3">
            <livewire:authorization.permissions />
        </div>
    </div>
</x-app-layout>
