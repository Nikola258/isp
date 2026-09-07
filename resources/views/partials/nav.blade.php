@php
    $languages = [
        'en' => ['label' => 'English',    'flag' => '🇬🇧'],
        'it' => ['label' => 'Italiano',   'flag' => '🇮🇹'],
        'nl' => ['label' => 'Nederlands', 'flag' => '🇳🇱'],
    ];
    $current = app()->getLocale();
    $navLinks = [
        ['route' => 'about',       'label' => __('nav.about')],
        ['route' => 'skills',      'label' => __('nav.skills')],
        ['route' => 'projects',    'label' => __('nav.projects')],
        ['route' => 'how-i-work',  'label' => __('nav.how_i_work')],
        ['route' => 'internship',  'label' => __('nav.internship')],
        ['route' => 'qa',          'label' => 'Q&A'],
        ['route' => 'contact',     'label' => __('nav.contact')],
    ];
@endphp

<nav x-data="{ mobileOpen: false }" class="fixed top-0 w-full bg-white/90 dark:bg-gray-950/90 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 z-50">
    <div class="max-w-6xl mx-auto px-6 h-14 flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="font-semibold text-sm tracking-tight hover:opacity-70 transition-opacity">
            Nikola Nikolić
        </a>

        {{-- Desktop nav --}}
        <div class="hidden lg:flex items-center gap-6 text-sm text-gray-500 dark:text-gray-400">
            @foreach ($navLinks as $link)
                <a href="{{ route($link['route']) }}"
                   class="hover:text-gray-900 dark:hover:text-gray-100 transition-colors {{ request()->routeIs($link['route']) ? 'text-gray-900 dark:text-gray-100 font-medium' : '' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-3">
            {{-- Language switcher --}}
            <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                <button @click="open = !open" aria-label="Select language"
                    class="flex items-center gap-1.5 px-2.5 py-1.5 text-xs rounded-lg border border-gray-200 dark:border-gray-700 hover:border-gray-300 dark:hover:border-gray-600 transition-colors text-gray-600 dark:text-gray-300">
                    <span>{{ $languages[$current]['flag'] }}</span>
                    <span class="font-medium">{{ strtoupper($current) }}</span>
                    <svg class="w-3 h-3 text-gray-400 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open"
                    x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"  x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 mt-1.5 w-36 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-xl shadow-lg overflow-hidden z-50">
                    @foreach ($languages as $locale => $lang)
                        <a href="{{ route('lang.switch', $locale) }}"
                            class="flex items-center gap-2.5 px-3 py-2 text-xs transition-colors
                                {{ $current === $locale ? 'bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white font-medium' : 'text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white' }}">
                            <span class="text-base leading-none">{{ $lang['flag'] }}</span>
                            <span>{{ $lang['label'] }}</span>
                            @if ($current === $locale)
                                <svg class="w-3 h-3 ml-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Dark mode toggle --}}
            <button onclick="toggleDarkMode()" aria-label="Toggle dark mode"
                class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                <svg class="hidden dark:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/>
                </svg>
                <svg class="block dark:hidden w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
                </svg>
            </button>

            {{-- Mobile hamburger --}}
            <button @click="mobileOpen = !mobileOpen" class="lg:hidden w-8 h-8 flex items-center justify-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Menu">
                <svg x-show="!mobileOpen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div x-show="mobileOpen" x-transition class="lg:hidden border-t border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-950 px-6 py-4 space-y-3">
        @foreach ($navLinks as $link)
            <a href="{{ route($link['route']) }}" @click="mobileOpen = false"
               class="block text-sm py-1.5 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 transition-colors {{ request()->routeIs($link['route']) ? 'text-gray-900 dark:text-gray-100 font-medium' : '' }}">
                {{ $link['label'] }}
            </a>
        @endforeach
    </div>
</nav>
