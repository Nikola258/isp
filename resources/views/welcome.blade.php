<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100 antialiased font-sans transition-colors duration-300">

    {{-- NAV --}}
    <nav class="fixed top-0 w-full bg-white/80 dark:bg-gray-950/80 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 z-50">
        <div class="max-w-5xl mx-auto px-6 h-14 flex items-center justify-between">
            <span class="font-semibold text-sm tracking-tight">Nikola</span>
            <div class="flex items-center gap-5">
                {{-- Page links --}}
                <div class="hidden sm:flex gap-6 text-sm text-gray-500 dark:text-gray-400">
                    <a href="#about"    class="hover:text-gray-900 dark:hover:text-gray-100 transition-colors">{{ __('portfolio.nav_about') }}</a>
                    <a href="#projects" class="hover:text-gray-900 dark:hover:text-gray-100 transition-colors">{{ __('portfolio.nav_projects') }}</a>
                    <a href="#contact"  class="hover:text-gray-900 dark:hover:text-gray-100 transition-colors">{{ __('portfolio.nav_contact') }}</a>
                </div>

                {{-- Language switcher dropdown --}}
                @php
                    $languages = [
                        'en' => ['label' => 'English', 'flag' => '🇬🇧'],
                        'it' => ['label' => 'Italiano', 'flag' => '🇮🇹'],
                        'nl' => ['label' => 'Nederlands', 'flag' => '🇳🇱'],
                    ];
                    $current = app()->getLocale();
                @endphp
                <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                    <button @click="open = !open"
                        class="flex items-center gap-1.5 px-2.5 py-1.5 text-xs rounded-lg border border-gray-200 dark:border-gray-700 hover:border-gray-300 dark:hover:border-gray-600 transition-colors text-gray-600 dark:text-gray-300">
                        <span>{{ $languages[$current]['flag'] }}</span>
                        <span class="font-medium">{{ strtoupper($current) }}</span>
                        <svg class="w-3 h-3 text-gray-400 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 mt-1.5 w-36 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-xl shadow-lg overflow-hidden z-50">
                        @foreach ($languages as $locale => $lang)
                            <a href="{{ route('lang.switch', $locale) }}"
                                class="flex items-center gap-2.5 px-3 py-2 text-xs transition-colors
                                    {{ $current === $locale
                                        ? 'bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white font-medium'
                                        : 'text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white' }}">
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/>
                    </svg>
                    <svg class="block dark:hidden w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section id="home" class="min-h-screen flex items-center pt-14">
        <div class="max-w-5xl mx-auto px-6 py-24">
            <p class="text-sm text-gray-400 dark:text-gray-500 mb-3 tracking-wider uppercase">
                {{ __('portfolio.hero_available') }}
            </p>
            <h1 class="text-5xl font-semibold leading-tight tracking-tight mb-6">
                {!! __('portfolio.hero_heading') !!}
            </h1>
            <p class="text-lg text-gray-500 dark:text-gray-400 max-w-xl leading-relaxed mb-8">
                {{ __('portfolio.hero_bio') }}
            </p>
            <div class="flex gap-4">
                <a href="#projects"
                    class="px-5 py-2.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm rounded-lg hover:bg-gray-700 dark:hover:bg-gray-200 transition-colors">
                    {{ __('portfolio.hero_cta_work') }}
                </a>
                <a href="#contact"
                    class="px-5 py-2.5 border border-gray-200 dark:border-gray-700 text-sm rounded-lg hover:border-gray-400 dark:hover:border-gray-500 transition-colors">
                    {{ __('portfolio.hero_cta_touch') }}
                </a>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="py-24 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-5xl mx-auto px-6">
            <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-8">
                {{ __('portfolio.about_label') }}
            </p>
            <div class="grid md:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-3xl font-semibold mb-5 leading-snug">{{ __('portfolio.about_heading') }}</h2>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-4">{{ __('portfolio.about_p1') }}</p>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('portfolio.about_p2') }}</p>
                </div>
                <div class="space-y-4">
                    <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">
                        {{ __('portfolio.about_skills') }}
                    </p>
                    @foreach ([
                        ['PHP / Laravel', '90'],
                        ['JavaScript', '80'],
                        ['Tailwind CSS', '85'],
                        ['MySQL', '75'],
                        ['Git & Version Control', '90'],
                    ] as [$skill, $level])
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-700 dark:text-gray-300">{{ $skill }}</span>
                            <span class="text-gray-400 dark:text-gray-500">{{ $level }}%</span>
                        </div>
                        <div class="h-1 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-gray-900 dark:bg-white rounded-full" style="width: {{ $level }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="py-24">
        <div class="max-w-5xl mx-auto px-6">
            <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-8">
                {{ __('portfolio.projects_label') }}
            </p>
            <h2 class="text-3xl font-semibold mb-12 leading-snug">{{ __('portfolio.projects_heading') }}</h2>
            <div class="grid md:grid-cols-2 gap-6">

                <div class="border border-gray-100 dark:border-gray-800 rounded-2xl p-6 hover:border-gray-300 dark:hover:border-gray-600 hover:shadow-sm transition-all group">
                    <div class="flex items-start justify-between mb-4">
                        <span class="text-xs bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400 px-2 py-1 rounded-md">
                            Laravel · MySQL · Tailwind
                        </span>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-600 group-hover:text-gray-600 dark:group-hover:text-gray-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 17L17 7M17 7H7m10 0v10"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">{{ __('portfolio.projects_iip_title') }}</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">{{ __('portfolio.projects_iip_desc') }}</p>
                    <div class="mt-5 flex gap-3">
                        <a href="https://github.com/Nikola258" target="_blank" rel="noopener noreferrer"
                            class="text-xs text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors underline underline-offset-2">
                            {{ __('portfolio.projects_github') }}
                        </a>
                    </div>
                </div>

                <div class="border border-dashed border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center justify-center min-h-48">
                    <p class="text-gray-300 dark:text-gray-700 text-sm">{{ __('portfolio.projects_soon') }}</p>
                </div>

            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="py-24 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-5xl mx-auto px-6">
            <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-8">
                {{ __('portfolio.contact_label') }}
            </p>
            <div class="max-w-lg">
                <h2 class="text-3xl font-semibold mb-4 leading-snug">{{ __('portfolio.contact_heading') }}</h2>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-8">{{ __('portfolio.contact_intro') }}</p>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-xs text-gray-500 dark:text-gray-400 mb-1.5">
                                {{ __('portfolio.contact_name') }}
                            </label>
                            <input type="text" id="name" name="name"
                                placeholder="{{ __('portfolio.contact_name_ph') }}"
                                class="w-full px-3 py-2.5 text-sm bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg placeholder-gray-300 dark:placeholder-gray-600 focus:outline-none focus:border-gray-400 dark:focus:border-gray-500 transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-xs text-gray-500 dark:text-gray-400 mb-1.5">
                                {{ __('portfolio.contact_email') }}
                            </label>
                            <input type="email" id="email" name="email"
                                placeholder="{{ __('portfolio.contact_email_ph') }}"
                                class="w-full px-3 py-2.5 text-sm bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg placeholder-gray-300 dark:placeholder-gray-600 focus:outline-none focus:border-gray-400 dark:focus:border-gray-500 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-xs text-gray-500 dark:text-gray-400 mb-1.5">
                            {{ __('portfolio.contact_message') }}
                        </label>
                        <textarea id="message" name="message" rows="5"
                            placeholder="{{ __('portfolio.contact_message_ph') }}"
                            class="w-full px-3 py-2.5 text-sm bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg placeholder-gray-300 dark:placeholder-gray-600 focus:outline-none focus:border-gray-400 dark:focus:border-gray-500 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="px-5 py-2.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm rounded-lg hover:bg-gray-700 dark:hover:bg-gray-200 transition-colors">
                        {{ __('portfolio.contact_send') }}
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="border-t border-gray-100 dark:border-gray-800 py-8">
        <div class="max-w-5xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-gray-400 dark:text-gray-600">
                © {{ date('Y') }} Nikola. {{ __('portfolio.footer_rights') }}
            </p>
            <div class="flex gap-5">
                <a href="https://github.com/Nikola258" target="_blank" rel="noopener noreferrer"
                    class="text-xs text-gray-400 dark:text-gray-500 hover:text-gray-700 dark:hover:text-gray-200 transition-colors">GitHub</a>
                <a href="https://www.linkedin.com/in/nikola-nikolic-289222303/" target="_blank" rel="noopener noreferrer"
                    class="text-xs text-gray-400 dark:text-gray-500 hover:text-gray-700 dark:hover:text-gray-200 transition-colors">LinkedIn</a>
            </div>
        </div>
    </footer>

</body>
</html>
