<header class="flex items-center justify-between py-10">
    <div>
        <a aria-label="TailwindBlog" href="https://github.com/ReinanHS/limarka-render-html">
            <div class="flex items-center justify-between">
                <div class="mr-3">
                    <img class="github-logo-dark" src="{{ url('assets/images/GitHub-Mark-64px.png') }}" alt="Github Logo" width="64px">
                    <img class="github-logo-light" src="{{ url('assets/images/GitHub-Mark-Light-64px.png') }}" alt="Github Logo" width="64px" style="display: none;">
                </div>
                <div class="hidden h-6 text-2xl font-semibold sm:block">Limarka Page</div>
            </div>
        </a>
    </div>
    <div class="flex items-center text-base leading-5">
        <div class="hidden sm:block">
            <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4"
               href="https://github.com/{{ $page['github.repository_full'] }}" target="_blank">Código</a>
            <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4"
               href="https://github.com/{{ $page['github.user'] }}"
               target="_blank">Autor</a>
        </div>
{{--        <button aria-label="Toggle Dark Mode" type="button" class="ml-1 mr-1 h-8 w-8 rounded p-1 sm:ml-4" id="btnDarkMode">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
{{--                 class="text-gray-900 dark:text-gray-100">--}}
{{--                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>--}}
{{--            </svg>--}}
{{--        </button>--}}
        <div class="sm:hidden">
            <button type="button" class="ml-1 mr-1 h-8 w-8 rounded py-1" aria-label="Toggle Menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                     class="text-gray-900 dark:text-gray-100">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="fixed top-0 left-0 z-10 h-full w-full transform bg-gray-200 opacity-95 duration-300 ease-in-out dark:bg-gray-800 translate-x-full">
                <div class="flex justify-end">
                    <button type="button" class="mr-5 mt-11 h-8 w-8 rounded" aria-label="Toggle Menu">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="text-gray-900 dark:text-gray-100">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav class="fixed mt-8 h-full">
                    <div class="px-12 py-4"><a
                                class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                                href="/#projects">Projects</a></div>
                    <div class="px-12 py-4"><a
                                class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100"
                                href="/#about">About</a></div>
                </nav>
            </div>
        </div>
    </div>
</header>