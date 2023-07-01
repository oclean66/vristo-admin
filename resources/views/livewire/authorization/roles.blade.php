<div class="panel">
    @foreach ($roles as $role)
        <ul class="list-disc">
            <li>{{ $role->name }} <button type="button" class="text-danger hover:underline"
                    wire:click="deleteRole({{ $role->id }})">delete</button></li>
        </ul>
    @endforeach
    <br>
    <hr>
    <br>
    <form>
        <x-inputs.text label="{{ __('Name') }}" wire:model="roleName" />
        <button type="button" class="btn btn-primary" wire:click="createRole">Create Rol</button>
    </form>
</div>
