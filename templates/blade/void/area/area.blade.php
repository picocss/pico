{{--
  This file is auto-generated.

  Area - The area element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map.

  @component area
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$relChoices = ['alternate' => true, 'author' => true, 'bookmark' => true, 'canonical' => true, 'help' => true, 'icon' => true, 'license' => true, 'next' => true, 'nofollow' => true, 'noreferrer' => true, 'prefetch' => true, 'prev' => true, 'search' => true, 'stylesheet' => true, 'tag' => true];
$shapeChoices = ['circle' => true, 'default' => true, 'poly' => true, 'rect' => true];
$targetChoices = ['_blank' => true, '_parent' => true, '_self' => true, '_top' => true];
$autocapitalizeChoices = ['none' => true, 'sentences' => true, 'words' => true, 'characters' => true];
$contenteditableChoices = ['true' => true, 'false' => true, 'inherit' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$inputmodeChoices = ['none' => true, 'text' => true, 'decimal' => true, 'numeric' => true, 'email' => true, 'tel' => true, 'url' => true, 'search' => true];
$spellcheckChoices = ['true' => true, 'false' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($alt)) $attrs[] = 'alt="' . e($alt) . '"';
if (isset($autocapitalize) && isset($autocapitalizeChoices[$autocapitalize])) $attrs[] = 'autocapitalize="' . e($autocapitalize) . '"';
if (isset($autofocus) && $autofocus) $attrs[] = 'autofocus';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($contenteditable) && isset($contenteditableChoices[$contenteditable])) $attrs[] = 'contenteditable="' . e($contenteditable) . '"';
if (isset($coords)) $attrs[] = 'coords="' . e($coords) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($download)) $attrs[] = 'download="' . e($download) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($href)) $attrs[] = 'href="' . e($href) . '"';
if (isset($hreflang)) $attrs[] = 'hreflang="' . e($hreflang) . '"';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($inputmode) && isset($inputmodeChoices[$inputmode])) $attrs[] = 'inputmode="' . e($inputmode) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($rel) && isset($relChoices[$rel])) $attrs[] = 'rel="' . e($rel) . '"';
if (isset($shape) && isset($shapeChoices[$shape])) $attrs[] = 'shape="' . e($shape) . '"';
if (isset($spellcheck) && isset($spellcheckChoices[$spellcheck])) $attrs[] = 'spellcheck="' . e($spellcheck) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($target) && isset($targetChoices[$target])) $attrs[] = 'target="' . e($target) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
if (isset($type)) $attrs[] = 'type="' . e($type) . '"';
@endphp
@section('area')
<area {!! implode(' ', $attrs) !!} />
@endsection
