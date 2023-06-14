<x-blank-layout>
    <div
        class="flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center">
        <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
            <h2 class="font-bold text-2xl mb-3">{{ __('Sign In') }}</h2>
            <p class="mb-7">Enter your email and password to login</p>
            {{ $errors }}
            {{ session('status') }}
            <form class="space-y-5" action="{{ route('password.request') }}" method="POST">
                @csrf
                <div>
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" class="form-input" placeholder="Enter Email" />
                </div>
                <button type="submit" class="btn btn-primary w-full uppercase">{{ __('Send') }}</button>
            </form>
        </div>
    </div>
</x-blank-layout>
