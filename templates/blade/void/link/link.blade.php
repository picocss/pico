{{--
  This file is auto-generated.

  Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.

  @component link
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$crossoriginChoices = ['anonymous' => true, 'use-credentials' => true];
$referrerpolicyChoices = ['no-referrer' => true, 'no-referrer-when-downgrade' => true, 'origin' => true, 'origin-when-cross-origin' => true, 'same-origin' => true, 'strict-origin' => true, 'strict-origin-when-cross-origin' => true, 'unsafe-url' => true];
$relChoices = ['alternate' => true, 'author' => true, 'bookmark' => true, 'canonical' => true, 'help' => true, 'icon' => true, 'license' => true, 'manifest' => true, 'next' => true, 'nofollow' => true, 'noreferrer' => true, 'prefetch' => true, 'prev' => true, 'search' => true, 'stylesheet' => true, 'tag' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($crossorigin) && isset($crossoriginChoices[$crossorigin])) $attrs[] = 'crossorigin="' . e($crossorigin) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($href)) $attrs[] = 'href="' . e($href) . '"';
if (isset($hreflang)) $attrs[] = 'hreflang="' . e($hreflang) . '"';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($integrity)) $attrs[] = 'integrity="' . e($integrity) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($media)) $attrs[] = 'media="' . e($media) . '"';
if (isset($referrerpolicy) && isset($referrerpolicyChoices[$referrerpolicy])) $attrs[] = 'referrerpolicy="' . e($referrerpolicy) . '"';
if (isset($rel) && isset($relChoices[$rel])) $attrs[] = 'rel="' . e($rel) . '"';
if (isset($sizes)) $attrs[] = 'sizes="' . e($sizes) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($type)) $attrs[] = 'type="' . e($type) . '"';
@endphp
@section('link')
<link {!! implode(' ', $attrs) !!} />
@endsection
