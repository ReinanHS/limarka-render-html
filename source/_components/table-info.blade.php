<table class="table itemDisplayTable">
    <tbody>
        <tr>
            <td class="metadataFieldLabel">Autor:&nbsp;</td>
            <td class="metadataFieldValue">
                {{ $page->limarka['author'] }}
            </td>
        </tr>
        <tr>
            <td class="metadataFieldLabel">Orientador:&nbsp;</td>
            <td class="metadataFieldValue">
                {{ $page->limarka['orientador'] }}
                @if($page->limarka['coorientador'])
                    e {{ $page->limarka['coorientador'] }}
                @endif
            </td>
        </tr>
        <tr>
            <td class="metadataFieldLabel">Palavras-chave:&nbsp;</td>
            <td class="metadataFieldValue">
                @if($page->limarka['palavras_chave'])
                    @foreach(explode(",", $page->limarka['palavras_chave']) as $subject)
                        {{ trim($subject) }}<br>
                    @endforeach
                @endif
            </td>
        </tr>
        <tr>
            <td class="metadataFieldLabel">Data da Defesa:&nbsp;</td>
            <td class="metadataFieldValue">
                {{ \Illuminate\Support\Carbon::parse($page->limarka['page_render']['published_time'])->locale('pt-BR')->translatedFormat('d-F-Y') }}
            </td>
        </tr>
        <tr>
            <td class="metadataFieldLabel">Instituição:&nbsp;</td>
            <td class="metadataFieldValue">
                {{ $page->limarka['instituicao'] }}
            </td>
        </tr>
        <tr>
            <td class="metadataFieldLabel">Abstract:&nbsp;</td>
            <td class="metadataFieldValue">
                {{ $page->limarka['page_render']['abstract'] }}
            </td>
        </tr>
        <tr>
            <td class="metadataFieldLabel">Designação:&nbsp;</td>
            <td class="metadataFieldValue">
                Trabalho de conclusão de curso apresentada à {{ $page->limarka['instituicao'] }} em {{ $page->limarka['local'] }} para o curso de {{ $page->limarka['curso'] }}
            </td>
        </tr>
    </tbody>
</table>