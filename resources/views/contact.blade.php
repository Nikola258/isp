<x-layout>
    <x-slot name="title">{{ __('contact.page_title') }} — Nikola Nikolić</x-slot>

    <div class="pt-28 pb-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl mb-16">
                <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('nav.contact') }}</p>
                <h1 class="text-4xl font-semibold leading-tight mb-4">{{ __('contact.heading') }}</h1>
                <p class="text-gray-500 dark:text-gray-400 leading-relaxed">{{ __('contact.intro') }}</p>
            </div>

            <div class="grid md:grid-cols-2 gap-16">
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-xs text-gray-500 dark:text-gray-400 mb-1.5">{{ __('contact.name') }}</label>
                            <input type="text" id="name" name="name" placeholder="{{ __('contact.name_ph') }}"
                                class="w-full px-3 py-2.5 text-sm bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg placeholder-gray-300 dark:placeholder-gray-600 focus:outline-none focus:border-gray-400 dark:focus:border-gray-500 transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-xs text-gray-500 dark:text-gray-400 mb-1.5">{{ __('contact.email') }}</label>
                            <input type="email" id="email" name="email" placeholder="{{ __('contact.email_ph') }}"
                                class="w-full px-3 py-2.5 text-sm bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg placeholder-gray-300 dark:placeholder-gray-600 focus:outline-none focus:border-gray-400 dark:focus:border-gray-500 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-xs text-gray-500 dark:text-gray-400 mb-1.5">{{ __('contact.subject') }}</label>
                        <input type="text" id="subject" name="subject" placeholder="{{ __('contact.subject_ph') }}"
                            class="w-full px-3 py-2.5 text-sm bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg placeholder-gray-300 dark:placeholder-gray-600 focus:outline-none focus:border-gray-400 dark:focus:border-gray-500 transition-colors">
                    </div>
                    <div>
                        <label for="message" class="block text-xs text-gray-500 dark:text-gray-400 mb-1.5">{{ __('contact.message') }}</label>
                        <textarea id="message" name="message" rows="6" placeholder="{{ __('contact.message_ph') }}"
                            class="w-full px-3 py-2.5 text-sm bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg placeholder-gray-300 dark:placeholder-gray-600 focus:outline-none focus:border-gray-400 dark:focus:border-gray-500 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="px-5 py-2.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm rounded-lg hover:bg-gray-700 dark:hover:bg-gray-200 transition-colors">
                        {{ __('contact.send') }}
                    </button>
                </form>

                <div class="space-y-8">
                    <div>
                        <p class="text-xs text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">{{ __('contact.links_label') }}</p>
                        <div class="space-y-3">
                            <a href="https://github.com/Nikola258" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.729.083-.729 1.205.084 1.84 1.236 1.84 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23a11.52 11.52 0 013.003-.404c1.02.005 2.045.138 3.003.404 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.627-5.373-12-12-12z"/></svg>
                                github.com/Nikola258
                            </a>
                            <a href="https://www.linkedin.com/in/nikola-nikolic-289222303/" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                LinkedIn
                            </a>
                            <div class="flex items-center gap-3 text-sm text-gray-400 dark:text-gray-600">
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ __('contact.email_placeholder') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
