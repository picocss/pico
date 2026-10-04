{{--
  This file is auto-generated.

  Html - The root element of an HTML document. It represents the top-level of the HTML structure.

  @component html
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$attrs = [];
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($manifest)) $attrs[] = 'manifest="' . e($manifest) . '"';
@endphp
@section('html')
<html {!! implode(' ', $attrs) !!}>
  @yield('content')
</html>
@endsection
