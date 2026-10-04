{{--
  This file is auto-generated.

  Picture - Composed Example
  The picture element contains zero or more source elements and one img element to offer alternative versions of an image for different display/device scenarios.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Division, Footer, Header, Main, MarkedText, Section
  - Can have children: Image, Source
--}}
@section('picture')
<picture class="example">
@include('blade.inline.img.img', ['src' => '/image.jpg', 'alt' => 'Example'])
@include('blade.inline.img.img', ['src' => '/image.jpg', 'alt' => 'Example'])
@include('blade.void.source.source')
</picture>
@endsection
