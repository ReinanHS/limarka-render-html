<!DOCTYPE html>
<html lang="{{ $page->language ?? 'pt_BR' }}" class="scroll-smooth">
    @include('_components.head', ['page' => $page])
    <body class="bg-white text-black antialiased dark:bg-gray-900 dark:text-white">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
            <div class="flex h-screen flex-col justify-between">
                @include('_components.header', ['page' => $page])
                @yield('body')
                @include('_components.footer', ['page' => $page])
            </div>
        </div>

        @include('_components.source-github')
    </body>
</html>
