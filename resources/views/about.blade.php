<x-layout>
    <x-slot name="title">{{ __('about.page_title') }} — Nikola Nikolić</x-slot>

    <div class="pt-28 pb-24">
        <div class="max-w-6xl mx-auto px-6">

            {{-- Header --}}
            <div class="max-w-2xl mb-20">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('nav.about') }}</p>
                <h1 class="text-4xl font-semibold leading-tight mb-6">{{ __('about.heading') }}</h1>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed text-lg">{{ __('about.intro') }}</p>
            </div>

            <div class="grid md:grid-cols-3 gap-16">
                <div class="md:col-span-2 space-y-14">

                    {{-- Who I Am --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('about.who_heading') }}</h2>
                        <div class="space-y-3 text-gray-500 dark:text-gray-400 leading-relaxed">
                            <p>{{ __('about.who_p1') }}</p>
                            <p>{{ __('about.who_p2') }}</p>
                        </div>
                    </div>

                    {{-- What Interests Me --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('about.interests_heading') }}</h2>
                        <ul class="space-y-2">
                            @foreach ([
                                'about.interest_1', 'about.interest_2', 'about.interest_3',
                                'about.interest_4', 'about.interest_5', 'about.interest_6',
                            ] as $key)
                            <li class="flex items-start gap-3 text-gray-500 dark:text-gray-400 text-sm">
                                <span class="mt-1.5 w-1 h-1 rounded-full bg-gray-400 dark:bg-gray-600 shrink-0"></span>
                                {{ __($key) }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- How I Work --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('about.approach_heading') }}</h2>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-4">{{ __('about.approach_text') }}</p>
                        <a href="{{ route('how-i-work') }}" class="text-sm underline underline-offset-4 text-gray-900 dark:text-white hover:opacity-70 transition-opacity">
                            {{ __('about.approach_link') }} →
                        </a>
                    </div>

                    {{-- Teams --}}
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="p-5 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800">
                            <h3 class="font-semibold mb-2 text-sm">{{ __('about.small_team_heading') }}</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('about.small_team_text') }}</p>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800">
                            <h3 class="font-semibold mb-2 text-sm">{{ __('about.large_team_heading') }}</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('about.large_team_text') }}</p>
                        </div>
                    </div>

                    {{-- Feedback & Learning --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('about.feedback_heading') }}</h2>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('about.feedback_text') }}</p>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('about.learning_heading') }}</h2>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('about.learning_text') }}</p>
                    </div>

                </div>

                {{-- Sidebar --}}
                <div class="space-y-8">
                    {{-- Languages --}}
                    <div>
                        <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('about.languages_label') }}</p>
                        <div class="space-y-3">
                            @foreach ([
                                [__('about.lang_dutch_name'),   __('about.lang_dutch_level'),   '🇳🇱'],
                                [__('about.lang_english_name'), __('about.lang_english_level'), '🇬🇧'],
                                [__('about.lang_serbian_name'), __('about.lang_serbian_level'), '🇷🇸 🇭🇷'],
                                [__('about.lang_italian_name'), __('about.lang_italian_level'), '🇮🇹'],
                            ] as [$lang, $level, $flag])
                            <div class="flex items-center justify-between text-sm">
                                <span class="flex items-center gap-2">
                                    <span>{{ $flag }}</span>
                                    <span class="text-gray-700 dark:text-gray-300">{{ $lang }}</span>
                                </span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">{{ $level }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- CV Download --}}
                    <div class="p-4 rounded-xl border border-dashed border-gray-200 dark:border-gray-700">
                        <p class="text-xs text-gray-400 dark:text-gray-500 mb-3">{{ __('about.cv_label') }}</p>
                        <a href="#" class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            </svg>
                            {{ __('about.cv_download') }}
                        </a>
                    </div>

                    {{-- Links --}}
                    <div>
                        <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('about.links_label') }}</p>
                        <div class="space-y-2">
                            <a href="https://github.com/Nikola258" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.729.083-.729 1.205.084 1.84 1.236 1.84 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23a11.52 11.52 0 013.003-.404c1.02.005 2.045.138 3.003.404 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.627-5.373-12-12-12z"/></svg>
                                GitHub
                            </a>
                            <a href="https://www.linkedin.com/in/nikola-nikolic-289222303/" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
