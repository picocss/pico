{{--
  This file is auto-generated.

  Head - The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.

  @component head
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$attrs = [];
@endphp
@section('head')
<head {!! implode(' ', $attrs) !!}>
  @yield('content')
</head>
@endsection
