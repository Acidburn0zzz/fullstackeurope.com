@php($title = 'Full Stack Europe 2020 - The International Full Stack Conference')
@php($description = 'The international conference for the entire team. Come learn about Serverless, React, Machine Learning, Chatbots, JavaScript, Application Architecture, Graph Databases, Varnish and much more!')

<meta name="description" content="{{ $description }}">
<meta name="image" content="{{ $page->baseUrl }}assets/images/preview.png">

<meta itemprop="name" content="{{ $title }}">
<meta itemprop="description" content="{{ $description }}">
<meta itemprop="image" content="{{ $page->baseUrl }}assets/images/preview.png">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:site" content="@fullstackeu">
<meta name="twitter:image" content="{{ $page->baseUrl }}assets/images/preview.png">

<meta name="og:title" content="{{ $title }}">
<meta name="og:description" content="{{ $description }}">
<meta name="og:image" content="{{ $page->baseUrl }}assets/images/preview.png">
<meta name="og:url" content="https://fullstackeurope.com">
<meta name="og:site_name" content="Full Stack Europe">
<meta name="og:type" content="website">
