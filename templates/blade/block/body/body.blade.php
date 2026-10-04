{{--
  This file is auto-generated.

  Body - The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.

  @component body
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($onafterprint)) $attrs[] = 'onafterprint="' . e($onafterprint) . '"';
if (isset($onbeforeprint)) $attrs[] = 'onbeforeprint="' . e($onbeforeprint) . '"';
if (isset($onbeforeunload)) $attrs[] = 'onbeforeunload="' . e($onbeforeunload) . '"';
if (isset($onhashchange)) $attrs[] = 'onhashchange="' . e($onhashchange) . '"';
if (isset($onlanguagechange)) $attrs[] = 'onlanguagechange="' . e($onlanguagechange) . '"';
if (isset($onmessage)) $attrs[] = 'onmessage="' . e($onmessage) . '"';
if (isset($onmessageerror)) $attrs[] = 'onmessageerror="' . e($onmessageerror) . '"';
if (isset($onoffline)) $attrs[] = 'onoffline="' . e($onoffline) . '"';
if (isset($ononline)) $attrs[] = 'ononline="' . e($ononline) . '"';
if (isset($onpagehide)) $attrs[] = 'onpagehide="' . e($onpagehide) . '"';
if (isset($onpageshow)) $attrs[] = 'onpageshow="' . e($onpageshow) . '"';
if (isset($onpopstate)) $attrs[] = 'onpopstate="' . e($onpopstate) . '"';
if (isset($onrejectionhandled)) $attrs[] = 'onrejectionhandled="' . e($onrejectionhandled) . '"';
if (isset($onstorage)) $attrs[] = 'onstorage="' . e($onstorage) . '"';
if (isset($onunhandledrejection)) $attrs[] = 'onunhandledrejection="' . e($onunhandledrejection) . '"';
if (isset($onunload)) $attrs[] = 'onunload="' . e($onunload) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
@endphp
@section('body')
<body {!! implode(' ', $attrs) !!}>
  @yield('content')
</body>
@endsection
