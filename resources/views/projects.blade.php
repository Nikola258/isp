<x-layout>
    <x-slot name="title">{{ __('projects.page_title') }} — Nikola Nikolić</x-slot>

    <div class="pt-28 pb-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl mb-16">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('nav.projects') }}</p>
                <h1 class="text-4xl font-semibold leading-tight mb-4">{{ __('projects.heading') }}</h1>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('projects.intro') }}</p>
            </div>

            <div class="space-y-8">

                {{-- BrickleyNova CRM --}}
                <div class="border border-gray-100 dark:border-gray-800 rounded-2xl overflow-hidden hover:border-gray-200 dark:hover:border-gray-700 transition-all"
                     x-data="{
                         slide: 0,
                         slides: 3,
                         timer: null,
                         init() {
                             this.start();
                         },
                         start() {
                             clearInterval(this.timer);
                             this.timer = setInterval(() => { this.slide = (this.slide + 1) % this.slides }, 4000);
                         },
                         go(n) {
                             this.slide = (n + this.slides) % this.slides;
                             this.start();
                         }
                     }">

                    {{-- Screenshot carousel --}}
                    <div class="relative bg-gray-100 dark:bg-gray-900 overflow-hidden" style="aspect-ratio: 1837/865;">

                        @foreach ([
                            '/Brickleynova_adminpage.png',
                            '/Brickleynova_calendarpage.png',
                            '/Brickleynova_projectpage.png',
                        ] as $i => $img)
                        <img src="{{ $img }}"
                             alt="{{ __('projects.brickley_title') }} — screenshot {{ $i + 1 }}"
                             class="absolute inset-0 w-full h-full object-contain"
                             style="transition: opacity 0.7s ease; z-index: 0;"
                             :style="slide === {{ $i }} ? 'opacity:1; z-index:10;' : 'opacity:0; z-index:0;'">
                        @endforeach

                        {{-- Prev / Next --}}
                        <div class="absolute inset-0 flex items-center justify-between px-3 pointer-events-none" style="z-index:20;">
                            <button @click="go(slide - 1)"
                                class="pointer-events-auto w-8 h-8 flex items-center justify-center rounded-full bg-white/80 dark:bg-gray-900/80 border border-gray-200 dark:border-gray-700 hover:bg-white dark:hover:bg-gray-800 transition-colors shadow-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            <button @click="go(slide + 1)"
                                class="pointer-events-auto w-8 h-8 flex items-center justify-center rounded-full bg-white/80 dark:bg-gray-900/80 border border-gray-200 dark:border-gray-700 hover:bg-white dark:hover:bg-gray-800 transition-colors shadow-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>

                        {{-- Dots --}}
                        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1.5" style="z-index:20;">
                            @for ($i = 0; $i < 3; $i++)
                            <button @click="go({{ $i }})"
                                class="w-1.5 h-1.5 rounded-full transition-colors duration-300"
                                :class="slide === {{ $i }} ? 'bg-gray-900 dark:bg-white' : 'bg-gray-400/60 dark:bg-gray-600'">
                            </button>
                            @endfor
                        </div>

                        {{-- Counter --}}
                        <div class="absolute bottom-3 right-4 text-xs text-gray-500 dark:text-gray-400 tabular-nums bg-white/70 dark:bg-gray-900/70 px-1.5 py-0.5 rounded" style="z-index:20;">
                            <span x-text="slide + 1"></span>/3
                        </div>
                    </div>

                    {{-- Card body --}}
                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap items-start justify-between gap-4 mb-4">
                            <div class="flex flex-wrap gap-1.5">
                                @foreach (['Laravel', 'Filament', 'MySQL', 'Eloquent', 'REST API', 'Blade'] as $tag)
                                    <span class="text-xs px-2 py-0.5 rounded bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400 font-mono">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <div class="flex items-center gap-3 shrink-0">
                                <span class="text-xs text-gray-400 dark:text-gray-500">2024 – 2025</span>
                                <span class="text-xs px-2 py-0.5 rounded-full bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 border border-green-200 dark:border-green-800">
                                    {{ __('projects.status_complete') }}
                                </span>
                            </div>
                        </div>

                        <h2 class="text-xl font-semibold mb-2">{{ __('projects.brickley_title') }}</h2>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-6 max-w-3xl">
                            {{ __('projects.brickley_desc') }}
                        </p>

                        <div class="grid sm:grid-cols-3 gap-4 mb-6">
                            @foreach ([
                                ['projects.brickley_feat_1_title', 'projects.brickley_feat_1_desc'],
                                ['projects.brickley_feat_2_title', 'projects.brickley_feat_2_desc'],
                                ['projects.brickley_feat_3_title', 'projects.brickley_feat_3_desc'],
                            ] as [$title, $desc])
                            <div class="p-4 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800">
                                <p class="text-xs font-semibold mb-1">{{ __($title) }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">{{ __($desc) }}</p>
                            </div>
                            @endforeach
                        </div>

                        <a href="https://github.com/Nikola258" target="_blank" rel="noopener noreferrer"
                            class="text-xs text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors underline underline-offset-2">
                            GitHub
                        </a>
                    </div>
                </div>

                {{-- Placeholder --}}
                <div class="border border-dashed border-gray-200 dark:border-gray-800 rounded-2xl flex items-center justify-center min-h-36">
                    <p class="text-sm text-gray-300 dark:text-gray-700">{{ __('projects.soon') }}</p>
                </div>

            </div>
        </div>
    </div>
</x-layout>
