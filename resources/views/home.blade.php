<x-blank-layout>
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 flex items-center mx-3">
            <div class="mr-4">
                <x-interface.lang-switcher />
            </div>
            @auth
                <a href="{{ route('dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-4">{{ __('Dashboard') }}</a>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Logout') }}</button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Login') }}</a>

                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ml-4">{{ __('Register') }}</a>
                @endif --}}
            @endauth
        </div>
    @endif

   <x-coming-soon/>

</x-blank-layout>
