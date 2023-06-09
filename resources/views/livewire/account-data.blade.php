<div class="border-2 rounded-lg p-3 border-gray-800 dark:border-gray-400 h-[772px] relative">
    @isset($data)
        <h3 class="text-xl text-bold text-gray-800 dark:text-gray-200">{{ $data->name }}</h3>
        <ul class="list-disc dark:text-white ml-5">
            @foreach ($accounts as $account)
                <li
                    class="border border-white dark:border-gray-800 rounded-lg p-1 mb-2 hover:border-gray-800 dark:hover:border-gray-400 cursor-pointer">
                    <h4 class="text-lg text-gray-800 dark:text-gray-200">{{ $account->title }}</h4>
                    <p>| fullname - {{ $account->fullname }} | email - {{ $account->email }} | code -
                        {{ $account->code }} |
                    </p>
                </li>
            @endforeach
        </ul>
        {{ $accounts->links('components.interface.pagination') }}
        @endisset
        <div wire:loading>
            <div class="screen_loader absolute inset-0 bg-[#fafafa] dark:bg-[#060818] z-[60] grid place-content-center animate__animated rounded-lg h-[768px]">
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
