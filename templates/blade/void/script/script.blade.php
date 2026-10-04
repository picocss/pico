{{--
  This file is auto-generated.

  Script - The script element is used to embed or reference an executable script within an HTML document. Scripts without async or defer attributes, as well as inline scripts, are fetched and executed immediately, before the browser continues to parse the page.

  @component script
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$crossoriginChoices = ['anonymous' => true, 'use-credentials' => true];
$referrerpolicyChoices = ['no-referrer' => true, 'no-referrer-when-downgrade' => true, 'origin' => true, 'origin-when-cross-origin' => true, 'same-origin' => true, 'strict-origin' => true, 'strict-origin-when-cross-origin' => true, 'unsafe-url' => true];
$typeChoices = ['text/javascript' => true, 'module' => true];
$attrs = [];
if (isset($async)) $attrs[] = 'async="' . e($async) . '"';
if (isset($charset)) $attrs[] = 'charset="' . e($charset) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($crossorigin) && isset($crossoriginChoices[$crossorigin])) $attrs[] = 'crossorigin="' . e($crossorigin) . '"';
if (isset($defer)) $attrs[] = 'defer="' . e($defer) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($integrity)) $attrs[] = 'integrity="' . e($integrity) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($nonce)) $attrs[] = 'nonce="' . e($nonce) . '"';
if (isset($referrerpolicy) && isset($referrerpolicyChoices[$referrerpolicy])) $attrs[] = 'referrerpolicy="' . e($referrerpolicy) . '"';
if (isset($src)) $attrs[] = 'src="' . e($src) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($type) && isset($typeChoices[$type])) $attrs[] = 'type="' . e($type) . '"';
@endphp
@section('script')
<script {!! implode(' ', $attrs) !!}>
  @yield('content')
</script>
@endsection
