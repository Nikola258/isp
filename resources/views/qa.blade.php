<x-layout>
    <x-slot name="title">{{ __('qa.page_title') }} — Nikola Nikolić</x-slot>

    <div class="pt-28 pb-24">
        <div class="max-w-4xl mx-auto px-6">
            <div class="max-w-2xl mb-16">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">Q&A</p>
                <h1 class="text-4xl font-semibold leading-tight mb-4">{{ __('qa.heading') }}</h1>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('qa.intro') }}</p>
            </div>

            @php
            $sections = [
                [
                    'label' => __('qa.cat_general'),
                    'items' => [
                        [__('qa.q_who'),    __('qa.a_who')],
                        [__('qa.q_study'),  __('qa.a_study')],
                        [__('qa.q_type'),   __('qa.a_type')],
                    ],
                ],
                [
                    'label' => __('qa.cat_technical'),
                    'items' => [
                        [__('qa.q_strongest'), __('qa.a_strongest')],
                        [__('qa.q_laravel'),   __('qa.a_laravel')],
                        [__('qa.q_newproject'),__('qa.a_newproject')],
                        [__('qa.q_database'),  __('qa.a_database')],
                        [__('qa.q_debug'),     __('qa.a_debug')],
                    ],
                ],
                [
                    'label' => __('qa.cat_teamwork'),
                    'items' => [
                        [__('qa.q_smallteam'), __('qa.a_smallteam')],
                        [__('qa.q_largeteam'), __('qa.a_largeteam')],
                        [__('qa.q_feedback'),  __('qa.a_feedback')],
                        [__('qa.q_stuck'),     __('qa.a_stuck')],
                    ],
                ],
                [
                    'label' => __('qa.cat_international'),
                    'items' => [
                        [__('qa.q_why_intl'),  __('qa.a_why_intl')],
                        [__('qa.q_why_italy'), __('qa.a_why_italy')],
                        [__('qa.q_contribute'),__('qa.a_contribute')],
                    ],
                ],
                [
                    'label' => __('qa.cat_ai'),
                    'items' => [
                        [__('qa.q_ai_use'),       __('qa.a_ai_use')],
                        [__('qa.q_ai_validate'),  __('qa.a_ai_validate')],
                        [__('qa.q_ai_conventions'),__('qa.a_ai_conventions')],
                    ],
                ],
            ];
            @endphp

            <div class="space-y-12">
                @foreach ($sections as $section)
                <div>
                    <h2 class="text-xs font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-5">{{ $section['label'] }}</h2>
                    <div x-data="{ open: null }" class="space-y-2">
                        @foreach ($section['items'] as $i => [$q, $a])
                        <div class="border border-gray-100 dark:border-gray-800 rounded-xl overflow-hidden">
                            <button @click="open = open === {{ $i }} ? null : {{ $i }}"
                                class="w-full flex items-center justify-between px-5 py-4 text-left text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                                <span>{{ $q }}</span>
                                <svg class="w-4 h-4 text-gray-400 transition-transform duration-200 shrink-0 ml-4"
                                    :class="{ 'rotate-180': open === {{ $i }} }"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open === {{ $i }}" x-transition class="px-5 pt-1 pb-5">
                                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed border-t border-gray-100 dark:border-gray-800 pt-4">{{ $a }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
