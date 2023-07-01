<x-app-layout>
    <div class="flex flex-col xl:flex-row gap-4">
        <div class="basis-1/3 grow">
            <livewire:authorization.roles />
        </div>
        <div class="basis-2/3 grow">
            <livewire:authorization.permissions />
        </div>
    </div>
</x-app-layout>
