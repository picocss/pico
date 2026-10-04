{{--
  This file is auto-generated.

  Meter - The meter element represents a scalar measurement within a known range, or a fractional value.

  @component meter
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$ariaLiveChoices = ['off' => true, 'polite' => true, 'assertive' => true];
$ariaRelevantChoices = ['additions' => true, 'removals' => true, 'text' => true, 'all' => true, 'additions text' => true];
$ariaAtomicChoices = ['false' => true, 'true' => true];
$autocapitalizeChoices = ['none' => true, 'sentences' => true, 'words' => true, 'characters' => true];
$contenteditableChoices = ['true' => true, 'false' => true, 'inherit' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$inputmodeChoices = ['none' => true, 'text' => true, 'decimal' => true, 'numeric' => true, 'email' => true, 'tel' => true, 'url' => true, 'search' => true];
$spellcheckChoices = ['true' => true, 'false' => true];
$translateChoices = ['yes' => true, 'no' => true];
$attrs = [];
if (isset($accesskey)) $attrs[] = 'accesskey="' . e($accesskey) . '"';
if (isset($ariaAtomic) && isset($ariaAtomicChoices[$ariaAtomic])) $attrs[] = 'aria-atomic="' . e($ariaAtomic) . '"';
if (isset($ariaDetails)) $attrs[] = 'aria-details="' . e($ariaDetails) . '"';
if (isset($ariaKeyshortcuts)) $attrs[] = 'aria-keyshortcuts="' . e($ariaKeyshortcuts) . '"';
if (isset($ariaLive) && isset($ariaLiveChoices[$ariaLive])) $attrs[] = 'aria-live="' . e($ariaLive) . '"';
if (isset($ariaRelevant) && isset($ariaRelevantChoices[$ariaRelevant])) $attrs[] = 'aria-relevant="' . e($ariaRelevant) . '"';
if (isset($ariaRoledescription)) $attrs[] = 'aria-roledescription="' . e($ariaRoledescription) . '"';
if (isset($ariaValuemax)) $attrs[] = 'aria-valuemax="' . e($ariaValuemax) . '"';
if (isset($ariaValuemin)) $attrs[] = 'aria-valuemin="' . e($ariaValuemin) . '"';
if (isset($ariaValuenow)) $attrs[] = 'aria-valuenow="' . e($ariaValuenow) . '"';
if (isset($ariaValuetext)) $attrs[] = 'aria-valuetext="' . e($ariaValuetext) . '"';
if (isset($autocapitalize) && isset($autocapitalizeChoices[$autocapitalize])) $attrs[] = 'autocapitalize="' . e($autocapitalize) . '"';
if (isset($autofocus) && $autofocus) $attrs[] = 'autofocus';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($contenteditable) && isset($contenteditableChoices[$contenteditable])) $attrs[] = 'contenteditable="' . e($contenteditable) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($draggable) && $draggable) $attrs[] = 'draggable';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($high)) $attrs[] = 'high="' . e($high) . '"';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($inputmode) && isset($inputmodeChoices[$inputmode])) $attrs[] = 'inputmode="' . e($inputmode) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($low)) $attrs[] = 'low="' . e($low) . '"';
if (isset($max)) $attrs[] = 'max="' . e($max) . '"';
if (isset($min)) $attrs[] = 'min="' . e($min) . '"';
if (isset($optimum)) $attrs[] = 'optimum="' . e($optimum) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($spellcheck) && isset($spellcheckChoices[$spellcheck])) $attrs[] = 'spellcheck="' . e($spellcheck) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($tabindex)) $attrs[] = 'tabindex="' . e($tabindex) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($translate) && isset($translateChoices[$translate])) $attrs[] = 'translate="' . e($translate) . '"';
if (isset($value)) $attrs[] = 'value="' . e($value) . '"';
@endphp
@section('meter')
<meter {!! implode(' ', $attrs) !!}>
  @yield('content')
</meter>
@endsection
