<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <meta name="Generator" content="limarka-render-html {{ $page->version }}" />
    <title>{{ $page->title }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('assets/favicon/site.webmanifest') }}">

    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="dspace:page" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:image" content="{{ $page->imageSocialPreview }}" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="{{ $page->getUrl() }}" />
    <meta name="twitter:title" content="{{ $page->title }}" />
    <meta name="twitter:description" content="{{ $page->description }}"/>

    <meta itemprop="name" content="{{ $page->title }}" />
    <meta itemprop="description" content="{{ $page->description }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <meta property="article:published_time" content="{{ $page->limarka['page_render']['published_time'] }}" />
    <meta property="article:modified_time" content="{{ \Illuminate\Support\Carbon::now()->toIso8601String() }}" />

    @include('_components.schema_DCTERMS', ['page' => $page])

    <link rel="stylesheet" href="{{ url(mix('css/main.css', 'assets/build')) }}">
    <script defer src="{{ url(mix('js/main.js', 'assets/build')) }}"></script>
</head>
