<div class="panel">
    <div class="mb-5 max-w-fit">
        <a href="{{ route('users.create') }}">
            <button class="btn btn-primary">Create User</button>
        </a>
    </div>
    <div class="table-responsive">
        <table class="table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="!text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="whitespace-nowrap">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <ul class="flex items-center justify-center gap-2">
                                <li>
                                    <a href="javascript:;" x-tooltip="Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-primary transition hover:scale-y-125">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $users->links('components.interface.pagination') }}
    </div>
</div>
