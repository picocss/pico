{{--
  This file is auto-generated.

  Head - Composed Example
  The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.

  CONTENT MODEL:
  - Can be a child of: HTML
  - Can have children: Base, Link, Meta, NoScript, Script, Style, Title
--}}
@section('head')
<head class="example">
@include('blade.void.base.base', ['href' => '/'])
@include('blade.void.link.link', ['rel' => 'stylesheet', 'href' => '/styles.css'])
@include('blade.void.link.link', ['rel' => 'stylesheet', 'href' => '/styles.css'])
@include('blade.void.meta.meta', ['name' => 'description', 'content' => 'Example'])
@include('blade.void.meta.meta', ['name' => 'description', 'content' => 'Example'])
@include('blade.void.script.script', ['content' => 'Example content'])
</head>
@endsection
