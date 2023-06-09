<div class="border-2 rounded-lg p-3 ml-2 mt-2 border-gray-800 dark:border-gray-400">
    @isset($data)
        <h3 class="text-xl text-bold text-gray-800 dark:text-gray-200">{{ $data->name }}</h3>
        <ul class="list-disc dark:text-white ml-5">
            @foreach ($accounts as $account)
                <li
                    class="border border-white dark:border-gray-800 rounded-lg p-1 mb-2 hover:border-gray-800 dark:hover:border-gray-400 cursor-pointer">
                    <h4 class="text-lg text-gray-800 dark:text-gray-200">{{ $account->title }}</h4>
                    <p>| fullname - {{ $account->fullname }} | email - {{ $account->email }} | code - {{ $account->code }} |
                    </p>
                </li>
            @endforeach
        </ul>
        {{ $accounts->links('components.interface.pagination') }}
    @endisset
</div>
