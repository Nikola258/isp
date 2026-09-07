<x-layout>
    <x-slot name="title">Nikola Nikolić — Backend Developer</x-slot>

    {{-- HERO --}}
    <section class="min-h-screen flex items-center pt-14">
        <div class="max-w-6xl mx-auto px-6 py-24 w-full">
            <p class="text-xs text-gray-400 dark:text-gray-500 mb-4 tracking-widest uppercase">{{ __('home.hero_available') }}</p>
            <h1 class="text-5xl md:text-6xl font-semibold leading-tight tracking-tight mb-6 max-w-3xl">
                {!! __('home.hero_heading') !!}
            </h1>
            <p class="text-lg text-gray-500 dark:text-gray-400 max-w-xl leading-relaxed mb-6">
                {{ __('home.hero_bio') }}
            </p>

            {{-- Tech tags --}}
            <div class="flex flex-wrap gap-2 mb-10">
                @foreach (['PHP', 'Laravel', 'MySQL', 'Filament', 'REST APIs', 'Eloquent', 'Database Design'] as $tag)
                    <span class="text-xs px-2.5 py-1 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 font-mono">{{ $tag }}</span>
                @endforeach
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="{{ route('projects') }}"
                    class="px-5 py-2.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm rounded-lg hover:bg-gray-700 dark:hover:bg-gray-200 transition-colors">
                    {{ __('home.cta_projects') }}
                </a>
                <a href="{{ route('about') }}"
                    class="px-5 py-2.5 border border-gray-200 dark:border-gray-700 text-sm rounded-lg hover:border-gray-400 dark:hover:border-gray-500 transition-colors">
                    {{ __('home.cta_about') }}
                </a>
                <a href="{{ asset('Professional CV Resume.pdf') }}" download class="px-5 py-2.5 border border-gray-200 dark:border-gray-700 text-sm rounded-lg hover:border-gray-400 dark:hover:border-gray-500 transition-colors text-gray-500 dark:text-gray-400">
                    {{ __('home.cta_cv') }} ↓
                </a>
            </div>
        </div>
    </section>

    {{-- SHORT INTRO --}}
    <section class="py-16 border-t border-gray-100 dark:border-gray-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl">
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed text-lg">
                    {{ __('home.intro') }}
                </p>
            </div>
        </div>
    </section>

    {{-- SELECTED PROJECTS --}}
    <section class="py-16 border-t border-gray-100 dark:border-gray-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-2xl font-semibold">{{ __('home.projects_heading') }}</h2>
                <a href="{{ route('projects') }}" class="text-sm text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('home.projects_all') }} →</a>
            </div>
            <div class="grid md:grid-cols-2 gap-5">
                <a href="{{ route('projects') }}" class="group block border border-gray-100 dark:border-gray-800 rounded-2xl p-6 hover:border-gray-300 dark:hover:border-gray-600 hover:shadow-sm transition-all">
                    <div class="flex items-center gap-2 mb-4 flex-wrap">
                        @foreach (['Laravel', 'MySQL', 'Filament'] as $tag)
                            <span class="text-xs px-2 py-0.5 rounded bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400 font-mono">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <h3 class="font-semibold mb-2">{{ __('home.project_iip_title') }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('home.project_iip_desc') }}</p>
                </a>
                <div class="border border-dashed border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center justify-center min-h-36">
                    <p class="text-sm text-gray-300 dark:text-gray-700">{{ __('home.projects_soon') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- HOW I WORK - teaser --}}
    <section class="py-16 border-t border-gray-100 dark:border-gray-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-2xl font-semibold">{{ __('home.how_heading') }}</h2>
                <a href="{{ route('how-i-work') }}" class="text-sm text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('home.how_more') }} →</a>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ([
                    ['01', __('how.step_understand'), __('how.step_understand_desc')],
                    ['02', __('how.step_research'),   __('how.step_research_desc')],
                    ['03', __('how.step_plan'),       __('how.step_plan_desc')],
                    ['04', __('how.step_design'),     __('how.step_design_desc')],
                    ['05', __('how.step_develop'),    __('how.step_develop_desc')],
                    ['06', __('how.step_test'),       __('how.step_test_desc')],
                    ['07', __('how.step_evaluate'),   __('how.step_evaluate_desc')],
                    ['08', __('how.step_improve'),    __('how.step_improve_desc')],
                ] as [$num, $label, $desc])
                <div class="p-4 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800">
                    <p class="text-xs font-mono text-gray-400 dark:text-gray-600 mb-1">{{ $num }}</p>
                    <p class="text-sm font-semibold mb-2">{{ $label }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- WHY INTERNATIONAL --}}
    <section class="py-16 border-t border-gray-100 dark:border-gray-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('home.intl_label') }}</p>
                <h2 class="text-2xl font-semibold mb-4">{{ __('home.intl_heading') }}</h2>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-6">{{ __('home.intl_text') }}</p>
                <a href="{{ route('internship') }}" class="text-sm text-gray-900 dark:text-white underline underline-offset-4 hover:opacity-70 transition-opacity">
                    {{ __('home.intl_cta') }} →
                </a>
            </div>
        </div>
    </section>

    {{-- FINAL CTA --}}
    <section class="py-20 border-t border-gray-100 dark:border-gray-800">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-4">{{ __('home.final_cta_heading') }}</h2>
            <p class="text-gray-500 dark:text-gray-400 mb-8 max-w-md mx-auto">{{ __('home.final_cta_text') }}</p>
            <a href="{{ route('contact') }}"
                class="inline-block px-6 py-3 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm rounded-lg hover:bg-gray-700 dark:hover:bg-gray-200 transition-colors">
                {{ __('home.final_cta_btn') }}
            </a>
        </div>
    </section>

</x-layout>
