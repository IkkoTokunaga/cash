<div>
    <nav x-data="{ open: false }" class="w-full bg-white border-b border-gray-100 fixed z-50">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-1 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('welcome') }}" wire:navigate>
                            <img src="{{ asset('storage/cash-canvas-log.png') }}" alt="cash canvas">
                            {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> --}}
                        </a>
                    </div>

                    @auth
                    <div class=" space-x-8 -my-px ms-10 flex">
                        <div class=" space-x-8 -my-px ms-10 flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                {{ __('ホーム') }}
                            </x-nav-link>
                        </div>
                    </div>

                    @else
                        <div class=" space-x-8 -my-px ms-1 flex">
                            <div class=" space-x-8 -my-px ms-10 flex">
                                <x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                                    {{ __('Login') }}
                                </x-nav-link>
                            </div>
                        </div>

                        @if (Route::has('register'))
                            <div class=" space-x-8 -my-px ms-1 flex">
                                <div class=" space-x-8 -my-px ms-10 flex">
                                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                                        {{ __('Sing Up') }}
                                    </x-nav-link>
                                </div>
                            </div>
                        @endif
                    @endauth

                </div>
            </div>
        </div>
    </nav>
    <div class="h-16">
    </div>
</div>
