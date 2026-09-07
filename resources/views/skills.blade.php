<x-layout>
    <x-slot name="title">{{ __('skills.page_title') }} — Nikola Nikolić</x-slot>

    <div class="pt-28 pb-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl mb-16">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('nav.skills') }}</p>
                <h1 class="text-4xl font-semibold leading-tight mb-4">{{ __('skills.heading') }}</h1>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('skills.intro') }}</p>
            </div>

            @php
            $categories = [
                [
                    'title' => __('skills.cat_languages'),
                    'skills' => [
                        ['name' => 'PHP',        'desc' => __('skills.php_desc')],
                        ['name' => 'SQL',        'desc' => __('skills.sql_desc')],
                        ['name' => 'HTML',       'desc' => __('skills.html_desc')],
                        ['name' => 'CSS',        'desc' => __('skills.css_desc')],
                        ['name' => 'JavaScript', 'desc' => __('skills.js_desc')],
                    ],
                ],
                [
                    'title' => __('skills.cat_backend'),
                    'skills' => [
                        ['name' => 'Laravel',        'desc' => __('skills.laravel_desc')],
                        ['name' => 'REST APIs',       'desc' => __('skills.restapi_desc')],
                        ['name' => 'Eloquent ORM',    'desc' => __('skills.eloquent_desc')],
                        ['name' => 'Authentication',  'desc' => __('skills.auth_desc')],
                        ['name' => 'API Integrations','desc' => __('skills.apiintegration_desc')],
                    ],
                ],
                [
                    'title' => __('skills.cat_database'),
                    'skills' => [
                        ['name' => 'MySQL',           'desc' => __('skills.mysql_desc')],
                        ['name' => 'ERDs',            'desc' => __('skills.erd_desc')],
                        ['name' => 'Database Design', 'desc' => __('skills.dbdesign_desc')],
                        ['name' => 'Migrations',      'desc' => __('skills.migrations_desc')],
                    ],
                ],
                [
                    'title' => __('skills.cat_tools'),
                    'skills' => [
                        ['name' => 'Git / GitHub', 'desc' => __('skills.git_desc')],
                        ['name' => 'Composer',     'desc' => __('skills.composer_desc')],
                        ['name' => 'Postman',      'desc' => __('skills.postman_desc')],
                        ['name' => 'Filament',     'desc' => __('skills.filament_desc')],
                        ['name' => 'Blade',        'desc' => __('skills.blade_desc')],
                    ],
                ],
                [
                    'title' => __('skills.cat_development'),
                    'skills' => [
                        ['name' => 'Testing & Debugging',   'desc' => __('skills.testing_desc')],
                        ['name' => 'Validation',             'desc' => __('skills.validation_desc')],
                        ['name' => 'AI-assisted Development','desc' => __('skills.ai_desc')],
                    ],
                ],
            ];
            @endphp

            <div class="space-y-14">
                @foreach ($categories as $cat)
                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-widest text-gray-400 dark:text-gray-500 mb-6">{{ $cat['title'] }}</h2>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($cat['skills'] as $skill)
                        <div class="p-5 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800">
                            <p class="font-semibold text-sm mb-2 font-mono">{{ $skill['name'] }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">{{ $skill['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-14 p-5 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-800 max-w-2xl">
                <p class="text-xs text-gray-400 dark:text-gray-500 mb-1 uppercase tracking-widest">{{ __('skills.note_label') }}</p>
                <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('skills.note_text') }}</p>
            </div>
        </div>
    </div>
</x-layout>
