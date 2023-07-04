<div class="panel">
    <h4 class="text-2xl font-semibold border-b mb-3 dark:border-dark">{{ __('Permissions') }}</h4>
    <div class="table-responsive">
        <table class="table-hover">
            <thead>
                <tr>
                    <th class="text-lg">#</th>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $permission->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
