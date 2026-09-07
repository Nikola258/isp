<footer class="border-t border-gray-100 dark:border-gray-800 py-10 mt-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row items-start justify-between gap-8">
            <div>
                <p class="font-semibold text-sm mb-1">Nikola Nikolić</p>
                <p class="text-xs text-gray-400 dark:text-gray-500 max-w-xs">{{ __('footer.tagline') }}</p>
            </div>
            <div class="flex flex-wrap gap-x-8 gap-y-3 text-xs text-gray-400 dark:text-gray-500">
                <a href="{{ route('about') }}"      class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('nav.about') }}</a>
                <a href="{{ route('skills') }}"     class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('nav.skills') }}</a>
                <a href="{{ route('projects') }}"   class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('nav.projects') }}</a>
                <a href="{{ route('how-i-work') }}" class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('nav.how_i_work') }}</a>
                <a href="{{ route('internship') }}" class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('nav.internship') }}</a>
                <a href="{{ route('contact') }}"    class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">{{ __('nav.contact') }}</a>
            </div>
            <div class="flex gap-4 text-xs text-gray-400 dark:text-gray-500">
                <a href="https://github.com/Nikola258" target="_blank" rel="noopener noreferrer"
                   class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">GitHub</a>
                <a href="https://www.linkedin.com/in/nikola-nikolic-289222303/" target="_blank" rel="noopener noreferrer"
                   class="hover:text-gray-700 dark:hover:text-gray-200 transition-colors">LinkedIn</a>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800">
            <p class="text-xs text-gray-400 dark:text-gray-600">© {{ date('Y') }} Nikola Nikolić. {{ __('footer.rights') }}</p>
        </div>
    </div>
</footer>
