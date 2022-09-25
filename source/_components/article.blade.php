<article>
    <header>
        <div class="space-y-1 border-b border-gray-200 pb-10 text-center dark:border-gray-700">
            <dl>
                <div>
                    <dt class="sr-only">Publicado em</dt>
                    <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                        <time datetime="{{ $page->limarka['page_render']['published_time'] }}">
                            {{ \Illuminate\Support\Carbon::parse($page->limarka['page_render']['published_time'])->locale('pt-BR')->translatedFormat('d F Y') }}
                        </time>
                    </dd>
                </div>
            </dl>
            <div>
                <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                    {{ $page->limarka['title'] }}
                </h1>
            </div>
            <div class="mt-5" style="margin-top: 50px">
                @foreach($page->files as $file)
                    @if($file['type'] == 'application/pdf')
                    <button onclick="location.href = '{{ url($file['path']) }}';"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Visualizar PDF
                    </button>
                    @endif
                @endforeach
            </div>
        </div>
    </header>
    <div class="divide-y divide-gray-200 pb-8 dark:divide-gray-700 xl:divide-y-0" style="grid-template-rows: auto 1fr;">
        <div class="divide-y divide-gray-200 dark:divide-gray-700 xl:col-span-3 xl:row-span-2 xl:pb-0">
            <div class="prose max-w-none pt-10 pb-8 dark:prose-dark">
                @foreach($page['page_files'] as $file)
                    @include($file)
                @endforeach
                <h2 id="overview">
                    <a href="#overview" aria-hidden="true" tabindex="-1"><span class="icon icon-link"></span></a>
                    Informações em geral
                </h2>
                <p>Veja algumas informações importantes sobre o artigo:</p>
                @include('_components.table-info', ['page' => $page])
                <h2 id="download">
                    <a href="#download" aria-hidden="true" tabindex="-1"><span class="icon icon-link"></span></a>
                    Arquivos disponíveis para download
                </h2>
                <p>Abaixo está uma lista de arquivos que estão disponíveis para download:</p>

                <table class="table-auto">
                    <thead>
                    <tr>
                        <th>Arquivo</th>
                        <th>Tamanho</th>
                        <th>Formato</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($page->files as $file)
                        <tr>
                            <td>
                                <a href="{{ url($file['path']) }}">
                                    {{ \Illuminate\Support\Str::limit($file['file_name'], 50) }}
                                </a>
                            </td>
                            <td>{{ $file['size'] }}</td>
                            <td>{{ $file['type'] }}</td>
                            <td>
                                <button
                                        onclick="location.href = '{{ url($file['path']) }}';"
                                        type="submit"
                                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Ver/Abrir
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <h2 id="chat">
                    <a href="#chat" aria-hidden="true" tabindex="-1"><span class="icon icon-link"></span></a>
                    Discussões em geral
                </h2>
                <script src="https://giscus.app/client.js"
                        data-repo="{{ $page['github.repository_full'] }}"
                        data-repo-id="R_kgDOIBAsGw"
                        data-category-id="DIC_kwDOIBAsG84CRgIc"
                        data-mapping="specific"
                        data-term="#geral"
                        data-strict="0"
                        data-reactions-enabled="1"
                        data-emit-metadata="0"
                        data-input-position="top"
                        data-theme="light_protanopia"
                        data-lang="pt"
                        data-loading="lazy"
                        crossorigin="anonymous"
                        async>
                </script>
            </div>
        </div>
    </div>
</article>