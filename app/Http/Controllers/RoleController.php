<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {   
        $request->validate([
            'name' => ['string', 'max:255', 'unique:roles'],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        $role = Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if ($request->selectedPermissions) {
            $role->givePermissionTo([$request->selectedPermissions]);
        }

        return to_route('authorization.roles')->with('created', __('Role').' '.__('Created'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $role = Role::findOrFail($id);

        if ($request->name != $role->name) {
            $request->validate(['name' => ['string', 'max:255', 'unique:roles']]);

            $role->update(['name' => $request->name]);
        }

        $request->validate(['description' => ['nullable', 'string', 'max:255']]);

        $role->update(['description' => $request->description]);

        $role->syncPermissions($request->selectedPermissions);

        return to_route('authorization.roles')->with('updated', __('Role').' '.__('Updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        Role::findOrFail($id)->delete();

        return to_route('authorization.roles')->with('deleted', __('Role').' '.__('Updated'));
    }
}
