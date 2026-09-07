<x-layout>
    <x-slot name="title">{{ __('how.page_title') }} — Nikola Nikolić</x-slot>

    <div class="pt-28 pb-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl mb-16">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('nav.how_i_work') }}</p>
                <h1 class="text-4xl font-semibold leading-tight mb-4">{{ __('how.heading') }}</h1>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('how.intro') }}</p>
            </div>

            @php
            $steps = [
                ['num' => '01', 'key' => 'understand', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>'],
                ['num' => '02', 'key' => 'research',   'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>'],
                ['num' => '03', 'key' => 'plan',       'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>'],
                ['num' => '04', 'key' => 'design',     'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>'],
                ['num' => '05', 'key' => 'develop',    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>'],
                ['num' => '06', 'key' => 'test',       'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>'],
                ['num' => '07', 'key' => 'evaluate',   'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>'],
                ['num' => '08', 'key' => 'improve',    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>'],
            ];
            @endphp

            <div class="space-y-4">
                @foreach ($steps as $step)
                <div class="flex gap-5 items-start p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800">
                    <div class="shrink-0 flex flex-col items-center gap-1.5 pt-0.5">
                        <p class="text-xs font-mono text-gray-400 dark:text-gray-600">{{ $step['num'] }}</p>
                        <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                            <svg class="w-4 h-4 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $step['icon'] !!}
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="font-semibold mb-1.5">{{ __('how.step_' . $step['key']) }}</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('how.step_' . $step['key'] . '_desc') }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Technical examples --}}
            <div class="mt-20">
                <h2 class="text-2xl font-semibold mb-10">{{ __('how.examples_heading') }}</h2>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ([
                        ['how.ex_requirements', 'how.ex_requirements_desc'],
                        ['how.ex_erd',          'how.ex_erd_desc'],
                        ['how.ex_api',          'how.ex_api_desc'],
                        ['how.ex_laravel',      'how.ex_laravel_desc'],
                        ['how.ex_testing',      'how.ex_testing_desc'],
                        ['how.ex_debugging',    'how.ex_debugging_desc'],
                    ] as [$title, $desc])
                    <div class="p-5 rounded-xl border border-gray-100 dark:border-gray-800">
                        <h3 class="font-semibold text-sm mb-2 font-mono">{{ __($title) }}</h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">{{ __($desc) }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- AI section teaser --}}
            <div class="mt-16 p-6 rounded-2xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800 max-w-2xl">
                <h2 class="font-semibold mb-2">{{ __('how.ai_heading') }}</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed mb-4">{{ __('how.ai_text') }}</p>
                <p class="text-xs text-gray-400 dark:text-gray-600 italic">{{ __('how.ai_note') }}</p>
            </div>

        </div>
    </div>
</x-layout>
