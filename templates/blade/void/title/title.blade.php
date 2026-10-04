{{--
  This file is auto-generated.

  Title - The title element defines the title of the document, shown in a browser's title bar or a page's tab. It is only text, not meant to be displayed.

  @component title
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$attrs = [];
@endphp
@section('title')
<title {!! implode(' ', $attrs) !!}>
  @yield('content')
</title>
@endsection
