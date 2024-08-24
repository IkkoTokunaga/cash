<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            <x-secondary-button class="me-2">
                ホーム
            </x-secondary-button>
        </a>

        </a>
    @else
        <a href="{{ route('login') }}">
            <x-secondary-button class="me-2">
                ログイン
            </x-secondary-button>
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">
                <x-secondary-button>
                    会員登録
                </x-secondary-button>
            </a>
        @endif
    @endauth
</nav>
