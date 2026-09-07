<x-layout>
    <x-slot name="title">{{ __('internship.page_title') }} — Nikola Nikolić</x-slot>

    <div class="pt-28 pb-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl mb-16">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('nav.internship') }}</p>
                <h1 class="text-4xl font-semibold leading-tight mb-4">{{ __('internship.heading') }}</h1>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed text-lg">{{ __('internship.intro') }}</p>
            </div>

            <div class="grid md:grid-cols-3 gap-16">
                <div class="md:col-span-2 space-y-14">

                    {{-- Previous Experience --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-6">{{ __('internship.experience_heading') }}</h2>
                        <div class="space-y-4">

                            <div class="p-5 rounded-xl border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-900">
                                <div class="flex items-start justify-between gap-4 mb-3">
                                    <div>
                                        <a href="https://internationalaffairsgroup.com/hq/nllink" target="_blank" rel="noopener noreferrer"
                                            class="font-semibold hover:underline underline-offset-2">International Affairs Group</a>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-0.5">{{ __('internship.iag_role') }}</p>
                                    </div>
                                    <span class="text-xs text-gray-400 dark:text-gray-500 shrink-0">2025 – 2026</span>
                                </div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('internship.iag_desc_2') }}</p>
                            </div>

                            <div class="p-5 rounded-xl border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-900">
                                <div class="flex items-start justify-between gap-4 mb-3">
                                    <div>
                                        <a href="https://internationalaffairsgroup.com/hq/nllink" target="_blank" rel="noopener noreferrer"
                                            class="font-semibold hover:underline underline-offset-2">International Affairs Group</a>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-0.5">{{ __('internship.iag_role') }}</p>
                                    </div>
                                    <span class="text-xs text-gray-400 dark:text-gray-500 shrink-0">2024 – 2025</span>
                                </div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('internship.iag_desc_1') }}</p>
                            </div>

                        </div>
                    </div>

                    {{-- Why International --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('internship.why_intl_heading') }}</h2>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('internship.why_intl_text') }}</p>
                    </div>

                    {{-- Why Italy --}}
                    <div class="p-6 rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl">🇮🇹</span>
                            <h2 class="text-xl font-semibold">{{ __('internship.why_italy_heading') }}</h2>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('internship.why_italy_text') }}</p>
                    </div>

                    {{-- What I Can Bring --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('internship.bring_heading') }}</h2>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-4">{{ __('internship.bring_intro') }}</p>
                        <ul class="space-y-2">
                            @foreach ([
                                'internship.bring_1','internship.bring_2','internship.bring_3',
                                'internship.bring_4','internship.bring_5','internship.bring_6',
                            ] as $key)
                            <li class="flex items-start gap-3 text-sm text-gray-500 dark:text-gray-400">
                                <span class="mt-1.5 w-1 h-1 rounded-full bg-gray-400 dark:bg-gray-600 shrink-0"></span>
                                {{ __($key) }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- What I Want to Learn --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('internship.learn_heading') }}</h2>
                        <ul class="space-y-2">
                            @foreach ([
                                'internship.learn_1','internship.learn_2','internship.learn_3',
                                'internship.learn_4','internship.learn_5',
                            ] as $key)
                            <li class="flex items-start gap-3 text-sm text-gray-500 dark:text-gray-400">
                                <span class="mt-1.5 w-1 h-1 rounded-full bg-gray-400 dark:bg-gray-600 shrink-0"></span>
                                {{ __($key) }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- What I Expect From Myself --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">{{ __('internship.expect_heading') }}</h2>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('internship.expect_text') }}</p>
                    </div>

                </div>

                {{-- Sidebar --}}
                <div class="space-y-6">
                    <div class="p-5 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800">
                        <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-3">{{ __('internship.sidebar_details') }}</p>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-500 dark:text-gray-400">{{ __('internship.sidebar_type') }}</span>
                                <span class="font-medium">{{ __('internship.sidebar_type_val') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500 dark:text-gray-400">{{ __('internship.sidebar_country') }}</span>
                                <span class="font-medium">🇮🇹 Italy</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500 dark:text-gray-400">{{ __('internship.sidebar_focus') }}</span>
                                <span class="font-medium">Backend</span>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center px-5 py-3 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm rounded-lg hover:bg-gray-700 dark:hover:bg-gray-200 transition-colors">
                        {{ __('internship.contact_cta') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
