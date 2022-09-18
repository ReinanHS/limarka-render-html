
<link rel="schema.DCTERMS" href="https://purl.org/dc/terms/" />
<link rel="schema.DC" href="https://purl.org/dc/elements/1.1/" />

<meta name="DC.creator" content="{{ $page->limarka['author'] }}" />
<meta name="DC.contributor" content="{{ $page->limarka['instituicao'] }}" xml:lang="{{ $page->language }}" />

@foreach(['coorientador', 'orientador'] as $key)
    @if($page->limarka[$key])
        <meta name="DC.contributor" content="{{ $page->limarka[$key] }}" />
    @endif
@endforeach


<meta name="DC.identifier" content="{{ $page->getUrl() }}" scheme="DCTERMS.URI" />
<meta name="DC.description" content="TCC (graduação) - {{ $page->limarka['instituicao'] }}. {{ $page->limarka['programa'] }}. {{ $page->limarka['area_de_concentracao'] }}" xml:lang="{{ $page->language }}" />
<meta name="DCTERMS.abstract" content="{{ $page->limarka['page_render']['abstract'] }}" xml:lang="{{ $page->language }}" />
<meta name="DCTERMS.extent" content="46" xml:lang="{{ $page->language }}" />
<meta name="DC.language" content="{{ $page->language }}" xml:lang="{{ $page->language }}" scheme="DCTERMS.RFC1766" />
<meta name="DC.publisher" content="{{ $page->limarka['local'] }}" xml:lang="{{ $page->language }}" />
<meta name="DC.rights" content="Open Access" />

@if($page->limarka['palavras_chave'])
    @foreach(explode(",", $page->limarka['palavras_chave']) as $subject)
        <meta name="DC.subject" content="{{ trim($subject) }}" xml:lang="{{ $page->language }}" />
    @endforeach
@endif

<meta name="DC.title" content="{{ $page->limarka['title'] }}" xml:lang="{{ $page->language }}" />
<meta name="DC.type" content="TCCgrad" xml:lang="{{ $page->language }}" />
