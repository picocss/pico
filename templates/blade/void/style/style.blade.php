{{--
  This file is auto-generated.

  Style - The style element is used to embed CSS styles directly into an HTML document.

  @component style
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$typeChoices = ['text/css' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($media)) $attrs[] = 'media="' . e($media) . '"';
if (isset($nonce)) $attrs[] = 'nonce="' . e($nonce) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($type) && isset($typeChoices[$type])) $attrs[] = 'type="' . e($type) . '"';
@endphp
@section('style')
<style {!! implode(' ', $attrs) !!}>
  @yield('content')
</style>
@endsection
